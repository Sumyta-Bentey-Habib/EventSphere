<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex justify-center items-center h-screen bg-[#170E28] text-gray-200">
  <div class="card w-96 bg-[#2A3142] shadow-2xl border border-white/10">
    <div class="card-body">
      <h2 class="text-3xl font-bold mb-4 text-center bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text">Forgot Password</h2>
      @if(session('success')) <div class="alert alert-success bg-green-800/20 text-green-300 border-green-500/50">{{ session('success') }}</div> @endif
      @if(session('error')) <div class="alert alert-error bg-red-800/20 text-red-300 border-red-500/50">{{ session('error') }}</div> @endif

      <form method="POST" action="/forgot-password">
        @csrf
        <div class="form-control">
          <label class="label"><span class="label-text text-gray-300">Enter your email</span></label>
          <input type="email" name="email" class="input input-bordered bg-[#170E28] border-white/20 text-white placeholder-gray-500" required />
        </div>
        <button class="btn btn-primary mt-6 w-full bg-gradient-to-r from-purple-600 to-indigo-700 border-none text-white hover:opacity-90">Send Reset Link</button>
      </form>
    </div>
  </div>
</body>
</html>
