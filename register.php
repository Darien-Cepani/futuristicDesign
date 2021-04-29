<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"];
    $password = $_POST["password"];

    include ("conn.php");
    $bool = true;
    //Query the users table 
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    //display all rows from query
    while($row = mysqli_fetch_array($result)) { 
        // the first username row is passed on to $table_users, and so on until the query is finished
        $table_users = $row['username'];
         // checks if there are any matching fields 
        if($username == $table_users){ 
            // sets bool to false 
            $bool = false;

            //Prompts the user
            Print '<script>alert("Username has been taken!");</script>'; 
        }
    }

    if($bool) {
        //Inserts the value to table users
        $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        $conn->query($query);
        // Prompts the user 
        Print '<script>alert("Successfully Registered!");</script>';
        // redirects to register.php
        Print '<script>window.location.assign("login.php");</script>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Website | Register</title> 
</head>
<section class="showcase">
    <header>
      <a href="index.php"><h2 class="logo">Darien.Me</h2></a>
    </header>
    <video src="background.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
        <a href="index.php" class="back-arrow"><</a>
        <h2>Registration</h2> 
        <form action="register.php" method="POST"> 
            <input type="text" name="username" required="required" placeholder="Enter Username:" class="field"/> <br/>
            <input type="password" name="password" required="required" placeholder="Enter password:" class="field"/> <br/> 
            <input type="submit" value="Register" class="button"/> 
        </form>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/linkedin.png"></a></li>
      <li><a href="https://www.instagram.com/d.cepani/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
</body>
</html>