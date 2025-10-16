<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_time' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('events', 'public')
            : null;

        Event::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'event_time' => $request->event_time,
        ]);

        return redirect()->route('dashboard')->with('success', 'Event created successfully!');
    }

    public function browse()
    {
        $events = Event::latest()->get();
        return view('events.browse', compact('events'));
    }

    public function bookmark($id)
    {
        $event = Event::findOrFail($id);
        Auth::user()->bookmarks()->toggle($event);
        return back()->with('success', 'Bookmark updated!');
    }

    public function bookmarked()
    {
        $bookmarkedEvents = Auth::user()->bookmarks()->get();
        return view('events.bookmarked', compact('bookmarkedEvents'));
    }
}
