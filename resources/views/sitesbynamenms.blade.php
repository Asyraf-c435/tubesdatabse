<x-runningtext></x-runningtext>
<x-layout class="badan">
    <link rel="stylesheet" href="{{ asset('css/sitesbynamenms.css') }}">
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

            <a href="#" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Info</a>
            <a href="#elements" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Elements</a>
            <a href="#vote" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Votes</a>
            <a href="www.agoda.com" class="active-own text-xs px-3 py-2 rounded-md border-2 border-[#fff083] bg-[#fff083] font-semibold duration-500 transition-all ease-in-out hover:!bg-[#e8da75]">
                Visit Sotd.
            </a>
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
            <div class="flex items-center space-x-6 text-black text-[14px] relative">
                <a><i class="far fa-bookmark text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Bookmark"></i></a>
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
        <div class="relative">
            <div class="flex space-x-8 absolute bottom-6 right-4 items-center">
                <!-- Tombol-tombol tetap -->
                <a><i class="far fa-bookmark text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Bookmark"></i></a>
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
    </div>
    <p class="text-[9px] font-normal text-[#1a1a1a] text-center mb-1.5">
        Latest
    </p>
    <h1 class="font-semibold text-[40px] leading-[40px] [text-align:center!important] sm:text-[72px] sm:leading-[72px] lg:text-[55px] lg:leading-[112px] tracking-[-0.02em] relative">
        CHARLES THE RACER
    </h1>

    <div class="flex justify-center items-center space-x-2 mt-[-10px] mb-14">
        <img alt="Yazo logo" class="w-5 h-5" src="https://storage.googleapis.com/a1aa/image/98cfe885-d60f-4100-8f2d-2652fc8c2530.jpg" />
        <a class="underline-slide" href="#">
            The First The Last
            <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
        </a>
    </div>

    <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <img alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence" class="w-full rounded-md" height="400" src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg" width="1300" />

        <div class="flex justify-center items-center mt-14">
            <p class="text-center text-[30px] sm:text-[30px] lg:text-[30px] font-normal text-[#1A1A1A] leading-[1.2]">
                Educraftor is a leading innovation and development group, weaving learning ecosystems globally.
            </p>
        </div>

        <section class=" mt-[9rem] lg:mt-[9rem] text-left " id="elements">
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
        <div class="flex justify-center items-center mt-24">
            <p class="text-center text-[13px] sm:text-[13px] lg:text-[13px] font-normal text-[#1A1A1A] leading-[1.2] opacity-70">
                This website was built with...
            </p>
        </div>
    </div>

    <div class="bg-red min-h-screen flex flex-col items-center justify-center p-6 ">
        <div class="flex flex-wrap justify-center gap-3 max-w-5xl">
            <a
                class="circle-button flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 bg-black"
                aria-label="Selected black circle">
                <div class="inner-circle"></div>
            </a>
            <a
                class="circle-button flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 bg-black"
                aria-label="Selected black circle">
                <div class="inner-circle"></div>
            </a>
            <a
                class="butto font-instrumentsans text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap tag-button">
                Instrumentsans Variablefont Wdth Wght
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap tag-button">
                scotch deck compressed
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Art &amp; Illustration
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap tag-button">
                Design Agencies
            </a>
            <a
                class="butto  butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Startups
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Parallax
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Responsive Design
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Scrolling
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Transitions
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Interaction Design
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Microinteractions
            </a>
            <a
                class="butto text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap font-semibold tag-button">
                Transitions
            </a>

        </div>

        <div class="mt-28 text-center text-[15px] text-gray-700 max-w-lg">
            Have your say, if you liked <strong>Allies Studio</strong> make your vote here!
        </div>

        <a
            class="vote-button mt-8 bg-black text-white text-[18px] font-semibold rounded px-8 py-5 flex items-center gap-3"
            aria-label="Vote button with arrow">
            <i class="fas fa-arrow-right"></i>
            Vote: <span class="font-bold">4 Days 16 Hours 2 Min</span>
        </a>
    </div>

    <div class="bg-gray-50 font-sans text-[13px] text-[#222222]" id="vote">
        <div class="max-w-6xl mx-auto p-8">
            <table class="w-full border-collapse bg-gray-50 text-[#222222] text-[13px] font-normal">
                <thead>
                    <tr class="text-[11px] font-normal select-none border-b  border-black/20">
                        <th class="text-left pl-4 pr-16 py-2">Votes</th>
                        <th class="text-left py-2">Community Members</th>
                        <th class="text-center py-4">Design</th>
                        <th class="text-center py-4">Usability</th>
                        <th class="text-center py-4">Creativity</th>
                        <th class="text-center py-4">Content</th>
                        <th class="text-center pr-4 py-4">Overall</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr class="border-b border-black/20">
                        <td class="pl-4 pr-10 py-4 align-middle w-14">
                            <img
                                src="https://storage.googleapis.com/a1aa/image/11c2bf76-10cb-4ab9-0e4f-68d77f810480.jpg"
                                alt="Profile photo of Reksa Andhika, a man with short black hair, black and white photo"
                                class="w-10 h-10 rounded-full object-cover inline-block"
                                width="40"
                                height="40" />
                        </td>
                        <td class="py-4 align-middle w-[40%]">
                            <div class="leading-tight">
                                <span class="font-semibold text-[13px]">Reksa Andhika</span>
                                <span class="italic font-normal text-[13px] ml-1">from</span>
                                <span class="font-semibold text-[13px] ml-1">Indonesia</span>
                                <span class="font-normal italic text-[13px] ml-1">*</span>
                            </div>
                            <div class="text-[11px] text-[#666666] select-text mt-1">reksaandhika.com</div>
                        </td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">7</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">

                            7.70

                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="border-b border-black/20">
                        <td class="pl-4 pr-8 py-4 align-middle w-14">
                            <img
                                src="https://storage.googleapis.com/a1aa/image/9451aa13-3905-47b8-9e3f-219fd04e6499.jpg"
                                alt="Logo of PopArt Studio, black abstract line art on white background"
                                class="w-10 h-10 object-contain inline-block rounded-full bg-white"
                                width="40"
                                height="40" />
                        </td>
                        <td class="py-4 align-middle w-[40%]">
                            <div class="leading-tight">
                                <span class="font-semibold text-[13px]">PopArt Studio</span>
                                <span class="italic font-normal text-[13px] ml-1">from</span>
                                <span class="font-semibold text-[13px] ml-1">United States</span>
                            </div>
                            <div class="text-[11px] text-[#666666] select-text mt-1">popwebdesign.net</div>
                        </td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="relative absolute w-full m-auto bg-gray-50 font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                            8.00

                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="border-b border-black/20">
                        <td class="pl-4 pr-8 py-4 align-middle w-14">
                            <img
                                src="https://storage.googleapis.com/a1aa/image/0b880b9b-f0d3-4537-73b8-6c7dce1d22fa.jpg"
                                alt="Logo of AthenaStudio, white stylized Y shape on red circular background"
                                class="w-10 h-10 object-contain inline-block rounded-full"
                                width="40"
                                height="40" />
                        </td>
                        <td class="py-4 align-middle w-[40%]">
                            <div class="leading-tight">
                                <span class="font-semibold text-[13px]">AthenaStudio</span>
                                <span class="italic font-normal text-[13px] ml-1">from</span>
                                <span class="font-semibold text-[13px] ml-1">Turkey</span>
                            </div>
                            <div class="text-[11px] text-[#666666] select-text mt-1">1.envato.market</div>
                        </td>
                        <td class="text-center py-4 align-middle">9</td>
                        <td class="text-center py-4 align-middle">9</td>
                        <td class="text-center py-4 align-middle">9</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                            8.90

                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="border-b border-black/20">
                        <td class="pl-4 pr-8 py-4 align-middle w-14">
                            <img
                                src="https://storage.googleapis.com/a1aa/image/3124f85c-54a7-4740-663f-afb777274c22.jpg"
                                alt="Profile photo of Sukumar Swain, man with short hair and beard wearing orange shirt"
                                class="w-10 h-10 rounded-full object-cover inline-block"
                                width="40"
                                height="40" />
                        </td>
                        <td class="py-4 align-middle w-[40%]">
                            <div class="leading-tight">
                                <span class="font-semibold text-[13px]">Sukumar Swain</span>
                                <span class="font-normal italic text-[13px] ml-1">*</span>
                                <span class="italic font-normal text-[13px] ml-1">from</span>
                                <span class="font-semibold text-[13px] ml-1">India</span>
                            </div>
                            <div class="text-[11px] text-[#666666] select-text mt-1">sukumarswa.in</div>
                        </td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">8</td>
                        <td class="text-center py-4 align-middle">7</td>
                        <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                            7.90

                        </td>
                    </tr>


                    <!-- Overlay gradasi -->
                    <section> <!-- Overlay gradasi -->
                        <div class="relative w-[1100px] max-w-[1100px] sm:top-[16rem] top-[22rem] h-auto">
                            <div id="gradient-bg" class="absolute inset-0 z-20"></div>

                            <!-- Gradient Overlay -->
                            <div id="gradient-overlay"
                                class="absolute inset-0 z-30 bg-gradient-to-t from-gray-50 to-transparent h-[6rem] sm:h-[8rem]">
                            </div>
                        </div>
                        <div class="relative">
                            <!-- More Options Button -->
                            <div id="more-options-container"
                                class="absolute bottom-[-33rem] sm:bottom-[-30rem] lg:bottom-[-28rem] left-1/2 transform -translate-x-1/2 z-40">
                                <a id="more-options-btn"
                                    class="flex items-center justify-center w-20 h-10 rounded-full border border-gray-400 bg-gray-50 shadow-sm 
                                    hover:shadow-lg hover:bg-gray-100 hover:scale-105
                                    transition-all duration-300 ease-in-out"
                                    aria-label="More options">
                                    <i class="fas fa-ellipsis-h text-gray-600 text-lg"></i>
                                </a>
                            </div>
                        </div>




                        <!-- Row 5 (awalnya disembunyikan) -->

                        <tr id="row-5" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/0de55825-f3ba-4c5d-b9fe-68ec8a2cc7bd.jpg"
                                    alt="Logo of Grondin Bergerat Thibault, circular black and white emblem"
                                    class="w-10 h-10 object-contain inline-block rounded-full"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">Grondin Bergerat Thibault</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">France</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">behance.net</div>
                            </td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                8.40
                            </td>
                        </tr>
                        <!-- Tombol More Options (tambahkan ID dan event handler) -->

                        <!-- Row 6 -->
                        <tr id="row-6" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/bf2c9502-a906-4dd0-0755-43c4a1ca729f.jpg"
                                    alt="Logo of Aterlab, black asterisk shape on white background"
                                    class="w-10 h-10 object-contain inline-block rounded-full"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">Aterlab</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">Poland</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">aterlab.netlify.app</div>
                            </td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                7.70

                            </td>
                        </tr>
                        <!-- Row 7 -->
                        <tr id="row-7" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/59eeb221-6dfa-4f0b-1a1a-5051f0bb90e2.jpg"
                                    alt="Logo of Jordan Delcros, black and white abstract text logo"
                                    class="w-10 h-10 object-contain inline-block rounded-full"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">Jordan Delcros</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">France</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">jordan-delcros.com</div>
                            </td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                7.70

                            </td>
                        </tr>
                        <!-- Row 8 -->
                        <tr id="row-8" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/48b4fb24-40b5-4833-c1ac-955e4209ffc3.jpg"
                                    alt="Profile photo of adj2424, person with short hair and glasses"
                                    class="w-10 h-10 rounded-full object-cover inline-block"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">adj2424</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">United States</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">alanjiang.xyz</div>
                            </td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="text-center py-4 align-middle">9</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                9.00

                            </td>
                        </tr>
                        <!-- Row 9 -->
                        <tr id="row-9" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/f6f075b0-565f-4e7d-22dd-d38ecf8056c3.jpg"
                                    alt="Profile photo of mrfox, stylized fox face icon in brown and beige"
                                    class="w-10 h-10 rounded-full object-cover inline-block"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">mrfox</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">Russia</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">daccel.tech</div>
                            </td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                7.40

                            </td>
                        </tr>
                        <!-- BUAT AJA MENAPILKAN 10 DATA ORANG, KALO DI DATABASE MUNGKIN ADA 100 LEBIH TAPI DI TABEL DISINI SAMPE 10 AJA JADI FOREACH < 11 -->
                        <tr id="row-10" class="border-b border-black/20" style="display: none;">
                            <td class="pl-4 pr-8 py-4 align-middle w-14">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/f6f075b0-565f-4e7d-22dd-d38ecf8056c3.jpg"
                                    alt="Profile photo of mrfox, stylized fox face icon in brown and beige"
                                    class="w-10 h-10 rounded-full object-cover inline-block"
                                    width="40"
                                    height="40" />
                            </td>
                            <td class="py-4 align-middle w-[40%]">
                                <div class="leading-tight">
                                    <span class="font-semibold text-[13px]">mrfox</span>
                                    <span class="italic font-normal text-[13px] ml-1">from</span>
                                    <span class="font-semibold text-[13px] ml-1">Russia</span>
                                </div>
                                <div class="text-[11px] text-[#666666] select-text mt-1">daccel.tech</div>
                            </td>
                            <td class="text-center py-4 align-middle">8</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="text-center py-4 align-middle">7</td>
                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                7.40

                            </td>
                        </tr>

        </div>
        </tbody>
        </table>
    </div>
    </div>

    <x-footer class="text-start">
    </x-footer>
</x-layout>