<?php
 include '../php/connect.php';
 include '../php/cartfunction.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Weights </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- not mine-->

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

<!-- Css Styles -->

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/flaticon.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/barfiller.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!--not mine -->
<link rel="icon" type="image/png" href="photos/icon2.png" />
<!-- Font Awesome : importing icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../css1/Index.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../style/nav.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../style/cart.css?v=<?php echo time(); ?>">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;
 }
    :root{
    --p : #D1C0A8;
    --S : #FDFFFC;
    --b: #262626;
}
</style>
</head>
<body> 
<div style="height: 100%; width: 100%;">
<header>
<div class="UpNav">
      <div class="p">
        <div class="email">
        <i class="far fa-envelope"></i><p> fitness265@gmail.com</p></div>
        <a href="https://www.facebook.com/HEALTHY.Tunisie/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/HEALTHY.Tunisie/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/HEALTHY.Tunisie/"><i class="fab fa-youtube"></i></a>
        <div class="phone" >
            <i class="fas fa-phone-alt"></i>
            <p> 012 150 147 </p></div>
                </div>
    <div class="sign">
        <button class="Signin"> <a href="../php/s_in_up.php"  style="    text-decoration: none;">My Account </a> </button>
    </div>
  </div>
  <nav>
   <div class="logo">
    <h4 style ="color: #FDFFFC; font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">I am healthy I am wealthy</h4>
   </div>
   <ul class="nav-links">
    <li>
     <a href="../Index/Index.php">Home</a>
    </li>
    <li>
      <a href="../php/fitness.php">Fitness</a>
    </li>
    <li>
     <a href="../php/nutrition.php">Nutrition</a>
    </li>
    <li>
     <a href="../Lifestyle/Lifestyle.php">Lifestyle</a>
    </li>
    <li>
      <div class="cart">
        <span class="nav-icon">
          <button style =" background-color: transparent;border: none; color: #FDFFFC" onclick="togglePopup()"> <i class="fas fa-cart-plus"></i></button>   
        </span>
        <div class="cart-items">-</div>
    </div>
 </div>
    </li>
   </ul>
   <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
   </div>
  </nav>
  </div>
  
</header>
<div class="video-container">
    <video autoplay muted id="video-bg">
        <source src="final web video.mp4" type="video/mp4">
    </video>
  </div>

<hr>
 <section class="choseus-section spad" style="background-color: #fdfffc;" >
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title">
                <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;" >Our services</span>
                <h2 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">What we offer </h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class=" col-sm-4">
              <div class="cs-item">
                  <a href="../php/fitness.php"><span class="flaticon-002-dumbell" ></span></a>
                  <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">Modern equipment</h4>
                  <p style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      dolore facilisis.</p>
              </div>
          </div>
          <div class=" col-sm-4">
              <div class="cs-item">
                  <a href="../php/nutrition.php"><span class="flaticon-033-juice"></span></a>
                  <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">Quality dietary supplement</h4>
                  <p style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                      facilisis.</p>
              </div>
          </div>
          <div class=" col-sm-4">
              <div class="cs-item">
                 <a href="../Lifestyle/Lifestyle.php"><span class="flaticon-034-stationary-bike"></span></a> 
                  <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;"> Healthy lifestyle tips</h4>
                  <p style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      dolore facilisis.</p>
              </div>
          </div>
      </div>
  </div>
</section >
<hr> 
<section class="team-section spad" style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div style="text-align:center" class="section-title">
                        <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;     color:#262626;">Our Team</span>
                        <h2 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;    color:#262626;">TRAIN WITH EXPERTS</h2>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                        <div class="ts_text">
                            <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Athart Rachel</h4>
                            <span style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Gym Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<section class="footer-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="fs-about">
                  <div class="fa-logo">
                      <!--<a href="#"><img src="img/logo.png" alt=""></a>-->
                  </div>
                  <p style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                  <div class="fa-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-youtube-play"></i></a>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                      <a href="#"><i class="fa  fa-envelope-o"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
              <div class="fs-widget">
                  <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">USEFUL LINKS</h4>
                  <ul>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">About</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Blog</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Classes</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
              <div class="fs-widget">
                  <h4 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">SUPPORT</h4>
                  <ul>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Login</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">My account</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Subscribe</a></li>
                      <li style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><a href="#">Feedback</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="fs-widget">
                  <h2 style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;">I AM HEALTHY <br>I AM WEALTHY</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 text-center">
              <div class="copyright-text">
                  <p style ="font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Footer Section End -->

<!-- Search model Begin --><script src="../js1/js.js"></script>
<script src="../js1/project.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="../js/filtrage.js"></script>
<script src="../js/project.js"></script>
<script src="../js/cart.js"></script>

 
</body>
</html>