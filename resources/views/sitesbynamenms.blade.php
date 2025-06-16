<x-runningtext></x-runningtext>
@php
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'];
@endphp
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
                <a href="{{ route('home') }}">Tubes .</a>
            </div>

            <a href="#" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Info</a>
            <a href="#elements" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Elements</a>
            <a href="#vote" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Votes</a>
            <a href="{{ $website->link }}" class="active-own text-xs px-3 py-2 rounded-md border-2 border-[#fff083] bg-[#fff083] font-semibold duration-500 transition-all ease-in-out hover:!bg-[#e8da75]">
                Visit Site
            </a>
        </div>
    </div>
    <!-- <div class="fixed top-0 left-0 right-0 transform -translate-y-full transition-transform duration-500 ease-out bg-white shadow-sm z-50 w-full mx-auto px-16 py-4" id="main-header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <span class="text-[10px] font-extrabold uppercase leading-none select-none">
                    OXI ONE MKII
                </span>
                <span class="text-[10px] font-normal leading-none select-none">
                    by
                </span>
                <img alt="Profile photo of user" class="w-6 h-6 rounded-full object-cover" height="24" loading="lazy" src="https://storage.googleapis.com/a1aa/image/5085adb5-5851-441c-c297-fb846b861a0a.jpg" width="24" />
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
                <a href="{{ $website->link }}"><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a>

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
    </div> -->

    <div class="max-w-[1450px] mx-auto px-4 py-12 text-left" id="nominees">
        <div class="relative">
            <div class="flex space-x-8 absolute bottom-6 right-4 items-center">
                <a href="{{ asset($website->link) }}"><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- <p class="text-[9px] font-normal text-[#1a1a1a] text-center mb-1.5">
        Latest
    </p> -->
    <h1 class="font-semibold text-[40px] leading-[40px] [text-align:center!important] sm:text-[72px] sm:leading-[72px] lg:text-[55px] lg:leading-[112px] tracking-[-0.02em] relative">
        {{ $website->name }}
    </h1>

    <!-- something something for loop here for authorids prob gonna need an author count  -->
    <div class="flex justify-center items-center mt-[-10px] mb-14">
        <ul class="flex flex-row items-center space-x-4">
            <li class="flex items-center space-x-2">
                <img alt="user image" class="w-5 h-5 rounded-full" src="{{ asset($website->user->image_link) }}" />
                <a class="underline-slide relative" href="{{ route('profile', $website->user->id) }}">
                    {{ $website->user->display_name }}
                    <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                </a>
            </li>
            @foreach ($website->collaborators as $collaborator) 
                <li class="flex items-center space-x-2">
                    <img alt="user image" class="w-5 h-5 rounded-full" src="{{ asset($collaborator->image_link) }}" />
                    <a class="underline-slide relative" href="{{ route('profile', $collaborator->id) }}">
                        {{ $collaborator->display_name }}
                        <div class="absolute left-0 bottom-[-1.5px] w-full h-[1.5px] bg-gray-400"></div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 mb-4">
        <img alt="Web preview img" class="w-full rounded-md" height="400" src="{{ asset($website->image_link) }}" width="1300" />

        <div class="flex justify-center items-center mt-14">
            <p class="text-center text-[30px] sm:text-[30px] lg:text-[30px] font-normal text-[#1A1A1A] leading-[1.2]">
                {{ $website->description }}
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
                @foreach($website->elements as $element)
                    <div class="group relative rounded-md overflow-hidden max-w-[300px] max-h-[210px] cursor-pointer">
                        <a href="{{ route('element', $element->id) }}">
                            @php
                                $extension = pathinfo($element->image_link, PATHINFO_EXTENSION);
                            @endphp
                            @if(in_array(strtolower($extension), $imageExtensions))
                                <img src="{{ asset($element->image_link) }}" height="160" width="250" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75" alt="Media">
                            @else
                                <video autoplay muted loop height="160" width="250" class="w-full h-full object-cover transition duration-500 ease-in-out group-hover:brightness-75">
                                    <source src="{{ asset($element->image_link) }}" type="video/{{ strtolower($extension) }}">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                            <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                            <div class="absolute bottom-4 left-4 text-white text-container pointer-events-none">
                                <div class="font-thin text-xs uppercase leading-none select-none mb-1">
                                    ELEMENT
                                </div>
                                <div class="text-sm font-bold select-none">
                                    {{ $element->name }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- <div class="group relative rounded-md overflow-hidden  max-w-[300px] max-h-[210px]  cursor-pointer">
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
                </div> -->
            </div>
        </div>
        <div class="flex justify-center items-center mt-24">
            <p class="text-center text-[13px] sm:text-[13px] lg:text-[13px] font-normal text-[#1A1A1A] leading-[1.2] opacity-70">
                This website was built with...
            </p>
        </div>
    </div>

    <div class="bg-red flex flex-col items-center justify-top p-6 ">
        <div class="flex flex-wrap justify-center gap-3 max-w-5xl">
            @foreach ($website->tags as $tag)
                <a class="butto font-instrumentsans text-[16px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-6 py-3 whitespace-nowrap tag-button">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>

        <div class="mt-28 text-center text-[15px] text-gray-700 max-w-lg">
            Have your say, if you liked <strong>{{ $website->name }}</strong> make your vote here!
        </div>

        <a
            href="{{ route('vote', $website) }}"
            class="vote-button mt-8 bg-black text-white text-[18px] font-semibold rounded px-8 py-5 flex items-center gap-3"
            aria-label="Vote button with arrow">
            <i class="fas fa-arrow-right"></i>
            Vote<!-- <span class="font-bold">4 Days 16 Hours 2 Min</span> -->
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
                    @foreach ($website->website_votes as $vote)
                    <tr class="border-b border-black/20">
                        <td class="pl-4 pr-10 py-4 align-middle w-14">
                            <img
                                src="{{ asset($vote->image_link) }}"
                                alt="Profile photo of user"
                                class="w-10 h-10 rounded-full object-cover inline-block"
                                width="40"
                                height="40" />
                        </td>
                        <td class="py-4 align-middle w-[40%]">
                            <div class="leading-tight">
                                <span class="font-semibold text-[13px]">{{ $vote->display_name }}</span>
                                <!-- <span class="italic font-normal text-[13px] ml-1">from</span> -->
                                <!-- <span class="font-semibold text-[13px] ml-1">Indonesia</span> -->
                                <!-- <span class="font-normal italic text-[13px] ml-1">*</span> -->
                            </div>
                            <!-- <div class="text-[11px] text-[#666666] select-text mt-1">reksaandhika.com</div> -->
                        </td>
                            <td class="text-center py-4 align-middle">{{ $vote->pivot->design }}</td>
                            <td class="text-center py-4 align-middle">{{ $vote->pivot->usability }}</td>
                            <td class="text-center py-4 align-middle">{{ $vote->pivot->creativity}}</td>
                            <td class="text-center py-4 align-middle">{{ $vote->pivot->content }}</td>
                        <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                            {{ $vote->pivot->design * 0.4 + $vote->pivot->usability * 0.3 + $vote->pivot->creativity * 0.2 + $vote->pivot->content * 0.1}}
                        </td>
                    </tr>
                    @endforeach

                    <!-- Overlay gradasi
                    <section>
                        <div class="relative w-[1100px] max-w-[1100px] sm:top-[16rem] top-[22rem] h-auto">
                            <div id="gradient-bg" class="absolute inset-0 z-20"></div>

                            
                            <div id="gradient-overlay"
                                class="absolute inset-0 z-30 bg-gradient-to-t from-gray-50 to-transparent h-[6rem] sm:h-[8rem]">
                            </div>
                        </div>
                        <div class="relative">
                            
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
                    </section> -->
                </tbody>
            </table>
        </div>
    </div>
</x-layout>