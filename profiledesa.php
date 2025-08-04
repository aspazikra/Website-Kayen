<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Layout Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container py-5">
    <div class="row about-section">
      <div class="col-lg-6">
        <div class="about-content" data-aos="fade-right">
          <h2 class="about-title gradient-text">Nemo enim ipsam voluptatem quia voluptas aspernatur</h2>
          <p class="about-description lead">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-details" data-aos="fade-left">
          <div class="detail-card">
            <p class="about-text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
          </div>
          <div class="detail-card mt-4">
            <p class="about-text">Amet eos ut. Officiis soluta ab id dolor non sint. Corporis omnis consequatur quisquam ex consequuntur quo omnis. Quo eligendi cum. Amet mollitia qui quidem dolores praesentium quasi ut et.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row features-boxes gy-4 mt-5">
      <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box card-hover-effect">
          <div class="icon-box bg-primary-gradient">
            <i class="bi bi-bullseye"></i>
          </div>
          <h3><a href="#" class="stretched-link text-decoration-none">At vero eos</a></h3>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
          <div class="hover-arrow"></div>
        </div>
      </div>

      <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box card-hover-effect">
          <div class="icon-box bg-success-gradient">
            <i class="bi bi-person-check"></i>
          </div>
          <h3><a href="#" class="stretched-link text-decoration-none">Sed ut perspiciatis</a></h3>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
          <div class="hover-arrow"></div>
        </div>
      </div>

      <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-box card-hover-effect">
          <div class="icon-box bg-purple-gradient">
            <i class="bi bi-clipboard-data"></i>
          </div>
          <h3><a href="#" class="stretched-link text-decoration-none">Nemo enim ipsam</a></h3>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
          <div class="hover-arrow"></div>
        </div>
      </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
</body>
</html>