<?php
    session_start();
    if(isset($_SESSION['SENDED'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akademia Korepetycji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/variables.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <pev></pev>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="index.php">APLIKUJ</a></li>
        <li><a class="nav-link scrollto" href="about.php">O NAS</a></li> 
        <li><a class="nav-link scrollto" href="about.php">KONTAKT</a></li>            
        </ul>
      </nav>

      <a class="nav-link scrollto" href="index.html#about"></a>

    </div>
  </header>
  
  <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>Dziękujemy za rejestracje</h2>
      <p>Odezwiemy się do Ciebie w przeciągu 24h</p>
    </div>
  </section>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  
</body>

</html>
<?php
session_destroy();
} else  echo "blad";
?>