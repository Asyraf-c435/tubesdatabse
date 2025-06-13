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