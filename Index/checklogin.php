<?php 

if(!isset($_SESSION['login'])) {

    $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";

  header("Location:../Index/index.php");
}



?>