<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/loginadmin.css?php echo time(); ?>">
    <link rel="jsBeri   ta" href="js/script.js">
</head>
<body>
    <div class="login-page">
    <div class="login-container">
        <h1 class="login-title">Login</h1>
        <h2 class="subtitle">DESA BOROBUDUR - KECAMATAN</h2>
        <h3 class="sub-subtitle">BOROBUDUR</h3>
        
        <p class="login-instruction">Silahkan Masukkan username & password untuk login</p>
        
        <!-- <div class="login-form">
                <label class="form-label">Username / nomor</label>
                <input type="text" class="form-input">
            </div>
            
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-input">
            </div> -->
        <div class="text-center">
        <form action="adminindex.php" method="post" class="text-center">
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="Username / nomor">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
        
        <div class="system-info">
            <div class="system-title">Sistem Informasi Desa</div>
            <h3 class="sub-subtitle">DESA BOROBUDUR</h3>
            <h4 class="sub-subtitle">KECAMATAN BOROBUDUR</h4>
        </div>
        </div>
        </div>
    </div>
    
    <div class="copyright">
        © 2025<br>
        Aplikasi ini didukung oleh Balai Sertifikasi Elektronik (BSrE) dan Badan Siber dan Sandi Negara (BSSN).
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>