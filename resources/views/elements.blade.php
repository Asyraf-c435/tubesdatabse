<x-runningtext></x-runningtext>
<x-layout class="badan">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sitesbynamenms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sites.css') }}">
    <div>
        <div id="cardOverlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-center items-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
            <!-- Card wrapper -->
            <div id="cardWrapper" class="relative bg-white p-6 rounded-xl shadow-xl w-full max-w-4xl transform scale-95 opacity-0 transition-all duration-300 flex gap-6">

                <!-- LEFT -->
                <section class="bg-[#0a2f1a]/30 rounded-lg flex flex-col justify-center items-start p-6 flex-1">
                    <p class="text-base text-black/90 mb-6">
                        Collect <strong>Turn.io</strong>
                    </p>
                    <div class="bg-[#0a2f1a] rounded-md p-4 max-w-[360px] w-full flex justify-center">
                        <img class="rounded-md object-cover w-full h-[180px]" src="https://storage.googleapis.com/a1aa/image/dad4a7a1-622b-4bb0-5128-8b01903d6465.jpg" alt="Screenshot" />
                    </div>
                </section>

                <!-- RIGHT -->
                <section class="flex-1 flex flex-col">
                    <form class="mb-6 flex items-center gap-3">
                        <input class="flex-1 rounded-md border px-3 py-2 text-sm placeholder-gray-400 border-gray-400 focus:border-gray-600 focus:outline-none focus:ring-1 focus:ring-gray-600 transition-all duration-300" placeholder="Search collections" type="search" />
                        <button class="text-gray-400 hover:text-gray-600" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <form class="flex flex-col gap-6">
                        <!-- Item 1 -->
                        <div class="flex items-center justify-between border-b border-dotted border-black/30 pb-4">
                            <div class="flex items-center gap-4">
                                <button class="bg-gray-300 text-gray-700 rounded-md w-8 h-8 font-semibold" disabled>0</button>
                                <span class="font-semibold text-black/90">Hello World</span>
                            </div>
                            <button class="border border-black rounded-md px-4 py-1 hover:bg-black hover:text-white">Save</button>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-center justify-between border-b border-dotted border-black/30 pb-4">
                            <div class="flex items-center gap-4">
                                <button class="bg-gray-300 text-gray-700 rounded-md w-8 h-8 font-semibold" disabled>0</button>
                                <span class="font-semibold text-black/90">Test</span>
                            </div>
                            <button class="border border-black rounded-md px-4 py-1 hover:bg-black hover:text-white">Save</button>
                        </div>

                        <button class="mt-6 bg-black text-white rounded-md py-3 flex justify-center gap-2 hover:bg-gray-900">
                            <span class="text-lg">→</span> Create a new collection
                        </button>
                    </form>
                </section>
            </div>
        </div>

        <div class="relative">
            <div
                id="stickyBar"
                class="fixed bottom-4 left-1/2 transform -translate-x-1/2 translate-y-4 opacity-0
                z-50 pointer-events-none transition-all duration-500 ease-in-out
                flex items-center text-center space-x-2 rounded-lg border-2 border-gray-600 bg-[#3e3e3e] p-1"
                style="font-family: 'Inter', sans-serif;">

                <div class="flex items-center justify-center w-15 h-10 rounded-md px-4 py-2 bg-[#222222] text-white font-semibold text-lg sm:text-base lg:text-lg select-none m-1">
                    Tubes .
                </div>
            </div>
        </div>
        <div class="fixed top-0 left-0 right-0 transform -translate-y-full transition-transform duration-500 ease-out bg-white shadow-sm z-50 w-full mx-auto px-16 py-4" id="main-header">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <span class="text-[10px] font-extrabold uppercase leading-none select-none">
                        OXI ONE MKII
                    </span>
                    <span class="text-[10px] font-normal leading-none select-none">
                        by
                    </span>
                    <img alt="Profile photo of Artemii Lebedev" class="w-6 h-6 rounded-full object-cover" height="24" loading="lazy" src="https://storage.googleapis.com/a1aa/image/5085adb5-5851-441c-c297-fb846b861a0a.jpg" width="24" />
                    <a class="text-[10px] font-normal no-underline leading-none text-black hover:text-gray-500 duration-500 transition-all ease-in-out flex items-center space-x-1" href="#">
                        <span>Artemii Lebedev</span>
                        <span class="text-[6px] font-extrabold no-underline leading-none select-none">
                            PRO
                        </span>
                    </a>
                </div>
                <!--                 
                YANG GESER DARI ATAS -->
                <div class="flex items-center space-x-6 text-black text-[14px] relative">
                    <button><i class="show-card-btn far fa-bookmark text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Bookmark"></i></button>
                    <a id="header-share-btn"><i class="fas fa-share-alt text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Share"></i></a>
                    <a><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a>


                    <div id="header-social-box" class="opacity-0 scale-95 pointer-events-none transition-all duration-300 ease-in-out absolute right-[-40px] -translate-x-1/2 top-[-7px] flex items-center bg-gray-900 rounded-full px-4 py-2 z-20 space-x-6">
                        <button aria-label="Twitter" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button aria-label="LinkedIn" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                        <button aria-label="Facebook" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button id="social-close-btn" aria-label="Close" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[1450px] mx-auto px-4 py-12 text-left" id="nominees">
            <div class="relative ">
                <div class="flex space-x-8 absolute bottom-6 right-4 items-center ">
                    <!-- Tombol-tombol tetap -->
                    <a><i class="show-card-btn far fa-bookmark text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Bookmark"></i></a>
                    <a id="shareButton"><i class="fas fa-share-alt text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Share"></i></a>
                    <a><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a>

                    <!-- Kotak share (absolute position) -->
                    <div id="socialBox"
                        class="opacity-0 scale-95 pointer-events-none transition-all duration-300 ease-in-out absolute right-[-35px] -translate-x-1/2 top-[-6px] flex items-center bg-gray-900 rounded-full px-4 py-2 z-20 space-x-6">

                        <button aria-label="Twitter" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button aria-label="LinkedIn" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                        <button aria-label="Facebook" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button id="closeButton" aria-label="Close" class="text-gray-400 hover:text-gray-200 text-[13px]">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- SECTION NILAI -->

            <div class="mt-[8rem]">
                <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                    <p class="text-[19px] font-semibold text-[#111111] flex items-center justify-center mb-10">
                        Charles Leclerc
                        <span class="text-[11px] font-light text-[#6B6B6B] ml-2 mr-2">
                            from
                        </span>
                        <a class="inline-flex items-center space-x-2 text-[19px] font-semibold text-[#111111] no-underline ml-1" href="#">
                            <span class="underline-slide no-underline">
                                Apart
                            </span>
                        </a>
                    </p>

                    <div class=" flex justify-center items-center">
                        <div class="bg-[#1a1a1a] rounded-lg p-8 max-w-[720px] w-full" style="box-shadow: inset 0 0 0 1px #2a2a2a">
                            <img alt="Wide rectangular black frame with subtle grid and border, containing a circular gradient loading animation with purple and peach colors in the center" class="w-full rounded-md object-cover aspect-[16/9]" src="https://storage.googleapis.com/a1aa/image/d8b77ba7-bdee-4986-b20d-31365547f1b4.jpg" />
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto px-4 py-16 flex flex-col items-center">
                        <p class="text-center text-gray-600 text-sm mb-8">
                            This element was built with...
                        </p>
                        <div class="flex flex-wrap gap-2 justify-center mt-2 mb-20">
                            <a
                                class="butto text-[9px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-5 py-2 whitespace-nowrap font-semibold tag-button">
                                Art &amp; Illustration
                            </a>
                            <a
                                class="butto text-[9px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-5 py-2  whitespace-nowrap font-semibold tag-button">
                                Design Agencies
                            </a>
                            <a
                                class="butto  butto text-[9px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-5 py-2 whitespace-nowrap font-semibold tag-button">
                                Startups
                            </a>

                        </div>
                        <p class="text-center text-gray-600 text-sm mb-12">
                            Also, you can view more Elements below ...
                        </p>
                        <div class=" flex justify-center text-left bg-gray-50">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-4 gap-y-4 w-full">
                                <div class="group relative rounded-md overflow-hidden max-w-[300px] max-h-[210px] cursor-pointer">
                                    <img alt="Two smartphones on a dark textured surface displaying the ALLIES app with text and images on their screens" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/66ff1935-f460-4570-1c1d-7c290e50dcab.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Allies
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Two smartphones
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  cursor-pointer">
                                    <img alt="A light beige background with large black text ALLIES and a small image in the top right corner" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/76e0f0cf-ea32-40d8-2ed8-04c9c35774ed.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Allies
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Beige background
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  cursor-pointer">
                                    <img alt="Person relaxing in window light with a red border around the image and text 'Fearlessly creative' on a beige background" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/a1f336d0-3b72-4649-8d9c-05eddd2ea9c9.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Allies
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Fearlessly creative
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden max-w-[300px] max-h-[210px]  bg-black cursor-pointer">
                                    <div class="absolute top-3 left-3 border border-gray-400 text-white text-[9px] px-2 rounded z-10">
                                        video
                                    </div>
                                    <img alt="Bright red rectangle on black background with a small black 'Video' label in top left corner" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/0f6d37ed-fc6a-4dde-a8da-56a678f507d6.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white z-10 text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Video
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Red rectangle
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  bg-black cursor-pointer">
                                    <div class="absolute top-3 left-3 border border-gray-400 text-white text-[9px] px-2 rounded z-10">
                                        video
                                    </div>
                                    <img alt="Light beige background with large black text ALLIES and a small green image in the top right corner, black background border with Video label" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/06d07638-fe2e-4b91-d469-e51c51b9349c.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white z-10 text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Allies
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Beige & green
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px] cursor-pointer">
                                    <div class="absolute top-3 left-3 border border-gray-400 text-white text-[9px] px-2 rounded z-10">
                                        2D
                                    </div>
                                    <img alt="Laptop screen in dark setting showing ALLIES text with a red label on the screen" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/d027a22a-f396-43c6-ad70-f7dfd3702ff0.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Allies
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Laptop screen
                                        </div>
                                    </div>
                                </div>
                                <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  bg-black cursor-pointer">
                                    <div class="absolute top-3 left-3 border border-gray-400 text-white text-[9px] px-2 rounded z-10">
                                        video
                                    </div>
                                    <img alt="Abstract star shape on a dark screen with a black background and a small black 'Video' label in top left corner" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/df7f52ce-a66a-48ca-66ed-33a12b661d36.jpg" width="250" />
                                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                    <div class="absolute bottom-4 left-4 text-white z-10 text-container pointer-events-none">
                                        <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                            Video
                                        </div>
                                        <div class="text-sm font-bold select-none">
                                            Abstract star
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class=" mt-[9rem] lg:mt-[9rem] text-left" id="elements">
                        <p class="text-[12px] font-normal text-[#1A1A1A] mb-3">
                            Elements
                        </p>
                        <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-[1.1] mb-14 max-w-xs sm:max-w-none">
                            See the highlights
                            <br />
                            of this website.
                        </h1>
                    </section>
                    <div class=" flex justify-center text-left bg-gray-50">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-4 gap-y-4 w-full">
                            <div class="group relative rounded-md overflow-hidden max-w-[300px] max-h-[210px] cursor-pointer">
                                <img alt="Two smartphones on a dark textured surface displaying the ALLIES app with text and images on their screens" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/66ff1935-f460-4570-1c1d-7c290e50dcab.jpg" width="250" />
                                <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                    <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                        Allies
                                    </div>
                                    <div class="text-sm font-bold select-none">
                                        Two smartphones
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  cursor-pointer">
                                <img alt="A light beige background with large black text ALLIES and a small image in the top right corner" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/76e0f0cf-ea32-40d8-2ed8-04c9c35774ed.jpg" width="250" />
                                <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                    <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                        Allies
                                    </div>
                                    <div class="text-sm font-bold select-none">
                                        Beige background
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  cursor-pointer">
                                <img alt="Person relaxing in window light with a red border around the image and text 'Fearlessly creative' on a beige background" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/a1f336d0-3b72-4649-8d9c-05eddd2ea9c9.jpg" width="250" />
                                <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                    <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                        Allies
                                    </div>
                                    <div class="text-sm font-bold select-none">
                                        Fearlessly creative
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-md overflow-hidden max-w-[300px] max-h-[210px]  bg-black cursor-pointer">
                                <div class="absolute top-3 left-3 border border-gray-400 text-white text-[9px] px-2 rounded z-10">
                                    video
                                </div>
                                <img alt="Bright red rectangle on black background with a small black 'Video' label in top left corner" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" height="160" src="https://storage.googleapis.com/a1aa/image/0f6d37ed-fc6a-4dde-a8da-56a678f507d6.jpg" width="250" />
                                <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                                <div class="absolute bottom-4 left-4 text-white z-10 text-container pointer-events-none">
                                    <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                        Video
                                    </div>
                                    <div class="text-sm font-bold select-none">
                                        Red rectangle
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<x-footer></x-footer>
    <script src="js/sites.js"></script>
</x-layout>