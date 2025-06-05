document.addEventListener('DOMContentLoaded', function() {
    const floatingDiv = document.querySelector('.fixed.bottom-4'); // Pilih elemen yang ingin di-animasikan
    
    // Sembunyikan elemen awal
    floatingDiv.style.opacity = '0';
    floatingDiv.style.transform = 'translateX(-50%) translateY(20px)';
    
    let lastScrollPosition = 0;
    const scrollThreshold = 100; // Jarak scroll minimal untuk menampilkan div
    
    window.addEventListener('scroll', function() {
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        
        // Jika scroll ke bawah melebihi threshold dan elemen masih tersembunyi
        if (currentScrollPosition > scrollThreshold && lastScrollPosition <= scrollThreshold) {
            // Tampilkan dengan animasi
            floatingDiv.style.opacity = '1';
            floatingDiv.style.transform = 'translateX(-50%) translateY(0)';
            floatingDiv.style.pointerEvents = 'auto'; // Aktifkan interaksi
        } 
        // Jika scroll kembali ke atas di bawah threshold dan elemen terlihat
        else if (currentScrollPosition <= scrollThreshold && lastScrollPosition > scrollThreshold) {
            // Sembunyikan dengan animasi
            floatingDiv.style.opacity = '0';
            floatingDiv.style.transform = 'translateX(-50%) translateY(20px)';
            floatingDiv.style.pointerEvents = 'none'; // Nonaktifkan interaksi
        }
        
        lastScrollPosition = currentScrollPosition;
    });
});