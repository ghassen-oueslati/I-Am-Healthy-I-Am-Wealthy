<?php

include 'connect.php';
include 'cartfunction.php';

?>
<html lang="en">
<head>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <title> Nutrition </title>
 <meta charset="utf-8">
 <!--        JQuery          -->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/png" href="photos/icon2.png" />
 <!-- Font Awesome : importing icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <!-- My CSS -->
 <link rel="stylesheet" type="text/css" href="../style/style.css">
 <link rel="stylesheet" type="text/css" href="../style/nav.css">
 <link rel="stylesheet" type="text/css" href="../style/s.css">
 <link rel="stylesheet" type="text/css" href="../style/cart.css">
 <!-- End My CSS -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
    <h4>I am healthy I am wealthy</h4>
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
</header>

<div class="filtrage">
    <ul>
       <li class="list" data-filter="all" ><button>All</button></li> 
       <li class="list" data-filter="p50"><button>Price < 50.0 dt</button></li>
       <li class="list" data-filter="p100"><button> Price 50.0 - 100.0 dt</button></li>
       <li class="list" data-filter="s100"><button> Price > 100.0 dt</button></li>
        
    </ul>
</div>


<div class="equipements">
<?php
	$query = "SELECT * FROM product ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0 )
	{
	    while($row = mysqli_fetch_array($result))
			{ if ($row["categoryG"] != "fit")
        {
?>

	<div class="col-md-4 equipement">
		<form method="post" action="nutrition.php?action=add&id= <?php echo $row["id"]; ?>">
      <div class="itemBox <?php echo $row["categoryS"]; ?>">
          <figure class="figure2">
              <div class="img">
                  <img src="../img/<?php echo $row["imageP"]; ?>" class="d" alt="dumbells" />
						      <img src="../img/<?php echo $row["image"]; ?>" class="p" alt="pamela" />
              </div>
              <figcaption>
                <div class="carac">
                  <p><?php echo $row["name"]; ?></p>
                  <p style = "font-weight: bold; text-decoration: underline;"><?php echo $row["price"]; ?> dt</p>
                </div>
                <a href="../html/Aliment/<?php echo $row["read_more"]; ?>">Read  More</a>
                <div class = "purchase-info">
                  <div class="cart1">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                  <input type="submit" name="add" value="Add to Cart" style ="border : none; font-size:22px;" />
                  <p><i class = "fas fa-shopping-cart"></i></p>
                  </div>
                  <input type = "number" min = "0" value = "1" name="quantity"  style =" width: 18%;padding-right:15px">
                  
                   
		          	</div>
          
              </figcaption> 
					</figure>
			</div>
		</form>  
  </div>
<?php
		}}
	}
?>
</div>


<section class="footer-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="fs-about">
                  <div class="fa-logo">
                      <!--<a href="#"><img src="img/logo.png" alt=""></a>-->
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
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
                  <h4>USEFUL LINKS</h4>
                  <ul>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Classes</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
              <div class="fs-widget">
                  <h4>SUPPORT</h4>
                  <ul>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">My account</a></li>
                      <li><a href="#">Subscribe</a></li>
                      <li><a href="#">Feedback</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="fs-widget">
                  <h2 style ="color : #FDFFFC">I AM HEALTHY <br>I AM WEALTHY</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 text-center">
              <div class="copyright-text">
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
          </div>
      </div>
  </div>
</section>

<div class="pop-up" id="popup">
  <h3>Shopping Cart Details</h3>
 <div class="closeBtn">
        <button onclick="togglePopup()" >X</button>
    </div>
    <img src="../img/1.svg" alt="" class="cat">
 <form action="buy.php" class="form-cart">
        <div>
            <table>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Remove</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){ 
                  $total = 0;
                  $s = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
            ?>
            <tr>
              <td><?php echo $value["item_name"]; ?></td>
              <td><?php echo $value["item_quantity"]; ?></td>
              <td><?php echo $value["product_price"]; ?> dt </td>
              <td>
                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> dt </td>
              <td><a href="nutrition.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                class="text-danger">Remove</span></a></td>
            </tr>
            <?php
              $s=$s+$value["item_quantity"];
              $total = $total + ($value["item_quantity"] * $value["product_price"]);
              }
            ?>
            <tr >
              <td colspan="3" style="padding-top: 50px;">Total</td>
              <th style="padding-top: 50px;"><?php echo number_format($total, 2); ?> dt</th>
              <td></td>
            </tr>
            <?php
              }
            ?>
            <tr><td colspan=5 >  <input type="submit" value="Make Purchase" class="buy" name="buy"></td></tr>
            </table>
        </div>
     </div>
 </form>
</div>


<script src="../js/filtrage.js"></script>
<script src="../js/project.js"></script>
<script src="../js/cart.js"></script>


</body>
</html>