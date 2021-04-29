<?php
require_once('conn.php');

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
    <title>Website | Login</title> 
</head>
<body> 
<section class="showcase">
    <header>
      <a href="index.php"><h2 class="logo">Darien.Me</h2></a>
    </header>
    <video src="background.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
        <a href="index.php" class="back-arrow"><</a>
        <h2>Login</h2> 

        <?php
          if(@$_GET['Invalid'] == true){
        ?>
          <div class="error"><?php echo $_GET["Invalid"];?></div>
        <?php
          }
        ?>

        <?php
          if(@$_GET['NotLogged'] == true){
        ?>
          <div class="error"><?php echo $_GET["NotLogged"];?></div>
        <?php
          }
        ?>

        <form action="process.php" method="POST"> 
            <input type="text" name="username" required="required" placeholder="Enter Username:" class="field"/> <br/>
            <input type="password" name="password" required="required" placeholder="Enter password:" class="field"/> <br/> 
            <input type="submit" value="Login" name="login" class="button"/> 
        </form>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/linkedin.png"></a></li>
      <li><a href="https://www.instagram.com/d.cepani/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
</body>
</html>

<?php 
  }
?>
