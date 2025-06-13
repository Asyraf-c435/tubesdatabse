<!-- LOG IN -->
<div class="min-h-screen bg-black bg-opacity-50 flex items-center justify-center p-4 fixed w-full hidden z-50" id="loginSection" style="top: 0; left: 0;">
    <div class="bg-white max-w-4xl w-full rounded-md shadow-lg flex flex-col md:flex-row overflow-hidden">
        <div class="bg-gray-100 w-full md:w-1/2 p-10 flex flex-col justify-between">
            <div>
                <p class="text-sm text-gray-800">
                    Welcome!
                </p>
            </div>
            <div class="flex items-center space-x-6">
                <span class="font-extrabold text-5xl">
                    Tubes.
                </span>
                <img alt="Smiling face emoji in a circle with green background and purple border" class="w-20 h-20" height="80" src="https://storage.googleapis.com/a1aa/image/857baafd-57c7-4f60-6206-1685512c44dd.jpg" width="80" />
            </div>
            <div class="text-xs text-gray-600">
                Not a member yet?
                <a class="font-semibold underline cursor-pointer" href="#" id="registerButton">
                    Register now
                </a>
            </div>
        </div>
        <div class="flex flex-col justify-center w-full md:w-1/2 p-10 bg-white">
            <form class="max-w-md w-full">
                <h2 class="font-semibold text-base mb-6">
                    Log in
                </h2>
                <label class="text-xs uppercase text-gray-400 tracking-wide mb-2 block" for="login-email">
                    Email or username
                </label>
                <input class="w-full border-b border-gray-400 focus:outline-none focus:border-black text-xs py-2 mb-6 placeholder-gray-300" id="login-email" placeholder="Email or username" type="text" />
                <label class="text-xs uppercase text-gray-400 tracking-wide mb-2 block" for="login-password">
                    Password
                </label>
                <input class="w-full border-b border-gray-400 focus:outline-none focus:border-black text-xs py-2 mb-3 placeholder-gray-300" id="login-password" placeholder="Password" type="password" />
                <div class="flex items-center mb-6">
                    <input class="w-3 h-3 border border-gray-400 text-black focus:ring-0" id="keep-logged" type="checkbox" />
                    <label class="text-xs ml-2 select-none" for="keep-logged">
                        Keep me logged in
                    </label>
                </div>
                <button class="w-full bg-black text-white text-xs py-3 rounded-md mb-4 hover:bg-gray-800 transition-colors duration-200" type="submit">
                    Log in now
                </button>
                <div class="text-xs text-right mb-8">
                    <a class="underline hover:text-gray-700 transition-colors duration-200" href="#">
                        Forgot your password?
                    </a>
                </div>
                <p class="text-xs mb-3">
                    Or sign in with
                </p>
                <div class="flex space-x-3 max-w-md">
                    <button class="btn-google flex items-center justify-center border border-gray-300 rounded-md py-2 px-4 text-xs w-full hover:bg-gray-800 hover:text-white transition-colors duration-200" type="button">
                        <i class="fab fa-google mr-2">
                        </i>
                        Google
                    </button>
                    <button class="flex items-center justify-center border border-gray-300 rounded-md py-2 px-4 text-xs w-full hover:bg-gray-800 hover:text-white transition-colors duration-200" type="button">
                        <i class="fab fa-facebook-f mr-2">
                        </i>
                        Facebook
                    </button>
                    <button class="flex items-center justify-center border border-gray-300 rounded-md py-2 px-4 text-xs w-full hover:bg-gray-800 hover:text-white transition-colors duration-200" type="button">
                        <i class="fab fa-twitter mr-2">
                        </i>
                        Twitter
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>