<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navigation Bar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 ">
    <!-- NAVBAR SECTION -->
    <nav id="main-nav" class="flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-16 py-3 mb-5">
        <!-- LEFT SIDE NAVBAR -->
        <div class="flex items-center space-x-12 mr-2">
            <div class="text-2xl font-bold select-none cursor-default font-sans">Tubes .</div>
            <!-- NAVBAR CAN CLICK -->
            <div class="hidden sm:flex items-center space-x-4 text-sm font-normal text-black mt-1.5">
                <a id="explore-btn" href="#" class="relative group cursor-pointer hover:opacity-50 transition-opacity duration-500 flex items-center">
                    <span>Explore</span>
                    <i class="fas fa-chevron-down text-[10px] ml-1"></i>
                </a>
                <a href="{{ route('directory') }}" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Directory</a>
                <a href="{{ route('academy') }}" class="cursor-pointer group flex items-center space-x-1 group transition-opacity duration-500">
                    <span class="group-hover:opacity-50 duration-500">Academy</span>
                    <span class="bg-black text-white text-[8px] font-semibold px-1 rounded select-none opacity-100 ">New</span>
                </a>
                <a href="{{ route('job') }}" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Jobs</a>
                <a href="#" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Market</a>
            </div>
            <!-- NAVBAR CAN CLICK END -->
        </div>
        <!-- LEFT SIDE NAVBAR END -->

        <!-- SEARCH BAR -->
        <div class="flex-1 max-w-[1500px] mx-7 hidden sm:block mt-1.5">
            <div class="relative">
                <input
                    id="searchInput"
                    type="text"
                    placeholder="Search by inspiration"
                    autocomplete="off"
                    class="w-full rounded-md bg-[#dddddd] text-xs placeholder:text-[#8a8a8a] py-2 pl-10 pr-8 focus:outline-none" />
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-[#8a8a8a] text-xs pointer-events-none"></i>
                <button
                    id="clearBtn"
                    class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-[#8a8a8a] hover:text-black text-xs focus:outline-none"
                    aria-label="Clear search"
                    type="button">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- SEARCH BAR END -->

        <!-- RIGHT SIDE NAVBAR -->
        <div class="group relative flex h-7 w-7 mr-5 mt-2">
            <img src="images/tes.jpg" alt="profiletes" class="rounded-full overflow-hidden">
            <div class="invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 w-48 font-sans text-sm leading-relaxed absolute mt-8 left-0 rounded-md bg-[#222222] z-50">
                <ul>
                    <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="/profile">Profile</a></li>
                    <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="/collections">Collections</a></li>
                    <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="/notification">Notifications</a></li>
                    <li>
                        <hr class="border-[#393939]" />
                    </li>
                    <li class="px-4 py-3 font-semibold cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="/dashboard">Dashboard</a></li>
                    <li>
                        <hr class="border-[#393939]" />
                    </li>
                    <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white">Logout</li>
                </ul>
            </div>
        </div>


        <div class="flex items-center space-x-4 text-xs text-black mt-1.5 ">
            <button class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500 cursor-pointer" id="nav-login-btn">Log in</button>
            <button class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500 cursor-pointer" id="nav-register-btn">Sign Up</button>
            <a class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500" href="#">Be Pro</a>
            <a class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500" href="submit-web">Submit Website</a>
        </div>
        <!-- RIGHT SIDE NAVBAR END -->
    </nav>
    <!-- NAVBAR SECTION END -->
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
    {{ $slot }}
    <!-- MODAL OVERLAY -->
    <div id="modal-overlay" class="modal-overlay"></div>

    <!-- EXPLORE MODAL -->
    <div id="explore-modal" class="explore-modal">
        <div class="bg-[#ededed]">
            <nav class="flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-16 py-3">
                <!-- (Logo) -->
                <div class="text-2xl font-bold select-none cursor-default font-sans mr-6">Tubes .</div>

                <!-- (Search Bar) -->
                <div class="flex-1 max-w-[1290px] mx-5 hidden sm:block mt-1.5">
                    <div class="relative">
                        <input
                            id="searchInputModal"
                            type="text"
                            placeholder="Search by inspiration"
                            autocomplete="off"
                            class="w-full rounded-md bg-[#ffffff] text-xs placeholder:text-[#8a8a8a] py-2 pl-10 pr-8 focus:outline-none" />
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-[#8a8a8a] text-xs pointer-events-none"></i>
                        <button
                            id="clearBtnModal"
                            class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-[#8a8a8a] hover:text-black text-xs focus:outline-none"
                            aria-label="Clear search"
                            type="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center space-x-4 text-xs text-black mt-1.5 ">
                    <a href="login-page" class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Log in</a>
                    <a href="register-page" class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Sign Up</a>
                    <a
                        class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500">
                        Be Pro
                    </a>
                    <a
                        class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500" href="submit-web">
                        Submit Website
                    </a>
                </div>
                <!-- Close button -->
                <button id="close-explore-btn" class="text-black text-xl ml-">
                </button>
            </nav>

            <div class="bg-[#ededed]">
                <main class="max-w-[1200px] mx-auto px-10 -ml-1 flex gap-8 text-xs text-black font-normal mt-4">
                    <aside class="flex flex-col gap-3 min-w-[140px] mr-" id="sidebar">
                        <a href="#" class="flex items-center gap-2 font-semibold text-black text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150 active-item" data-item="Awards" id="active-link">
                            <i class="fas fa-award text-[14px]"></i>
                            Awards
                        </a>
                        <a href="#" class="flex items-center gap-2 text-gray-700 text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150" data-item="By Category">
                            <i class="fas fa-th-large text-[14px]"></i>
                            By Category
                        </a>
                        <a href="#" class="flex items-center gap-2 text-gray-700 text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150" data-item="By Technology">
                            <i class="fas fa-microchip text-[14px]"></i>
                            By Technology
                        </a>
                        <a href="#" class="flex items-center gap-2 text-gray-700 text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150" data-item="Collections">
                            <i class="far fa-circle text-[14px]"></i>
                            Collections
                        </a>
                        <a href="#" class="flex items-center gap-2 text-gray-700 text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150" data-item="Blog">
                            <i class="far fa-square text-[14px]"></i>
                            Blog
                        </a>
                    </aside>
                    <!-- SECTION AWARDS -->
                    <section class="flex-1 flex flex-col gap-2 text-gray-900" data-section="Awards">
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-34 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Honor Mentions</span>
                            <span class="text-right">25K</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Nominees</span>
                            <span class="text-right">48K</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Sites of the Day</span>
                            <span class="text-right">5957</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Sites of the Month</span>
                            <span class="text-right">203</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Sites of the Year</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <div class="flex items-center gap-2">
                                <span>Honors</span>
                                <span class="bg-black text-white text-[9px] font-semibold rounded px-1 py-[1px] select-none">New</span>
                            </div>
                        </a>
                        <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">Most Awarded Profiles</a>
                        <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200 mb-20">Jury 2025</a>
                    </section>
                    <!-- BY CATEGORY -->
                    <section class="flex-1 flex flex-col gap-2 text-gray-900 overflow-hidden" data-section="By Category">
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-34 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>E-commerce</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Architecture</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Restaurant & Hotel</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Design Agencies</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Business & Corporate</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Fashion</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Mobile & Apps</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Interaction Design</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Illustration</span>
                            <span class="text-right">-</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-5 px-4 rounded-lg hover:bg-white transition-colors duration-200 mb-10">
                            <span>Header Design</span>
                            <span class="text-right">-</span>
                        </a>
                    </section>
                    <!-- BY TECHNOLOGY -->
                    <section class="flex-1 flex flex-col gap-2 text-gray-900" data-section="By Technology">
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-34 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>CSS Animation</span>
                            <span class="text-right">25K</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Wordpresss</span>
                            <span class="text-right">48K</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Shopify</span>
                            <span class="text-right">5957</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>WebGl sites</span>
                            <span class="text-right">203</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>React Websites</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>3D websites</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Figma</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Gsap</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                            <span>Framer</span>
                            <span class="text-right">64</span>
                        </a>
                        <a href="#" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200 mb-10">
                            <span>Webflow</span>
                            <span class="text-right">64</span>
                        </a>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <script src="js/layout.js"></script>
    <script src="js/sitesbyname.js"></script>
</body>


</html>