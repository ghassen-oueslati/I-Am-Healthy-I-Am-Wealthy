<?php
 include 'connect.php';
 include 'signinup.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign in, Sign up</title>
        <link rel="stylesheet" type="text/css" href="../style/s_in_up.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
          <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
        <h1 data-modal-target="#modal">Sign in, Sign up</h1>
        <div class="modal" id="modal">
         <div class="modal-header">
                <button data-close-button class="close-button">&times;</button>
         </div>
         <div class="container" id="container">
             <div class="form-container sign-up-container">
             <form action="s_in_up.php" method="POST">
                    <h1>CREATE ACCOUNT</h1>
                    <input type="text" placeholder="First Name" name="nom" />
                    <input type="text" placeholder="Last Name"  name = "prenom" />
                    <input type="text" placeholder="Adress"  name = "adresse" />
                    <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" name="email" />
                    <input type="password" placeholder="Password" pattern="[A-Za-z0-9]{8}" name="password" />
                    <!--<input type="password" placeholder="Confirm Password" pattern="[A-Za-z0-9]{8}" />-->
                    <input type="submit" value="Sign up" name="submit">
                </form>
             </div>
             <div class="form-container sign-in-container">
             <form method ="POST" action="s_in_up.php">
                    <h1>SIGN IN</h1>
                    <input type="email" name ="Email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" />
                    <input type="password" name ="Password" placeholder="Password" pattern="[A-Za-z0-9]{8}" />
                    <a href="#">Forgot your password?</a>
                    <input type="submit" name="signin" value="Sign in">
                </form>
             </div>
             <div class="overlay-container">
                 <div class="overlay">
                     <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <img src="../img/login.svg">
                        <button class="ghost" id="signIn">Sign In</button>
                     </div>
                     <div class="overlay-panel overlay-right">
                        <h1>Join us!</h1>
                        <img src="../img/workout.svg">
                        <button class="ghost" id="signUp">Sign Up</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="overlay"></div>
        


        <script src="../js/s_in_up.js"></script>
    </body>
</html>





