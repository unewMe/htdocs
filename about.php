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
  <style>
    /* Dodany styl do formularza */
    .form-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      margin: 0 20px; /* Dodane marginesy */
    }

    .form-container h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      display: block;
      margin-bottom: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px ridge #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-group input[type="submit"] {
      background-color: #ccc;
      color: #black;
      border: none;
      padding: 12px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-wrap: wrap; /* Umożliwia zawijanie elementów */
    }

    .course-buttons {
        background-color: #;
        width: 250px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-group button.active {
        background-color: #ccc;
    }

    .title-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      margin: 0 20px;
      align-items: center;
      text-align: center; /* Dodane marginesy */
    }
    .right-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      margin: 0 20px;
      text-align: right;
      align-items: right;
    }

    .modal-bg {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    /* Styl dla okna modalnego */
    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
      max-width: 80%;
      max-height: 80%;
      overflow: auto;
      position: relative;
    }

    /* Styl dla przycisku zamknięcia */
    .modal-close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      font-size: 24px;
    }

    .apply-link {
    background-color: #;
    width: 250px;
    padding: 10px 20px;
    
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.popup-show {
  animation: slide-down 0.5s ease-out forwards;
}

@keyframes slide-down {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}

</style>
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
</header><!-- End Header -->

<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2 class="text-center">Witamy w Akademii Korepetycji!</h2>
      <p class="text-center">🌟 Odkryj Swoje Nieskończone Możliwości z Naszą Akademią Korepetycji! 🌟</p>

      <div class="container d-flex justify-content-center">
        <div class="form-container">
          <form action="process_form.php" method="post">
            <div class="tile-container">
            <h3 style="font-weight: bold;">Korepetytor</h3>
            <p>Jesteś studentem i chcesz dobrze dorobić? Czy jesteś nauczycielem z gabarytem doświadczenia i poszukujesz dodatkowej pracy? U nas każdy znajdzie coś dla siebie - gwarantujemy: Elastyczny grafik, dobrze płatną pracę i miłą atmosferę. Aby dowiedzieć się więcej przejdź do sekcji Aplikuj, a my odezwiemy się do Ciebie.</p>
            <a class="apply-button" href="index.php#first-form">Aplikuj</a>
            </div>
          </form>
        </div>
        <div class="title-container">
          <form action="process_form.php" method="post">
            <div class="tile-container">
            <h3 style="font-weight: bold;">O nas</h3>
            <p>Jesteś studentem i chcesz dobrze dorobić? Czy jesteś nauczycielem z gabarytem doświadczenia i poszukujesz dodatkowej pracy? U nas każdy znajdzie coś dla siebie - gwarantujemy: Elastyczny grafik, dobrze płatną pracę i miłą atmosferę. Aby dowiedzieć się więcej przejdź do sekcji Aplikuj, a my odezwiemy się do Ciebie.</p>
            <a class="apply-button" href="info.php#first-form">Dowiedz się więcej</a>
            </div>
          </form>
        </div>
        <div class="right-container">
          <form action="process_form.php" method="post">
            <div class="tile-container">
            <h3 style="font-weight: bold;">Uczeń</h3>
            <p>Czy kiedykolwiek marzyłeś o osiągnięciu niesamowitych wyników w nauce? Chciałbyś zdobyć pewność siebie i wyróżnić się w szkole lub na egzaminach? To właśnie teraz jest Twój moment! Nasza Akademia Korepetycji zaprasza Cię do dołączenia do naszej wspaniałej społeczności ambitnych uczniów, gotowych podjąć wyzwanie i osiągnąć sukcesy, o jakich zawsze marzyłeś.</p>
            <a class="apply-button" href="index.php#first-form">Aplikuj</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<!-- Skrypty -->
<script>
document.getElementById("open-popup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "flex";
});

document.getElementById("close-popup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});
</script>

<script>
function openPopup() {
    const popup = document.querySelector(".popup-content");
    popup.classList.add("popup-show");
}

function closePopup() {
  const popup = document.querySelector(".popup-content");
  popup.classList.remove("popup-show");
}
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    // JavaScript skryptu
</script>
</body>

</html>
