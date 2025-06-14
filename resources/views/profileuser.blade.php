<x-layout>
    <link rel="stylesheet" href="{{ asset('css/profileuser.css') }}">

    <body class="bg-[#f7f7f7] text-[#1a1a1a]">
        <div
            id=""
            class="fixed bottom-4 left-1/2 transform -translate-x-1/2 translate-y-4
           z-50 pointer-events-none transition-all duration-500 ease-in-out
           flex items-center text-center space-x-2 rounded-lg border-2 border-gray-600 bg-[#3e3e3e] p-1"
            style="font-family: 'Inter', sans-serif;">

            <div class="flex items-center justify-center w-15 h-10 rounded-md px-4 py-2 bg-[#222222] text-white font-semibold text-lg select-none m-1">
                Tubes .
            </div>
            <a href="#nominees" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Profile</a>
            <a href="#market" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">SOTD</a>
            <a href="#" class="visit-sotd text- text-black px-3 py-2 rounded-md border-2 border-[#aaeec4] bg-[#aaeec4] font-semibold">Visit Sotd.</a>
        </div>
        <div class="max-w-7xl mx-auto px-4 py-6">
            <header class="flex justify-between items-center mb-10">
                <div class="flex items-center space-x-2">
                    <button class="text-xs border border-gray-400 rounded px-3 py-1 hover:bg-gray-100 transition">
                        Follow
                    </button>
                    <button aria-label="Close" class="w-8 h-8 rounded-full border border-gray-400 flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fas fa-times text-sm"></i>
                    </button>
                    <button aria-label="LinkedIn" class="w-8 h-8 rounded-full border border-gray-400 flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </button>
                    <button aria-label="Instagram" class="w-8 h-8 rounded-full border border-gray-400 flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fab fa-instagram text-sm"></i>
                    </button>
                    <button aria-label="TikTok" class="w-8 h-8 rounded-full border border-gray-400 flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fab fa-tiktok text-sm"></i>
                    </button>
                </div>
                <div class="flex space-x-4 text-gray-600 text-sm">
                    <button aria-label="Share" class="hover:text-gray-900 transition">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <button aria-label="Open in new tab" class="hover:text-gray-900 transition">
                        <i class="fas fa-external-link-alt"></i>
                    </button>
                </div>
            </header>

            <div class="text-center">
                <h1 class="font-extrabold text-[96px] leading-[1] tracking-tight mb-2 select-none">
                    HATYPO<br />STUDIO
                </h1>
                <p class="text-[10px] text-gray-700 mb-10 select-none">Indonesia</p>

                <table class="mx-auto border border-gray-400 rounded-md text-[10px] text-center select-none">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 px-3 py-1 font-semibold">WORKS</th>
                            <th class="border border-gray-400 px-3 py-1 font-semibold">SOTM</th>
                            <th class="border border-gray-400 px-3 py-1 font-semibold">SOTD</th>
                            <th class="border border-gray-400 px-3 py-1 font-semibold">HM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 px-3 py-2 font-semibold">2</td>
                            <td class="border border-gray-400 px-3 py-2 font-semibold">0</td>
                            <td class="border border-gray-400 px-3 py-2 font-semibold">0</td>
                            <td class="border border-gray-400 px-3 py-2 font-semibold">1</td>
                        </tr>
                    </tbody>
                </table>
                </>
                <img
                    src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg"
                    alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence"
                    class="w-full rounded-md object-cover mt-28"
                    style="height: 900px;"
                    width="1300" />

                <div class="max-w-full overflow-x-auto mt-14">
                    <table class="w-full border border-gray-400 border-collapse rounded-md">
                        <thead>
                            <tr class="text-[10px] font-normal text-gray-700">
                                <th class="border border-gray-400 p-2 text-left">LANGUAGES</th>
                                <th class="border border-gray-400 p-2 text-left">STATUS</th>
                                <th class="border border-gray-400 p-2 text-left">BUDGET</th>
                                <th class="border border-gray-400 p-2 text-left">OPEN TO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-[14px] font-semibold text-gray-900">
                                <td class="border border-gray-400 p-2">English , Indonesian</td>
                                <td class="border border-gray-400 p-2">PROFESSIONAL</td>
                                <td class="border border-gray-400 p-2">$5,000 - $30,000</td>
                                <td class="border border-gray-400 p-2">In House</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-10 max-w-full text-gray-900 text-[20px] font-normal leading-tight">
                    Crafting Digital Product to Impact the Future, Today!<span aria-label="waving hand emoji" role="img">👋</span><br />
                    hello@hatypo.studio
                </div>
                <div class="mt-32 max-w-full text-gray-900 text-[14px] font-normal leading-tight">
                    <p class="text-center text-[14px] text-[#3a3a3a] mb-8 max-w-[400px] sm:max-w-none">
                        See a collection of our
                        <strong>
                            best work
                        </strong>
                        below
                    </p>
                </div>
                <section class="flex flex-col sm:flex-row justify-center gap-8 max-w-full mx-auto mb-10">
                    <div class="w-full sm:custom-width text-left">
                        <a aria-label="Visit Zecchinon website" class="image-wrapper" href="sitesnms">
                            <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                            <div class="hover-text">
                                <div class="website-label">
                                    WEBSITE
                                </div>
                                <div class="title">
                                    Zecchinon
                                </div>
                            </div>
                        </a>
                        <div class="mt-4 flex flex-wrap items-center gap-1 justify-center sm:justify-start">
                            <span class="flex items-center gap-1 font-normal text-[12px]">
                                <img alt="Atrio logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/ec646dd5-7055-4253-7506-ff6fd9b6150a.jpg" />
                                <a class="underline-slide" href="#">
                                    Apart
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full sm:custom-width text-left">
                        <a aria-label="Visit Human Voice Over website" class="image-wrapper" href="#">
                            <img alt="Screenshot of Human Voice Over website with text 'Your Voice Multiplied' on a light background" src="https://storage.googleapis.com/a1aa/image/86343319-9e54-4e4e-d1de-9a3c1f6aad81.jpg" />
                            <div class="hover-text">
                                <div class="website-label">
                                    WEBSITE
                                </div>
                                <div class="title">
                                    Human Voice Over
                                </div>
                            </div>
                        </a>
                        <div class="mt-4 flex flex-wrap items-center gap-1 justify-center sm:justify-start">
                            <span class="flex items-center gap-1 font-normal text-[12px]">
                                <img alt="Todordimov logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/9ae4d102-55af-4cb4-935a-8e67c5c6b03d.jpg" />
                                <a class="underline-slide" href="#">
                                    todordimov
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="w-full sm:custom-width text-left">
                        <a aria-label="Visit TAIKI SATO Portfolio website" class="image-wrapper" href="#">
                            <img alt="Screenshot of TAIKI SATO Portfolio website with a large moon circle and text on dark textured background" src="https://storage.googleapis.com/a1aa/image/0ae82335-6c5f-4ea1-012b-654eec08eaa7.jpg" />
                            <div class="hover-text">
                                <div class="website-label">
                                    WEBSITE
                                </div>
                                <div class="title">
                                    TAIKI SATO Portfolio
                                </div>
                            </div>
                        </a>
                        <div class="mt-4 flex flex-wrap items-center gap-1 justify-center sm:justify-start">
                            <span class="flex items-center gap-1 font-normal text-[12px]">
                                <img alt="Taikisato logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/ca3cad85-0ced-481a-93f6-c68ccc859496.jpg" />
                                <a class="underline-slide" href="#">
                                    taikisato
                                </a>
                            </span>
                        </div>
                    </div>
                </section>
                <div class="mb-8 mt-32 text-left">
                    <p class="text-[12px] text-[#1a1a1a] mb-3">
                        Academy
                    </p>
                    <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-tight mb-14 sm:max-w-md">
                        Learn from the
                        <br />
                        best instructors.
                    </h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 auto-grid">
                    <!-- Card 1 -->
                    <div class="space-y-2">
                        <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                            <div class="overflow-hidden h-[29rem] rounded-lg">
                                <img alt="Screenshot of Zecchinon website" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                            </div>
                            <div class="hover-text2">
                                <div class="website-label2">WEBSITE</div>
                                <div class="title2">Zecchinon</div>
                            </div>
                        </a>
                        <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                            Charles Leclerc
                            <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">by</span>
                            <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="#">
                                <img alt="Profile picture" class="w-5 h-5 rounded-full object-cover" src="https://storage.googleapis.com/a1aa/image/f09ce540-ac5a-4d5f-8c91-eaa4d009f531.jpg" />
                                <span class="underline-slide no-underline">Apart</span>
                            </a>
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="space-y-2">
                        <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                            <div class="overflow-hidden h-[29rem] rounded-lg">
                                <img alt="Screenshot of Zecchinon website" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                            </div>
                            <div class="hover-text2">
                                <div class="website-label2">WEBSITE</div>
                                <div class="title2">Zecchinon</div>
                            </div>
                        </a>
                        <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                            Charles Leclerc
                            <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">by</span>
                            <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="#">
                                <img alt="Profile picture" class="w-5 h-5 rounded-full object-cover" src="https://storage.googleapis.com/a1aa/image/f09ce540-ac5a-4d5f-8c91-eaa4d009f531.jpg" />
                                <span class="underline-slide no-underline">Apart</span>
                            </a>
                        </p>
                    </div>

                    <!-- Card 3 (akan melebar full) -->
                    <div class="space-y-2 md:col-span-2"> <!-- Perhatikan md:col-span-2 di sini -->
                        <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                            <div class="overflow-hidden h-[29rem] rounded-lg">
                                <img alt="Screenshot of Zecchinon website" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                            </div>
                            <div class="hover-text2">
                                <div class="website-label2">WEBSITE</div>
                                <div class="title2">Zecchinon</div>
                            </div>
                        </a>
                        <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                            Charles Leclerc
                            <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">by</span>
                            <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="#">
                                <img alt="Profile picture" class="w-5 h-5 rounded-full object-cover" src="https://storage.googleapis.com/a1aa/image/f09ce540-ac5a-4d5f-8c91-eaa4d009f531.jpg" />
                                <span class="underline-slide no-underline">Apart</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="mt-32 items-center justify-center">
                    <button
                        class="mb-24 px-6 py-2 border border-gray-400 rounded-md text-gray-700 text-sm font-normal hover:bg-gray-100 transition">
                        View all projects and awards
                    </button>

                    <div class="text-center">
                        <p class="mb-4 text-gray-700 text-xs font-normal">Specializing in</p>
                        <div class="flex justify-center space-x-4">
                            <a
                                class="px-6 py-2 border border-gray-400 rounded-full text-gray-700 text-sm font-semibold hover:border-black transition">
                                Web Design
                            </a>
                            <a
                                class="px-6 py-2 border border-gray-400 rounded-full text-gray-700 text-sm font-semibold hover:border-black transition">
                                Web Development
                            </a>
                            <a
                                class="px-6 py-2 border border-gray-400 rounded-full text-gray-700 text-sm font-semibold hover:border-black transition">
                                UX/UI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <x-footer></x-footer>
    <script src="js/profileuser.js"></script>
</x-layout>