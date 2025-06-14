
<x-layout>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <div class="relative">
        <a href="/websites">TEST</a>
        <a href="/pro">TEST</a>
        <button
            id="scrollUpButton"
            class="fixed bottom-3.5 left-8 translate-y-4 opacity-0 w-14 h-14
            z-50 pointer-events-none transition-all duration-500 ease-in-out
            flex items-center justify-center border-2 border-gray-600 bg-[#222222] p-3 rounded-lg"
            aria-label="Scroll up">
            <i class="fas fa-arrow-up text-gray-300 text-xl"></i>
        </button>

        <div
            id="stickyBar"
            class="fixed bottom-4 left-1/2 transform -translate-x-1/2 translate-y-4 opacity-0
           z-50 pointer-events-none transition-all duration-500 ease-in-out
           flex items-center text-center space-x-2 rounded-lg border-2 border-gray-600 bg-[#3e3e3e] p-1"
            style="font-family: 'Inter', sans-serif;">

            <div class="flex items-center justify-center w-15 h-10 rounded-md px-4 py-2 bg-[#222222] text-white font-semibold text-lg select-none m-1">
                Tubes .
            </div>
            <a href="#nominees" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Nominees</a>
            <a href="#courses" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Courses</a>
            <a href="#collections" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Collections</a>
            <a href="#directory" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Directory</a>
            <a href="#market" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-white transition">Market</a>
            <a href="#" class="visit-sotd text-gray-900 text-xs px-3 py-2 rounded-md border-2 border-gray-300 bg-gray-50  font-semibold">Visit Sotd.</a>
        </div>
    </div>
    <div class="bg-gray-50  text-[#1a1a1a]">
        <div class="max-w-[1690px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center text-[10px] leading-[12px] pt-3 pb-1 font-normal">
                <span class="mr-1">
                    Site of the Day
                </span>
                <span aria-label="Date" class="border border-black rounded px-1 py-[1px] mr-1 text-[10px] leading-[12px]">
                    Apr 24, 2025
                </span>
                <span>
                    Score 7.56 of 10
                </span>
            </div>
            <h1 class="text-[112px] leading-[112px] font-medium text-center tracking-tight mt-7 mb-6 select-none" style="font-feature-settings: 'ss01' on, 'ss02' on, 'ss03' on;">
                CHARLES LECLERC
            </h1>
            <div aria-label="Sponsors" class="flex justify-center items-center space-x-4 text-[14px] font-normal mb-6 select-none">
                <div class="flex items-center space-x-1">
                    <img alt="Apart logo, circular white background with letter A in black" class="w-5 h-5" height="20" src="https://storage.googleapis.com/a1aa/image/18737bf1-978b-42e0-ec29-8b3dd11200ce.jpg" width="20" />
                    <a class="underline-slide" href="#">
                        Apart
                        <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                    </a>
                    <span class="text-[10px] font-semibold">
                        PRO
                    </span>
                </div>
                <div class="flex items-center space-x-1">
                    <i class="fas fa-moon fa-xs">
                    </i>
                    <a class="underline-slide" href="#">
                        Uprising™
                        <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                    </a>
                </div>
                <div class="flex items-center space-x-1">
                    <img alt="Yazo logo, circular black background with letter Y in white" class="w-5 h-5" height="20" src="https://storage.googleapis.com/a1aa/image/98cfe885-d60f-4100-8f2d-2652fc8c2530.jpg" width="20" />
                    <a class="underline-slide" href="#">
                        Yazo
                        <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <a href="/sites">
                <img alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence" class="w-full rounded-md" height="400" src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg" width="1300" />
            </a>
        </div>


        <!-- NOMINEES SECTION -->
        <div class="max-w-[1450px] mx-auto px-4 py-12 text-center" id="nominees">
            <p class="text-[9px] font-normal text-[#1a1a1a] mb-2">
                Latest
            </p>
            <h1 class="font-extrabold text-[64px] leading-[64px] sm:text-[72px] sm:leading-[72px] lg:text-[112px] lg:leading-[112px] tracking-[-0.02em] relative inline-block mb-2">
                NOMINEES
                <span class="absolute top-[18px] w-14 h-12 mt-9 mr-9">
                    <img alt="Golden award wreath icon" class=" w-14 h-12" height="32" src="images/awwards.png" width="92" />
                </span>
            </h1>
            <p class="text-[12px] font-normal text-[#1a1a1a] mb-[6rem]">
                Vote for the latest websites on
                <br />
                awwwards
            </p>
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
                        <span class="title-large">
                            Zecchinon
                        </span>
                        <span class="by-text">
                            by
                        </span>
                        <span class="flex items-center gap-1 font-normal text-[12px]">
                            <img alt="Atrio logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/ec646dd5-7055-4253-7506-ff6fd9b6150a.jpg" />
                            <a class="underline-slide" href="#">
                                Apart
                                <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="w-full sm:custom-width text-left">
                    <a aria-label="Visit Human Voice Over website" class="image-wrapper" href="sitesnms">
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
                        <span class="title-large">
                            Human Voice Over
                        </span>
                        <span class="by-text">
                            by
                        </span>
                        <span class="flex items-center gap-1 font-normal text-[12px]">
                            <img alt="Todordimov logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/9ae4d102-55af-4cb4-935a-8e67c5c6b03d.jpg" />
                            <a class="underline-slide" href="#">
                                todordimov
                                <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="w-full sm:custom-width text-left">
                    <a aria-label="Visit TAIKI SATO Portfolio website" class="image-wrapper" href="sitesnms">
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
                        <span class="title-large">
                            TAIKI SATO Portfolio
                        </span>
                        <span class="by-text">
                            by
                        </span>
                        <span class="flex items-center gap-1 font-normal text-[12px]">
                            <img alt="Taikisato logo black circle" class="inline-block w-4 h-4 rounded-full" src="https://storage.googleapis.com/a1aa/image/ca3cad85-0ced-481a-93f6-c68ccc859496.jpg" />
                            <a class="underline-slide" href="#">
                                taikisato
                                <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                            </a>
                        </span>
                    </div>
                </div>
            </section>
            <p class="text-[13.5px] font-normal text-[#1a1a1a] mt-[80px] sm:mt-[100px] lg:mt-[120px]">
                Check out all submitted websites
                <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                    <span>
                        →
                    </span>
                    <a class="underline-slide" href="#">
                        View Nominees

                    </a>
                </span>
            </p>
        </div>
    </div>


    <!-- WINNERS SECTION -->
    <div class="bg-gray-50 " id="home2">
        <section class=" mx-auto max-w-[1420px] mx-auto py-6 sm:py-10  mt-[40px] lg:mt-[40px]">
            <p class="text-[12px] font-normal text-[#1A1A1A] mb-3">
                Winners
            </p>
            <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-[1.1] mb-14 max-w-xs sm:max-w-none">
                Recent Sites
                <br />
                of the Day.
            </h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <article class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper" href="#">
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
                </article>
                <article class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper" href="#">
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
                </article>
                <article class="space-y-2">
                    <a aria-label="Visit Zecchinon website" class="image-wrapper" href="#">
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
                    <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                        Elimar
                        <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                            by
                        </span>
                        <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] ml-1 no-underline" href="#">
                            <img alt="Profile picture of OddCommon" class="w-5 h-5 rounded-full object-cover" height="20" src="https://storage.googleapis.com/a1aa/image/7047b581-2504-40da-99aa-95e726b0b249.jpg" width="20" />
                            <a class="underline-slide">
                                OddCommon
                            </a>
                        </a>
                    </p>
                </article>
            </div>
            <p class="text-[13.5px] font-normal text-[#1a1a1a] text-center mt-[80px] sm:mt-[80px] lg:mt-[120px]">
                Check out all submitted websites
                <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                    <span>
                        →
                    </span>
                    <a class="underline-slide" href="#">
                        View Winners

                    </a>
                </span>
            </p>
        </section>
    </div>




    <!-- ACADEMY SECTION  -->
    <div class="bg-gray-50  p-6 sm:p-10 mt-[90px] sm:mt-[40px] lg:mt-[40px]" id="courses">
        <div class="max-w-[1420px] mx-auto">
            <div class="mb-8">
                <p class="text-[12px] text-[#1a1a1a] mb-3">
                    Academy
                </p>
                <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-tight mb-14 sm:max-w-md">
                    Learn from the
                    <br />
                    best instructors.
                </h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="relative w-full h-[180px] sm:h-[200px] lg:h-[180px]">
                        <img alt="Man with cap showing phone and laptop with stickers on table in a room with framed pictures on wall" class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/7191cd4d-033e-4a96-e5d9-3435aa8d2286.jpg" />
                        <img alt="Figma logo icon" class="absolute bottom-3 left-3 w-10 h-10 rounded bg-white p-1" height="40" src="https://storage.googleapis.com/a1aa/image/a524c319-c18b-4247-8cad-2dd7194c023c.jpg" width="40" />
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <a href="#" class="text-[14px] font-normal text-[#111111] mb-3 leading-snug block min-h-[3.5rem]">
                            Learn UI Design with Figma from Scratch
                        </a>
                        <div class="flex flex-col text-[10px] text-[#666666] mb-3 mt-auto">
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">
                                    Instructor
                                </span>
                                <span class="font-light">
                                    Daniele Buffa
                                </span>
                            </div>
                            <div class="flex justify-between items-center" style="min-width: 100%;">
                                <span class="font-semibold">
                                    Score
                                </span>
                                <span class="font-light">
                                    5/5
                                </span>
                            </div>
                            <div class="h-[2px] bg-[#f5f5a1] mt-1 rounded">
                            </div>
                        </div>
                        <div class="flex justify-end pt-2">
                            <i class="fas fa-arrow-right text-[#111111]">
                            </i>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="relative w-full h-[180px] sm:h-[200px] lg:h-[180px]">
                        <img alt="Man holding laptop with red and blue screen in office with posters on wall" class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/922fcd2d-eb77-4130-0383-ee8133430ebd.jpg" />
                        <img alt="Figma logo icon" class="absolute bottom-3 left-3 w-10 h-10 rounded bg-white p-1" height="40" src="https://storage.googleapis.com/a1aa/image/a524c319-c18b-4247-8cad-2dd7194c023c.jpg" width="40" />
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <a href="#" class="text-[14px] font-normal text-[#111111] mb-3 leading-snug block min-h-[3.5rem]">
                            Innovative Web Design in Figma: A Step-by-Step Process
                        </a>
                        <div class="flex flex-col text-[10px] text-[#666666] mb-3 mt-auto">
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">
                                    Instructor
                                </span>
                                <span class="font-light">
                                    Louis Paquet
                                </span>
                            </div>
                            <div class="flex justify-between items-center" style="min-width: 100%;">
                                <span class="font-semibold">
                                    Score
                                </span>
                                <span class="font-light">
                                    5/5
                                </span>
                            </div>
                            <div class="h-[2px] bg-[#f5f5a1] mt-1 rounded">
                            </div>
                        </div>
                        <div class="flex justify-end pt-2">
                            <i class="fas fa-arrow-right text-[#111111]">
                            </i>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="relative w-full h-[180px] sm:h-[200px] lg:h-[180px]">
                        <img alt="Bald man with glasses sitting at desk with laptop and lamp in background" class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/79eb575b-2f7b-4c94-df53-cb01813f5420.jpg" />
                        <img alt="Figma logo icon" class="absolute bottom-3 left-3 w-10 h-10 rounded bg-white p-1" height="40" src="https://storage.googleapis.com/a1aa/image/a524c319-c18b-4247-8cad-2dd7194c023c.jpg" width="40" />
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <a href="#" class="text-[14px] font-normal text-[#111111] mb-3 leading-snug block min-h-[3.5rem]">
                            Learn Figma from 0 to 100 (10 Courses)
                        </a>
                        <div class="flex flex-col text-[10px] text-[#666666] mb-3 mt-auto">
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">
                                    Instructor
                                </span>
                                <span class="font-light">
                                    Mirko Santangelo
                                </span>
                            </div>
                            <div class="flex justify-between items-center" style="min-width: 100%;">
                                <span class="font-semibold">
                                    Score
                                </span>
                                <span class="font-light">
                                    5/5
                                </span>
                            </div>
                            <div class="h-[2px] bg-[#f5f5a1] mt-1 rounded">
                            </div>
                        </div>
                        <div class="flex justify-end pt-2">
                            <i class="fas fa-arrow-right text-[#111111]">
                            </i>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm flex flex-col">
                    <div class="relative w-full h-[180px] sm:h-[200px] lg:h-[180px]">
                        <img alt="Woman in green top with laptop and figma app screen on right side with green background" class="w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/bcefc07a-9e26-4e18-b84f-9f0cdf4c7fa8.jpg" />
                        <img alt="Figma logo icon" class="absolute bottom-3 left-3 w-10 h-10 rounded bg-white p-1" height="40" src="https://storage.googleapis.com/a1aa/image/a524c319-c18b-4247-8cad-2dd7194c023c.jpg" width="40" />
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <a href="#" class="text-[14px] font-normal text-[#111111] mb-3 leading-snug block min-h-[3.5rem]">
                            UI Design: Create a website in Figma
                        </a>
                        <div class="flex flex-col text-[10px] text-[#666666] mb-3 mt-auto">
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">
                                    Instructor
                                </span>
                                <span class="font-light">
                                    Laura Knoops
                                </span>
                            </div>
                            <div class="flex justify-between items-center" style="min-width: 100%;">
                                <span class="font-semibold">
                                    Score
                                </span>
                                <span class="font-light">
                                    5/5
                                </span>
                            </div>
                            <div class="h-[2px] bg-[#f5f5a1] mt-1 rounded">
                            </div>
                        </div>
                        <div class="flex justify-end pt-2">
                            <i class="fas fa-arrow-right text-[#111111]">
                            </i>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[13.5px] font-normal text-[#1a1a1a] text-center mt-[80px] sm:mt-[80px] lg:mt-[120px]">
                Choose from over <b>hundreds</b> of courses
                <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                    <span>
                        →
                    </span>
                    <a class="underline-slide" href="#">
                        View Academy

                    </a>
                </span>
            </p>
        </div>
    </div>

    <!-- COLLECTION SECTION -->

    <div class="bg-gray-50  p-6 sm:p-10 mt-[40px] sm:mt-[40px] lg:mt-[40px]" id="collections">
        <div class="max-w-[1420px] mx-auto">
            <div class="mb-8">
                <p class="text-[12px] text-[#1a1a1a] mb-3">
                    Collections
                </p>
                <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-tight mb-14 sm:max-w-md">
                    Explore a wide
                    <br />
                    variety of collections.
                </h1>
            </div>
            <section class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <article>
                    <div class="custom-image-container">
                        <img
                            alt="Orange background with blue half circle shape on top center and black text 31% with Spotify logo on bottom left"
                            class="w-full h-auto object-cover"
                            height="320"
                            src="https://storage.googleapis.com/a1aa/image/2e75cf81-6abd-428e-e253-8e41d8a5e330.jpg"
                            width="600" />
                        <div class="custom-hover-text">
                            <div class="website-label">WEBSITE</div>
                            <div class="title">Zecchinon</div>
                        </div>
                    </div>
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
                </article>
                <article>
                    <div class="custom-image-container">
                        <img
                            alt="Orange background with blue half circle shape on top center and black text 31% with Spotify logo on bottom left"
                            class="w-full h-auto object-cover"
                            height="320"
                            src="https://storage.googleapis.com/a1aa/image/2e75cf81-6abd-428e-e253-8e41d8a5e330.jpg"
                            width="600" />
                        <div class="custom-hover-text">
                            <div class="website-label">WEBSITE</div>
                            <div class="title">Zecchinon</div>
                        </div>
                    </div>

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
                </article>
            </section>
        </div>
        <p class="text-[13.5px] font-normal text-[#1a1a1a] text-center mt-[80px] sm:mt-[80px] lg:mt-[120px]">
            Find inspiration for your projects
            <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                <span>
                    →
                </span>
                <a class="underline-slide" href="#">
                    View Collections

                </a>
            </span>
        </p>
    </div>


    <!-- DIRECTORY SECTION -->

    <div class="bg-gray-50  text-gray-900 py-8 sm:py-12 lg:py-16 mt-[40px] sm:mt-[40px] lg:mt-[40px] mt-7" id="directory">
        <div class="max-w-[1450px] mx-auto px-4 py-12 text-center">
            <div class="text-center pt-2 pb-1 text-[10px]">
                Directory
            </div>
            <div class="text-center mb-4 px-4">
                <h1 class="font-extrabold text-[64px] leading-[64px] sm:text-[72px] sm:leading-[72px] lg:text-[112px] lg:leading-[112px] tracking-[-0.02em] relative inline-block mb-2">
                    W.CREATORS
                </h1>
                <p class="text-[12px] mb-[6rem]">
                    Active creators in your country.
                </p>
            </div>
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <article class="bg-gray-900 text-white rounded-md p-5 relative flex flex-col">
                    <div class="absolute top-5 left-5 w-8 h-8 rounded-full bg-black flex items-center justify-center text-[10px] font-semibold text-white select-none">
                        /nk
                    </div>
                    <div class="mt-6 flex flex-col items-end">
                        <img id="card1-image" alt="3D transparent cubes with images of people inside, blue and white lighting"
                            class="rounded-md object-cover w-44 h-28 transition-opacity duration-300"
                            src="https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg" />
                        <div class="flex space-x-1 mt-4" id="card1-dots">
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="1" data-index="0"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="1" data-index="1"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="1" data-index="1"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="1" data-index="3"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="1" data-index="4"
                                onclick="changeImage(this)"></button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-1 text-[10px] text-gray-300 font-normal mt-3">
                        <span>
                            International
                        </span>
                        <span>
                            60 awards
                        </span>
                    </div>
                    <h2 class="text-white text-[24px] text-left font-bold mb-1">
                        /nk.studio
                    </h2>
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-normal">
                        <a class="hover:no-underline" href="http://estudionk.com" rel="noopener noreferrer" target="_blank">
                            estudionk.com
                        </a>
                        <div class="border border-gray-600 rounded-sm w-6 h-6 flex items-center justify-center text-[10px] font-semibold select-none">
                            68
                        </div>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="bg-gray-900 text-white rounded-md p-5 relative flex flex-col">
                    <div class="absolute top-5 left-5 w-8 h-8 rounded-full bg-black flex items-center justify-center text-[10px] font-semibold text-white select-none">
                        /nk
                    </div>
                    <div class="mt-6 flex flex-col items-end">
                        <img id="card2-image" alt="3D transparent cubes with images of people inside, blue and white lighting"
                            class="rounded-md object-cover w-44 h-28 transition-opacity duration-300"
                            src="https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg" />
                        <div class="flex space-x-1 mt-4" id="card2-dots">
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="2" data-index="0"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="2" data-index="2"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="2" data-index="2"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="2" data-index="3"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="2" data-index="4"
                                onclick="changeImage(this)"></button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-1 text-[10px] text-gray-300 font-normal mt-3">
                        <span>
                            International
                        </span>
                        <span>
                            60 awards
                        </span>
                    </div>
                    <h2 class="text-white text-[24px]  text-left font-bold mb-1">
                        /nk.studio
                    </h2>
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-normal">
                        <a class="hover:no-underline" href="http://estudionk.com" rel="noopener noreferrer" target="_blank">
                            estudionk.com
                        </a>
                        <div class="border border-gray-600 rounded-sm w-6 h-6 flex items-center justify-center text-[10px] font-semibold select-none">
                            68
                        </div>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="bg-gray-900 text-white rounded-md p-5 relative flex flex-col">
                    <div class="absolute top-5 left-5 w-8 h-8 rounded-full bg-black flex items-center justify-center text-[10px] font-semibold text-white select-none">
                        /nk
                    </div>
                    <div class="mt-6 flex flex-col items-end">
                        <img id="card3-image" alt="3D transparent cubes with images of people inside, blue and white lighting"
                            class="rounded-md object-cover w-44 h-28 transition-opacity duration-300"
                            src="https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg" />
                        <div class="flex space-x-1 mt-4" id="card3-dots">
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="3" data-index="0"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="3" data-index="3"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="3" data-index="2"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="3" data-index="3"
                                onclick="changeImage(this)"></button>
                            <button class="dot-btn w-1.5 h-1.5 rounded-full bg-white opacity-30 focus:outline-none"
                                data-card="3" data-index="4"
                                onclick="changeImage(this)"></button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-1 text-[10px] text-gray-300 font-normal mt-3">
                        <span>
                            International
                        </span>
                        <span>
                            60 awards
                        </span>
                    </div>
                    <h2 class="text-white text-[24px]  text-left font-bold mb-1">
                        /nk.studio
                    </h2>
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-normal">
                        <a class="hover:no-underline" href="http://estudionk.com" rel="noopener noreferrer" target="_blank">
                            estudionk.com
                        </a>
                        <div class="border border-gray-600 rounded-sm w-6 h-6 flex items-center justify-center text-[10px] font-semibold select-none">
                            68
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <!-- TABEL SECTION -->
        <div class="max-w-[1250px] mx-auto px-4 py-8">
            <div class="grid grid-cols-5 gap-x-32 text-xs text-gray-700 font-sans mb-8">
                <div class="mb-2 whitespace-nowrap">
                    <b>
                        Name
                    </b>
                </div>
                <div class="mb-2">
                    <b>
                        Profile
                    </b>
                </div>
                <div class="mb-2">
                    <b>
                        Awards
                    </b>
                </div>
                <div class="mb-2">
                    <b>
                        Categories
                    </b>
                </div>
                <div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-x-32 items-center text-xs text-gray-700 font-sans mb-6">
                <div class="flex items-center space-x-3 whitespace-nowrap">
                    <img alt="Black circular logo with white text 'CS' for Creavora Studio" class="w-6 h-6 rounded-full" height="24" src="https://storage.googleapis.com/a1aa/image/a1e5b5e6-a81a-406b-725a-92fdcc55c5b8.jpg" width="24" />
                    <span class="font-semibold underline">
                        Creavora Studio
                    </span>
                    <span class="text-[8px] font-normal">
                        PRO
                    </span>
                </div>
                <div>
                    Studio
                </div>
                <div>
                    0
                </div>
                <div>
                    Graphic Design
                </div>
                <div class="flex justify-end">
                    <button
                        class="text-xs text-gray-700 border border-gray-700 rounded px-3 py-1 
                        hover:bg-black hover:text-white transition-colors duration-300 ease-in-out w-20"
                        type="button">
                        View
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-x-32 items-center text-xs text-gray-700 font-sans mb-6">
                <div class="flex items-center space-x-3 whitespace-nowrap">
                    <img alt="Black circular logo with white text 'SA' for Surya Aditya" class="w-6 h-6 rounded-full" height="24" src="https://storage.googleapis.com/a1aa/image/d3499e1c-3f10-46d2-4ed4-ef4161552dc5.jpg" width="24" />
                    <span class="font-semibold underline">
                        Surya Aditya
                    </span>
                    <span class="text-[8px] font-normal">
                        PRO
                    </span>
                </div>
                <div>
                    Freelance
                </div>
                <div>
                    3
                </div>
                <div>
                    Web Development
                </div>
                <div class="flex justify-end">
                    <button
                        class="text-xs text-gray-700 border border-gray-700 rounded px-3 py-1 
                        hover:bg-black hover:text-white transition-colors duration-300 ease-in-out w-20"
                        type="button">
                        View
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-x-32 items-center text-xs text-gray-700 font-sans mb-6">
                <div class="flex items-center space-x-3 whitespace-nowrap">
                    <img alt="Gray circular profile photo with a person silhouette for Brian Stefans" class="w-6 h-6 rounded-full" height="24" src="https://storage.googleapis.com/a1aa/image/677bac86-055c-4e24-fd6a-72b9b7cfb882.jpg" width="24" />
                    <span class="font-semibold underline">
                        Brian Stefans
                    </span>
                    <span class="text-[8px] font-normal">
                        PRO
                    </span>
                </div>
                <div>
                    Freelance
                </div>
                <div>
                    2
                </div>
                <div>
                    Web Design
                </div>
                <div class="flex justify-end">
                    <button
                        class="text-xs text-gray-700 border border-gray-700 rounded px-3 py-1 
                        hover:bg-black hover:text-white transition-colors duration-300 ease-in-out w-20"
                        type="button">
                        View
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-x-32 items-center text-xs text-gray-700 font-sans">
                <div class="flex items-center space-x-3 whitespace-nowrap">
                    <img alt="Gray circular logo with white text 'HS' for Hatypo Studio" class="w-6 h-6 rounded-full" height="24" src="https://storage.googleapis.com/a1aa/image/6e876fdd-a2ce-40b9-4610-7ac95c568199.jpg" width="24" />
                    <span class="font-semibold underline">
                        Hatypo Studio
                    </span>
                    <span class="text-[8px] font-normal">
                        PRO
                    </span>
                </div>
                <div>
                    Agency
                </div>
                <div>
                    1
                </div>
                <div>
                    Web Design , Web Development , UX...
                </div>
                <div class="flex justify-end">
                    <button
                        class="text-xs text-gray-700 border border-gray-700 rounded px-3 py-1 
                        hover:bg-black hover:text-white transition-colors duration-300 ease-in-out w-20"
                        type="button">
                        View
                    </button>
                </div>
            </div>
        </div>

        <p class="text-[13.5px] font-normal text-[#1a1a1a] text-center mt-[80px] sm:mt-[80px] lg:mt-[120px]">
            Connect with over 5,599 Agencies and Professionals
            <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                <span>
                    →
                </span>
                <a class="underline-slide" href="#">
                    View Directory
                </a>
            </span>
        </p>
    </div>


    <!-- MARKET SECTION -->
    <div class="bg-gray-50 " id="market">
        <section class=" mx-auto max-w-[1420px] mx-auto py-6 sm:py-10  mt-[90px] lg:mt-[90px]">
            <p class="text-[12px] font-normal text-[#1A1A1A] mb-3">
                Market
            </p>
            <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-[1.1] mb-14 max-w-xs sm:max-w-none">
                A curated marketplace
                <br />
                for digital & physical products
            </h1>
            <div class="px-0">
                <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 marketbody ">
                    <!-- Card 1 -->
                    <article class="rounded-lg border border-gray-100 shadow-sm overflow-hidden flex flex-col cursor-pointer bg-white">
                        <img alt="Open laptop showing a website on screen in a dark setting with red and white colors" class="w-full object-cover aspect-[5/3]" height="360" src="https://storage.googleapis.com/a1aa/image/455d5756-850d-4bc1-e2b3-a24b7e8dbd54.jpg" width="600" />
                        <div class="p-4 flex flex-col flex-grow">
                            <p class="text-[10px] text-gray-500 font-normal mb-1">
                                Digital Product
                            </p>
                            <a class="title-link mb-4" href="#" tabindex="0">
                                Foucault —
                                <span class="font-semibold">
                                    Framer agency template
                                </span>
                            </a>
                            <div class="flex justify-between items-center border-t border-gray-100 pt-3 text-[11px] text-gray-600 font-normal mb-4">
                                <p class="flex items-center gap-1">
                                    By
                                    <span class="font-semibold cursor-pointer hover:underline">
                                        Satto.studio
                                    </span>
                                </p>
                                <p class="flex items-center gap-1 font-bold text-gray-900">
                                    from
                                    <span class="text-[18px]">
                                        59
                                    </span>
                                    USD
                                </p>
                            </div>
                            <hr class="border-gray-100 mb-4" />
                            <a aria-label="View Product Foucault" class="view-link" href="#" tabindex="0">
                                View Product
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </article>
                    <!-- Card 2 -->
                    <article class="rounded-lg border border-gray-100 shadow-sm overflow-hidden flex flex-col cursor-pointer bg-white">
                        <img alt="Solar energy website screenshots with blue and white colors and a person wearing a helmet" class="w-full object-cover aspect-[5/3]" height="360" src="https://storage.googleapis.com/a1aa/image/91664c97-0a11-4c3f-4eaa-55889a69c145.jpg" width="600" />
                        <div class="p-4 flex flex-col flex-grow">
                            <p class="text-[10px] text-gray-500 font-normal mb-1">
                                Digital Product
                            </p>
                            <a class="title-link mb-4" href="#" tabindex="0">
                                Solarify - Solar &amp; Energy Free Framer Template
                            </a>
                            <div class="flex justify-between items-center border-t border-gray-100 pt-3 text-[11px] text-gray-600 font-normal mb-4">
                                <p class="flex items-center gap-1">
                                    By
                                    <span class="font-semibold cursor-pointer hover:underline">
                                        Pentaclay
                                    </span>
                                </p>
                                <p class="flex items-center gap-1 font-bold text-gray-900">
                                    from
                                    <span class="text-[18px]">
                                        59
                                    </span>
                                    USD
                                </p>
                            </div>
                            <hr class="border-gray-100 mb-4" />
                            <a aria-label="View Product Solarify" class="view-link" href="#" tabindex="0">
                                View Product
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </article>
                    <!-- Card 3 -->
                    <article class="rounded-lg border border-gray-100 shadow-sm overflow-hidden flex flex-col cursor-pointer bg-white">
                        <img alt="Modern white house with blue sky background and glass windows" class="w-full object-cover aspect-[5/3]" height="360" src="https://storage.googleapis.com/a1aa/image/3f6dc297-fb99-4f5a-d52c-5e494b40a020.jpg" width="600" />
                        <div class="p-4 flex flex-col flex-grow">
                            <p class="text-[10px] text-gray-500 font-normal mb-1">
                                Digital Product
                            </p>
                            <a class="title-link mb-4" href="#" tabindex="0">
                                Haven - Real Estate Framer Template
                            </a>
                            <div class="flex justify-between items-center border-t border-gray-100 pt-3 text-[11px] text-gray-600 font-normal mb-4">
                                <p class="flex items-center gap-1">
                                    By
                                    <span class="font-semibold cursor-pointer hover:underline">
                                        Hamza Ehsan
                                    </span>
                                </p>
                                <p class="flex items-center gap-1 font-bold text-gray-900">
                                    from
                                    <span class="text-[18px]">
                                        99
                                    </span>
                                    USD
                                </p>
                            </div>
                            <hr class="border-gray-100 mb-4" />
                            <a aria-label="View Product Haven" class="view-link" href="#" tabindex="0">
                                View Product
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </article>
                    <!-- Card 4 -->
                    <article class="rounded-lg border border-gray-100 shadow-sm overflow-hidden flex flex-col cursor-pointer bg-white ">
                        <img alt="Closeup of laptop screen showing woman with red hair and red background" class="w-full object-cover aspect-[5/3]" height="360" src="https://storage.googleapis.com/a1aa/image/8710b5f8-dc26-4200-2793-a69e09e2d189.jpg" width="600" />
                        <div class="p-4 flex flex-col flex-grow">
                            <p class="text-[10px] text-gray-500 font-normal mb-1">
                                Digital Product
                            </p>
                            <a class="title-link mb-4" href="#" tabindex="0">
                                Zanzibar - Framer Agency &amp; Portfolio Template
                            </a>
                            <div class="flex justify-between items-center border-t border-gray-100 pt-3 text-[11px] text-gray-600 font-normal mb-4">
                                <p class="flex items-center gap-1">
                                    By
                                    <span class="font-semibold cursor-pointer hover:underline">
                                        Izabysof
                                    </span>
                                </p>
                                <p class="flex items-center gap-1 font-bold text-gray-900">
                                    from
                                    <span class="text-[18px]">
                                        99
                                    </span>
                                    USD
                                </p>
                            </div>
                            <hr class="border-gray-100 mb-4" />
                            <a aria-label="View Product Zanzibar" class="view-link" href="#" tabindex="0">
                                View Product
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>


            <p class="text-[13.5px] font-normal text-[#1a1a1a] text-center mt-[80px] sm:mt-[80px] lg:mt-[120px]">
                Check out all submitted websites
                <span class="inline-flex items-center gap-1 font-semibold cursor-pointer select-none">
                    <span>
                        →
                    </span>
                    <a class="underline-slide" href="#">
                        View Winners

                    </a>
                </span>
            </p>
        </section>
    </div>

    <!-- BE PRO AND SUBMIT WEBSITE SECTION -->
    <div class="bg-gray-50  p-6">
        <div class="max-w-[1420px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 mt-[6rem]">
            <section class="relative rounded-lg overflow-hidden min-h-[280px]" style="background-color: #111111;">
                <img alt="Man in suit speaking on stage with microphone, dark overlay" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover opacity-20" height="400" src="https://storage.googleapis.com/a1aa/image/fd117a6b-0b46-4c88-b70d-356f8c2d4db9.jpg" width="600" />
                <div class="card-content p-8">
                    <p class="text-white text-xs-custom font-normal">
                        Share your work
                    </p>
                    <h2 class="text-white font-extrabold text-2xl leading-tight max-w-[14ch] mt-1" id="judul-bray">
                        Submit your website for visibility and recognition
                    </h2>
                    <div class="btn-container">
                        <button class="btn-fixed" type="button">
                            Submit Website
                        </button>
                    </div>
                </div>
                <p class="bottom-right-text">
                    Got questions? Read our
                    <a class="underline" href="#">
                        FAQs
                    </a>
                </p>
            </section>
            <section class="relative rounded-lg overflow-hidden min-h-[280px]" style="background-color: #111111;">
                <img alt="Audience in dark conference hall with stage and screen, dark overlay" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover opacity-20" height="400" src="https://storage.googleapis.com/a1aa/image/d19b1839-8519-4e58-2b24-667d84db182f.jpg" width="600" />
                <div class="card-content p-8">
                    <p class="text-white text-xs-custom font-normal">
                        Be a member
                    </p>
                    <h2 class="text-white font-extrabold text-2xl leading-tight max-w-[14ch] mt-1" id="judul-bray">
                        Get access to special pro features
                    </h2>
                    <div class="btn-container">
                        <button class="btn-fixed" type="button">
                            Be Pro
                        </button>
                    </div>
                </div>
                <p class="bottom-right-text">
                    Got questions? Read our
                    <a class="underline" href="#">
                        FAQs
                    </a>
                </p>
            </section>
        </div>
    </div>
    <x-footer>
    </x-footer>
</x-layout>