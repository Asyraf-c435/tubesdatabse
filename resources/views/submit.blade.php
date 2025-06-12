<x-layout>
    <link rel="stylesheet" href="{{ asset('css/submit.css') }}">
    <div class="bg-gray-50 min-h-screen flex flex-col items-center justify-center p-6 relative overflow-hidden">
        <h1 class="font-sans font-extrabold text-black text-3xl mb-16">
            Upload your best work
        </h1>
        <!-- BUTTON SWITCH SECTION -->
        <div class="w-full max-w-6xl bg-gray-50">
            <div class="w-full flex justify-center items-center mb-20">
                <div class="max-w-xs w-full px-4 select-none">
                    <div class="line-container mb-1">
                        <div class="dotted-line"></div>
                        <div id="boldLine" class="bold-line left-0 w-1/2"></div>
                    </div>
                    <div class="flex text-xs font-semibold text-black font-sans cursor-pointer">
                        <div id="mainFillBtn" class="w-1/2 text-center">Main Fill</div>
                        <div id="uploadElementsBtn" class="w-1/2 text-center">Upload Elements</div>
                    </div>
                </div>
            </div>

            <!-- Container untuk kedua section -->
            <div class="relative min-h-[500px] w-full">
                <!-- MAIN FILL -->
                <div id="mainFillSection" class="flex flex-col md:flex-row gap-12 mb-20">
                    <form class="flex flex-col gap-8 w-full md:w-1/3">
                        <div class="flex flex-col gap-1">
                            <label
                                for="website-name"
                                class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest uppercase">Name of website</label>
                            <input
                                id="website-name"
                                type="text"
                                class="bg-white border border-gray-200 rounded-sm h-8 px-2 text-xs focus:outline-none focus:ring-0 focus:border-gray-300"
                                placeholder="Input your name of website" />
                        </div>

                        <div class="flex flex-col gap-1">
                            <label
                                for="description"
                                class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest">Description(*)
                            </label>
                            <textarea
                                id="description"
                                rows="4"
                                class="bg-white border border-gray-200 rounded-sm px-2 pt-1 text-xs resize-none focus:outline-none focus:ring-0 focus:border-gray-300" placeholder="Input description"></textarea>
                        </div>

                        <div class="flex flex-col gap-1 max-w-[160px]">
                            <label
                                for="avatar-upload"
                                class="text-[9px] font-sans font-semibold text-gray-400 tracking-widest uppercase">Avatar</label>
                            <label
                                for="avatar-upload"
                                tabindex="0"
                                class="cursor-pointer bg-white border border-gray-200 rounded-sm flex flex-col items-center justify-center text-center text-[9px] text-gray-600 px-2 py-3 focus:outline-none focus:ring-0 focus:border-gray-300">
                                <i class="fas fa-cloud-upload-alt text-lg mb-1"></i>
                                <span>
                                    Drag and drop your<br />
                                    image or <b>browse</b> to<br />
                                    choose your file.
                                </span>
                                <span class="mt-1 font-bold text-[9px] leading-3">
                                    Recommended size:<br />
                                    400×400px, 400KB max.
                                </span>
                                <input
                                    id="avatar-upload"
                                    type="file"
                                    accept="image/*"
                                    class="hidden" />
                            </label>
                        </div>
                    </form>
                    <div
                        class="bg-white w-full md:w-2/3 aspect-[4/3] flex flex-col justify-center items-center border border-gray-200">
                        <i class="far fa-eye text-gray-400 text-3xl mb-2"></i>
                        <span class="text-xs font-sans text-gray-400 tracking-widest uppercase">
                            Preview
                        </span>
                    </div>
                </div>

                <!-- UPLOAD ELEMENTS -->
                <div id="uploadElementsSection" class="transform max-h-[500px]">
                    <!-- Container untuk cards -->
                    <div id="cardsContainer" class="flex flex-col md:flex-row md:justify-center md:items-start mt-10 space-y-10 md:space-y-0 md:space-x-20 max-w-4xl mx-auto relative">
                        <!-- Card pertama -->
                        <form class="bg-gray-200 p-8 w-full max-w-md relative card">
                            <label for="website" class="block text-[8px] font-bold mb-1 text-gray-500">NAME OF WEBSITE</label>
                            <input
                                id="website"
                                type="text"
                                class="w-full h-7 mb-6 px-2 text-xs bg-white border border-gray-200 rounded-sm focus:outline-none focus:ring-0 focus:border-gray-300"
                                style="font-family: Inter, sans-serif;"
                                placeholder="Input your name of website" />
                            <label for="image-upload" class="block text-[8px] font-bold mb-1 text-gray-500">IMAGE</label>
                            <div class="w-28 h-28 bg-white flex flex-col items-center justify-center text-center text-[8px] text-gray-700 mb-6 px-1 leading-tight" style="font-family: Inter, sans-serif;">
                                <i class="fas fa-cloud-upload-alt text-base mb-1"></i>
                                <span>Drag and drop your image or <span class="underline cursor-pointer">browse</span> to choose your file.</span>
                                <b class="block mt-1">Recommended size:</b>
                                <b>400×400px. 400KB max.</b>
                            </div>
                            <label for="tags" class="block text-[8px] font-bold mb-1 text-gray-500">TAGS</label>
                            <div class="bg-white rounded-md h-12 flex items-center px-3 space-x-2 max-w-xs relative">
                                <span class="text-[8px] border border-gray-300 rounded-full py-1 px-2">#CssAnimation</span>
                                <button type="button" class="text-xs font-bold text-black rounded-full border border-black w-5 h-5 flex items-center justify-center hover:bg-black hover:text-white transition-colors duration-200">+</button>
                            </div>
                        </form>
                    </div>

                    <!-- Tombol tambah card -->
                    <button id="addCardBtn" class="bg-black text-white rounded-full w-10 h-10 flex items-center justify-center absolute hover:bg-gray-800 transition-colors duration-200" style="top: 35%; right: 17.5rem;">
                        <span class="text-2xl font-bold">+</span>
                    </button>

                    <!-- Tombol submit -->
                    <div class="flex justify-end max-w-4xl mx-auto mt-20 mb-20">
                        <button class="bg-black text-white font-bold text-xs py-3 px-10 rounded-full tracking-widest hover:bg-gray-800 transition-colors duration-200">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const mainFillBtn = document.getElementById('mainFillBtn');
            const uploadElementsBtn = document.getElementById('uploadElementsBtn');
            const boldLine = document.getElementById('boldLine');
            const mainFillSection = document.getElementById('mainFillSection');
            const uploadElementsSection = document.getElementById('uploadElementsSection');
            const container = document.querySelector('.bg-gray-50');
            
            // Set awal ke Main Fill
            container.classList.add('main-fill-active');
            
            // Switch ke Main Fill
            mainFillBtn.addEventListener('click', function() {
                container.classList.remove('upload-elements-active');
                container.classList.add('main-fill-active');
                boldLine.style.left = '0';
                boldLine.style.width = '50%';
            });
            
            // Switch ke Upload Elements
            uploadElementsBtn.addEventListener('click', function() {
                container.classList.remove('main-fill-active');
                container.classList.add('upload-elements-active');
                boldLine.style.left = '50%';
                boldLine.style.width = '50%';
            });
            
            // Mencegah scroll horizontal dengan mouse
            document.addEventListener('wheel', function(e) {
                if (e.deltaX !== 0) {
                    e.preventDefault();
                }
            }, { passive: false });
        });

    </script>
</x-layout>