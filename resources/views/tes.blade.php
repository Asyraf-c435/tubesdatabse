<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Fisika Dasar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap");
    body {
      font-family: "Inter", sans-serif;
    }
    /* Animation for heart and star */
    @keyframes pop {
      0% {
        transform: scale(0.5);
        opacity: 0;
      }
      50% {
        transform: scale(1.3);
        opacity: 1;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
    .pop-animation {
      animation: pop 0.4s ease forwards;
    }
  </style>
 </head>
 <body class="bg-[#F7FAF9] text-[#111827]">
  <div class="max-w-6xl mx-auto px-6 py-10 flex flex-col md:flex-row md:space-x-10">
   <main class="flex-1 max-w-3xl">
    <div class="flex justify-between items-center mb-3">
     <p class="text-xs font-semibold uppercase text-[#111827]">Fisika</p>
     <button
       aria-label="Add To Favorite"
       class="flex items-center space-x-1 text-xs text-[#6B7280] hover:text-[#111827] transition-colors duration-200"
       id="favoriteBtn"
       type="button"
     >
      <span>Add To Favorite</span>
      <i
        class="far fa-heart text-base"
        id="favoriteIcon"
        style="transform-origin:center center;"
      ></i>
     </button>
    </div>
    <h1 class="text-3xl font-extrabold mb-1 leading-tight">Fisika Dasar</h1>
    <p class="text-xs text-[#6B7280] mb-6 font-semibold">By Ahmad Dumillah</p>
    <img
      alt="Basic physics drawing showing a motion graph and a person pushing a lamp with a free-body diagram"
      class="rounded-lg mb-6"
      height="250"
      src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi9rgV7CuutUCiW6mqBZ7g0PLLJp3bSLpTSUhQGMmPyrIv8V0ydRVYteAygdsXkVag_hwf6FohnkeW3XIgW0blSX5jqUNsy8LOAueQI7LHo9rx3Dsh6V3orOjnj56NlEMGpLhPnvwKVERzioFNFjV73CvEJBc6LVcxsxdgV5ek4TgBHSGo55ON0Z5hs/s1500/Gambar%20WhatsApp%202023-04-10%20pukul%2012.48.12.jpg"
      width="600"
    />
    <div
      class="flex items-center space-x-3 mb-4 max-w-xl text-[#6B7280] font-semibold text-xs"
    >
     <button
  id="commentToggleBtn"
  aria-label="Comment"
  class="flex items-center space-x-1 hover:text-[#111827] transition-colors duration-200"
  type="button"
>
  <i class="far fa-comment text-lg"></i>
  <span>2</span>
</button>
<button
       aria-label="Bookmark"
       class="flex items-center space-x-1 hover:text-[#111827] transition-colors duration-200"
       type="button"
       id="bookmarkBtn"
     >
      <i
        class="far fa-bookmark text-lg"
        id="bookmarkIcon"
        style="transform-origin:center center;"
      ></i>
      <span id="bookmarkCount">0</span>
     </button>
     <button
  aria-label="Star"
  class="flex items-center space-x-1 hover:text-[#111827] transition-colors duration-200"
  id="likeBtn"
  type="button"
>
  <i
    class="far fa-star text-lg"
    id="likeIcon"
    style="transform-origin:center center;"
  ></i>
  <span id="likeCount">0</span>
</button>

     <p class="ml-auto">
      Ratings
      <span class="font-bold text-black ml-1">4.7 / 5</span>
     </p>
    </div>
    <p class="text-[10px] text-[#6B7280] leading-tight max-w-xl mb-6">
     Kelas ini menekankan pada pendekatan konseptual dan kuantitatif melalui
     kombinasi kuliah teori, diskusi kelas, serta praktik laboratorium.
     Mahasiswa diharapkan dapat memahami dan menerapkan hukum-hukum fisika
     dalam memecahkan masalah nyata, serta mengembangkan keterampilan
     berpikir logis dan analitis.
    </p>
    <div class="flex gap-6 max-w-xs mb-10">
     <button id="showVideos"
       class="bg-black text-white text-xs font-bold rounded-full py-2 px-6 w-full"
       type="button"
     >
      Learning Videos
     </button>
     <button id="showBadge"
  class="bg-black text-white text-xs font-bold py-2 px-6 rounded-full w-full hover:bg-gray-800 transition"
>
  Get a badge
</button>

    </div>
    
    {{-- comment --}}
  <div id="commentSection" class="mt-6 hidden">
  <h2 class="text-xl font-bold mb-2">Comments</h2>

  <!-- Komentar 1 -->
  <div class="mb-4">
    <div class="flex items-start space-x-3">
      <img src="https://i.pravatar.cc/40" class="rounded-full w-10 h-10" alt="avatar" />
      <div>
        <p class="font-semibold">Jevin Fabian Louis</p>
        <p class="text-gray-700">Menurt saya kelas ini menekankan pada pendekatan konseptual dan kuantitatif melalui kombinasi kuliah teori, diskusi kelas, serta praktik laboratorium. Mahasiswa diharapkan dapat memahami dan menerapkan hukum-hukum fisika dalam memecahkan masalah nyata, serta mengembangkan keterampilan berpikir logis dan analitis.</p>
        <button class="text-sm text-blue-500 replyBtn" data-target="replyForm1">Reply</button>

        <!-- Form reply (awalnya hidden) -->
        <div id="replyForm1" class="mt-2 hidden">
          <textarea class="w-full border rounded p-2" placeholder="Tulis balasan..."></textarea>
          <button class="mt-2 px-4 py-1 bg-blue-500 text-white rounded">Kirim</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Komentar 2 -->
  <div class="mb-4">
    <div class="flex items-start space-x-3">
      <img src="https://i.pravatar.cc/40?img=2" class="rounded-full w-10 h-10" alt="avatar" />
      <div>
        <p class="font-semibold">Marvel JDK</p>
        <p class="text-gray-700">Hmm, interesting</p>
        <button class="text-sm text-blue-500 replyBtn" data-target="replyForm2">Reply</button>

        <!-- Form reply -->
        <div id="replyForm2" class="mt-2 hidden">
          <textarea class="w-full border rounded p-2" placeholder="Tulis balasan..."></textarea>
          <button class="mt-2 px-4 py-1 bg-blue-500 text-white rounded">Kirim</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Badge yang akan muncul di bawah tombol -->
<div id="badgeSection" class="mt-6 hidden transition-all duration-300">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md border border-gray-200">
    <div class="bg-gray-100 p-4 rounded flex flex-col items-center">
      <img src="/images/badge.png" alt="Badge" class="w-80 mb-4">
      <p class="text-sm text-center text-gray-700 mb-2">
        You've finished the course, claim your badge now!
      </p>
    </div>
  </div>
</div>

<div id="videoSection" class="relative mt-10 hidden">

  <!-- Garis vertikal di tengah -->
  <div class="absolute left-[144px] top-0 bottom-0 w-[2px] bg-gray-300 z-0"></div>

  <!-- Wrapper semua item -->
  <div class="space-y-10 relative z-10">

    <!-- ITEM 1 -->
    <div class="flex items-center">
      <!-- Gambar -->
      <img src="https://th.bing.com/th/id/OIP.L5qMSq7RPbAa6wWv0KxWJQHaEK?o=7rm=3&rs=1&pid=ImgDetMain&cb=idpwebp2&o=7&rm=3" class="w-32 h-20 object-cover rounded-lg" />

      <!-- Titik + garis -->
      <div class="flex flex-col items-center mx-4">
        <div class="w-3 h-3 bg-black rounded-full"></div>
        <div class="flex-1 w-[2px] bg-gray-300"></div>
      </div>

      <!-- Judul sejajar titik -->
      <p class="text-base font-semibold">Pengenalan Fisika Dasar</p>
    </div>

    <!-- ITEM 2 -->
    <div class="flex items-center">
      <img src="https://th.bing.com/th/id/OIP.W89-jNqzIWgmdDfbxnVUywHaE8?o=7rm=3&rs=1&pid=ImgDetMain&cb=idpwebp2&o=7&rm=3" class="w-32 h-20 object-cover rounded-lg" />
      <div class="flex flex-col items-center mx-4">
        <div class="w-3 h-3 bg-black rounded-full"></div>
        <div class="flex-1 w-[2px] bg-gray-300"></div>
      </div>
      <p class="text-base font-semibold">Gerak dan Gaya</p>
    </div>

    <!-- ITEM 3 -->
    <div class="flex items-center">
      <img src="/images/video3.jpg" class="w-32 h-20 object-cover rounded-lg" />
      <div class="flex flex-col items-center mx-4">
        <div class="w-3 h-3 bg-black rounded-full"></div>
        <div class="flex-1 w-[2px] bg-gray-300"></div>
      </div>
      <p class="text-base font-semibold">Kecepatan</p>
    </div>

    <!-- ITEM 4  -->
    <div class="flex items-center">
      <img src="/images/video4.jpg" class="w-32 h-20 object-cover rounded-lg" />
      <div class="flex flex-col items-center mx-4">
        <div class="w-3 h-3 bg-black rounded-full"></div>
      </div>
      <p class="text-base font-semibold">Hukum Newton I, II, III</p>
    </div>

  </div>
</div>

   </main>


   {{--  More Learning Videos--}}
   <aside class="hidden md:block w-72 space-y-4">
    <p class="text-xs font-semibold text-[#6B7280] mb-2">More Learning Videos</p>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Group of soldiers in World War II wearing helmets"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/7c7a7311-46fc-4e8e-7145-950c3be636b2.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Perang Dunia II</p>
      <p class="uppercase text-[#6B7280]">Sejarah</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Modern room with shelves and furniture representing Bangun Ruang"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/dd1d1368-7157-442d-ce40-eec3e750ca6e.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
  <p class="font-bold text-black">Bangun Ruang</p>
  <p class="uppercase text-[#6B7280] text-xs">Matematika</p>
</div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="People in a business meeting representing Akuntansi"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/9598b021-f0c1-4d69-15e8-f321afb38488.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Akuntansi</p>
      <p class="uppercase text-[#6B7280]">Ekonomi</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Perang dingin Amerika vs Soviet"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://cdn.idntimes.com/content-images/community/2019/07/soviet-era-gettyimages-89856241-a9fe5698c9a334ecb9f780f62e6686a3.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Perang dingin Amerika vs Soviet</p>
      <p class="uppercase text-[#6B7280]">Sejarah</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Classical painting representing Musik Melodis"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/7ab6a45e-e2ff-42ba-d4ee-c013b54f8cc0.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Musik Melodis</p>
      <p class="uppercase text-[#6B7280]">Seni Budaya</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Mechanical artistic sculpture representing Teori Of Everything"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/31820097-9e55-4784-479d-bc3911b7aaa0.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Teori Of Everything</p>
      <p class="uppercase text-[#6B7280]">Matematika</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="Planets and space representing Gravitasi"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/614a1b36-c446-4a58-bf95-bf316a4d295a.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Gravitasi</p>
      <p class="uppercase text-[#6B7280]">Fisika</p>
     </div>
    </div>
    <div
      class="flex space-x-3 items-center hover:bg-[#E5E7EB] rounded p-1 cursor-pointer transition-colors duration-200"
    >
     <img
       alt="People discussing math formulas on a blackboard representing Deret Aritmatika"
       class="w-36 h-24 object-cover rounded"
       height="50"
       src="https://storage.googleapis.com/a1aa/image/b62d7888-2787-4106-1f83-03fe80f2455a.jpg"
       width="80"
     />
     <div class="text-sm leading-tight">
      <p class="font-bold text-black">Deret Aritmatika</p>
      <p class="uppercase text-[#6B7280]">Seni Budaya</p>
     </div>
    </div>
   </aside>
  </div>
  <div class="max-w-6xl mx-auto px-6 pb-10">
    {{--  More Learning Videos--}}
   <button
     class="w-full max-w-xs mx-auto block bg-black text-white font-extrabold text-sm rounded-full py-3"
     type="button"
   >
    Daftar Kursus
   </button>
  </div>
<script>
  const likeBtn = document.getElementById("likeBtn");
  const likeIcon = document.getElementById("likeIcon");
  const likeCount = document.getElementById("likeCount");

  const favoriteBtn = document.getElementById("favoriteBtn");
  const favoriteIcon = document.getElementById("favoriteIcon");

  const bookmarkBtn = document.getElementById("bookmarkBtn");
  const bookmarkIcon = document.getElementById("bookmarkIcon");
  const bookmarkCount = document.getElementById("bookmarkCount"); // ⬅️ Tambahkan span id ini di HTML

  function animateIcon(icon) {
    icon.classList.remove("pop-animation");
    void icon.offsetWidth;
    icon.classList.add("pop-animation");
  }

  // ⭐ Like
  likeBtn.addEventListener("click", () => {
    let current = parseInt(likeCount.textContent, 10);

    if (likeIcon.classList.contains("far")) {
      likeIcon.classList.remove("far");
      likeIcon.classList.add("fas", "text-yellow-400");
      likeCount.textContent = current + 1;
      animateIcon(likeIcon);
    } else {
      likeIcon.classList.add("far");
      likeIcon.classList.remove("fas", "text-yellow-400");
      likeCount.textContent = current - 1;
    }
  });

  // ❤️ Favorite
  favoriteBtn.addEventListener("click", () => {
    if (favoriteIcon.classList.contains("far")) {
      favoriteIcon.classList.remove("far");
      favoriteIcon.classList.add("fas", "text-red-500");
      favoriteBtn.classList.remove("text-[#6B7280]");
      favoriteBtn.classList.add("text-red-500");
      animateIcon(favoriteIcon);
    } else {
      favoriteIcon.classList.add("far");
      favoriteIcon.classList.remove("fas", "text-red-500");
      favoriteBtn.classList.remove("text-red-500");
      favoriteBtn.classList.add("text-[#6B7280]");
    }
  });

  // 🔖 Bookmark +1 / -1
  bookmarkBtn.addEventListener("click", () => {
    let current = parseInt(bookmarkCount.textContent, 10);

    if (bookmarkIcon.classList.contains("far")) {
      bookmarkIcon.classList.remove("far");
      bookmarkIcon.classList.add("fas", "text-blue-500");
      bookmarkCount.textContent = current + 1;
      animateIcon(bookmarkIcon);
    } else {
      bookmarkIcon.classList.add("far");
      bookmarkIcon.classList.remove("fas", "text-blue-500");
      bookmarkCount.textContent = current - 1;
    }
  });

  document.querySelectorAll(".replyBtn").forEach((btn) => {
    btn.addEventListener("click", () => {
      const formId = btn.getAttribute("data-target");
      const replyForm = document.getElementById(formId);
      replyForm.classList.toggle("hidden");
    });
  });

  const commentToggleBtn = document.getElementById("commentToggleBtn");
const commentSection = document.getElementById("commentSection");

commentToggleBtn.addEventListener("click", () => {
  commentSection.classList.toggle("hidden");
});


  const badge = document.getElementById('badgeSection');
  const button = document.getElementById('showBadge');

  button.addEventListener('click', () => {
    badge.classList.toggle('hidden');
  });


  const videoBtn = document.getElementById('showVideos');
  const videoSection = document.getElementById('videoSection');

  videoBtn.addEventListener('click', () => {
    videoSection.classList.toggle('hidden');
  });
</script>

  </script>
 </body>
</html>