<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
       Login
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-50">
    
    <div class="min-h-screen flex flex-col md:flex-row">

    <div class="flex flex-col justify-center px-20 py-6 md:w-1/2 mr-20">
            <h2 class="font-bold text-lg mb-4">
                Log in
            </h2>
            <form class="flex flex-col" action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-8">
                    <label class="text-gray-400 text-xs uppercase mb-1" for="email" required>
                        EMAIL
                    </label>
                    <input class="border-b border-gray-300 bg-gray-50 focus:outline-none focus:border-black placeholder-gray-300 text-sm pb-1" id="email" placeholder="Email" type="text" name="email" value="{{ old('email') }}" required />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <label class="text-gray-400 text-xs uppercase mb-1" for="password" required>
                        PASSWORD
                    </label>
                    <input class="border-b border-gray-300 bg-gray-50 focus:outline-none focus:border-black placeholder-gray-300 text-sm pb-1" id="password" placeholder="Password" type="password" name="password" required />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center space-x-2 text-sm mb-4">
                    <input class="w-4 h-4" id="keep-logged" type="checkbox" name="remember" />
                    <label class="text-black" for="keep-logged">
                        Keep me logged in
                    </label>
                </div>
                <button class="bg-black text-white font-semibold py-3 rounded-md mt-2" type="submit">
                    Log In
                </button>
            </form>
            <!-- <a class="text-xs underline mt-3 self-start" href="#">
                Forgot your password?
            </a>
            <p class="mt-8 mb-3 text-sm">
                Or sign in with
            </p>
            <div class="flex space-x-4">
                <button class="flex items-center border border-gray-300 rounded-md px-4 py-2 text-sm space-x-2 hover:bg-gray-100" type="button">
                    <i class="fab fa-google">
                    </i>
                    <span>
                        Google
                    </span>
                </button>
                <button class="flex items-center border border-gray-300 rounded-md px-4 py-2 text-sm space-x-2 hover:bg-gray-100" type="button">
                    <i class="fab fa-facebook-f">
                    </i>
                    <span>
                        Facebook
                    </span>
                </button>
                <button class="flex items-center border border-gray-300 rounded-md px-4 py-2 text-sm space-x-2 hover:bg-gray-100" type="button">
                    <i class="fab fa-twitter">
                    </i>
                    <span>
                        Twitter
                    </span>
                </button>
            </div> -->
        </div>
        <!-- Left side -->
        <div class="flex flex-col justify-center px-8 py-6 md:w-1/2">
            <div class="flex items-center space-x-4">
                <h1 class="text-[100px] font-bold text-black">
                    Tubes .
                </h1>
                <div class="w-16 h-16 bg-lime-500 flex items-center justify-center rounded-sm mt-4">
                    <img alt="Smiling face emoji with purple outline on lime green background" class="w-21 h-21" height="80" src="https://storage.googleapis.com/a1aa/image/02bc5aa8-31f2-402e-fdb6-4cbedbf32340.jpg" width="80" />
                </div>
            </div>
            <div class="text-gray-600 text-xs mb-5 ml-3">
                Not a member yet?
                <a class="font-semibold underline" href="{{ route('register') }}">
                    Register now
                </a>
            </div>
        </div>
        <!-- Right side -->
        
    </div>
</body>

</html>