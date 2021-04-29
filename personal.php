<?php
  session_start();
  require_once('process.php');

  if(!isset($_SESSION['user'])){
    header('location: login.php?NotLogged=Please log in!');
  } else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0fc50f67b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Website | Account</title> 
</head>
<section class="showcase">
    <header>
      <a href="index.php"><h2 class="logo"><?php echo $_SESSION['user'];?>.Me</h2></a>
      <div class="toggle"></div>
    </header>
    <video src="background.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <a href="dashboard.php" class="back-arrow"><</a>
        <h2>My Account</h2>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/linkedin.png"></a></li>
      <li><a href="https://www.instagram.com/d.cepani/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="#">Your info</a></li>
      <li><a href="#">Edit info</a></li>
      <li><a href="logout.php?logout" class="logout">Log Out</a></li>
    </ul>
    </div>
</body>
<script>
   const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
</script>
</html>

<?php
  }
?>