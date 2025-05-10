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