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

<body class="flex justify-center items-center h-screen bg-base-200">
  <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-center">Create an Account</h2>

      {{-- Success / Error Messages --}}
      @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-error mt-2">{{ session('error') }}</div>
      @endif

      {{-- Validation Errors --}}
      @if ($errors->any())
        <div class="alert alert-error mt-2">
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
          <label class="label">Full Name</label>
          <input type="text" name="name" value="{{ old('name') }}" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">Password</label>
          <input type="password" name="password" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="input input-bordered" required />
        </div>

        <button class="btn btn-primary mt-4 w-full">Register</button>

        <p class="text-center mt-3 text-sm">
          Already have an account?
          <a href="{{ route('login') }}" class="link link-primary">Login</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
