<x-runningtext/>
@php
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'];
    $valid_votes = $website->website_votes->filter(fn($user) => $user->pivot->is_rejected == 0);

    $score = 
        $valid_votes->avg(fn($user) => $user->pivot->design) * 0.4 +
        $valid_votes->avg(fn($user) => $user->pivot->usability) * 0.3 +
        $valid_votes->avg(fn($user) => $user->pivot->creativity) * 0.2 +
        $valid_votes->avg(fn($user) => $user->pivot->content) * 0.1;
    
    $valid_dev_votes = $website->user_votes->filter(fn($user) => $user->pivot->is_rejected == 0);
    $dev_score = 
        $valid_dev_votes->avg(fn($user) => $user->pivot->semantics) * 0.2 +
        $valid_dev_votes->avg(fn($user) => $user->pivot->animations) * 0.15 +
        $valid_dev_votes->avg(fn($user) => $user->pivot->accessibility) * 0.1 +
        $valid_dev_votes->avg(fn($user) => $user->pivot->wpo) * 0.2 +
        $valid_dev_votes->avg(fn($user) => $user->pivot->responsive_design) * 0.2 +
        $valid_dev_votes->avg(fn($user) => $user->pivot->markup) * 0.15;
@endphp
<x-layout class="badan">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sitesbynamenms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sites.css') }}">
    <div>
        <div id="cardOverlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-center items-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
            <div id="cardWrapper" class="relative bg-white p-6 rounded-xl shadow-xl w-full max-w-4xl transform scale-95 opacity-0 transition-all duration-300 flex gap-6">

                <section class="bg-[#0a2f1a]/30 rounded-lg flex flex-col justify-center items-start p-6 flex-1">
                    <p class="text-base text-black/90 mb-6">
                        Collect <strong>Turn.io</strong>
                    </p>
                    <div class="bg-[#0a2f1a] rounded-md p-4 max-w-[360px] w-full flex justify-center">
                        <img class="rounded-md object-cover w-full h-[180px]" src="https://storage.googleapis.com/a1aa/image/dad4a7a1-622b-4bb0-5128-8b01903d6465.jpg" alt="Screenshot" />
                    </div>
                </section>

                <section class="flex-1 flex flex-col">
                    <form class="mb-6 flex items-center gap-3">
                        <input class="flex-1 rounded-md border px-3 py-2 text-sm placeholder-gray-400 border-gray-400 focus:border-gray-600 focus:outline-none focus:ring-1 focus:ring-gray-600 transition-all duration-300" placeholder="Search collections" type="search" />
                        <button class="text-gray-400 hover:text-gray-600" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <form class="flex flex-col gap-6">
                        <div class="flex items-center justify-between border-b border-dotted border-black/30 pb-4">
                            <div class="flex items-center gap-4">
                                <button class="bg-gray-300 text-gray-700 rounded-md w-8 h-8 font-semibold" disabled>0</button>
                                <span class="font-semibold text-black/90">Hello World</span>
                            </div>
                            <button class="border border-black rounded-md px-4 py-1 hover:bg-black hover:text-white">Save</button>
                        </div>

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

                <a href='{{ route('home') }}' class="flex items-center justify-center w-15 h-10 rounded-md px-4 py-2 bg-[#222222] text-white font-semibold text-lg sm:text-base lg:text-lg select-none m-1">
                    Tubes .
                </a>

                <a href="#info" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Info</a>
                <a href="#elements" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Elements</a>
                <a href="#vote" class="text-gray-300 text-xs px-3 py-2 rounded-md border border-gray-600 hover:border-[#fff083] transition duration-500">Votes</a>
                <a href="{{ $website->link }}" class="active-own text-xs px-3 py-2 rounded-md border-2 border-[#fff083] bg-[#fff083] font-semibold duration-500 transition-all ease-in-out hover:!bg-[#e8da75]">
                    Visit Site
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
                <!-- YANG GESER DARI ATAS -->
                <div class="flex items-center space-x-6 text-black text-[14px] relative">
                    <a><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a> 
                </div>
            </div>
        </div>
        <div class="max-w-[1450px] mx-auto px-4 py-12 text-left" id="nominees">
            <div class="relative ">
                <div class="flex space-x-8 absolute bottom-6 right-4 items-center ">
                    <!-- Tombol-tombol tetap -->
                    <!-- <a><i class="show-card-btn far fa-bookmark text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Bookmark"></i></a>
                    <a id="shareButton"><i class="fas fa-share-alt text-[#2a2a2a] text-[14px] cursor-pointer" aria-hidden="true" title="Share"></i></a> -->
                    <a href="{{ $website->link }}"><i class="fas fa-external-link-alt text-[#2a2a2a] text-[14px] cursor-pointer" title="External Link" aria-hidden="true"></i></a>

                    <!-- Kotak share (absolute position)
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
                    </div> -->
                </div>
            </div>
            <section id="#"></section>
            <!-- SECTION NILAI -->
            <div class="w-20 rounded-tl-md rounded-tr-md rounded-br-md rounded-bl-md border border-gray-400 bg-gray-50 ml-5 absolute top-[10rem] left-[2.5rem]">
                <div class="text-center text-xs text-gray-700 py-1 font-sans border-b border-gray-400">
                    SCORE
                </div>
                <div class="text-center font-bold text-3xl leading-[1.1] text-gray-900 font-sans py-4">
                    {{ number_format($score, 2) }}
                    <span class="text-base font-normal text-gray-700">/ 10</span>
                </div>
            </div>

            <div class="mt-[8rem]">
                <h1 class="font-semibold text-[40px] leading-[40px] [text-align:center!important] sm:text-[72px] sm:leading-[72px] lg:text-[55px] lg:leading-[112px] tracking-[-0.02em] relative">
                    {{ $website->name }}
                </h1>
            </div>

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

            <div class="max-w-[1300px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                <img
                    src="{{ asset($website->image_link) }}"
                    alt="Web preview image"
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
                    @foreach ($website->elements as $element)
                        <div class="space-y-2">
                            <a aria-label="Visit Zecchinon website" class="image-wrapper2" href="/elements">
                                <div class=" overflow-hidden h-[29rem] rounded-lg">
                                    @php
                                        $extension = pathinfo($element->image_link, PATHINFO_EXTENSION);
                                    @endphp
                                    @if(in_array(strtolower($extension), $imageExtensions))
                                        <img src="{{ asset($element->image_link) }}" alt="Media">
                                    @else
                                        <video autoplay muted loop>
                                            <source src="{{ asset($element->image_link) }}" type="video/{{ strtolower($extension) }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                                <div class="hover-text2">
                                    <div class="website-label2">
                                        ELEMENT
                                    </div>
                                    <div class="title2">
                                        {{ $element->name }}
                                    </div>
                                </div>
                            </a>
                            <p class="text-[14px] font-semibold text-[#111111] flex items-center">
                                {{ $element->name }}
                                <span class="text-[12px] font-normal text-[#6B6B6B] ml-2 mr-2">
                                    by
                                </span>
                                <a class="inline-flex items-center space-x-2 text-[12px] font-semibold text-[#111111] no-underline ml-1" href="{{ route('profile', $website->user->id) }}">
                                    <img alt="User image" class="w-5 h-5 rounded-full object-cover" height="20" src="{{ asset($website->user->image_link) }}" width="20" />
                                    <span class="underline-slide no-underline">
                                        {{ $website->user->display_name }}
                                    </span>
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
                <!-- <div class="bg-[#F9F9F9] text-[#1A1A1A] min-h-screen flex flex-col justify-between">
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
                    </div> -->
                    <div class="max-w-[1300px] mx-0 px-6 pb-10 mt-32">
                        <p class="text-[12px] font-semibold text-[#4B4B4B] mb-3 text-left">
                            Technologies &amp; Tools
                        </p>
                        <div class="flex flex-wrap gap-2 justify-start mt-10">
                            @foreach ($website->tags as $tag)
                            <a class="butto text-[9px] leading-[1.2] text-gray-900 border border-gray-300 rounded-full px-5 py-2 whitespace-nowrap font-semibold tag-button">
                                {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                        <div>
                            <p class="text-[12px] font-semibold text-[#4B4B4B] mb-3 text-left mt-20">
                                Description
                            </p>
                            <p class="text-[20px] text-[#222222] font-normal leading-[28px]">
                                {{ $website->description }}
                            </p>
                        </div>
                        <!-- <div class=" mt-[9rem] lg:mt-[9rem] text-left" id="elements">
                            <p class="text-[12px] font-normal text-[#1A1A1A] mb-3">
                                Inside look
                            </p>
                            <h1 class="text-[32px] sm:text-[36px] font-extrabold text-[#111111] leading-[1.1] mb-14">
                                Discover more
                                <br />
                                details of this SOTD.
                            </h1>

                            <div class="relative w-full rounded-md overflow-hidden group" style="width: 1300px; height: 900px;">
                                <img
                                    src="https://storage.googleapis.com/a1aa/image/26f5abd5-0bda-455d-d8e4-87e6571b2741.jpg"
                                    alt="Large blurred background image with red and orange highlight behind a smaller image of Charles Leclerc in racing suit behind a fence"
                                    class="w-full h-full object-cover transition duration-300 ease-in-out group-hover:brightness-75" />

                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-300 bg-gradient-to-t from-black/30 to-transparent"></div>

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
                        </div> -->

                        <div class="bg-gray-50 text-[#1a1a1a]">
                            <div class="max-w-[1300px] mx-auto py-12 mt-20">
                                <h1 class="text-[48px] font-extrabold leading-none tracking-tight">
                                    SOTD / SCORE
                                </h1>
                                <div class="text-[48px] font-extrabold leading-none tracking-tight mt-1">
                                    → {{ number_format($score, 2)  }} <span class="text-[12px] font-normal align-top">/ 10</span>
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
                                        <div class="mt-1">{{ number_format($website->website_votes->filter(fn($user) => $user->pivot->is_rejected == 0)->avg(fn($user) => $user->pivot->design), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 30%;">
                                        <div class="mb-1">Usability <span class="font-bold">30%</span></div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($website->website_votes->filter(fn($user) => $user->pivot->is_rejected == 0)->avg(fn($user) => $user->pivot->usability), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 20%;">
                                        <div class="mb-1">Creativity <span class="font-bold">20%</span></div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($website->website_votes->filter(fn($user) => $user->pivot->is_rejected == 0)->avg(fn($user) => $user->pivot->creativity), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 10%;">
                                        <div class="mb-1">Content <span class="font-bold">10%</span></div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <!-- No divider on last bar -->
                                        </div>
                                        <div class="mt-1">{{ number_format($website->website_votes->filter(fn($user) => $user->pivot->is_rejected == 0)->avg(fn($user) => $user->pivot->content), 2) }} / 10</div>
                                    </div>
                                </div>
                                <!-- ARCH -->
                                <div class="bg-gray-50 font-sans text-[13px] text-[#222222]">
                                    <div class="max-w-6xl mx-auto p-8">

                                        <!-- <div class="flex mb-4">
                                            <button id="communityTab" class="text-[13px] font-semibold pb-2 px-4 mr-6 ">
                                                Community Members
                                            </button>
                                            <button id="juryTab" class="text-[13px] font-normal text-[#666666] pb-2 px-4 ">
                                                Jury
                                            </button>
                                        </div> -->

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
                                                    @foreach ($website->website_votes as $vote)
                                                        <tr class="border-b border-black/20 {{ $vote->pivot->is_rejected == 1 ? 'bg-gray-500 bg-opacity-40' : '' }}">
                                                            <td class="pl-4 pr-10 py-4 align-middle w-14">
                                                                <img
                                                                    src="{{ asset($vote->image_link) }}"
                                                                    alt="Profile photo"
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
                                                    <!-- Row 2 -->
                                                    <!-- <tr class="border-b border-black/20">
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
                                                    <section>
                                                        <div class="relative w-[1100px] max-w-[1100px] sm:top-[11rem] top-[16rem] h-auto">
                                                            <div id="gradient-bg" class="absolute inset-0 z-20"></div>

                                                            
                                                            <div id="gradient-overlay"
                                                                class="absolute inset-0 z-30 bg-gradient-to-t from-gray-50 to-transparent h-[6rem] sm:h-[8rem]">
                                                            </div>
                                                        </div>
                                                        <div class="relative">
                                                            
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
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Jury Table (Initially Hidden) -->
                                        <!-- <div id="juryTable" class="hidden">
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
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($website->user_votes->isNotEmpty() > 0)
                        <div class="bg-gray-50 text-[#1a1a1a] ">
                            <div class="max-w-[1300px] mx-auto py-12 mt-20">
                                <h1 class="text-[48px] font-extrabold leading-none tracking-tight">
                                    DEV AWARD
                                </h1>
                                <div class="text-[48px] font-extrabold leading-none tracking-tight mt-1">
                                    → {{ number_format($dev_score, 2) }} <span class="text-[12px] font-normal align-top">/ 10</span>
                                </div>

                                <div class="w-full text-right mb-20">
                                    <p class="underline-slide no-underline block">Evaluation System</p>
                                </div>
                                <div class="mt-8 flex text-[10px] font-normal text-[#1a1a1a] relative select-none">
                                    <div class="flex flex-col items-start relative" style="width: 20%;">
                                        <div class="mb-1">Semantics / SEO</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->semantics), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 15%;">
                                        <div class="mb-1">Animations / Transitions</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->animations), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 10%;">
                                        <div class="mb-1">Accessibility</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->accessibility), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 20%;">
                                        <div class="mb-1">WPO</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->wpo), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 20%;">
                                        <div class="mb-1">Responsive Design</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                            <div class="bar-divider"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->responsive_design), 2) }} / 10</div>
                                    </div>
                                    <div class="flex flex-col items-start relative" style="width: 15%;">
                                        <div class="mb-1">Markup / Meta-data</div>
                                        <div class="w-full h-6 bg-[#e5e5e5] bar-container overflow-hidden relative">
                                            <div class="h-6 bg-[#d9d9d9]" style="width: 100%"></div>
                                        </div>
                                        <div class="mt-1">{{ number_format($valid_dev_votes->avg(fn($user) => $user->pivot->markup), 2) }} / 10</div>
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
                                                        <th class="text-center py-4">Semantics</th>
                                                        <th class="text-center py-4">Animations</th>
                                                        <th class="text-center py-4">Accessibility</th>
                                                        <th class="text-center py-4">WPO</th>
                                                        <th class="text-center py-4">Responsive Design</th>
                                                        <th class="text-center py-4">Markup</th>
                                                        <th class="text-center pr-4 py-4">Overall</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($website->user_votes as $vote)
                                                        <tr class="border-b border-black/20 {{ $vote->pivot->is_rejected == 1 ? 'bg-gray-500 bg-opacity-40' : '' }}">
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
                                                                    <!-- <span class="font-semibold text-[13px] ml-1">Indonesia</span>
                                                                    <span class="font-normal italic text-[13px] ml-1">*</span> -->
                                                                </div>
                                                                <!-- <div class="text-[11px] text-[#666666] select-text mt-1">reksaandhika.com</div> -->
                                                            </td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->semantics }}</td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->animations }}</td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->accessibility }}</td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->wpo }}</td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->responsive_design }}</td>
                                                            <td class="text-center py-4 align-middle">{{ $vote->pivot->markup }}</td>
                                                            <td class="relative absolute w-full m-auto font-bold w-20 h-20 text-center py-4 align-middle flex items-center justify-center text-[13px]">
                                                                {{ $vote->pivot->semantics * 0.2 + $vote->pivot->animations * 0.15 + $vote->pivot->accessibility * 0.1 + $vote->pivot->wpo * 0.2 + $vote->pivot->responsive_design * 0.2 + $vote->pivot->markup * 0.15}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <!-- Row 2 -->
                                                    <!-- <tr class="border-b border-black/20">
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
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- <div class="relative max-w-[1300px] mx-auto">
                        <div class="grid gap-6 grid-cols-3 overflow-hidden" id="card-carousel">
                            
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
                    </div> -->
                    <!-- <div class="max-w-[1300px] mx-auto">
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
                    </div> -->
                </div>
            </div>
        </div>
        <script src="js/sites.js"></script>

</x-layout>