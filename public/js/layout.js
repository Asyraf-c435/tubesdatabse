// SISTEM LOGIN DAN REGISTER MODAL - DIPERBAIKI
document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen dengan ID yang spesifik
    const loginSection = document.getElementById('loginSection');
    const registerSection = document.getElementById('registerSection');
    const switchToLoginBtn = document.getElementById('loginButton');
    const switchToRegisterBtn = document.getElementById('registerButton');
    const body = document.body;
    
    // Ambil navbar buttons dengan ID yang baru
    const navLoginBtn = document.getElementById('nav-login-btn');
    const navRegisterBtn = document.getElementById('nav-register-btn');
    
    console.log('Login section:', loginSection);
    console.log('Register section:', registerSection);
    console.log('Nav login button:', navLoginBtn);
    console.log('Nav register button:', navRegisterBtn);
    
    // Function untuk menampilkan login section
    function showLoginSection() {
        console.log('Showing login section');
        hideAllSections();
        
        if (loginSection) {
            loginSection.classList.remove('hidden');
            loginSection.style.display = 'flex';
            loginSection.style.position = 'fixed';
            loginSection.style.top = '0';
            loginSection.style.left = '0';
            loginSection.style.width = '100%';
            loginSection.style.height = '100%';
            loginSection.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            loginSection.style.zIndex = '9999';
            body.style.overflow = 'hidden';
            
            // Set opacity untuk animasi yang smooth
            loginSection.style.opacity = '0';
            loginSection.style.transition = 'opacity 0.3s ease-in-out';
            
            // Trigger animation setelah element sudah visible
            requestAnimationFrame(() => {
                loginSection.style.opacity = '1';
            });
        }
    }
    
    // Function untuk menampilkan register section
    function showRegisterSection() {
        console.log('Showing register section');
        hideAllSections();
        
        if (registerSection) {
            // Langsung set display dan remove hidden
            registerSection.classList.remove('hidden');
            registerSection.style.display = 'flex';
            registerSection.style.position = 'fixed';
            registerSection.style.top = '0';
            registerSection.style.left = '0';
            registerSection.style.width = '100%';
            registerSection.style.height = '100%';
            registerSection.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            registerSection.style.zIndex = '9999';
            body.style.overflow = 'hidden';
            
            // Set opacity untuk animasi yang smooth
            registerSection.style.opacity = '0';
            registerSection.style.transition = 'opacity 0.3s ease-in-out';
            
            // Trigger animation setelah element sudah visible
            requestAnimationFrame(() => {
                registerSection.style.opacity = '1';
            });
        }
    }
    
    // Function untuk menyembunyikan semua section
    function hideAllSections() {
        [loginSection, registerSection].forEach(section => {
            if (section && !section.classList.contains('hidden')) {
                // Set transition untuk smooth closing
                section.style.transition = 'opacity 0.3s ease-in-out';
                section.style.opacity = '0';
                
                // Tunggu animasi selesai baru hide element
                setTimeout(() => {
                    section.classList.add('hidden');
                    section.style.display = 'none';
                }, 300);
            }
        });
        body.style.overflow = 'auto';
    }
    
    // Function untuk menampilkan notifikasi sukses
    function showSuccessMessage(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.innerHTML = `
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
    
    // Function untuk menampilkan notifikasi error
    function showErrorMessage(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.innerHTML = `
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
    
    // Event listeners untuk navbar buttons
    if (navLoginBtn) {
        console.log('Adding event listener to nav login button');
        navLoginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Nav login button clicked');
            showLoginSection();
        });
    }
    
    if (navRegisterBtn) {
        console.log('Adding event listener to nav register button');
        navRegisterBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Nav register button clicked');
            showRegisterSection();
        });
    }
    
    // Event listeners untuk switch buttons (dalam modal)
    if (switchToLoginBtn) {
        switchToLoginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Switch to login clicked');
            showLoginSection();
        });
    }
    
    if (switchToRegisterBtn) {
        switchToRegisterBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Switch to register clicked');
            showRegisterSection();
        });
    }
    
    // Event listener untuk menutup modal ketika klik di luar area modal
    [loginSection, registerSection].forEach(section => {
        if (section) {
            section.addEventListener('click', function(e) {
                // Hanya tutup jika yang diklik adalah background overlay, bukan konten modal
                if (e.target === section) {
                    hideAllSections();
                }
            });
        }
    });
    
    // Event listener untuk tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            hideAllSections();
        }
    });
    
    // Function untuk menambahkan tombol close (X)
    function addCloseButtons() {
        [loginSection, registerSection].forEach(section => {
            if (section) {
                const existingCloseBtn = section.querySelector('.modal-close-btn');
                if (!existingCloseBtn) {
                    const closeBtn = document.createElement('button');
                    closeBtn.className = 'modal-close-btn absolute top-4 right-4 text-white hover:text-gray-300 text-3xl z-50 bg-black bg-opacity-20 rounded-full w-10 h-10 flex items-center justify-center';
                    closeBtn.innerHTML = '&times;';
                    closeBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        hideAllSections();
                    });
                    
                    section.appendChild(closeBtn);
                }
            }
        });
    }
    
    // Panggil function untuk menambahkan close buttons
    addCloseButtons();
    
    // Inisialisasi - pastikan semua section tersembunyi saat page load
    if (loginSection) {
        loginSection.classList.add('hidden');
        loginSection.style.display = 'none';
    }
    if (registerSection) {
        registerSection.classList.add('hidden');
        registerSection.style.display = 'none';
    }
    
    // Form submission handlers
    const loginForm = document.querySelector('#loginSection form');
    const registerForm = document.querySelector('#registerSection form');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const email = loginForm.querySelector('input[type="text"]').value;
            const password = loginForm.querySelector('input[type="password"]').value;
            const keepLoggedIn = loginForm.querySelector('#keep-logged').checked;
            
            // Validasi basic
            if (!email || !password) {
                showErrorMessage('Please fill in all required fields');
                return;
            }
            
            console.log('Login attempt:', {
                email: email,
                password: password,
                keepLoggedIn: keepLoggedIn
            });
            
            // Tambahkan loading state pada button
            const submitBtn = loginForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Logging in...';
            submitBtn.disabled = true;
            
            // Simulasi delay untuk proses login
            setTimeout(() => {
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                
                // Tampilkan pesan sukses
                showSuccessMessage('Login successful! Welcome back.');
                
                // Tutup modal setelah delay singkat
                setTimeout(() => {
                    hideAllSections();
                }, 1500);
                
                // Tambahkan logic login sebenarnya di sini
                // Contoh: redirect ke dashboard atau update U
            }, 2000);
        });
    }
    
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const username = registerForm.querySelector('#reg-username').value;
            const email = registerForm.querySelector('#reg-email').value;
            const password = registerForm.querySelector('#reg-password').value;
            const repeatPassword = registerForm.querySelector('#repeat-password').value;
            const contactEmail = registerForm.querySelector('#contact-email').checked;
            const acceptTerms = registerForm.querySelector('#terms').checked;
            
            // Basic validation
            if (!username || !email || !password || !repeatPassword) {
                showErrorMessage('Please fill in all required fields');
                return;
            }
            
            if (password !== repeatPassword) {
                showErrorMessage('Passwords do not match');
                return;
            }
            
            if (!acceptTerms) {
                showErrorMessage('Please accept the Terms and Conditions');
                return;
            }
            
            console.log('Registration attempt:', {
                username: username,
                email: email,
                password: password,
                contactEmail: contactEmail,
                acceptTerms: acceptTerms
            });
            
            // Tambahkan loading state pada button
            const submitBtn = registerForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Creating Account...';
            submitBtn.disabled = true;
            
            // Simulasi delay untuk proses registrasi
            setTimeout(() => {
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                
     
                showSuccessMessage('Account created successfully! Please check your email for verification.');
                
    
                setTimeout(() => {
                    hideAllSections();
                }, 1500);
                
               
            }, 2000);
        });
    }
});

