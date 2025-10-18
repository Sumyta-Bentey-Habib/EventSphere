<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Event;

class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Forgot Password
    public function showForgot() {
        return view('auth.forgot');
    }

    public function sendResetLink(Request $request) {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Password reset link sent to your email.')
            : back()->with('error', 'Unable to send link.');
    }

    // Reset Password
    public function showResetForm($token) {
        return view('auth.reset', ['token' => $token]);
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect('/login')->with('success', 'Password reset successful!')
            : back()->with('error', 'Something went wrong.');
    }

    // Dashboard
    public function dashboard()
    {
        $user = auth()->user();

        // 1. Browse events (eager load creator)
        $events = Event::with('user')->latest()->take(6)->get();

        // 2. Bookmarked events (eager load creator)
        $bookmarkedEvents = $user->bookmarks()->with('user')->get();

        // 3. Array of bookmarked event IDs for Blade button toggle
        // This is correctly fetching the IDs for efficient checking in the browse section.
        $userBookmarks = $user->bookmarks()->pluck('events.id')->toArray();

        return view('dashboard', compact('events', 'bookmarkedEvents', 'userBookmarks'));
    }
}
