document.addEventListener('DOMContentLoaded', function() {
    const moreOptionsBtn = document.getElementById('more-options-btn');
    const rowsToShow = [
        document.getElementById('row-5'),
        document.getElementById('row-6'),
        document.getElementById('row-7'),
        document.getElementById('row-8'),
        document.getElementById('row-9'),
        document.getElementById('row-10'),
      
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
        
        // Hilangkan tombol more options
        moreOptionsContainer.style.display = 'none';
    });
});

const shareButton = document.getElementById('shareButton');
    const closeButton = document.getElementById('closeButton');
    const socialBox = document.getElementById('socialBox');

    shareButton.addEventListener('click', () => {
        socialBox.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');
        socialBox.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
    });

    closeButton.addEventListener('click', () => {
        socialBox.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        socialBox.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
    });


const header = document.getElementById('main-header');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 0) {
            header.classList.remove('-translate-y-full');
        } else {
            header.classList.add('-translate-y-full');
        }
    });

    // Fungsi share button
    const shareBtn = document.getElementById('header-share-btn');
    const closeBtn = document.getElementById('social-close-btn');
    const socialBoxes = document.getElementById('header-social-box');

    shareBtn.addEventListener('click', function(e) {
        e.preventDefault();
        socialBoxes.classList.toggle('opacity-0');
        socialBoxes.classList.toggle('scale-95');
        socialBoxes.classList.toggle('pointer-events-none');
    });

    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        socialBoxes.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
    });

document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('#stickyBar a');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            // Hapus class active dari semua tab
            tabs.forEach(t => t.classList.remove('active-tab'));
            
            // Tambahkan class active ke tab yang diklik
            this.classList.add('active-tab');
            
            // Simpan tab aktif di localStorage jika ingin bertahan saat refresh
            localStorage.setItem('activeTab', this.getAttribute('href'));
        });
        
        // Cek apakah tab ini adalah tab aktif saat load
        if (localStorage.getItem('activeTab') === tab.getAttribute('href')) {
            tab.classList.add('active-tab');
        }
    });
    
    // Hapus active state saat klik di luar tab
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#stickyBar a')) {
            tabs.forEach(t => t.classList.remove('active-tab'));
        }
    });
});