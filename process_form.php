<!-- <?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "korepetycje";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie połączenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Odbieranie danych z formularza
    $selectedRole = $_POST["selectedRole"];
    $selectedSchool = $_POST["selectedSchool"];
    $selectedLevel = $_POST["selectedLevel"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $kursy = implode(", ", $_POST["kursy"]); // Przekształcenie tablicy kursów na string

    // Wstawianie danych do bazy danych
    $sql = "INSERT INTO dane (ROLA, SZKOŁA, POZIOM, IMIE, NAZWISKO, EMAIL, PRZEDMIOT) VALUES ('$selectedRole','$selectedSchool','$selectedLevel', '$imie', '$nazwisko', '$email', '$kursy')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['SENDED'] = 1;
        header('Location: /zapisane.php');
    } else {
        echo "Wypełnij fromularz";
    }

    // Zamykanie połączenia z bazą danych
    $conn->close();
}

?>





 -->
