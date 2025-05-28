const communityTab = document.getElementById('communityTab');
const juryTab = document.getElementById('juryTab');
const communityTable = document.getElementById('communityTable');
const juryTable = document.getElementById('juryTable');

// Function to switch to Community tab
function switchToCommunity() {
    communityTab.classList.add('font-semibold', 'border-b-2', 'border-black');
    communityTab.classList.remove('font-normal', 'text-[#666666]');
    
    juryTab.classList.add('font-normal', 'text-[#666666]');
    juryTab.classList.remove('font-semibold', 'border-b-2', 'border-black');
    
    communityTable.classList.remove('hidden');
    juryTable.classList.add('hidden');
}

// Function to switch to Jury tab
function switchToJury() {
    juryTab.classList.add('font-semibold', 'border-b-2', 'border-black');
    juryTab.classList.remove('font-normal', 'text-[#666666]');
    
    communityTab.classList.add('font-normal', 'text-[#666666]');
    communityTab.classList.remove('font-semibold', 'border-b-2', 'border-black');
    
    juryTable.classList.remove('hidden');
    communityTable.classList.add('hidden');
}

// Set Community as active by default on page load
document.addEventListener('DOMContentLoaded', function() {
    const moreOptionsBtn = document.getElementById('more-options-btn');
    const rowsToShow = [
        document.getElementById('row-4'),
        document.getElementById('row-5'),
        document.getElementById('row-6'),
    ];
    const gradientOverlay = document.getElementById('gradient-overlay');
    const gradientBg = document.getElementById('gradient-bg');
    const moreOptionsContainer = document.getElementById('more-options-container');

    moreOptionsBtn.addEventListener('click', function() {
        // Tampilkan semua row yang tersembunyi
        rowsToShow.forEach(row => {
            row.style.display = 'table-row';
        });
        
        // Hilangkan overlay gradasi
        gradientOverlay.style.display = 'none';
        gradientBg.style.display = 'none';
        
        // Hilangkan tombol more options dan containernya
        moreOptionsContainer.style.display = 'none';
        moreOptionsBtn.style.display = 'none'; // Tambahkan ini jika tombolnya sendiri perlu dihide
    });
});


document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.getElementById('card-carousel');
  const cards = document.querySelectorAll('.card-item');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  let currentIndex = 0;
  const visibleCards = 3; // Sesuai grid-cols-3

  function updateCarousel() {
    cards.forEach((card, index) => {
      card.classList.toggle('hidden', index < currentIndex || index >= currentIndex + visibleCards);
    });

    // Update tombol
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex >= cards.length - visibleCards;
  }

  nextBtn.addEventListener('click', () => {
    if (currentIndex < cards.length - visibleCards) {
      currentIndex++;
      updateCarousel();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  updateCarousel(); // Inisialisasi
});