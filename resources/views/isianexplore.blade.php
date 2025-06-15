<x-layout>
    <div class="items-center justify-center">
        <div class="ml-16">
        <x-filbar/>
    </div>

    </div>
        <body class="bg-white text-gray-700">
            <div class="max-w-[1280px] mx-auto px-2 py-4">
                <!-- Info and View toggle -->
            <!-- <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center text-xs text-gray-600 mb-3 gap-2 px-2">
                <div class="flex items-center gap-1 flex-wrap">
                    <span>
                        Winning websites. Web Design Inspiration
                    </span>
                    <span class="border border-gray-300 rounded px-1 text-[10px] font-normal select-none">
                        10336
                    </span>
                </div>
                <div class="flex items-center gap-2 text-gray-600 text-[11px] select-none flex-wrap sm:flex-nowrap">
                    <span>
                        Best selection of
                        <strong>
                            Winning websites. Web Design Inspiration
                        </strong>
                        for your inspiration...
                    </span>
                    <button aria-label="Grid view" class="text-gray-600 hover:text-gray-900" type="button">
                        <i class="fas fa-th-large">
                        </i>
                    </button>
                    <button aria-label="List view" class="text-gray-600 hover:text-gray-900" type="button">
                        <i class="fas fa-th-list">
                            </i>
                        </button>
                    </div>
                </div> -->
                <!-- Cards grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 px-2">
                 @foreach ($websites as $website)
                    <div class="flex flex-col bg-white rounded overflow-hidden shadow-sm border border-gray-100">
                        <a href="{{ route('sites', $website->id) }}">
                            <img alt="Web preview" class="w-full object-cover max-h-[180px]" height="180" loading="lazy" src="{{ $website->image_link }}" width="400" />
                        </a>
                        <div class="flex items-center justify-between px-2 py-1 text-[11px] text-gray-600 border-t border-gray-200">
                            <a class="flex items-center gap-1 font-semibold text-[12px]" href="{{ route('profile', $website->user->id) }}">
                                <img alt="user image" class="max-w-[25px] object-cover max-h-[25px rounded-full" loading="lazy" src="{{ $website->user->image_link }}" height="25" width="25" />
                                <span>
                                    {{ $website->user->name }}
                                </span>
                                <!-- <span class="text-gray-400 font-normal">
                                    ∞
                                </span> -->
                            </a>
                            <div class="flex items-center gap-1 text-[9px] font-semibold">
                                @foreach($website->awards as $award)
                                    @if ($award->type == 1)
                                        <span class="border border-gray-300 rounded px-1 text-gray-600 select-none">
                                            HM
                                        </span>
                                    @elseif ($award->type == 2)
                                        <span class="border border-red-300 rounded px-1 text-red-600 select-none">
                                            SOTD
                                        </span>
                                    @elseif ($award->type == 3)
                                        <span class="border border-black-300 rounded px-1 text-black-600 select-none">
                                            SOTM
                                        </span>
                                    @elseif ($award->type == 4)
                                        <span class="border border-gray-300 rounded px-1 text-black-600 select-none">
                                            SOTY
                                        </span>
                                    @elseif ($award->type == 5)
                                        <span class="border border-blue-300 rounded px-1 text-blue-600 select-none">
                                            DEV
                                        </span>
                                    @elseif ($award->type == 6)
                                        <span class="border border-gray-300 rounded px-1 text-black-600 select-none">
                                            HONOR
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk toggle dropdown
        function toggleDropdown(button, dropdown) {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            
            // Tutup semua dropdown lainnya
            document.querySelectorAll('[role="menu"]').forEach(menu => {
                if (menu !== dropdown) {
                    menu.classList.add('hidden');
                    const btn = menu.previousElementSibling;
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });
            
            // Toggle dropdown saat ini
            button.setAttribute('aria-expanded', !isExpanded);
            dropdown.classList.toggle('hidden');
            
            // Focus ke input search jika ada
            if (!isExpanded) {
                const searchInput = dropdown.querySelector('input[type="text"]');
                if (searchInput) setTimeout(() => searchInput.focus(), 0);
            }
        }

        // Fungsi untuk setup search filter
        function setupSearchFilter(input, items) {
            input.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                items.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    item.style.display = text.includes(searchTerm) ? 'block' : 'none';
                });
            });
        }

        // Inisialisasi semua dropdown dengan search
        const dropdownsWithSearch = [
            'category', 'tag', 'tech', 'country', 'font'
        ];
        
        dropdownsWithSearch.forEach(type => {
            const button = document.getElementById(`menu-button-${type}`);
            const dropdown = document.getElementById(`dropdown-${type}`);
            
            if (button && dropdown) {
                button.addEventListener('click', (e) => {
                    e.stopPropagation();
                    toggleDropdown(button, dropdown);
                });
                
                const searchInput = dropdown.querySelector('input[type="text"]');
                const items = dropdown.querySelectorAll('[role="menuitem"]');
                
                if (searchInput && items.length > 0) {
                    setupSearchFilter(searchInput, items);
                }
            }
        });

        // Inisialisasi dropdown awards (tanpa search)
        const awardsBtn = document.getElementById('menu-button-awards');
        const awardsDropdown = document.getElementById('dropdown-awards');
        if (awardsBtn && awardsDropdown) {
            awardsBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(awardsBtn, awardsDropdown);
            });
        }

        // Inisialisasi color picker
        const colorBtn = document.getElementById('menu-button-color');
        const colorDropdown = document.getElementById('dropdown-color');
        if (colorBtn && colorDropdown) {
            colorBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(colorBtn, colorDropdown);
            });
            
            // Handle color selection
            colorDropdown.querySelectorAll('button').forEach(colorBtn => {
                colorBtn.addEventListener('click', function() {
                    const color = this.style.backgroundColor;
                    console.log('Color selected:', color);
                    // Tambahkan logika untuk menerapkan warna yang dipilih
                    colorDropdown.classList.add('hidden');
                    document.getElementById('menu-button-color')
                    .setAttribute('aria-expanded', 'false');
                });
            });
        }

        // Tutup dropdown saat klik di luar
        document.addEventListener('click', function(e) {
            if (!e.target.closest('[aria-haspopup="true"]') && 
                !e.target.closest('[role="menu"]')) {
                document.querySelectorAll('[role="menu"]').forEach(menu => {
                    menu.classList.add('hidden');
                    const btn = menu.previousElementSibling;
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });
            }
        });

        // Reset filters
        const resetBtn = document.querySelector('.reset-filters');
        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                document.querySelectorAll('[role="menu"]').forEach(menu => {
                    menu.classList.add('hidden');
                    const btn = menu.previousElementSibling;
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                    
                    const searchInput = menu.querySelector('input[type="text"]');
                    if (searchInput) {
                        searchInput.value = '';
                        const items = menu.querySelectorAll('[role="menuitem"]');
                        items.forEach(item => item.style.display = '');
                    }
                });
            });
        }
    });
</script>
