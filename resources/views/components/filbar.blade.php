@php
    use App\Models\Tag;
    use App\Models\Award;
@endphp
<div class="flex flex-wrap items-center gap-2 text-xs font-normal text-gray-600 mb-3 w-full">
    <div class="flex flex-wrap gap-2 flex-grow min-w-[220px]">
        <!-- Dropdown Awards -->
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true"
                class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100"
                id="menu-button-awards" type="button">
                Awards
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]"></i>
            </button>
            <div aria-labelledby="menu-button-awards"
                class="origin-top-left absolute left-0 mt-1 w-36 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden"
                id="dropdown-awards" role="menu" tabindex="-1">
                <div class="py-1" role="none">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Award 1
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Award 2
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Award 3
                    </a>
                </div>
            </div>
        </div>
        <!-- Dropdown Category with search -->
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100" id="menu-button-category" type="button">
                Category
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]">
                </i>
            </button>
            <div aria-labelledby="menu-button-category" class="origin-top-left absolute left-0 mt-1 w-44 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-category" role="menu" tabindex="-1">
                <div class="p-2 border-b border-gray-200">
                    <input aria-label="Search Category" class="w-full rounded border border-gray-300 px-2 py-1 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500" id="search-category" placeholder="Search..." type="text" />
                </div>
                <div class="max-h-48 overflow-y-auto py-1" role="none" id="category-list">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Category 1
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Category 2
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Category 3
                    </a>
                </div>
            </div>
        </div>
        <!-- Dropdown Tag with search -->
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100" id="menu-button-tag" type="button">
                Tag
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]">
                </i>
            </button>
            <div aria-labelledby="menu-button-tag" class="origin-top-left absolute left-0 mt-1 w-44 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-tag" role="menu" tabindex="-1">
                <div class="p-2 border-b border-gray-200">
                    <input aria-label="Search Tag" class="w-full rounded border border-gray-300 px-2 py-1 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500" id="search-tag" placeholder="Search..." type="text" />
                </div>
                <div class="max-h-48 overflow-y-auto py-1" role="none" id="tag-list">
                    @foreach (Tag::all() as $tag)
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Dropdown Technology with search
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100" id="menu-button-tech" type="button">
                Technology
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]">
                </i>
            </button>
            <div aria-labelledby="menu-button-tech" class="origin-top-left absolute left-0 mt-1 w-44 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-tech" role="menu" tabindex="-1">
                <div class="p-2 border-b border-gray-200">
                    <input aria-label="Search Technology" class="w-full rounded border border-gray-300 px-2 py-1 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500" id="search-tech" placeholder="Search..." type="text" />
                </div>
                <div class="max-h-48 overflow-y-auto py-1" role="none" id="tech-list">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Tech 1
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Tech 2
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Tech 3
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Tech 4
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Tech 5
                    </a>
                </div>
            </div>
        </div> -->
        <!-- Dropdown Country with search -->
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100" id="menu-button-country" type="button">
                Country
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]">
                </i>
            </button>
            <div aria-labelledby="menu-button-country" class="origin-top-left absolute left-0 mt-1 w-44 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-country" role="menu" tabindex="-1">
                <div class="p-2 border-b border-gray-200">
                    <input aria-label="Search Country" class="w-full rounded border border-gray-300 px-2 py-1 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500" id="search-country" placeholder="Search..." type="text" />
                </div>
                <div class="max-h-48 overflow-y-auto py-1" role="none" id="country-list">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Country 1
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Country 2
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Country 3
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Country 4
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Country 5
                    </a>
                </div>
            </div>
        </div>
        <!-- Dropdown Font with search
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="inline-flex justify-center w-full rounded border border-gray-300 px-3 py-1 text-sm font-normal text-gray-600 hover:bg-gray-100" id="menu-button-font" type="button">
                Font
                <i class="fas fa-sort text-[10px] ml-1 mt-[2px]">
                </i>
            </button>
            <div aria-labelledby="menu-button-font" class="origin-top-left absolute left-0 mt-1 w-44 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-font" role="menu" tabindex="-1">
                <div class="p-2 border-b border-gray-200">
                    <input aria-label="Search Font" class="w-full rounded border border-gray-300 px-2 py-1 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500" id="search-font" placeholder="Search..." type="text" />
                </div>
                <div class="max-h-48 overflow-y-auto py-1" role="none" id="font-list">
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Font 1
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Font 2
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Font 3
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Font 4
                    </a>
                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" href="#" role="menuitem" tabindex="-1">
                        Font 5
                    </a>
                </div>
            </div>
        </div> -->
        <!-- Dropdown Color with color choices
        <div class="relative inline-block text-left">
            <button aria-expanded="false" aria-haspopup="true" class="flex items-center gap-1 border border-gray-300 rounded px-3 py-1 hover:bg-gray-100 text-gray-600 text-sm" id="menu-button-color" type="button">
                Color
                <span class="w-3 h-3 rounded-sm bg-[#FF595E] inline-block"></span>
                <span class="w-3 h-3 rounded-sm bg-[#1982C4] inline-block"></span>
                <span class="w-3 h-3 rounded-sm bg-[#6A4C93] inline-block"></span>
                <i class="fas fa-chevron-down text-[10px] ml-1 mt-[2px]"></i>
            </button>
            <div aria-labelledby="menu-button-color" class="origin-top-left absolute left-0 mt-1 w-36 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden" id="dropdown-color" role="menu" tabindex="-1">
                <div class="py-2 px-3 grid grid-cols-6 gap-2">
                    <button aria-label="Red" class="mr-5 w-6 h-6 rounded-sm bg-[#FF595E] hover:ring-2 hover:ring-offset-1 hover:ring-[#FF595E]" type="button"></button>
                    <button aria-label="Blue" class="mr-5 w-6 h-6 rounded-sm bg-[#1982C4] hover:ring-2 hover:ring-offset-1 hover:ring-[#1982C4]" type="button"></button>
                    <button aria-label="Purple" class="mr-5 w-6 h-6 rounded-sm bg-[#6A4C93] hover:ring-2 hover:ring-offset-1 hover:ring-[#6A4C93]" type="button"></button>
                    <button aria-label="Green" class="mr-5 w-6 h-6 rounded-sm bg-[#8AC926] hover:ring-2 hover:ring-offset-1 hover:ring-[#8AC926]" type="button"></button>
                    <button aria-label="Orange" class="mr-5 w-6 h-6 rounded-sm bg-[#FFCA3A] hover:ring-2 hover:ring-offset-1 hover:ring-[#FFCA3A]" type="button"></button>
                    <button aria-label="Gray" class="mr-5 w-6 h-6 rounded-sm bg-[#6C757D] hover:ring-2 hover:ring-offset-1 hover:ring-[#6C757D]" type="button"></button>
                </div>
            </div>
        </div> -->
    </div>
    <div class="flex items-center gap-2 border border-gray-300 rounded px-3 py-1 text-[10px] text-gray-500 cursor-pointer select-none mr-16">
        <!-- <div class="flex items-center justify-center w-5 h-5 rounded-full text-[10px] text-orange-500 border border-orange-300">
            0
        </div> -->
        <span>
            Reset filters
        </span>
        <!-- <i class="far fa-comment-alt text-xs">
        </i> -->
    </div>
</div>