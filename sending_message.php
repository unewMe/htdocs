<?php

$NAME = $_POST["name"];
$FROM_WHO = ($_POST["email"]);
$MESSAGE = $_POST["textarea"];

$SENDING_TO = "AkademiaKorepetycji@gmail.com";
$subject = "Nowa wiadomość od: $NAME";
$message_body = "Od: $NAME\n";
$message_body .= "Wiadomość:\n$MESSAGE";
$headers = "From: $FROM_WHO\r\n";

sleep(2);
echo '<script>
            document.getElementById("loading").style.display = "none";
            document.getElementById("contact-form").style.display = "block";
          </script>';

#if(mail($SENDING_TO, $subject, $MESSAGE, $headers)) {
   header('Location: /index.php');
#} else {
#    echo '<script>alert("Wystąpił BŁĄD podczas wysyłania wiadomości")</script>';
#}
?>