<x-layout>
    <link rel="stylesheet" href="{{ asset('css/collections.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- COLECCTIONS CARD -->
    <div id="collection-card" class="fixed inset-0 bg-black bg-opacity-20 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-6">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-8 max-h-[90vh] overflow-y-auto" id="card-content">
            <form id="collection-form" class="w-full">
                <div class="mb-6">
                    <label for="name" class="block text-[10px] font-semibold text-[#000000] mb-1">NAME *</label>
                    <input id="name" type="text" placeholder="Name" required
                        class="w-full bg-white text-[13px] text-black px-4 py-3 focus:ring-0 border border-gray-300 rounded" />
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-[10px] font-semibold text-[#000000] mb-1">DESCRIPTION *</label>
                    <textarea id="description" placeholder="Description" rows="3" required
                        class="w-full bg-white text-[13px] text-black px-4 py-3 resize-none focus:ring-0 border border-gray-300 rounded"></textarea>
                </div>

                <div class="mb-6 relative">
                    <label for="category" class="block text-[10px] font-semibold text-[#000000] mb-1">SELECT CATEGORY *</label>
                    <select id="category" required
                        class="w-full bg-white text-[13px] text-black px-4 py-3 appearance-none focus:ring-0 border border-gray-300 rounded">
                        <option value="" selected disabled>Select category</option>
                        <option>Inspiration</option>
                        <option>UI/UX</option>
                        <option>Web Technology</option>
                        <option>Resources</option>
                    </select>
                    <div class="pointer-events-none absolute right-4 top-[calc(50%-6px)] text-black" aria-hidden="true">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <div class="mb-10 flex items-center space-x-3">
                    <label class="block text-[10px] font-semibold text-[#b3b3b3] uppercase select-none">PRIVATE</label>
                    <label class="relative cursor-pointer">
                        <input type="checkbox" id="private" class="sr-only peer" />
                        <div class="w-14 h-7 bg-[#d9d9d9] rounded-full peer-checked:bg-[#4b5563] transition-colors duration-300"></div>
                        <div class="absolute top-0.5 left-0.5 w-6 h-6 bg-white rounded-full shadow-md transform peer-checked:translate-x-7 transition-transform duration-300"></div>
                    </label>
                </div>
                <div class="flex space-x-4">
                    <button type="button" onclick="toggleCollectionCard(false)"
                        class="w-28 h-12 border border-black rounded-md text-black text-base font-normal transition duration-300 hover:bg-black hover:text-white">
                        Cancel
                    </button>
                    <button type="submit"
                        class="flex items-center justify-center w-full h-12 bg-[#1c1c1c] rounded-md text-white text-base font-normal space-x-2 transition duration-300 hover:bg-gray-800">
                        <span>→</span>
                        <span>Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- END COLLECTIONS CARD -->
    <div class="bg-[#f7f7f7] min-h-screen flex flex-col items-center pt-16 px-4 pb-32">
        <div class="flex flex-col items-center">
            <img alt="Profile image of a person with black background and white circular border" class="w-20 h-20 rounded-full mb-3" height="80" src="https://storage.googleapis.com/a1aa/image/e2c3f9b1-bf5a-4ad6-40c1-e830c9320fd4.jpg" width="80" />
            <p class="text-[14px] font-sans text-black mb-5 select-text">
                muhammad-asyraf-dzacky
            </p>
            <table class="border border-black border-collapse text-[14px] font-sans text-center">
                <thead>
                    <tr>
                        <th class="border border-black py-2 px-3">
                            COLLECTS
                        </th>
                        <th class="border border-black py-2 px-3">
                            STATS
                        </th>
                        <th class="border border-black py-2 px-3">
                            POSTS
                        </th>
                        <th class="border border-black py-2 px-3">
                            NFT
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black py-3 px-3">
                            0
                        </td>
                        <td class="border border-black py-3 px-3">
                            0
                        </td>
                        <td class="border border-black py-3 px-3">
                            0
                        </td>
                        <td class="border border-black py-3 px-3">
                            0
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full max-w-5xl mt-20">
            <p class="text-2xs text-black mb-2 select-text">
                2 Collections
            </p>
            <div class="flex space-x-4">
                <button
                    onclick="toggleCollectionCard(true)"
                    class="flex items-center justify-center w-64 h-48 bg-white border border-gray-200 rounded-md text-[10px] font-sans text-black" type="button">
                    <i class="fas fa-plus mr-2 text-[10px]">
                    </i>
                    Create collection
                </button>
                <div class="collection-item relative w-64 h-48 rounded-md overflow-hidden cursor-pointer select-text">
                    <img alt="Collection image showing a colorful abstract digital art with vibrant shapes and patterns" class="w-full h-full object-cover" height="192" src="https://storage.googleapis.com/a1aa/image/f2991325-7d54-462b-419e-fb8a2703ae09.jpg" width="256" />
                    <div class="overlay-gradient"></div>
                    <div class="overlay-text">
                        <div class="mb-1">COLLECTIONS</div>
                        <div class="line2">Web Usu</div>
                    </div>
                    <p class="text-[10px] font-sans text-black mt-1 select-text">
                        Test
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const collectionCard = document.getElementById('collection-card');
            const cardContent = document.getElementById('card-content');
            const form = document.getElementById('collection-form');
            const body = document.body;
            const privateCheckbox = document.getElementById('private');
            const privateToggle = document.querySelector('.relative input[type="checkbox"]');

            // Fungsi toggle card
            function toggleCollectionCard(show) {
                if (show) {
                    body.style.overflow = 'hidden';
                    collectionCard.classList.remove('hidden');
                    setTimeout(() => {
                        collectionCard.classList.add('opacity-100');
                    }, 10);
                } else {
                    collectionCard.classList.remove('opacity-100');
                    setTimeout(() => {
                        collectionCard.classList.add('hidden');
                        body.style.overflow = 'auto';
                        form.reset();
                        // Reset private toggle saat form ditutup
                        privateCheckbox.checked = false;
                    }, 300);
                }
            }

            // Klik di luar card untuk menutup
            collectionCard.addEventListener('click', function(e) {
                if (e.target === collectionCard) {
                    toggleCollectionCard(false);
                }
            });

            // Mencegah event bubbling dari konten card
            cardContent.addEventListener('click', function(e) {
                e.stopPropagation();
            });

            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Validasi form
                const name = document.getElementById('name').value.trim();
                const description = document.getElementById('description').value.trim();
                const category = document.getElementById('category').value;
                const isPrivate = privateCheckbox.checked;

                if (!name || !description || !category) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Harap isi semua field yang wajib',
                        icon: 'error',
                        confirmButtonColor: '#d33',
                    });
                    return;
                }

                // Simpan data (simulasi)
                Swal.fire({
                    title: 'Berhasil!',
                    text: `Collection berhasil disimpan sebagai ${isPrivate ? 'Private' : 'Public'}`,
                    icon: 'success',
                    confirmButtonColor: '#1c1c1c',
                }).then(() => {
                    toggleCollectionCard(false);
                });
            });

            // Tombol create collection
            document.querySelector('button[onclick*="toggleCollectionCard(true)"]').addEventListener('click', function() {
                toggleCollectionCard(true);
            });

            // Tombol cancel
            document.querySelector('button[onclick*="toggleCollectionCard(false)"]').addEventListener('click', function() {
                toggleCollectionCard(false);
            });

            // Handle private toggle - untuk animasi visual
            privateToggle.addEventListener('change', function() {
                console.log('Private status:', this.checked);
                // Anda bisa menambahkan logika tambahan di sini
            });
        });
    </script>
</x-layout>