// SISTEM HAPUS SILANG PADA SEARCH BAR
const searchInput = document.getElementById('searchInput');
const clearBtn = document.getElementById('clearBtn');
const searchInputModal = document.getElementById('searchInputModal');
const clearBtnModal = document.getElementById('clearBtnModal');

// Search functionality untuk navbar
if (searchInput && clearBtn) {
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
}

// Search functionality untuk modal
if (searchInputModal && clearBtnModal) {
    searchInputModal.addEventListener('input', () => {
        if (searchInputModal.value.length > 0) {
            clearBtnModal.classList.remove('hidden');
        } else {
            clearBtnModal.classList.add('hidden');
        }
    });

    clearBtnModal.addEventListener('click', () => {
        searchInputModal.value = '';
        clearBtnModal.classList.add('hidden');
        searchInputModal.focus();
    });
}

// SISTEM SIDEBAR ACTIVE LINK
// SISTEM SIDEBAR ACTIVE LINK DAN TOGGLE SECTION
const sidebar = document.getElementById('sidebar');
if (sidebar) {
    const links = sidebar.querySelectorAll('a');
    const activeLink = document.getElementById('active-link');
    const sections = document.querySelectorAll('main > section'); // Ambil semua section

    // Sembunyikan semua section kecuali yang pertama (Awards)
    function hideAllSections() {
        sections.forEach(section => {
            section.style.display = 'none';
        });
    }

    // Tampilkan section berdasarkan data-item
    function showSection(itemName) {
        hideAllSections();
        const sectionToShow = document.querySelector(`section[data-section="${itemName}"]`);
        if (sectionToShow) {
            sectionToShow.style.display = 'flex';
        }
    }

    // On page load, set the first link as active dan tampilkan section Awards
    window.addEventListener('DOMContentLoaded', () => {
        links.forEach(l => {
            l.classList.remove('active-item', 'font-semibold', 'text-black');
            l.classList.add('text-gray-700');
        });
        
        if (activeLink) {
            activeLink.classList.add('active-item', 'font-semibold');
            activeLink.classList.remove('text-gray-700');
            showSection(activeLink.dataset.item);
        }
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
            
            
            showSection(link.dataset.item);
        });
    });
}

