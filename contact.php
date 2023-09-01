<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
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
      max-width: 1000px;
      margin: 0 auto;
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
    .form-group textarea {
      width: 100%;
      height: 200px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      overflow-wrap: break-word;
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

    .container-choices {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px; }

    
    .course-buttons {
    background-color: #grey;
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

  .disabled-button {
    background-color: #ccc !important;
    color: #555 !important;
    cursor: not-allowed;
  }

  #loading {
            display: none;
            text-align: center;
  }

  #spinner {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid #007bff;
            animation: spin 2s linear infinite;
  }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
  }

    </style>
</head>

<body>

<header id="header" class="header fixed-top" data-scrollto-offset="0">
<div class="container-fluid d-flex align-items-center justify-content-between">
      <pev></pev>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="aplikuj.php">APLIKUJ</a></li>
        <li><a class="nav-link scrollto" href="index.php">STRONA GŁÓWNA</a></li> 
        <li><a class="nav-link scrollto" href="contact.php">KONTAKT</a></li>         
        </ul>
      </nav>

      <a class="nav-link scrollto" href="index.html#about"></a>

    </div>
</header><!-- End Header -->

  <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>Skontaktuj się z nami</h2>
          <form action="sending_message.php" method="post" name="contactForm" onsubmit="return validateForm()" id="contact-form">
            <div class="tile-container">
            <p>Wypełnij każde pole formularza aby móc się z nami skontaktować</p>
            <div class="form-group">

            <input type="text" id="name" name="name" placeholder="Imię.." ><br></br>
            <input type="text" id="email" name="email" placeholder="JanKowalski@example.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" ><br></br>
            <textarea type="textarea" id="textarea" name="textarea"  placeholder="Wiadomość.." minlength="10" ></textarea><br></br>

            <center><input type="submit" id="submit-button" value="Wyślij" ></center>
            </div>
            </div>
          </form>
          <div id="loading">
        <div id="spinner"></div>
        <p>Wysyłanie...</p>
    </div>
    </div>
  </section>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    var isAlertShown = false;
    function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('textarea').value.trim();

    if (name === "" || email === "" || message === "") {
      return false;
    }
    return true;
    }
    
    document.getElementById('contact-form').addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault(); // Zatrzymaj wysłanie formularza
            } else {
                document.getElementById('contact-form').style.display = 'none';
                document.getElementById('loading').style.display = 'block';
            }
        });
  </script>
</body>

</html>
