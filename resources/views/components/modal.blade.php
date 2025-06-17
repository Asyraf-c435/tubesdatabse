@php
    use App\Models\Award;
    use App\Models\Website;
    use App\Models\Tag;
@endphp
<!-- MODAL OVERLAY -->
<div id="modal-overlay" class="modal-overlay"></div>

<!-- EXPLORE MODAL -->
<div id="explore-modal" class="explore-modal">
    <div class="bg-[#ededed]">
        <nav class="flex items-center justify-between px-4 sm:px-6 md:px-10 lg:px-16 py-3">
            <!-- (Logo) -->
            <div class="text-2xl font-bold select-none cursor-default font-sans mr-6"><a href="{{ route('home') }}">Tubes .</a></div>

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
                @guest
                    <a href="{{ route('login') }}" class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Log in</a>
                    <a href="{{ route('register') }}" class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Sign Up</a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}" class="hidden sm:block font-semibold hover:opacity-50 transition-opacity duration-500">Log out</a>
                @endauth
                <!-- <a
                    class="bg-black text-white rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-white hover:text-black transition-colors duration-500">
                    Be Pro
                </a> -->
                <a class="border border-black rounded-md px-4 py-1.5 text-sm font-semibold select-none hover:bg-black hover:text-white transition-colors duration-500" href="{{ route('submit') }}">
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
                    <a href="#" class="flex items-center gap-2 text-gray-700 text-left py-1 rounded hover:bg-white hover:px-3 transition-all duration-150" data-item="By Tag">
                        <i class="fas fa-th-large text-[14px]"></i>
                        By Tag
                    </a>
                </aside>
                <!-- SECTION AWARDS -->
                <section class="flex-1 flex flex-col gap-2 text-gray-900" data-section="Awards">
                    <a href="{{ route('websites', 1) }}" class="grid grid-cols-[auto_auto] gap-x-34 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Honor Mentions</span>
                        <span class="text-right">{{ Award::where('type', '>=', 1)->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 0) }}" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Nominees</span>
                        <span class="text-right">{{ Website::doesntHave('awards')->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 2) }}" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Sites of the Day</span>
                        <span class="text-right">{{ Award::where('type', 2)->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 3) }}" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Sites of the Month</span>
                        <span class="text-right">{{ Award::where('type', 3)->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 4) }}" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Sites of the Year</span>
                        <span class="text-right">{{ Award::where('type', 4)->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 5) }}" class="grid grid-cols-[auto_auto] gap-x-20 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>Developer Award</span>
                        <span class="text-right">{{ Award::where('type', 5)->count() }}</span>
                    </a>
                    <a href="{{ route('websites', 6) }}" class="flex items-center justify-between py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <div class="flex items-center gap-2">
                            <span>Honors</span>
                            <span class="bg-black text-white text-[9px] font-semibold rounded px-1 py-[1px] select-none">New</span>
                        </div>
                    </a>
                    <!-- <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">Most Awarded Profiles</a>
                    <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200 mb-20">Jury 2025</a> -->
                </section>
                <!-- BY CATEGORY -->
                <section class="flex-1 flex flex-col gap-2 text-gray-900 overflow-hidden" data-section="By Tag">
                    @foreach (Tag::withCount('websites')->orderByDesc('websites_count')->get() as $tag)
                    <a href="#" class="grid grid-cols-[auto_auto] gap-x-34 items-center py-3 px-4 rounded-lg hover:bg-white transition-colors duration-200">
                        <span>{{ $tag->name }}</span>
                        <span class="text-right">{{ $tag->websites->count() }}</span>
                    </a>
                    @endforeach
                </section>
            </main>
        </div>
    </div>
</div>