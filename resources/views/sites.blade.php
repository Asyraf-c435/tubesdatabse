<x-runningtext></x-runningtext>
<x-layout class="badan">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sitesbynamenms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sites.css') }}">
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
        <div class="relative ">
            <div class="flex space-x-8 absolute bottom-6 right-4 items-center ">
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
        <!-- SECTION NILAI -->
        <div class="w-20 rounded-tl-md rounded-tr-md rounded-br-md rounded-bl-md border border-gray-400 bg-gray-50 ml-5 absolute top-[10rem] left-[2.5rem]">
            <div class="text-center text-xs text-gray-700 py-1 font-sans border-b border-gray-400">
                SOTD
            </div>
            <div class="text-center font-bold text-3xl leading-[1.1] text-gray-900 font-sans py-4">
                7.62
                <span class="text-base font-normal text-gray-700">/10</span>
            </div>
        </div>

        <div class="mt-[8rem]">
            <p class="text-[9px] font-normal text-[#1a1a1a] text-center mb-1.5 ">
                Latest
            </p>
            <h1 class="font-semibold text-[40px] leading-[40px] [text-align:center!important] sm:text-[72px] sm:leading-[72px] lg:text-[55px] lg:leading-[112px] tracking-[-0.02em] relative">
                CHARLES THE RACER
            </h1>
        </div>

        <div class="flex justify-center items-center space-x-2 mt-[-10px] mb-14">
            <img alt="Yazo logo" class="w-5 h-5" src="https://storage.googleapis.com/a1aa/image/98cfe885-d60f-4100-8f2d-2652fc8c2530.jpg" />
            <a class="underline-slide" href="profile-user">
                The First The Last
                <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
            </a>
        </div>

        <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <img
                src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg"
                alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence"
                class="w-full rounded-md object-cover"
                style="height: 900px;"
                width="1300" />



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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 auto-grid">
                <div class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                        <div class=" overflow-hidden h-[29rem] rounded-lg">
                            <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                        </div>
                        <div class="hover-text2">
                            <div class="website-label2">
                                WEBSITE
                            </div>
                            <div class="title2">
                                Zecchinon
                            </div>
                        </div>
                    </a>
                    <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                        Charles Leclerc
                        <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                            by
                        </span>
                        <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="#">
                            <img alt="Profile picture of Apart" class="w-5 h-5 rounded-full object-cover" height="20" src="https://storage.googleapis.com/a1aa/image/f09ce540-ac5a-4d5f-8c91-eaa4d009f531.jpg" width="20" />
                            <span class="underline-slide no-underline">
                                Apart
                            </span>
                        </a>
                    </p>
                </div>
                <div class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                        <div class=" overflow-hidden h-[29rem] rounded-lg">
                            <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                        </div>
                        <div class="hover-text2">
                            <div class="website-label2">
                                WEBSITE
                            </div>
                            <div class="title2">
                                Zecchinon
                            </div>
                        </div>
                    </a>
                    <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                        Nite Riot
                        <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                            by
                        </span>
                        <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline  ml-1" href="#">
                            <img alt="Profile picture of BL/S®" class="w-5 h-5 rounded-full object-cover" height="20" src="https://storage.googleapis.com/a1aa/image/611e395c-f3a9-4003-ffb8-228ef18808f1.jpg" width="20" />
                            <span class="underline-slide no-underline">
                                BL/S®
                            </span>
                        </a>
                    </p>
                </div>
                <div class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="#">
                        <div class=" overflow-hidden h-[29rem] rounded-lg">
                            <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                        </div>
                        <div class="hover-text2">
                            <div class="website-label2">
                                WEBSITE
                            </div>
                            <div class="title2">
                                Zecchinon
                            </div>
                        </div>
                    </a>
                    <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                        Charles Leclerc
                        <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                            by
                        </span>
                        <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="#">
                            <img alt="Profile picture of Apart" class="w-5 h-5 rounded-full object-cover" height="20" src="https://storage.googleapis.com/a1aa/image/f09ce540-ac5a-4d5f-8c91-eaa4d009f531.jpg" width="20" />
                            <span class="underline-slide no-underline">
                                Apart
                            </span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="bg-[#F9F9F9] text-[#1A1A1A] min-h-screen flex flex-col justify-between">
                <div class="max-w-xl mx-0 pt-16 mt-[50px]">
                    <h1 class="text-sm font-semibold mb-2 text-left">
                        Color Palette
                    </h1>
                    <p class="text-xs leading-5 text-[#4B4B4B] max-w-[180px] text-left">
                        This website uses a color
                        <br />
                        palette of
                        <span class="font-semibold">
                            2
                        </span>
                        colors
                    </p>
                </div>
                <div class="cards-container">
                    <div class="card-white group" tabindex="0">
                        <div class="flex justify-between items-center hex-text">
                            <span class="hex-label">
                                HEX <span class="font-normal ml-1">#FFFFFF</span>
                            </span>
                            <i class="fas fa-search search-icon"></i>
                        </div>
                        <div class="aa-text">
                            Aa
                        </div>
                    </div>
                    <div class="card-black" tabindex="0">
                        <div class="flex justify-between items-center text-xs font-semibold">
                            <span>
                                HEX <span class="font-normal">#0A0A0A</span>
                            </span>
                            <i class="fas fa-search text-xs"></i>
                        </div>
                        <div class="aa-text text-white">
                            Aa
                        </div>
                    </div>
                </div>
                <div class="max-w-[1300px] mx-0 px-6 pb-10 mt-32">
                    <p class="text-[12px] font-semibold text-[#4B4B4B] mb-3 text-left">
                        Technologies &amp; Tools
                    </p>
                    <div class="flex flex-wrap gap-2 justify-start mt-10">
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
                    <div>
                        <p class="text-[12px] font-semibold text-[#4B4B4B] mb-3 text-left mt-20">
                            Technologies &amp; Tools
                        </p>
                        <p class="text-[20px] text-[#222222] font-normal leading-[28px]">
                            A tribute to Gucci’s heritage: 9 visionary artists reinterpret iconic silk scarves across five themes. A real-time 3D gallery and creative wizard let users explore and design their own.
                        </p>
                    </div>
                    <div class=" mt-[9rem] lg:mt-[9rem] text-left" id="elements">
                        <p class="text-[12px] font-normal text-[#1A1A1A] mb-3">
                            Inside look
                        </p>
                        <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-[1.1] mb-14">
                            Discover more
                            <br />
                            details of this SOTD.
                        </h1>
                        <!-- Pastikan kamu sudah memuat font Inter dari Google Fonts -->

                        <div class="relative w-full rounded-md overflow-hidden group" style="width: 1300px; height: 900px;">
                            <img
                                src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg"
                                alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence"
                                class="w-full h-full object-cover transition duration-300 ease-in-out group-hover:brightness-75" />

                            <!-- Overlay gradient on hover -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-300 bg-gradient-to-t from-black/30 to-transparent"></div>

                            <!-- Teks muncul saat hover -->
                            <div class="absolute bottom-6 left-6 text-white z-10 opacity-0 group-hover:opacity-100 transition duration-300 font-inter">
                                <p class="text-lg leading-tight">WEBSTE</p>
                                <p class="text-sm font-bold mt-1">Zenchinon</p>
                            </div>
                        </div>
                        <p class="text-[14px] font-semibold text-[#111111] flex items-center mt-2">
                            Great Element
                            <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                                from
                            </span>
                            <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline" href="#">
                                <span class="underline-slide no-underline">
                                    Mobile Thumbnail
                                </span>
                            </a>
                        </p>
                    </div>

                    <div class="bg-gray-50 text-[#1a1a1a]">
                        <div class="max-w-[1300px] mx-auto py-12 mt-20">
                            <h1 class="text-[48px] font-extrabold leading-none tracking-tight">
                                SOTD / SCORE
                            </h1>
                            <div class="text-[48px] font-extrabold leading-none tracking-tight mt-1">
                                → 7.59 <span class="text-[12px] font-normal align-top">/10</span>
                            </div>

                            <div class="w-full text-right mb-20">
                                <p class="underline-slide no-underline block">Evaluation System</p>
                            </div>


                            <div class="mt-8 flex text-[10px] font-normal text-[#1a1a1a] relative select-none">
                                <div class="flex flex-col items-start relative" style="width: 40%;">
                                    <div class="mb-1">Design <span class="font-bold">40%</span></div>
                                    <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                        <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                        <div class="bar-divider"></div>
                                    </div>
                                    <div class="mt-1">7.7 / 10</div>
                                </div>
                                <div class="flex flex-col items-start relative" style="width: 30%;">
                                    <div class="mb-1">Usability <span class="font-bold">30%</span></div>
                                    <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                        <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                        <div class="bar-divider"></div>
                                    </div>
                                    <div class="mt-1">7.26 / 10</div>
                                </div>
                                <div class="flex flex-col items-start relative" style="width: 20%;">
                                    <div class="mb-1">Creativity <span class="font-bold">20%</span></div>
                                    <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                        <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                        <div class="bar-divider"></div>
                                    </div>
                                    <div class="mt-1">7.66 / 10</div>
                                </div>
                                <div class="flex flex-col items-start relative" style="width: 10%;">
                                    <div class="mb-1">Content <span class="font-bold">10%</span></div>
                                    <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                        <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                        <!-- No divider on last bar -->
                                    </div>
                                    <div class="mt-1">7.95 / 10</div>
                                </div>
                            </div>
                            <!-- ARCH -->
                            <div class="bg-gray-50 font-sans text-[13px] text-[#222222]">
                                <div class="max-w-6xl mx-auto p-8">

                                    <div class="flex mb-4">
                                        <button id="communityTab" class="text-[13px] font-semibold pb-2 px-4 mr-6 ">
                                            Community Members
                                        </button>
                                        <button id="juryTab" class="text-[13px] font-normal text-[#666666] pb-2 px-4 ">
                                            Jury
                                        </button>
                                    </div>

                                    <!-- Community Members Table (Initially Visible) -->
                                    <div id="communityTable">
                                        <table class="w-full border-collapse bg-gray-50 text-[#222222] text-[13px] font-normal">
                                            <thead>
                                                <tr class="text-[11px] font-normal select-none border-b border-black/20">
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
                                                <!-- JURY ROW 3 -->
                                                <tr class="border-b border-black/20">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                                <!-- Overlay gradasi -->
                                                <section> <!-- Overlay gradasi -->
                                                    <div class="relative w-[1100px] max-w-[1100px] sm:top-[11rem] top-[16rem] h-auto">
                                                        <div id="gradient-bg" class="absolute inset-0 z-20"></div>

                                                        <!-- Gradient Overlay -->
                                                        <div id="gradient-overlay"
                                                            class="absolute inset-0 z-30 bg-gradient-to-t from-gray-50 to-transparent h-[6rem] sm:h-[8rem]">
                                                        </div>
                                                    </div>
                                                    <div class="relative">
                                                        <!-- More Options Button -->
                                                        <div id="more-options-container"
                                                            class="absolute bottom-[-33rem] sm:bottom-[-30rem] lg:bottom-[-25rem] left-1/2 transform -translate-x-1/2 z-40">
                                                            <a id="more-options-btn"
                                                                class="flex items-center justify-center w-20 h-10 rounded-full border border-gray-400 bg-gray-50 shadow-sm hover:shadow-lg hover:bg-gray-100 hover:scale-105 transition-all duration-300 ease-in-out"
                                                                aria-label="More options">
                                                                <i class="fas fa-ellipsis-h text-gray-600 text-lg"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- JURY ROW 4 -->
                                                <tr id="row-4" class="border-b border-black/20" style="display: none;">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                                <!-- JURY ROW 5 -->
                                                <tr id="row-5" class="border-b border-black/20" style="display: none;">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                                <!-- JURY ROW 6 -->
                                                <tr id="row-6" class="border-b border-black/20" style="display: none;">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Jury Table (Initially Hidden) -->
                                    <div id="juryTable" class="hidden">
                                        <table class="w-full border-collapse bg-gray-50 text-[#222222] text-[13px] font-normal">
                                            <thead>
                                                <tr class="text-[11px] font-normal select-none border-b border-black/20">
                                                    <th class="text-left pl-4 pr-16 py-2">Votes</th>
                                                    <th class="text-left py-2">Jury</th>
                                                    <th class="text-center py-4">Design</th>
                                                    <th class="text-center py-4">Usability</th>
                                                    <th class="text-center py-4">Creativity</th>
                                                    <th class="text-center py-4">Content</th>
                                                    <th class="text-center pr-4 py-4">Overall</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Jury Row 1 -->
                                                <tr class="border-b border-black/20">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                                <!-- Jury Row 2 -->
                                                <tr class="border-b border-black/20">
                                                    <td class="pl-4 pr-8 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/men/32.jpg"
                                                            alt="Profile photo of Jury Member 2"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Michael Chen</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">Canada</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">michaelchen.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="relative absolute w-full m-auto bg-gray-50 font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                                <!-- JURY ROW 3 -->
                                                <tr class="border-b border-black/20">
                                                    <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                        <img
                                                            src="https://randomuser.me/api/portraits/women/65.jpg"
                                                            alt="Profile photo of Jury Member 1"
                                                            class="w-10 h-10 rounded-full object-cover inline-block"
                                                            width="40"
                                                            height="40" />
                                                    </td>
                                                    <td class="py-4 align-middle w-[40%]">
                                                        <div class="leading-tight">
                                                            <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                            <span class="italic font-normal text-[13px] ml-1">from</span>
                                                            <span class="font-semibold text-[13px] ml-1">USA</span>
                                                        </div>
                                                        <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                    </td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="text-center py-4 align-middle">9</td>
                                                    <td class="text-center py-4 align-middle">8</td>
                                                    <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                        8.50
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 text-[#1a1a1a] ">
                    <div class="max-w-[1300px] mx-auto py-12 mt-20">
                        <h1 class="text-[48px] font-extrabold leading-none tracking-tight">
                            SOTD / SCORE
                        </h1>
                        <div class="text-[48px] font-extrabold leading-none tracking-tight mt-1">
                            → 7.59 <span class="text-[12px] font-normal align-top">/10</span>
                        </div>

                        <div class="w-full text-right mb-20">
                            <p class="underline-slide no-underline block">Evaluation System</p>
                        </div>
                        <div class="mt-8 flex text-[10px] font-normal text-[#1a1a1a] relative select-none">
                            <div class="flex flex-col items-start relative" style="width: 40%;">
                                <div class="mb-1">Design <span class="font-bold">40%</span></div>
                                <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                    <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                    <div class="bar-divider"></div>
                                </div>
                                <div class="mt-1">7.7 / 10</div>
                            </div>
                            <div class="flex flex-col items-start relative" style="width: 30%;">
                                <div class="mb-1">Usability <span class="font-bold">30%</span></div>
                                <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                    <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                    <div class="bar-divider"></div>
                                </div>
                                <div class="mt-1">7.26 / 10</div>
                            </div>
                            <div class="flex flex-col items-start relative" style="width: 20%;">
                                <div class="mb-1">Creativity <span class="font-bold">20%</span></div>
                                <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                    <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                    <div class="bar-divider"></div>
                                </div>
                                <div class="mt-1">7.66 / 10</div>
                            </div>
                            <div class="flex flex-col items-start relative" style="width: 10%;">
                                <div class="mb-1">Content <span class="font-bold">10%</span></div>
                                <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                    <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                    <!-- No divider on last bar -->
                                </div>
                                <div class="mt-1">7.95 / 10</div>
                            </div>
                        </div>
                        <!-- ARCH -->
                        <div class="bg-gray-50 font-sans text-[13px] text-[#222222]">
                            <div class="max-w-6xl mx-auto p-8">

                                <!-- Community Members Table(Initially Visible) -->
                                <div id="communityTable">
                                    <table class="w-full border-collapse bg-gray-50 text-[#222222] text-[13px] font-normal">
                                        <thead>
                                            <tr class="text-[11px] font-normal select-none border-b border-black/20">
                                                <th class="text-left pl-4 pr-16 py-2">Votes</th>
                                                <th class="text-left py-2">Jury</th>
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
                                            <!-- JURY ROW 3 -->
                                            <tr class="border-b border-black/20">
                                                <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                    <img
                                                        src="https://randomuser.me/api/portraits/women/65.jpg"
                                                        alt="Profile photo of Jury Member 1"
                                                        class="w-10 h-10 rounded-full object-cover inline-block"
                                                        width="40"
                                                        height="40" />
                                                </td>
                                                <td class="py-4 align-middle w-[40%]">
                                                    <div class="leading-tight">
                                                        <span class="font-semibold text-[13px]">Sarah Johnson</span>
                                                        <span class="italic font-normal text-[13px] ml-1">from</span>
                                                        <span class="font-semibold text-[13px] ml-1">USA</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#666666] select-text mt-1">sarahjohnson.com</div>
                                                </td>
                                                <td class="text-center py-4 align-middle">9</td>
                                                <td class="text-center py-4 align-middle">8</td>
                                                <td class="text-center py-4 align-middle">9</td>
                                                <td class="text-center py-4 align-middle">8</td>
                                                <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                    8.50
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative max-w-[1300px] mx-auto">
                    <div class="grid gap-6 grid-cols-3 overflow-hidden" id="card-carousel">
                        <!-- KE - 1 -->
                        <div class="space-y-2">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper-site" href="#">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                                </div>
                                <div class="hover-text-site">
                                    <div class="website-label-site">
                                        WEBSITE
                                    </div>
                                    <div class="title-site">
                                        Zecchinon
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 flex items-center gap-1 px-1 text-[14px]">
                                <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                    <a href="#">
                                        Elimar
                                    </a>
                                    <span class="text-[12px] font-normal flex text-[#6B6B6B] ml-2 mr-2  self-end">
                                        followed by
                                    </span>

                                <div class="flex -space-x-3">
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                    <img alt="Black circular icon with letters PT" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/4d325529-311a-43ac-87d2-35691b8a180f.jpg" width="24" />
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                </div>
                                <span class="text-black font-normal">
                                    +1465
                                </span>
                                </p>
                            </div>
                        </div>
                        <!-- KE - 2 -->
                        <div class="space-y-2">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper-site" href="#">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                                </div>
                                <div class="hover-text-site">
                                    <div class="website-label-site">
                                        WEBSITE
                                    </div>
                                    <div class="title-site">
                                        Zecchinon
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 flex items-center gap-1 px-1 text-[14px]">
                                <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                    <a href="#">
                                        Elimar
                                    </a>
                                    <span class="text-[12px] font-normal flex text-[#6B6B6B] ml-2 mr-2  self-end">
                                        followed by
                                    </span>

                                <div class="flex -space-x-3">
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                    <img alt="Black circular icon with letters PT" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/4d325529-311a-43ac-87d2-35691b8a180f.jpg" width="24" />
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                </div>
                                <span class="text-black font-normal">
                                    +1465
                                </span>
                                </p>
                            </div>
                        </div>
                        <!-- KE - 3 -->
                        <div class="space-y-2">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper-site" href="#">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                                </div>
                                <div class="hover-text-site">
                                    <div class="website-label-site">
                                        WEBSITE
                                    </div>
                                    <div class="title-site">
                                        Zecchinon
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 flex items-center gap-1 px-1 text-[14px]">
                                <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                    <a href="#">
                                        Elimar
                                    </a>
                                    <span class="text-[12px] font-normal flex text-[#6B6B6B] ml-2 mr-2  self-end">
                                        followed by
                                    </span>

                                <div class="flex -space-x-3">
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                    <img alt="Black circular icon with letters PT" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/4d325529-311a-43ac-87d2-35691b8a180f.jpg" width="24" />
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                </div>
                                <span class="text-black font-normal">
                                    +1465
                                </span>
                                </p>
                            </div>
                        </div>
                        <!-- KE - 4 -->
                        <div class="space-y-2 card-item hidden">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper-site" href="#">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                                </div>
                                <div class="hover-text-site">
                                    <div class="website-label-site">
                                        WEBSITE
                                    </div>
                                    <div class="title-site">
                                        Zecchinon
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 flex items-center gap-1 px-1 text-[14px]">
                                <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                    <a href="#">
                                        lulu
                                    </a>
                                    <span class="text-[12px] font-normal flex text-[#6B6B6B] ml-2 mr-2  self-end">
                                        followed by
                                    </span>

                                <div class="flex -space-x-3">
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                    <img alt="Black circular icon with letters PT" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/4d325529-311a-43ac-87d2-35691b8a180f.jpg" width="24" />
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                </div>
                                <span class="text-black font-normal">
                                    +1465
                                </span>
                                </p>
                            </div>
                        </div>
                        <!-- KE - 5 -->
                        <div class="space-y-2 card-item hidden">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper-site" href="#">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    <img alt="Screenshot of Zecchinon website showing a modern kitchen with wooden cabinets and a woman" src="https://storage.googleapis.com/a1aa/image/8e087b5e-e95f-4dff-a425-6656e6170b6d.jpg" />
                                </div>
                                <div class="hover-text-site">
                                    <div class="website-label-site">
                                        WEBSITE
                                    </div>
                                    <div class="title-site">
                                        Zecchinon
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 flex items-center gap-1 px-1 text-[14px]">
                                <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                    <a href="#">
                                        brambram
                                    </a>
                                    <span class="text-[12px] font-normal flex text-[#6B6B6B] ml-2 mr-2  self-end">
                                        followed by
                                    </span>

                                <div class="flex -space-x-3">
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                    <img alt="Black circular icon with letters PT" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/4d325529-311a-43ac-87d2-35691b8a180f.jpg" width="24" />
                                    <img alt="Black circular icon with letter O" class="w-6 h-6 rounded-full border-2 border-white" height="24" src="https://storage.googleapis.com/a1aa/image/765da937-82d0-4d10-0457-dbd865591662.jpg" width="24" />
                                </div>
                                <span class="text-black font-normal">
                                    +1465
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-[1300px] mx-auto">
                    <div class="flex justify-end mt-4">
                        <div class="flex space-x-6">
                            <button id="prev-btn" class="w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center text-gray-900 bg-gray-50 hover:bg-black hover:text-white focus:outline-none transition-colors duration-200">
                                <i class="fas fa-chevron-left text-xs"></i>
                            </button>
                            <button id="next-btn" class="w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center text-gray-900 bg-gray-50 hover:bg-black hover:text-white focus:outline-none transition-colors duration-200">
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/sites.js"></script>
</x-layout>