<?php
  session_start();
  require_once('process.php');

  if(isset($_SESSION['user'])){
    header('location: dashboard.php');
  } else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Website</title> 
</head>
<body>
<section class="showcase">
    <header>
      <h2 class="logo">Darien.Me</h2>
    </header>
    <video src="background.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Welcome to my website!</h2>
        <a href="login.php" class="button">Login</a> </br>
        <a href="register.php" class="button">Register</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/linkedin.png"></a></li>
      <li><a href="https://www.instagram.com/d.cepani/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
</html>

<?php
  }
?>