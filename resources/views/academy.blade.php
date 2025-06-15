<x-runningtext>
</x-runningtext>
<x-layout>
  
  <div class="bg-gray-50 text-gray500 ">

    <!-- Filter -->
    <div class="flex items-center justify-between bg-neutral-200 p-1.5 max-w-7xl mx-auto rounded-xl shadow-sm mb-8">
      <div class="flex gap-2 flex-wrap">
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Category</option>
        </select>
        <select class="px-4 py-2 rounded-md bg-white text-black shadow text-sm">
          <option>Tools</option>
        </select>
      </div>

      <div class="flex items-center gap-2 mt-2 md:mt-0">
        <span class="bg-orange-200 text-orange-800 font-semibold text-sm px-2 py-1 rounded-md">0</span>
        <button class="flex items-center gap-1 bg-white px-4 py-2 rounded-md text-sm text-black shadow hover:bg-gray-50">
          Reset filters
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582M20 20v-5h-.581M3 13a9 9 0 0114.36-6.36M21 11a9 9 0 01-14.36 6.36" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Judul -->
    <div class="bg-gray-50 flex items-center justify-center py-16 px-6">
      <div class="text-center max-w-2xl">
        <p class="text-[15px] font-normal text-[#222222] mb-2">Learn from the Best</p>
        <h1 class="text-[80px] font-extrabold text-[#222222] leading-[1.1] mb-4">ACADEMY</h1>
        <p class="text-[22px] font-normal text-[#222222] leading-[1.4]">
          Shape your future in digital design and<br />
          creative coding.
        </p>
      </div>
    </div>

    <!-- Card -->
    <main class="max-w-[1280px] mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Card 1 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="relative">
          <img alt="Man with beard and cap showing phone and laptop with Figma logo on table in modern room" class="w-full h-[180px] object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/640a8491-687b-40e9-982c-3fc06e1b66e6.jpg" width="600" />
          <div class="absolute top-3 right-3 bg-[#fff9b1] text-[10px] font-semibold px-2 py-[2px] rounded-md select-none">
            Special offer
          </div>
          <img alt="Figma logo icon on bottom left corner" class="absolute bottom-3 left-3 w-10 h-10 rounded-md" height="40" loading="lazy" src="https://storage.googleapis.com/a1aa/image/1abda417-482f-486c-3d68-6b1a2be007e9.jpg" width="40" />
        </div>
        <div class="p-4 border-b border-gray-100">
          <h2 class="text-[15px] font-semibold leading-snug text-[#111827]">
            Learn UI Design with Figma from Scratch
          </h2>
          <span class="ml-2 text-[10px] font-normal text-gray-600 border border-gray-300 rounded px-1.5 py-[1px] select-none float-right">
            Offer
          </span>
        </div>
        <div class="p-4 space-y-3 text-[13px] text-gray-900">
          <p class="flex flex-wrap items-center gap-1 text-[11px] text-gray-700 font-normal">
            <span>
              By
            </span>
            <span class="font-semibold">
              Daniele Buffa
            </span>
            <span class="ml-auto text-[10px] text-gray-500 font-normal">
              91% off
            </span>
            <span class="line-through text-[10px] text-[#fca5a5] font-normal">
              $110
            </span>
            <span class="font-extrabold text-[18px]">
              9.99
            </span>
            <span class="text-[11px] font-normal">
              USD
            </span>
          </p>
          <p class="flex items-center justify-between text-[11px] font-semibold text-gray-700">
            <span>
              Score
              <span class="font-normal">
                4.9/5
              </span>
            </span>
            <i class="fas fa-arrow-right">
            </i>
          </p>
          <div class="h-[3px] w-full bg-[#fef3c7] rounded-full">
            <div class="h-[3px] w-[40%] bg-[#facc15] rounded-full">
            </div>
          </div>
        </div>
      </article>
      <!-- Card 2 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="relative">
          <img alt="Two people sitting at table with snacks and devices, casual clothing" class="w-full h-[180px] object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/4a7f0503-1fd6-4eed-0fa8-c8deac8145d0.jpg" width="600" />
          <div class="absolute top-3 right-3 bg-[#fff9b1] text-[10px] font-semibold px-2 py-[2px] rounded-md select-none">
            Special offer
          </div>
        </div>
        <div class="p-4 border-b border-gray-100">
          <h2 class="text-[15px] font-semibold leading-snug text-[#111827]">
            Nordic Design Intensive Course: Complete Branding
          </h2>
          <span class="ml-2 text-[10px] font-normal text-gray-600 border border-gray-300 rounded px-1.5 py-[1px] select-none float-right">
            Offer
          </span>
        </div>
        <div class="p-4 space-y-3 text-[13px] text-gray-900">
          <p class="flex flex-wrap items-center gap-1 text-[11px] text-gray-700 font-normal">
            <span>
              By
            </span>
            <span class="font-semibold">
              Hmmm Creative Studio
            </span>
            <span class="ml-auto text-[10px] text-gray-500 font-normal">
              88% off
            </span>
            <span class="line-through text-[10px] text-[#fca5a5] font-normal">
              $100
            </span>
            <span class="font-extrabold text-[18px]">
              12
            </span>
            <span class="text-[11px] font-normal">
              USD
            </span>
          </p>
          <p class="flex items-center justify-between text-[11px] font-semibold text-gray-700">
            <span>
              Score
              <span class="font-normal">
                5/5
              </span>
            </span>
            <i class="fas fa-arrow-right">
            </i>
          </p>
          <div class="h-[3px] w-full bg-[#fef3c7] rounded-full">
            <div class="h-[3px] w-[50%] bg-[#facc15] rounded-full">
            </div>
          </div>
        </div>
      </article>
      <!-- Card 3 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="relative">
          <img alt="Man with glasses holding laptop with colorful screen in office" class="w-full h-[180px] object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/b0e37dca-287a-4aab-6dff-c83c04a35d98.jpg" width="600" />
          <div class="absolute top-3 right-3 bg-[#fff9b1] text-[10px] font-semibold px-2 py-[2px] rounded-md select-none">
            Special offer
          </div>
        </div>
        <div class="p-4 border-b border-gray-100">
          <h2 class="text-[15px] font-semibold leading-snug text-[#111827]">
            Innovative Web Design in Figma: A Step-by-Step Process
          </h2>
          <span class="ml-2 text-[10px] font-normal text-gray-600 border border-gray-300 rounded px-1.5 py-[1px] select-none float-right">
            Offer
          </span>
        </div>
        <div class="p-4 space-y-3 text-[13px] text-gray-900">
          <p class="flex flex-wrap items-center gap-1 text-[11px] text-gray-700 font-normal">
            <span>
              By
            </span>
            <span class="font-semibold">
              Louis Paquet
            </span>
            <span class="ml-auto text-[10px] text-gray-500 font-normal">
              88% off
            </span>
            <span class="line-through text-[10px] text-[#fca5a5] font-normal">
              $100
            </span>
            <span class="font-extrabold text-[18px]">
              12
            </span>
            <span class="text-[11px] font-normal">
              USD
            </span>
          </p>
          <p class="flex items-center justify-between text-[11px] font-semibold text-gray-700">
            <span>
              Score
              <span class="font-normal">
                5/5
              </span>
            </span>
            <i class="fas fa-arrow-right">
            </i>
          </p>
          <div class="h-[3px] w-full bg-[#fef3c7] rounded-full">
            <div class="h-[3px] w-[50%] bg-[#facc15] rounded-full">
            </div>
          </div>
        </div>
      </article>
      <!-- Card 4 -->
      <article class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="relative">
          <img alt="Man with glasses sitting at wooden table with laptop and books" class="w-full h-[180px] object-cover" height="300" loading="lazy" src="https://storage.googleapis.com/a1aa/image/ddbb2c1b-e77c-4e31-77df-81bb04ba1f5d.jpg" width="600" />
          <div class="absolute top-3 right-3 bg-[#fff9b1] text-[10px] font-semibold px-2 py-[2px] rounded-md select-none">
            Special offer
          </div>
        </div>
        <div class="p-4 border-b border-gray-100">
          <h2 class="text-[15px] font-semibold leading-snug text-[#111827]">
            Learn Figma from 0 to 100 (10 Courses)
          </h2>
          <span class="ml-2 text-[10px] font-normal text-gray-600 border border-gray-300 rounded px-1.5 py-[1px] select-none float-right">
            Offer
          </span>
        </div>
        <div class="p-4 space-y-3 text-[13px] text-gray-900">
          <p class="flex flex-wrap items-center gap-1 text-[11px] text-gray-700 font-normal">
            <span>
              By
            </span>
            <span class="font-semibold">
              Mirko Santangelo
            </span>
            <span class="ml-auto text-[10px] text-gray-500 font-normal">
              88% off
            </span>
            <span class="line-through text-[10px] text-[#fca5a5] font-normal">
              $100
            </span>
            <span class="font-extrabold text-[18px]">
              12
            </span>
            <span class="text-[11px] font-normal">
              USD
            </span>
          </p>
          <p class="flex items-center justify-between text-[11px] font-semibold text-gray-700">
            <span>
              Score
              <span class="font-normal">
                5/5
              </span>
            </span>
            <i class="fas fa-arrow-right">
            </i>
          </p>
          <div class="h-[3px] w-full bg-[#fef3c7] rounded-full">
            <div class="h-[3px] w-[50%] bg-[#facc15] rounded-full">
            </div>
          </div>
        </div>
      </article>
    </main>
  </div>
</x-layout>