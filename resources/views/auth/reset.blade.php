<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-base-200">
  <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-center">Reset Password</h2>

      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-control">
          <label class="label">Email</label>
          <input type="email" name="email" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">New Password</label>
          <input type="password" name="password" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="input input-bordered" required />
        </div>
        <button class="btn btn-primary mt-4 w-full">Reset Password</button>
      </form>
    </div>
  </div>
</body>
</html>
