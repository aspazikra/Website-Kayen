<?php
session_start();
if (isset($_SESSION['admin_id'])) {
    // Kalau sudah login, langsung ke dashboard
    header("Location: adminindex.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/loginadmin.css?php echo time(); ?>">
    <link rel="stylesheet" href="../css/footer.css?php echo time(); ?>">
    <link rel="jsBeri   ta" href="js/script.js">
</head>
<body>
    <?php include 'headerloginadmin.php'; ?>
    <div class="login-page">
    <div class="login-container">
        <h1 class="login-title">Login Admin</h1>
        <h2 class="subtitle">Desa Kayen - Kecamatan Pacitan</h2>
        <h3 class="sub-subtitle">Kayen</h3>
        
        <p class="login-instruction">Silahkan Masukkan username & password untuk login</p>
        
        <div class="text-center">
        <form action="proses_login.php" method="post" class="text-center">
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>

        
        <div class="system-info">
            <div class="system-title">Sistem Informasi Desa</div>
            <h3 class="sub-subtitle">Desa Kayen</h3>
            <h4 class="sub-subtitle"> Kecamatan Pacitan</h4>
        </div>
        </div>
        </div>
    </div>
    
    <?php include '../footer.php'; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS - SUDAH ADA -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
    <!-- ========== TAMBAHKAN SCRIPT INI SETELAH BOOTSTRAP JS ========== -->
    <script>
    // Script untuk navbar toggle - TAMBAHKAN INI
    document.addEventListener('DOMContentLoaded', function() {
        console.log('🔥 Initializing navbar toggle...');
        
        // Cek apakah Bootstrap sudah tersedia
        if (typeof bootstrap === 'undefined') {
            console.error('❌ Bootstrap JS tidak ditemukan!');
            return;
        }
        
        // Ambil elemen-elemen navbar
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Debug: cek apakah elemen ditemukan
        console.log('📋 Navbar elements:', {
            toggler: !!navbarToggler,
            collapse: !!navbarCollapse,
            navLinks: navLinks.length
        });
        
        // Pastikan elemen navbar ada
        if (!navbarToggler || !navbarCollapse) {
            console.error('❌ Navbar elements tidak ditemukan!');
            console.log('💡 Pastikan header.php memiliki:');
            console.log('   - class="navbar-toggler" dengan data-bs-target="#navbarNav"');
            console.log('   - id="navbarNav" pada div collapse');
            return;
        }
        
        console.log('✅ Navbar elements found, adding event listeners...');
        
        // Event listener untuk toggle button
        navbarToggler.addEventListener('click', function() {
            console.log('🔘 Toggle button clicked');
        });
        
        // Auto-close navbar ketika nav-link diklik (khusus mobile)
        navLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                console.log('🔗 Nav link clicked:', this.textContent.trim());
                
                // Cek apakah navbar sedang terbuka (expanded)
                const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
                const isMobile = window.innerWidth < 992; // Bootstrap lg breakpoint
                
                if (isExpanded && isMobile) {
                    console.log('📱 Mobile navbar open, closing...');
                    
                    try {
                        // Tutup navbar menggunakan Bootstrap collapse
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        });
                        bsCollapse.hide();
                        console.log('✅ Navbar collapsed');
                    } catch (error) {
                        console.error('❌ Error closing navbar:', error);
                    }
                }
            });
        });
        
        // Event listeners untuk monitoring collapse events
        navbarCollapse.addEventListener('shown.bs.collapse', function () {
            console.log('✅ Navbar shown');
        });
        
        navbarCollapse.addEventListener('hidden.bs.collapse', function () {
            console.log('✅ Navbar hidden');
        });
        
        console.log('🎉 Navbar toggle initialized successfully!');
    });
    </script>
</body>

</html>