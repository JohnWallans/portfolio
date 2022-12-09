<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Timothé VAQUIE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<!-- PHP REQUIRE -->
<?php require('./include/bdd.inc.php'); ?>

<body>
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <?php
  include('./include/header.inc.php');
  $id = $_GET['id'];
  $projet = 'SELECT IdProjet, TitleProjet, TypeProjet, DifficulteProjet, UrlProjet, EtatProjet, DescriptionProjet, ImageNomProjet, ImageUrlProjet FROM PROJET WHERE IdProjet = "' . $id . '";';
  foreach ($db->query($projet) as $row) {
  ?>

    <main id="main">

      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <ol>
              <li><a href="./index.php#projects">Mes Projets</a></h2>
              <li><?php echo ucwords($row['TypeProjet']); ?></li>
              <li><?php echo $row['TitleProjet']; ?></li>
            </ol>
          </div>
        </div>
      </section>

      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-7">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <div class="">
                    <img src="<?php echo $row['Image2']; ?>" alt="">
                  </div>

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-5  ">
              <div class="portfolio-info">
                <h3><?php echo $row['TitleProjet']; ?></h3>
                <ul>
                  <li><strong>Niveau Difficulté</strong>: <?php echo $row['DifficulteProjet']; ?>/5</li>
                  <li><strong>URL</strong>: <a target="_blank" href="<?php echo $row['UrlProjet']; ?>"><?php echo $row['UrlProjet']; ?></a></li>
                  <li><strong>Etat</strong>: <?php echo $row['EtatProjet']; ?></li>
                </ul>
              </div>
              <div class="portfolio-description">
                <p><?php echo $row['DescriptionProjet']; ?></p>
              </div>
            </div>

          </div>

        </div>
      </section>

    </main>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>
  <?php } ?>
</body>

</html>