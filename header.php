  <header style="background: linear-gradient(135deg, #29a3f5 0%, #1e88e5 100%) !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); position: sticky; top: 0; z-index: 1030;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: transparent !important;">
      <div class="container">
        
        <!-- Logo dengan efek hover -->
        <a class="navbar-brand d-flex align-items-center" href="https://pacitankab.go.id" style="transition: transform 0.3s ease;">
          <img src="https://pacitankab.go.id/wp-content/uploads/2025/07/logo-header_pth.webp"
              alt="Logo Pemerintah Kabupaten Pacitan" height="60"
              style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));">
        </a>

        <!-- Tombol toggle menu di HP dengan animasi -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="border: none; outline: none !important;">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu dengan efek modern -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-home me-1"></i> HOME
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="profiledesa.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-landmark me-1"></i> PROFILE DESA
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="infografis.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-chart-pie me-1"></i> INFOGRAFIS
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="indexBerita.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-newspaper me-1"></i> BERITA
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="dokumen.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-file-alt me-1"></i> DOKUMEN
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="umkmdesa.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-store me-1"></i> UMKM DESA
                <span class="nav-underline"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="admin/adminlogin.php" class="nav-link position-relative px-3" 
                style="font-size: 1rem; color: white !important; transition: all 0.3s ease;">
                <i class="fas fa-user-shield me-1"></i> ADMIN
                <span class="nav-underline"></span>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <style>
    /* Efek hover untuk logo */
    .navbar-brand:hover {
      transform: scale(1.05);
    }
    
    /* Garis bawah navigasi */
    .nav-underline {
      position: absolute;
      bottom: 0;
      left: 15%;
      width: 70%;
      height: 2px;
      background-color: white;
      transform: scaleX(0);
      transform-origin: center;
      transition: transform 0.3s ease;
    }
    
    .nav-link:hover .nav-underline,
    .nav-link.active .nav-underline {
      transform: scaleX(1);
    }
    
    /* Efek hover untuk nav item */
    .nav-link:hover {
      transform: translateY(-2px);
    }
    
    /* Tombol toggle yang lebih menarik */
    .navbar-toggler {
      transition: all 0.3s ease;
    }
    
    .navbar-toggler:focus {
      box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5);
      transform: rotate(90deg);
    }
    
    /* Animasi ikon toggle */
    .navbar-toggler.collapsed .navbar-toggler-icon {
      transition: transform 0.3s ease;
    }
    
    .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
      transform: rotate(90deg);
    }
    
    /* Responsif untuk mobile */
    @media (max-width: 991.98px) {
      .navbar-nav {
        background: rgba(30, 136, 229, 0.95);
        border-radius: 8px;
        padding: 10px;
        margin-top: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      }
      
      .nav-link {
        padding: 8px 15px !important;
        margin: 2px 0;
        border-radius: 4px;
      }
      
      .nav-link:hover {
        background: rgba(255, 255, 255, 0.15);
      }
      
      /* Tambahan untuk menu yang di-toggle */
      .navbar-collapse {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
        padding: 0 15px;
      }
    }
    
    /* Animasi untuk menu mobile */
    .navbar-collapse.collapsing {
      animation: fadeIn 0.3s ease-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

  <!-- Tambahkan Bootstrap JS (WAJIB bundle) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

  <script>
    // Fungsi untuk menutup navbar saat link diklik (mobile)
    document.addEventListener('DOMContentLoaded', function() {
      const navLinks = document.querySelectorAll('.nav-link');
      const navbarCollapse = document.querySelector('.navbar-collapse');
      const navbarToggler = document.querySelector('.navbar-toggler');
      
      navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
          // Cek jika navbar sedang expanded (hanya di mobile)
          if (navbarToggler.getAttribute('aria-expanded') === 'true') {
            // Buat instance collapse Bootstrap
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
              toggle: false
            });
            // Tutup navbar
            bsCollapse.hide();
            
            // Kembalikan state tombol toggle
            navbarToggler.setAttribute('aria-expanded', 'false');
            navbarToggler.classList.add('collapsed');
          }
        });
      });
      
      // Animasi tambahan untuk toggle button
      navbarToggler.addEventListener('click', function() {
        this.classList.toggle('active');
      });
    });
  </script>

