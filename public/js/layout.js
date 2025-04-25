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