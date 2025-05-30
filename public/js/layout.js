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
            // Langsung set display dan remove hidden
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
                // Contoh: redirect ke dashboard atau update UI
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
                
                // Tampilkan pesan sukses
                showSuccessMessage('Account created successfully! Please check your email for verification.');
                
                // Tutup modal setelah delay singkat
                setTimeout(() => {
                    hideAllSections();
                }, 1500);
                
                // Tambahkan logic registrasi sebenarnya di sini
                // Contoh: kirim data ke server, redirect ke halaman verifikasi
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
const sidebar = document.getElementById('sidebar');
if (sidebar) {
    const links = sidebar.querySelectorAll('a');
    const activeLink = document.getElementById('active-link');

    // On page load, set the first link as active
    window.addEventListener('DOMContentLoaded', () => {
        links.forEach(l => {
            l.classList.remove('active-item', 'font-semibold', 'text-black');
            l.classList.add('text-gray-700');
        });
        if (activeLink) {
            activeLink.classList.add('active-item', 'font-semibold');
            activeLink.classList.remove('text-gray-700');
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