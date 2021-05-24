<?php
header("Location:/mp/index.html"); ?>
<html>

<head>
  <title>Symphony</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
</head>
<body>
<button onclick="myFunction() alt()">Show mail Status</button>
<div>


<?php

use PHPMailer\PHPMailer\PHPMailer;


require 'vendor/autoload.php';
//////////

    /////////////
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host  = 'smtp.gmail.com;';
    $mail->SMTPAuth = true;
    $mail->Username = 'symphony141539@gmail.com';
    $mail->Password = 'kojpkrxilopbxtcd';
    $mail->SMTPSecure = 'tls';
    $mail->Port  = 587;

    $mail->setFrom('symphony141539@gmail.com', 'Symphony');
    $mail->addAddress('gowthamkrishna.mails@gmail.com');
     $mail->addAddress('hemacbe01@gmail.com');
      $mail->addAddress('shreenethira25@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Symphony';
    $mail->Body = '<h1>Hello Welcome to Symphony<h1><br> <p style="color:red;">The functions of music and multimedia have become essential since the smart phone appeared. The main aim of developing this Music Player Web Application is that it’s a collection of MP3 songs with songs of different languages. It is very convenient, but it contains controversial arguments about sound quality, so many smart phone users use the music player application. By using these music applications, people start to think about the relationship between music and their personal world. </p> <br> <h3><b>Reply us  for More Interactions</b> <br>
    <span style="text-align:center;"><i>@symphony141539@gmail.com</i></span></h3>';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
</div>

<script >
function myFunction() {
var x = document.getElementById("myDIV");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}
}
function alt() {
   alert("mail sent successfully!");
}
</script>
</body>

</html>
