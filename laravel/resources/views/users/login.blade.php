<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BelajarDirumahAja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#121212',
                            800: '#1e1e1e',
                            700: '#2d2d2d',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-900 text-gray-200">
    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-2">Welcome Back</h1>
                <p class="text-gray-500">Sign in to continue your learning journey</p>
            </div>
            
            <div class="bg-dark-800 rounded-xl shadow-lg p-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="you@example.com"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium">Password</label>
                            <a href="#" class="text-sm text-indigo-500 hover:text-indigo-400">Forgot password?</a>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            autocomplete="current-password"
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="••••••••"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6 flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="h-4 w-4 text-indigo-600 bg-dark-700 border-dark-600 rounded focus:ring-indigo-500"
                        >
                        <label for="remember" class="ml-2 text-sm">Remember me</label>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition"
                    >
                        Sign In
                    </button>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-500">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="text-indigo-500 hover:text-indigo-400 font-medium">Sign up</a>
                        </p>
                    </div>
                </form>
            </div>
            
            <div class="mt-8 text-center">
                <p class="text-gray-600 text-sm">&copy; {{ date('Y') }} BelajarDirumahAja. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>