// SISTEM EXPLORE MODAL
const exploreBtn = document.getElementById('explore-btn');
const closeExploreBtn = document.getElementById('close-explore-btn');
const modalOverlay = document.getElementById('modal-overlay');
const exploreModal = document.getElementById('explore-modal');
const mainNav = document.getElementById('main-nav');

if (exploreBtn && exploreModal) {
    exploreBtn.addEventListener('click', (e) => {
        e.preventDefault();
        modalOverlay.style.display = 'block';
        exploreModal.style.display = 'block';
        setTimeout(() => {
            exploreModal.classList.add('active');
            if (mainNav) mainNav.classList.add('navbar-blur');
            document.body.classList.add('overlay-active');
        }, 10);
    });

    function closeModal() {
        if (exploreModal) {
            exploreModal.classList.remove('active');
            setTimeout(() => {
                modalOverlay.style.display = 'none';
                exploreModal.style.display = 'none';
                if (mainNav) mainNav.classList.remove('navbar-blur');
                document.body.classList.remove('overlay-active');
            }, 300);
        }
    }

    if (closeExploreBtn) closeExploreBtn.addEventListener('click', closeModal);
    if (modalOverlay) modalOverlay.addEventListener('click', closeModal);
}

document.addEventListener('DOMContentLoaded', function() {
    const stickyBar = document.getElementById('stickyBar');
    let lastScrollPosition = 0;
    const scrollThreshold = 100; // Jarak scroll untuk memunculkan sticky bar (dalam px)

    window.addEventListener('scroll', function() {
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        
        // Jika scroll ke bawah melebihi threshold dan sticky bar masih hidden
        if (currentScrollPosition > scrollThreshold && lastScrollPosition < currentScrollPosition) {
            stickyBar.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
            stickyBar.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
        } 
        // Jika scroll ke atas atau kembali ke atas halaman
        else if (currentScrollPosition < scrollThreshold || currentScrollPosition < lastScrollPosition) {
            stickyBar.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
            stickyBar.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
        }
        
        lastScrollPosition = currentScrollPosition;
    });
});


// Data gambar untuk semua card
const cardImages = {
    1: [
        "https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg",
        "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=Card1-1",
        "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=Card1-2",
        "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=Card1-3",
        "https://via.placeholder.com/176x112/FFFF00/000000?text=Card1-4"
    ],
    2: [
        "https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg",
        "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=Card2-1",
        "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=Card2-2",
        "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=Card2-3",
        "https://via.placeholder.com/176x112/FFFF00/000000?text=Card2-4"
    ],
    3: [
        "https://storage.googleapis.com/a1aa/image/0a3289ca-9781-4784-c354-f9a097182398.jpg",
        "https://via.placeholder.com/176x112/0000FF/FFFFFF?text=Card3-1",
        "https://via.placeholder.com/176x112/00FF00/FFFFFF?text=Card3-2",
        "https://via.placeholder.com/176x112/FF0000/FFFFFF?text=Card3-3",
        "https://via.placeholder.com/176x112/FFFF00/000000?text=Card3-4"
    ]
};

function changeImage(clickedDot) {
    const cardId = clickedDot.getAttribute('data-card');
    const imageIndex = parseInt(clickedDot.getAttribute('data-index'));
    const imageElement = document.getElementById(`card${cardId}-image`);
    
    // Validasi data index
    if (isNaN(imageIndex) || imageIndex < 0 || imageIndex >= cardImages[cardId].length) {
        console.error('Invalid image index:', imageIndex);
        return;
    }
    
    // Efek transisi
    imageElement.style.opacity = '0';
    setTimeout(() => {
        imageElement.src = cardImages[cardId][imageIndex];
        imageElement.style.opacity = '1';
    }, 300);
    
    // Update semua dot di card tersebut
    const dotsContainer = document.getElementById(`card${cardId}-dots`);
    const allDots = dotsContainer.querySelectorAll('.dot-btn');
    
    allDots.forEach((dot, idx) => {
        const dotIndex = parseInt(dot.getAttribute('data-index'));
        if (dotIndex === imageIndex) {
            dot.classList.remove('opacity-30');
            dot.classList.add('opacity-100');
        } else {
            dot.classList.remove('opacity-100');
            dot.classList.add('opacity-30');
        }
    });
}

// Inisialisasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Perbaikan untuk semua card
    for (let cardId = 1; cardId <= 3; cardId++) {
        const dotsContainer = document.getElementById(`card${cardId}-dots`);
        if (!dotsContainer) continue;
        
        const firstDot = dotsContainer.querySelector('.dot-btn');
        if (firstDot) {
            firstDot.classList.remove('opacity-30');
            firstDot.classList.add('opacity-100');
        }
        
        // Perbaikan: Pastikan semua dot memiliki index unik
        const allDots = dotsContainer.querySelectorAll('.dot-btn');
        allDots.forEach((dot, index) => {
            dot.setAttribute('data-index', index);
        });
    }
});


