<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-[#170E28] text-gray-200">
  <div class="card w-96 bg-[#2A3142] shadow-2xl border border-white/10">
    <div class="card-body">
      <h2 class="text-3xl font-bold mb-4 text-center bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text">Reset Password</h2>

      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Email</span></label>
          <input type="email" name="email" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>
        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">New Password</span></label>
          <input type="password" name="password" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>
        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Confirm Password</span></label>
          <input type="password" name="password_confirmation" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>
        <button class="btn btn-primary mt-6 w-full bg-gradient-to-r from-purple-600 to-indigo-700 border-none text-white hover:opacity-90">Reset Password</button>
      </form>
    </div>
  </div>
</body>
</html>
