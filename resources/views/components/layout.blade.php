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
</head>

<body class="bg-[#e9e9e9]">
    <!-- NAVBAR SECTION -->
    <nav id="main-nav" class="flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-16 py-3 mb-1.5">
        <!-- LEFT SIDE NAVBAR -->
        <div class="flex items-center space-x-12 mr-2">
            <div class="text-2xl font-bold select-none cursor-default font-sans">Tubes .</div>
            <!-- NAVBAR CAN CLICK -->
            <div class="hidden sm:flex items-center space-x-4 text-sm font-normal text-black mt-1.5">
                <a id="explore-btn" href="#" class="relative group cursor-pointer hover:opacity-50 transition-opacity duration-500 flex items-center">
                    <span>Explore</span>
                    <i class="fas fa-chevron-down text-[10px] ml-1"></i>
                </a>
                <a href="#" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Directory</a>
                <a href="#" class="cursor-pointer group flex items-center space-x-1 group transition-opacity duration-500">
                    <span class="group-hover:opacity-50 duration-500">Academy</span>
                    <span class="bg-black text-white text-[8px] font-semibold px-1 rounded select-none opacity-100 ">New</span>
                </a>
                <a href="#" class="cursor-pointer hover:opacity-50 transition-opacity duration-500">Jobs</a>
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
        <div class="flex items-center space-x-4 text-xs text-black mt-1.5 ">
            <a class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500" href="#">Log in</a>
            <a class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500" href="#">Sign Up</a>
            <a
                class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500" href="#">
                Be Pro
            </a>
            <a
                class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500" href="#">
                Submit Website
            </a>
        </div>
        <!-- RIGHT SIDE NAVBAR END -->
    </nav>
    <!-- NAVBAR SECTION END -->
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
                    <button class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Log in</button>
                    <button class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Sign Up</button>
                    <button
                        class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500">
                        Be Pro
                    </button>
                    <button
                        class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500">
                        Submit Website
                    </button>
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
                    <section class="flex-1 flex flex-col gap-2 text-gray-900">
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
                </main>
            </div>
        </div>
    </div>

    <script src="js/layout.js"></script>
</body>

</html>