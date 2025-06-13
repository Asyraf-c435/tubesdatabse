<x-runningtext>
</x-runningtext>
<x-layout>
  <div class="bg-gray-50 text-gray-800">
    <!-- Filter Bar -->
    <div class="flex items-center justify-between bg-neutral-200 p-1.5 max-w-7xl mx-auto rounded-xl shadow-sm mb-8">
      <div class="flex gap-2 flex-wrap">
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Type</option>
        </select>
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Category</option>
        </select>
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Quote</option>
        </select>
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Country</option>
        </select>
      </div>

      <div class="flex items-center gap-2 mt-2 md:mt-0">
        <span class="bg-orange-200 text-orange-800 font-semibold text-sm px-2 py-1 rounded-md">0</span>
        <button class="flex items-center gap-1 bg-white px-4 py-2 rounded-md text-sm text-black shadow hover:bg-gray-50">
          Reset filters
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582M20 20v-5h-.581M3 13a9 9 0 0114.36-6.36M21 11a9 9 0 01-14.36 6.36"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Judul -->
   
    <div class="bg-gray-50 flex flex-col items-center justify-center min-h-[70vh] py-0 gap-4 relative">
    <h1 class="text-[8rem] font-extrabold leading-[1] text-[#1a1a1a] relative max-w-[90vw] text-center">
        THE JOBS
        <br />
        BOARD
        <span class="absolute -right-14 top-1/2 transform -translate-y-1/2 bg-[#3aa9ff] rounded-full px-3 py-1 text-white text-[0.875rem] font-semibold tracking-wide select-none flex items-center gap-1 shadow-lg">
            HIRING
            <img alt="Megaphone icon" class="w-4 h-4" src="https://storage.googleapis.com/a1aa/image/073e9dce-f754-40cc-499e-fe34123a1dde.jpg" />
        </span>
    </h1>
    <p class="text-center text-[#1a1a1a] text-lg mt-2 max-w-[90vw]">
        Latest Vacancies in Web Design and
        <br />
        UX/UI Design
    </p>

    </div>



   <!-- Card  -->
   
    <div class='p-4'>
    <main class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <article class="bg-white rounded-xl p-6 flex flex-col justify-between shadow-sm">
        <header class="flex items-center justify-between border-b border-gray-200 pb-3 mb-4">
            <div class="flex items-center space-x-1 text-xs text-gray-600 font-semibold select-none">
            <span>∧⁹</span>
            <span>
                <a href="#" class="underline font-bold text-gray-900">AQuest</a>
            </span>
            </div>
        </header>
        <section class="mb-6">
            <h3 class="font-semibold text-gray-900 text-sm mb-2">Frontend Developer</h3>
            <p class="text-xs text-gray-600 leading-tight">
            We're looking for a Mid-Level or <span class="font-semibold">Senior Frontend</span> Developer with enthusiasm, curiosity, and determination to play a key role on our team. You'll work with the latest technologies to build and deliver creative, cutting-edge projects.At AQuest, we belie
            </p>
        </section>
        <section class="text-xs text-gray-700 border-t border-gray-200 pt-3">
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Location</dt>
            <dd class="text-right">Italy</dd>
            </dl>
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Website</dt>
            <dd class="text-right text-gray-600">aquest.it</dd>
            </dl>
            <div class="flex items-center text-gray-600 text-xs select-none">
            <i class="far fa-clock mr-2"></i>
            <span>2 days ago</span>
            <i class="fas fa-arrow-right ml-auto"></i>
            </div>
        </section>
        </article>

        <!-- Card 2 -->
        <article class="bg-white rounded-xl p-6 flex flex-col justify-between shadow-sm">
        <header class="flex items-center justify-between border-b border-gray-200 pb-3 mb-4">
            <div class="flex items-center space-x-2">
            <div class="w-7 h-7 rounded-full bg-black flex items-center justify-center text-white text-xs font-semibold select-none">LS</div>
            <a href="#" class="underline font-bold text-gray-900 text-xs select-text">Limesharp</a>
            </div>
        </header>
        <section class="mb-6">
            <h3 class="font-semibold text-gray-900 text-sm mb-2">Mid-weight UX&amp;UI Designer</h3>
            <p class="text-xs text-gray-600 leading-tight">
            —Overview limesharp is an award-winning, creatively led digital commerce agency who creates bespoke solutions for fashion, beauty &amp; lifestyle brands for the likes of Paul Smith, Creed, Anya Hindmarch, Nobody’s Child, Ellis Brigham, Strathberry, an
            </p>
        </section>
        <section class="text-xs text-gray-700 border-t border-gray-200 pt-3">
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Location</dt>
            <dd class="text-right">United Kingdom</dd>
            </dl>
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Website</dt>
            <dd class="text-right text-gray-600">limesharp.net</dd>
            </dl>
            <div class="flex items-center text-gray-600 text-xs select-none">
            <i class="far fa-clock mr-2"></i>
            <span>9 days ago</span>
            <i class="fas fa-arrow-right ml-auto"></i>
            </div>
        </section>
        </article>

        <!-- Card 3 -->
        <article class="bg-white rounded-xl p-6 flex flex-col justify-between shadow-sm">
        <header class="flex items-center justify-between border-b border-gray-200 pb-3 mb-4">
            <div class="flex items-center space-x-2 text-xs text-gray-600 font-semibold select-none">
            <div class="w-5 h-5 rounded-full border border-gray-300 flex items-center justify-center">
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
            </div>
            <a href="#" class="underline font-bold text-gray-900">Rotate°</a>
            </div>
        </header>
        <section class="mb-6">
            <h3 class="font-semibold text-gray-900 text-sm mb-2">Design Lead</h3>
            <p class="text-xs text-gray-600 leading-tight">
            Rotate° is on the hunt for a <span class="font-semibold">Design Lead</span> to help us create beautiful and effective digital experiences. <span class="text-blue-500">📘</span> About Rotate°We are a digital studio based in East London creating cutting-edge (Not cookie cutter) eCommerce. We work with brands we belie
            </p>
        </section>
        <section class="text-xs text-gray-700 border-t border-gray-200 pt-3">
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Location</dt>
            <dd class="text-right">United Kingdom</dd>
            </dl>
            <dl class="grid grid-cols-2 mb-3">
            <dt class="font-semibold">Website</dt>
            <dd class="text-right text-gray-600">studiorotate.com</dd>
            </dl>
            <div class="flex items-center text-gray-600 text-xs select-none">
            <i class="far fa-clock mr-2"></i>
            <span>14 days ago</span>
            <i class="fas fa-arrow-right ml-auto"></i>
            </div>
        </section>
        </article>
    
    </div>
    </div>
    <x-footer></x-footer>
</x-layout>