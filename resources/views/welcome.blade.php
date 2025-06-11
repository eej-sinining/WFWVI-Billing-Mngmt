<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFWVI - Smart Water Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 flex items-center justify-center p-4">
    <!-- Background Animation -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
        <div class="absolute top-40 left-20 w-60 h-60 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 w-full max-w-md">
        <!-- Login Card -->
        <div class="bg-white/10 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/20 p-8 transform transition-transform duration-300">
            <!-- Logo and Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-tint text-white text-2xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">WFWVI</h1>
                <p class="text-blue-200 text-sm font-medium">WORLDS FIRST WATER VENTURE INC.</p>
                <p class="text-blue-200 text-sm font-medium">WATER BILLING MANAGEMENT</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Username Field -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fas fa-user text-blue-300 text-sm"></i>
                    </div>
                    <input 
                        type="text" 
                        name="email"
                        placeholder="Email"
                        required
                        class="w-full bg-white/10 border border-white/20 rounded-xl py-4 pl-12 pr-4 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent backdrop-blur-sm transition-all duration-300 hover:bg-white/20"
                    >
                </div>

                <!-- Password Field -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-blue-300 text-sm"></i>
                    </div>
                    <input 
                        type="password" 
                        name="password"
                        placeholder="Password"
                        required
                        class="w-full bg-white/10 border border-white/20 rounded-xl py-4 pl-12 pr-4 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent backdrop-blur-sm transition-all duration-300 hover:bg-white/20"
                    >
                </div>

                <!-- Login Button -->
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-semibold py-4 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-transparent"
                >
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign In
                </button>

                <!-- Forgot Password -->
                <div class="text-center">
                    <a href="#" class="text-blue-300 hover:text-white text-sm font-medium transition-colors duration-300 hover:underline">
                        Forgot your password?
                    </a>
                </div>
            </form>

            <!-- Additional Features -->
            <div class="mt-8 pt-6 border-t border-white/10">
                <div class="flex items-center justify-center space-x-4 text-blue-200 text-xs">
                    <span class="flex items-center">
                        <i class="fas fa-shield-alt mr-1"></i>
                        Secure Login
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-mobile-alt mr-1"></i>
                        Mobile Ready
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-cloud mr-1"></i>
                        Cloud Sync
                    </span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-blue-300 text-xs">
                &copy; 2025 WFWVI BILLING MANAGEMENT
            </p>
        </div>
    </div>

      <script src="../js/login.js"></script>
</body>
</html>