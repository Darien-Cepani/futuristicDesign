<?php
require_once('conn.php');

if(isset($_POST['login'])){
    $query = "SELECT * FROM users WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
    $result = mysqli_query($conn, $query);

    if(mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['user'] = $_POST['username'];
        header("location:dashboard.php");
    } else{
        header("location:login.php?Invalid=Username or Password is invalid!");
    }
}

?>