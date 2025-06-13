<!-- REGISTRASI -->
<div class="min-h-screen bg-black bg-opacity-50 flex items-center justify-center p-4 fixed w-full hidden z-50" id="registerSection" style="top: 0; left: 0;">
    <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full flex flex-col md:flex-row overflow-hidden max-h-[480px] md:max-h-[440px] hover:shadow-2xl transition-shadow duration-300">
        <!-- Left side -->
        <div class="md:w-1/2 flex flex-col justify-between bg-gray-100 p-5 md:p-8 overflow-hidden">
            <div class="pt-2 text-sm text-black">
                Welcome!
            </div>
            <div class="flex items-center space-x-3 mt-6 md:mt-0">
                <h1 class="text-4xl font-extrabold text-black leading-none">
                    Tubes.
                </h1>
                <img alt="Blue and purple smiley face icon, circular shape with a smiling face inside" class="w-16 h-16" height="64" src="https://storage.googleapis.com/a1aa/image/345ce4c0-b830-41f0-1362-b76e9e21b5d2.jpg" width="64" />
            </div>
            <div class="text-xs text-gray-600 pt-3">
                Are you a member?
                <a class="font-bold underline cursor-pointer" href="#" id="loginButton">
                    Log in now
                </a>
            </div>
        </div>
        <!-- Right side -->
        <div class="md:w-1/2 p-5 md:p-8 overflow-auto">
            <form class="max-w-md mx-auto">
                <h2 class="font-semibold text-black mb-4 text-base md:text-lg">
                    Register with your e-mail
                </h2>
                <label class="block text-xs text-gray-400 uppercase mb-1" for="reg-username">
                    USERNAME (*)
                </label>
                <input class="w-full border-b border-gray-300 text-xs text-gray-400 placeholder-gray-300 mb-2 focus:outline-none focus:border-gray-400 transition-colors duration-200 hover:border-gray-500" id="reg-username" placeholder="Username" type="text" />
                <label class="block text-xs text-gray-400 uppercase mb-1" for="reg-email">
                    EMAIL (*)
                </label>
                <input class="w-full border-b border-gray-300 text-xs text-gray-400 placeholder-gray-300 mb-2 focus:outline-none focus:border-gray-400 transition-colors duration-200 hover:border-gray-500" id="reg-email" placeholder="E-mail" type="email" />
                <div class="grid grid-cols-2 gap-2 mb-2">
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1" for="reg-password">
                            PASSWORD (*)
                        </label>
                        <input class="w-full border-b border-gray-300 text-xs text-gray-400 placeholder-gray-300 focus:outline-none focus:border-gray-400 transition-colors duration-200 hover:border-gray-500" id="reg-password" placeholder="Password" type="password" />
                    </div>
                    <div>
                        <label class="block text-xs text-gray-400 uppercase mb-1" for="repeat-password">
                            REPEAT PASSWORD (*)
                        </label>
                        <input class="w-full border-b border-gray-300 text-xs text-gray-400 placeholder-gray-300 focus:outline-none focus:border-gray-400 transition-colors duration-200 hover:border-gray-500" id="repeat-password" placeholder="Repeat Password" type="password" />
                    </div>
                </div>
                <p class="text-[9px] text-gray-600 mb-1 leading-tight">
                    Awwwards may keep me informed with personalized emails about products and services. See our
                    <span class="font-semibold">
                        Privacy Policy
                    </span>
                    for more details.
                </p>
                <div class="mb-1 text-[9px] text-gray-600 flex items-center space-x-2">
                    <input class="w-3 h-3 cursor-pointer" id="contact-email" type="checkbox" />
                    <label class="select-none cursor-pointer" for="contact-email">
                        Please contact me via e-mail
                    </label>
                </div>
                <div class="mb-3 text-[9px] text-gray-600 flex items-center space-x-2">
                    <input class="w-3 h-3 cursor-pointer" id="terms" type="checkbox" />
                    <label class="select-none cursor-pointer" for="terms">
                        I have read and accept the Terms and Conditions
                    </label>
                </div>
                <button class="w-full bg-black text-white text-sm font-semibold py-2.5 rounded-md mb-4 hover:bg-gray-800 transition-colors duration-200" type="submit">
                    Create Account
                </button>
                <p class="text-xs text-gray-600 mb-2">
                    Or register with
                </p>
                <div class="flex space-x-2 max-w-md">
                    <button class="flex items-center justify-center border border-gray-300 rounded-md py-1.5 px-3 text-xs text-gray-700 w-full hover:bg-gray-100 transition-colors duration-200" type="button">
                        <i class="fab fa-google mr-1.5">
                        </i>
                        Google
                    </button>
                    <button class="flex items-center justify-center border border-gray-300 rounded-md py-1.5 px-3 text-xs text-gray-700 w-full hover:bg-gray-100 transition-colors duration-200" type="button">
                        <i class="fab fa-twitter mr-1.5">
                        </i>
                        Twitter
                    </button>
                    <button class="flex items-center justify-center border border-gray-300 rounded-md py-1.5 px-3 text-xs text-gray-700 w-full hover:bg-gray-100 transition-colors duration-200" type="button">
                        <i class="fab fa-facebook-f mr-1.5">
                        </i>
                        Facebook
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>