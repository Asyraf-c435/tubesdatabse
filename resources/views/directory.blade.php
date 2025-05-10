<x-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Directory Awwwards Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .star { color: #facc15; }
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@900&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  </head>
  <body class="bg-gray-50 text-black">

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

    <!-- Hero Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-left md:text-left text-center">
          <h1 class="text-[64px] md:text-[140px] font-extrabold uppercase leading-[0.85] tracking-[-0.05em]">
            CREATORS<br>HUB
          </h1>
          <p class="mt-6 text-gray-600 text-base md:text-lg max-w-xl">
            This community is awesome.<br class="hidden md:block">Proud of all of them.
          </p>
        </div>
      </div>
    </section>

    <!-- Directory Info -->
    <div class="text-center text-sm text-gray-600 mb-8">
      <span class="font-semibold">1850</span> professionals waiting.
    </div>


    <!-- CARD -->
    
  <main class="max-w-[1280px] mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-3 gap-6">
   <!-- Card 1 -->
   <section class="flex flex-col bg-white rounded-md shadow-sm">
    <div class="w-full rounded-t-md overflow-hidden">
     <img alt="Screenshot of Locomotive website with black background and white text arranged in a shape" class="w-full h-auto object-cover rounded-t-md" height="320" loading="lazy" src="https://storage.googleapis.com/a1aa/image/fdc08155-c860-4bfe-6154-32a76f866801.jpg" width="600"/>
    </div>
    <div class="p-6 flex flex-col flex-grow">
     <div class="flex items-center space-x-3 mb-6">
      <img alt="Locomotive logo black circle with white stylized L and M" class="w-10 h-10 rounded-full flex-shrink-0" height="40" loading="lazy" src="https://storage.googleapis.com/a1aa/image/4b59b33c-bcca-48b0-a1a4-92b648a296fd.jpg" width="40"/>
      <h2 class="text-gray-900 font-semibold text-base leading-tight">
       Locomotive
       <span class="text-xs font-normal uppercase tracking-wide">
        pro
       </span>
      </h2>
     </div>
     <dl class="flex flex-col space-y-4 text-sm text-gray-700 flex-grow">
      <div class="flex justify-between border-b border-gray-100 pb-2">
       <dt class="font-semibold">
        Location
       </dt>
       <dd class="text-gray-500">
        Canada
       </dd>
      </div>
      <div class="flex justify-between border-b border-gray-100 pb-2 pt-2">
       <dt class="font-semibold">
        Website
       </dt>
       <dd class="text-gray-500">
        locomotive.ca
       </dd>
      </div>
      <div class="flex justify-between pt-2">
       <dt class="font-semibold">
        Awards
       </dt>
       <dd>
        <table class="table-fixed border border-gray-300 text-xs text-gray-900">
         <thead>
          <tr>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            HM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTD
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTY
           </th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <td class="border border-gray-300 px-2 py-1 text-center">
            121
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            82
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            4
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            1
           </td>
          </tr>
         </tbody>
        </table>
       </dd>
      </div>
     </dl>
    </div>
   </section>
   <!-- Card 2 -->
   <section class="flex flex-col bg-white rounded-md shadow-sm">
    <div class="w-full rounded-t-md overflow-hidden">
     <img alt="Dark floral background with centered text Immersive Garden in white" class="w-full h-auto object-cover rounded-t-md" height="320" loading="lazy" src="https://storage.googleapis.com/a1aa/image/93049a05-0983-4730-3856-70a76c5639f3.jpg" width="600"/>
    </div>
    <div class="p-6 flex flex-col flex-grow">
     <div class="flex items-center space-x-3 mb-6">
      <img alt="Immersive Garden logo light circle with stylized IG letters" class="w-10 h-10 rounded-full flex-shrink-0" height="40" loading="lazy" src="https://storage.googleapis.com/a1aa/image/cb0097a5-0fa9-4bbe-69d2-954204095dbf.jpg" width="40"/>
      <h2 class="text-gray-900 font-semibold text-base leading-tight">
       Immersive Garden
       <span class="text-xs font-normal uppercase tracking-wide">
        int
       </span>
      </h2>
     </div>
     <dl class="flex flex-col space-y-4 text-sm text-gray-700 flex-grow">
      <div class="flex justify-between border-b border-gray-100 pb-2">
       <dt class="font-semibold">
        Location
       </dt>
       <dd class="text-gray-500">
        France
       </dd>
      </div>
      <div class="flex justify-between border-b border-gray-100 pb-2 pt-2">
       <dt class="font-semibold">
        Website
       </dt>
       <dd class="text-gray-500">
        immersive-g.com
       </dd>
      </div>
      <div class="flex justify-between pt-2">
       <dt class="font-semibold">
        Awards
       </dt>
       <dd>
        <table class="table-fixed border border-gray-300 text-xs text-gray-900">
         <thead>
          <tr>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            HM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTD
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTY
           </th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <td class="border border-gray-300 px-2 py-1 text-center">
            82
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            60
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            10
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            3
           </td>
          </tr>
         </tbody>
        </table>
       </dd>
      </div>
     </dl>
    </div>
   </section>
   <!-- Card 3 -->
   <section class="flex flex-col bg-white rounded-md shadow-sm">
    <div class="w-full rounded-t-md overflow-hidden">
     <img alt=".monks text in large bold cream color on dark gray background" class="w-full h-auto object-cover rounded-t-md" height="320" loading="lazy" src="https://storage.googleapis.com/a1aa/image/a759f310-316b-4c39-cd2c-5d811cd934e5.jpg" width="600"/>
    </div>
    <div class="p-6 flex flex-col flex-grow">
     <div class="flex items-center space-x-3 mb-6">
      <img alt="Monks logo dark circle with cream .monks text" class="w-10 h-10 rounded-full flex-shrink-0" height="40" loading="lazy" src="https://storage.googleapis.com/a1aa/image/b07c9045-cc8a-4cd7-21e7-403c8da098eb.jpg" width="40"/>
      <h2 class="text-gray-900 font-semibold text-base leading-tight">
       Monks
       <span class="text-xs font-normal uppercase tracking-wide">
        pro
       </span>
      </h2>
     </div>
     <dl class="flex flex-col space-y-4 text-sm text-gray-700 flex-grow">
      <div class="flex justify-between border-b border-gray-100 pb-2">
       <dt class="font-semibold">
        Location
       </dt>
       <dd class="text-gray-500">
        Netherlands
       </dd>
      </div>
      <div class="flex justify-between border-b border-gray-100 pb-2 pt-2">
       <dt class="font-semibold">
        Website
       </dt>
       <dd class="text-gray-500">
        monks.com
       </dd>
      </div>
      <div class="flex justify-between pt-2">
       <dt class="font-semibold">
        Awards
       </dt>
       <dd>
        <table class="table-fixed border border-gray-300 text-xs text-gray-900">
         <thead>
          <tr>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            HM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTD
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTM
           </th>
           <th class="border border-gray-300 px-2 py-1 font-normal">
            SOTY
           </th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <td class="border border-gray-300 px-2 py-1 text-center">
            112
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            59
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            8
           </td>
           <td class="border border-gray-300 px-2 py-1 text-center">
            4
           </td>
          </tr>
         </tbody>
        </table>
       </dd>
      </div>
     </dl>
    </div>
   </section>
  </main>
 

        














        </div>
      </div>
    </section>

    <!-- JavaScript Filter -->
    <script>
      const filterButtons = document.querySelectorAll('.filter-btn');
      const cards = document.querySelectorAll('.card');

      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          const filter = btn.dataset.filter;
          cards.forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
              card.classList.remove('hidden');
            } else {
              card.classList.add('hidden');
            }
          });
        });
      });
    </script>

  </body>
  </html>
</x-layout>
