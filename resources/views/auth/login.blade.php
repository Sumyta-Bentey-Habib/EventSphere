<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-base-200">
  <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-center">Login</h2>
      @if(session('error')) <div class="alert alert-error">{{ session('error') }}</div> @endif
      @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

      <form method="POST" action="/login">
        @csrf
        <div class="form-control">
          <label class="label">Email</label>
          <input type="email" name="email" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">Password</label>
          <input type="password" name="password" class="input input-bordered" required />
        </div>
        <div class="form-control mt-2">
          <label class="cursor-pointer label">
            <span class="label-text">Remember me</span>
            <input type="checkbox" name="remember" class="checkbox" />
          </label>
        </div>
        <button class="btn btn-primary mt-4 w-full">Login</button>
        <p class="text-center mt-2"><a href="{{ route('forgot') }}" class="link link-primary">Forgot password?</a></p>
        <p class="text-center mt-2">Don't have an account? <a href="{{ route('register') }}" class="link link-primary">Register</a></p>
      </form>
    </div>
  </div>
</body>
</html>
