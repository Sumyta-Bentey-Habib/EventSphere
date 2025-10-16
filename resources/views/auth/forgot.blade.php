<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-base-200">
  <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-center">Forgot Password</h2>
      @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
      @if(session('error')) <div class="alert alert-error">{{ session('error') }}</div> @endif

      <form method="POST" action="/forgot-password">
        @csrf
        <div class="form-control">
          <label class="label">Enter your email</label>
          <input type="email" name="email" class="input input-bordered" required />
        </div>
        <button class="btn btn-primary mt-4 w-full">Send Reset Link</button>
      </form>
    </div>
  </div>
</body>
</html>
