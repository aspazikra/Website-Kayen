<?php include 'cek_login.php'; ?>

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
</body>
</html>