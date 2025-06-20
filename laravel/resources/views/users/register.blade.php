<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | BelajarDirumahAja</title>
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
                <h1 class="text-4xl font-bold mb-2">Create Account</h1>
                <p class="text-gray-500">Join our learning community today</p>
            </div>
            
            <div class="bg-dark-800 rounded-xl shadow-lg p-8">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium mb-2">Username</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            required
                            autocomplete="username"
                            autofocus
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="Choose a username"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="you@example.com"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium mb-2">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            autocomplete="new-password"
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="••••••••"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="password-confirm" class="block text-sm font-medium mb-2">Confirm Password</label>
                        <input 
                            type="password" 
                            id="password-confirm" 
                            name="password_confirmation" 
                            required
                            autocomplete="new-password"
                            class="w-full px-4 py-3 bg-dark-700 border border-dark-600 rounded-lg focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
                            placeholder="••••••••"
                        >
                    </div>
                    
                    <div class="mb-6">
                        <p class="text-xs text-gray-500">
                            By signing up, you agree to our 
                            <a href="#" class="text-indigo-500 hover:text-indigo-400">Terms of Service</a> and 
                            <a href="#" class="text-indigo-500 hover:text-indigo-400">Privacy Policy</a>
                        </p>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition"
                    >
                        Create Account
                    </button>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-500">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="text-indigo-500 hover:text-indigo-400 font-medium">Sign in</a>
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