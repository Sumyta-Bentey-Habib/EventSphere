<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  {{-- Tailwind + DaisyUI --}}
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex justify-center items-center h-screen bg-[#170E28] text-gray-200">
  <div class="card w-96 bg-[#2A3142] shadow-2xl border border-white/10">
    <div class="card-body">
      <h2 class="text-3xl font-bold mb-4 text-center bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text">Create an Account</h2>

      {{-- Success / Error Messages --}}
      @if(session('success'))
        <div class="alert alert-success mt-2 bg-green-800/20 text-green-300 border-green-500/50">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-error mt-2 bg-red-800/20 text-red-300 border-red-500/50">{{ session('error') }}</div>
      @endif

      {{-- Validation Errors --}}
      @if ($errors->any())
        <div class="alert alert-error mt-2 bg-red-800/20 text-red-300 border-red-500/50">
          <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Registration Form --}}
      <form method="POST" action="/register">
        @csrf
        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Full Name</span></label>
          <input type="text" name="name" value="{{ old('name') }}" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>

        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Email</span></label>
          <input type="email" name="email" value="{{ old('email') }}" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>

        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Password</span></label>
          <input type="password" name="password" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>

        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Confirm Password</span></label>
          <input type="password" name="password_confirmation" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>

        <button class="btn btn-primary mt-6 w-full bg-gradient-to-r from-purple-600 to-indigo-700 border-none text-white hover:opacity-90">Register</button>

        <p class="text-center mt-4 text-sm">
          Already have an account?
          <a href="{{ route('login') }}" class="text-indigo-400 hover:text-indigo-300 transition">Login</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
