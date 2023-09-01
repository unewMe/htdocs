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
      margin: 0 auto;
    }

    .form-container h2 
    {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label 
    {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      display: block;
      margin-bottom: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"] 
    {
      width: 100%;
      padding: 10px;
      border: 1px ridge #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-group input[type="submit"] 
    {
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
            width: 50px;
            height: 50px;
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
        <li><a class="nav-link scrollto" href="index.php">O NAS</a></li> 
        <li><a class="nav-link scrollto" href="contact.php">KONTAKT</a></li>         
        </ul>
      </nav>

      <a class="nav-link scrollto" href="index.html#about"></a>

    </div>
  </header><!-- End Header -->

  <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>Witamy w Akademii Korepetycji</h2>
      <p>Wypełnij poniższy formularz, a odezwiemy się do Ciebie</p>
        <form action="process_form.php" method="post" id="myForm" onsubmit="return validateForm()">
        <div class="form-container">  
        <div class="form-group">
                <center><p>Przychodzisz do nas jako</p></center>
                <button type="button" class="course-buttons" data-role="UCZEŃ" name="uczen" >Uczeń</button>
                <button type="button" class="course-buttons" data-role="KOREPETYTOR" name="korepetytor" >Korepetytor</button>
                <input type="hidden" id="selectedRole" name="selectedRole" value="" required>
                <br></br>
            <input type="text" id="imie" name="imie" placeholder="Imię.." ><br></br>
            <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko.." ><br></br>
            <input type="text" id="email" name="email" placeholder="JanKowalski@example.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" ><br></br>

            <p>Czym jesteś zainteresowany(na)?</p>
                <div>
                <button type="button" class="course-buttons" data-school="PODSTAWOWA" >Szkoła podstawowa</button>
                <button type="button" class="course-buttons" data-school="PONADPODSTAWOWA" >Szkoła ponadpodstawowa</button>
                <input type="hidden" id="selectedSchool" name="selectedSchool" value="">
                <br></br>
                <button type="button" class="course-buttons" data-level="PODSTAWOWY" >Poziom podstawowy</button>
                <button type="button" class="course-buttons" data-level="ROZSZERZONY" >Poziom rozszerzony</button>
                <input type="hidden" id="selectedLevel" name="selectedLevel" value="">
                <br></br>
                </div>
                <select id="kursy" name="kursy[]" required>
                <option value="MATEMATYKA">Matematyka</option>
                <option value="FIZYKA">Fizyka</option>
                <option value="CHEMIA">Chemia</option>
                <option value="ANGIELSKI">Język angielski</option>
              </select> <br></br>
            <center><input type="submit" value="Wyślij" id="submit-button" class="disabled-button"></center>
        </div>
    </div>
    </form>
        <div id="loading">
          <div id="spinner"></div>
          <p>Twoja prośba jest przesyłana</p>
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
        const roleButtons = document.querySelectorAll(".course-buttons[data-role]");
        const levelButtons = document.querySelectorAll(".course-buttons[data-level]");
        const schoolButtons = document.querySelectorAll(".course-buttons[data-school]");
        const selectedRoleInput = document.querySelector("#selectedRole");
        const selectedSchoolInput = document.querySelector("#selectedSchool");
        const selectedLevelInput = document.querySelector("#selectedLevel");

        roleButtons.forEach(button => {
            button.addEventListener("click", () => {
                roleButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
                selectedRoleInput.value = button.getAttribute("data-role");
            });
        });

        schoolButtons.forEach(button => {
            button.addEventListener("click", () => {
                schoolButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
                selectedSchoolInput.value = button.getAttribute("data-school");
            });
        });

        levelButtons.forEach(button => {
            button.addEventListener("click", () => {
                levelButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
                selectedLevelInput.value = button.getAttribute("data-level");
            });
        });
  </script>
  
  <script>
    var isAlertShown = false;
    function validateForm() {
        const selectedRole = document.querySelector(".course-buttons[data-role].active");
        const selectedSchool = document.querySelector(".course-buttons[data-school].active");
        const selectedLevel = document.querySelector(".course-buttons[data-level].active");
        const submitButton = document.getElementById("submit-button");
        var name = document.getElementById('imie').value.trim();
        var email = document.getElementById('email').value.trim();
        var last_name = document.getElementById('nazwisko').value.trim();


        if (!selectedRole || !selectedSchool || !selectedLevel || !name || !email || !last_name) {
            submitButton.classList.add("disabled-button");
            return false; 
        }
        submitButton.classList.remove("disabled-button");
        
        return true; 
      }

        document.getElementById('myForm').addEventListener('submit', function (event) {
          if(validateForm()) {
          document.getElementById('myForm').style.display = 'none';
          document.getElementById('loading').style.display = 'block'; }
      });

</script>

</body>

</html>
