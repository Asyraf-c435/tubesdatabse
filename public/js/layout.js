// SISTEM HAPUS SILANG PADA SEARCH BAR
const searchInput = document.getElementById('searchInput');
const clearBtn = document.getElementById('clearBtn');

searchInput.addEventListener('input', () => {
    if (searchInput.value.length > 0) {
        clearBtn.classList.remove('hidden');
    } else {
        clearBtn.classList.add('hidden');
    }
});

clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    clearBtn.classList.add('hidden');
    searchInput.focus();
});

const sidebar = document.getElementById('sidebar');
const links = sidebar.querySelectorAll('a');
const activeLink = document.getElementById('active-link');

// On page load, set the first link as active
window.addEventListener('DOMContentLoaded', () => {
    links.forEach(l => {
        l.classList.remove('active-item', 'font-semibold', 'text-black');
        l.classList.add('text-gray-700');
    });
    activeLink.classList.add('active-item', 'font-semibold');
    activeLink.classList.remove('text-gray-700');
});

links.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        // Remove active styles from all
        links.forEach(l => {
            l.classList.remove('active-item', 'font-semibold', 'text-black');
            l.classList.add('text-gray-700');
        });
        // Add active styles to clicked
        link.classList.add('active-item', 'font-semibold');
        link.classList.remove('text-gray-700');
    });
});





const exploreBtn = document.getElementById('explore-btn');
const closeExploreBtn = document.getElementById('close-explore-btn');
const modalOverlay = document.getElementById('modal-overlay');
const exploreModal = document.getElementById('explore-modal');
const mainNav = document.getElementById('main-nav');
const body = document.body;

exploreBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modalOverlay.style.display = 'block';
    exploreModal.style.display = 'block';
    setTimeout(() => {
        exploreModal.classList.add('active');
        mainNav.classList.add('navbar-blur');
        body.classList.add('overlay-active');
    }, 10);
});

function closeModal() {
    exploreModal.classList.remove('active');
    setTimeout(() => {
        modalOverlay.style.display = 'none';
        exploreModal.style.display = 'none';
        mainNav.classList.remove('navbar-blur');
        body.classList.remove('overlay-active');
    }, 300);
}

closeExploreBtn.addEventListener('click', closeModal);
modalOverlay.addEventListener('click', closeModal);

  // Data gambar untuk setiap card
  document.addEventListener('DOMContentLoaded', function() {
    // Data gambar untuk setiap card
    const cardImages = {
        1: {
            images: [
                "https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg",
                "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=NK+1",
                "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=NK+2",
                "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=NK+3",
                "https://via.placeholder.com/176x112/FFFF00/000000?text=NK+4"
            ],
            currentIndex: 0
        },
        2: {
            images: [
                "https://storage.googleapis.com/a1aa/image/36f9a05d-f697-4b9b-25c8-c16d88311ae6.jpg",
                "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=AREA+1",
                "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=AREA+2",
                "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=AREA+3",
                "https://via.placeholder.com/176x112/FFFF00/000000?text=AREA+4"
            ],
            currentIndex: 0
        },
        3: {
            images: [
                "https://storage.googleapis.com/a1aa/image/55e5acc8-1f50-4bf7-2908-a6b12b79fa4b.jpg",
                "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=Bachoo+1",
                "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=Bachoo+2",
                "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=Bachoo+3",
                "https://via.placeholder.com/176x112/FFFF00/000000?text=Bachoo+4"
            ],
            currentIndex: 0
        }
    };

    // Inisialisasi semua card
    for (const cardId in cardImages) {
        initCard(cardId);
    }

    function initCard(cardId) {
        const dotsContainer = document.getElementById(`card${cardId}-dots`);
        const imageElement = document.getElementById(`card${cardId}-image`);
        const images = cardImages[cardId].images;
        
        // Kosongkan container dots
        dotsContainer.innerHTML = '';
        
        // Buat dots berdasarkan jumlah gambar
        images.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.className = `dot-btn w-1.5 h-1.5 rounded-full bg-white focus:outline-none ${
                index === cardImages[cardId].currentIndex ? 'opacity-100' : 'opacity-30'
            }`;
            dot.dataset.index = index;
            dotsContainer.appendChild(dot);
            
            dot.addEventListener('click', function() {
                changeImage(cardId, index);
            });
        });
        
        // Set gambar awal
        imageElement.src = images[cardImages[cardId].currentIndex];
    }

    function changeImage(cardId, index) {
        // Update current index
        cardImages[cardId].currentIndex = index;
        
        // Update dots
        const dots = document.querySelectorAll(`#card${cardId}-dots .dot-btn`);
        dots.forEach((dot, dotIndex) => {
            if (dotIndex === index) {
                dot.classList.remove('opacity-30');
                dot.classList.add('opacity-100');
            } else {
                dot.classList.remove('opacity-100');
                dot.classList.add('opacity-30');
            }
        });
        
        // Update gambar dengan efek fade
        const imageElement = document.getElementById(`card${cardId}-image`);
        imageElement.style.opacity = '0';
        setTimeout(() => {
            imageElement.src = cardImages[cardId].images[index];
            imageElement.style.opacity = '1';
        }, 300);
    }
});