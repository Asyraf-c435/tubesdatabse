<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Register
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center font-sans">
    <div class="flex flex-col md:flex-row w-full max-w-6xl min-h-[600px] bg-gray-50">
        <!-- Left side (Form) -->
        <div class="mt-10 mr-10 bg-gray-50 md:bg-gray-50 md:w-1/2 order-2 md:order-1">
            <h2 class="text-xl font-bold text-black mb-6">
                Register with your e-mail
            </h2>
            <form action="{{route('store')}}" class="space-y-4 text-gray-600 text-xs font-semibold" method="POST">
                @csrf
                <div>
                    <label class="block mb-1" for="name">
                        USERNAME 
                    </label>
                    <input name="name" value="{{ old('name') }}" class="bg-gray-50 w-full border-b border-gray-300 focus:outline-none focus:border-black placeholder-gray-400 text-sm pb-1" id="name" placeholder="Username" type="text" required />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1" for="email">
                        EMAIL 
                    </label>
                    <input name="email" value="{{ old('email') }}" class="bg-gray-50 w-full border-b border-gray-300 focus:outline-none focus:border-black placeholder-gray-400 text-sm pb-1" id="email" placeholder="E-mail" type="email" required />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex space-x-6">
                    <div class="flex-1">
                        <label class="block mb-1" for="password">
                            PASSWORD
                        </label>
                        <input name="password" class="bg-gray-50 w-full border-b border-gray-300 focus:outline-none focus:border-black placeholder-gray-400 text-sm pb-1" id="password" placeholder="Password" type="password" min="8" required />
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div class="flex-1">
                        <label class="block mb-1" for="password">
                            CONFIRM PASSWORD 
                        </label>
                        <input name="password_confirmation" class="bg-gray-50 w-full border-b border-gray-300 focus:outline-none focus:border-black placeholder-gray-400 text-sm pb-1" id="password_confirmation" placeholder="Confirm Password" type="password" min="8" required />
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- <p class="text-[10px] text-gray-700 leading-tight mb-1">
                    Awwwards may keep me informed with personalized emails about products and services. See our
                    <a class="underline" href="#">
                        Privacy Policy
                    </a>
                    for more details.
                </p>
                <div class="flex items-start space-x-2 mb-1">
                    <input class="bg-gray-50 mt-1" id="contact-email" type="checkbox" />
                    <label class="text-xs text-gray-700" for="contact-email">
                        Please contact me via e-mail
                    </label>
                </div>
                <div class="flex items-start space-x-2 mb-6">
                    <input class="bg-gray-50 mt-1" id="terms" type="checkbox" />
                    <label class="text-xs text-gray-700" for="terms">
                        I have read and accept the Terms and Conditions
                    </label>
                </div> -->
                <button class="w-full bg-black text-white font-bold py-3 rounded-sm hover:opacity-90 transition-opacity" type="submit">
                    Create Account
                </button>
            </form>
            <!-- <p class="mt-6 mb-3 text-gray-700 text-sm">
                Or register with
            </p>
            <div class="flex space-x-4 text-gray-700 text-sm">
                <button class="flex items-center justify-center border border-gray-300 rounded px-4 py-2 w-full hover:bg-gray-100 transition" type="button">
                    <i class="fab fa-google mr-2">
                    </i>
                    Google
                </button>
                <button class="flex items-center justify-center border border-gray-300 rounded px-4 py-2 w-full hover:bg-gray-100 transition" type="button">
                    <i class="fab fa-twitter mr-2">
                    </i>
                    Twitter
                </button>
                <button class="flex items-center justify-center border border-gray-300 rounded px-4 py-2 w-full hover:bg-gray-100 transition" type="button">
                    <i class="fab fa-facebook-f mr-2">
                    </i>
                    Facebook
                </button>
            </div> -->
        </div>
        <!-- Right side (Logo Tubes) -->
        <div class="flex flex-col justify-center items-center px-8 py-10 md:w-1/2 order-1 md:order-2 bg-gray-50 ml-10">
            <div class="flex items-center space-x-4">
                 <h1 class="text-[100px] font-bold text-black">
                    Tubes.
                </h1>
                <img alt="Smiley face icon with purple and blue gradient background" class="w-[40px] h-[40px]" src="https://storage.googleapis.com/a1aa/image/bf601364-30c8-4810-1adc-73cf32ed577d.jpg" />
            </div>
            <p class="text-sm text-gray-600 mt-6 mr-20">
                Are you a member?
                <a class="font-semibold underline" href="{{ route('login') }}">
                    Log in now
                </a>
            </p>
        </div>
    </div>
</body>

</html>