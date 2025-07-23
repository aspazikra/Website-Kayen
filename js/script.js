// Tampilkan popup setelah halaman dimuat
window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('kcmplusPopup').classList.add('active');
    }, 3000); // Muncul setelah 3 detik
});

// Fungsi untuk menutup popup
function closePopupKcmPlus() {
    const popup = document.getElementById('kcmplusPopup');
    popup.classList.remove('active');
    setTimeout(() => {
        popup.style.display = 'none';
    }, 300); // Sesuaikan dengan durasi transisi CSS
}

// Tutup popup ketika klik di luar area popup
document.addEventListener('click', function(e) {
    const popup = document.getElementById('kcmplusPopup');
    if (!popup.contains(e.target)) {
        closePopupKcmPlus();
    }
});