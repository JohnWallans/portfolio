<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Timothé VAQUIÉ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<!-- PHP REQUIRE -->
<?php require('./include/bdd.inc.php'); ?>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- Header -->
  <?php include('./include/header.inc.php'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Timothé VAQUIÉ</h1>
      <p>&ensp;&ensp;<span class="typed" data-typed-items="Développeur, Freelancer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="section-title">
          <h2>A Propos</h2>
          <p>Dans cette partie vous pourrez retrouver toutes les informations personnelles me concernant.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/logo.gif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Timothé VAQUIÉ</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Naissance:</strong> <span>04 Mars 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Site Web:</strong> <span><a href="https://pro-vaquie.com">www.pro-vaquie.com</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tél:</strong> <a href="tel:+33750810519">07.50.81.05.19</a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Quillan, France</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Diplôme:</strong> <span>Baccalauréat Professionnel</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a href="mailto:timothe.vaquie1@gmail.com">timothe.vaquie1@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <p>
              Titulaire d'un BAC PRO en Système Numérique option Réseaux Informatiques et Systèmes Communicants avec des expériences professionnelles dans les domaines de l'informatique et des réseaux informatiques. J'ai des afinités dans l'informatique, dans la programmation et dans le réseau.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Cette partie comporte les langages et applications que je connais.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="text-center">
              <h1 style="font-size:2rem;font-family: 'Poppins', sans-serif;">LANGAGE DE PROGRAMMATION</h1>
            </div><br>

            <?php
            $skill = 'SELECT LibelleSkill, TypeSkill, NiveauSkill, NombreSkill FROM SKILL WHERE TypeSkill = "langage";';
            foreach ($db->query($skill) as $row) {
            ?>

              <div class="progress">
                <span class="skill"><?= $row['LibelleSkill']; ?> <i class="val"><?= $row['NiveauSkill']; ?></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['NombreSkill']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            <?php } ?>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="text-center">
              <h1 style="font-size:2rem;font-family: 'Poppins', sans-serif;">APPLICATIONS & LOGICIELS</h1>
            </div><br>

            <?php
            $skill2 = 'SELECT LibelleSkill, TypeSkill, NiveauSkill, NombreSkill FROM SKILL WHERE TypeSkill = "logiciel";';
            foreach ($db->query($skill2) as $row) {
            ?>

              <div class="progress">
                <span class="skill"><?= $row['LibelleSkill']; ?> <i class="val"><?= $row['NiveauSkill']; ?></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['NombreSkill']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            <?php } ?>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Projects Section ======= -->

    <section id="projects" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Mes Projets</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-scolaire">Scolaire</li>
              <li data-filter=".filter-personnel">Personnel</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php
          $projet = 'SELECT IdProjet, TitleProjet, TypeProjet, DifficulteProjet, UrlProjet, DescriptionProjet, ImageNomProjet, ImageUrlProjet FROM PROJET ORDER BY IdProjet ASC;';
          foreach ($db->query($projet) as $row) {
          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row['TypeProjet']; ?>">
              <div class="portfolio-wrap">
                <div class="text-center">
                  <img src="./assets/img/projets/<?php echo $row['ImageNomProjet']; ?>" class="rounded" alt="">
                </div>
                <div class="portfolio-links">
                  <a href="projet-details.php?id=<?php echo $row['IdProjet']; ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Projects Section -->

    <!-- ======= CV Section ======= -->
    <section id="cv" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Curriculum Vitae</h2>
          <p>Extrait de mon CV (Diplômes et Expériences Professionnelles).</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">

            <h3 class="resume-title">Diplômes :</h3>
            <div class="resume-item">
              <h4>BTS Services Informatiques aux Organisations</h4>
              <h5>2023</h5>
              <p><em>Lycée Général et Technologique Paul Sabatier, Carcassonne, France</em></p>
            </div>
            <div class="resume-item">
              <h4>Baccalauréat Professionnel Système Numérique</h4>
              <h5>2021</h5>
              <p><em>Lycée Polyvalent Jules FIL, Carcassonne, France</em></p>
            </div>
            <div class="resume-item">
              <h4>Diplôme National du Brevet</h4>
              <h5>2018</h5>
              <p><em>Collège Michel Bousquié, Quillan, France</em></p>
            </div>
            <center>
              <a href="./assets/pdf/curriculum-vitae.pdf" download="curriculum-vitae-vaquie.pdf"><input class="button-stage" type="button" value="Télécharger mon CV"></a>
            </center>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Expériences Professionnelles :</h3>

            <!-- Stage 4 -->
            <div class="resume-item">
              <h4>Website Creator (stage en entreprise)</h4>
              <h5>16/05/2022 - 24/06/2022</h5>
              <p><em>Le Belvédère - Restaurant & Auberge, Belvianes-et-Cavirac, France</em></p>
              <ul>
                <li>Création d'un site Internet</li>
              </ul>
            </div>

            <!-- Stage 3 -->
            <div class="resume-item">
              <h4>Technicien (stage en entreprise)</h4>
              <h5>18/01/2021 - 12/02/2021</h5>
              <p><em>HVA SYSTEMES, Quillan, France</em></p>
              <ul>
                <li>Maintenance d'une caméra de vidéosurveillance de la commune de Quillan</li>
                <li>Réparation du système sonore de la commune d'Axat</li>
                <li>Interventions chez particulier, installations d'antennes internet mandatés par Alsatis</li>
              </ul>
            </div>

            <!-- Stage 2 -->
            <div class="resume-item">
              <h4>Technicien (stage en entreprise)</h4>
              <h5>21/09/2020 - 16/10/2020</h5>
              <p><em>HVA SYSTEMES, Quillan, France</em></p>
              <ul>
                <li>Réparation du système de vidéosurveillance de la commune de Lapradelle-Puilaurens</li>
                <li>Installation d’une caméra de vidéosurveillance pour la commune de Quillan</li>
                <li>Réparation d’un écran plat</li>
              </ul>
            </div>

            <!-- Stage 1 -->
            <div class="resume-item">
              <h4>Technicien (stage en entreprise)</h4>
              <h5>12/11/2019 - 06/12/2019</h5>
              <p><em>Lycée Polyvalent Jacques Ruffié, Limoux, France</em></p>
              <ul>
                <li>Formation câblage RJ45</li>
                <li>Création d'un scanner à détection de mouvement</li>
                <li>Remplacement de PC non fonctionnel</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Toutes les informations afin de me contacter.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-6 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46776.10280590799!2d2.1733054999999997!3d42.883260899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12afc0530b401e77%3A0x84c4a2595b41fe83!2s11500%20Quillan!5e0!3m2!1sfr!2sfr!4v1659714704666!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>Quillan, France</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:timothe.vaquie1@gmail.com">timothe.vaquie1@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p><a href="tel:+33750810519">+33 750810519</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Portfolio Section ======= -->

    <section id="veille" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Veille Informatique</h2>
          <p>Vous trouverez dans cette <b>veille informatique</b> des articles portant sur les thèmes :</p>
          <br><br>
          <p>- <span class="blue">CyberSécurité</span></p>
          <p>- <span class="blue">Intelligence Artificielle</span></p>
          <p>- Un <span class="blue">guide de bonne conduite</span> à adopter sur internet</p>
          <p>- Un thème de recherche sur le <span class="blue">Deep Learning</span></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-cybersecurite">CyberSécurité</li>
              <li data-filter=".filter-ia">Intelligence Artificielle</li>
              <li data-filter=".filter-deeplearning">Deep Learning</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php
          $flux = 'SELECT IdFlux, TitleFlux, CategoryFlux, TypeFlux, AuthorFlux, DateFlux, UrlFlux, DescriptionFlux, ImageFlux FROM RSS;';
          foreach ($db->query($flux) as $row) {
          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row['TypeFlux']; ?>">
              <div class="portfolio-wrap">
                <img src="<?php echo $row['ImageFlux']; ?>" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="<?php echo $row['ImageFlux']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['TitleFlux']; ?>"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?id=<?php echo $row['IdFlux']; ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!-- <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script> -->