<nav id="main-nav" class="flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-16 py-3 mb-5">
    <!-- LEFT SIDE NAVBAR -->
    <div class="flex items-center space-x-12 mr-2">
        <div class="text-2xl font-bold select-none cursor-default font-sans"><a href="{{ route('home') }}">Tubes .</a></div>
        <!-- NAVBAR CAN CLICK -->
        <div class="hidden sm:flex items-center space-x-4 text-sm font-normal text-black mt-1.5">
            <a id="explore-btn" class="relative group cursor-pointer hover:opacity-50 transition-opacity duration-500 flex items-center">
                <span>Explore</span>
                <i class="fas fa-chevron-down text-[10px] ml-1"></i>
            </a>
            <a href="{{ route('directory') }}" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Directory</a>
            <a href="{{ route('academy') }}" class="cursor-pointer group flex items-center space-x-1 group transition-opacity duration-500">
                <span class="group-hover:opacity-50 duration-500">Academy</span>
                <span class="bg-black text-white text-[8px] font-semibold px-1 rounded select-none opacity-100 ">New</span>
            </a>
            <a href="{{ route('job') }}" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Jobs</a>
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
                <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="">Profile</a></li>
                <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="{{ route('collections') }}">Collections</a></li>
                <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="{{ route('notification') }}">Notifications</a></li>
                <li>
                    <hr class="border-[#393939]" />
                </li>
                <li class="px-4 py-3 font-semibold cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>
                    <hr class="border-[#393939]" />
                </li>
                <li class="px-4 py-3 cursor-pointer hover:text-gray-400 transition-colors duration-200 text-white"><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>


    <div class="flex items-center space-x-4 text-xs text-black mt-1.5 ">
        <a class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500 cursor-pointer" id="nav-login-btn" href="{{ route('login') }}">Log in</a>
        <a class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500 cursor-pointer" id="nav-register-btn" href="{{ route('register') }}">Sign Up</a>
        <!-- <a class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500" href="#">Be Pro</a> -->
        <a class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500" href="{{route('submit')}}">Submit Website</a>
    </div>
    <!-- RIGHT SIDE NAVBAR END -->
</nav>