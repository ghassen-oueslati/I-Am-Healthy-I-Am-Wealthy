<?php 
 include '../php/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>recipe beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <!-- not mine-->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css1/style.css" type="text/css">
  <link rel="stylesheet" href="../style/nav.css " type="text/css">
  <link rel="stylesheet" href="../css1/Index.css" type="text/css">
  <link rel="stylesheet" href="../css1/Index.css" type="text/css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- Font Awesome : importing icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Lexend', sans-serif;
    letter-spacing: 1px;
   }
       .cart1{
    position: relative;
    top: 8px;
    cursor: pointer;
  }
  .cart-items {
    position: absolute;
    top: -8px;
    right: -8px;
    background: var(--p);
    padding: 0 5px;
    border-radius: 30%;
    color: var(--b);
    font-size: 0.8rem;
  }
  .cart .nav-icon{
      color: var(--S);
      font-size: 1.7rem;
      opacity: 0.85;
  }

  </style>
<!--nothing-->
</head>
<body  style="background-color: #FDFFFC;">
    <header>
        <div class="UpNav">
            <div class="p">
              <div class="email">
              <i class="far fa-envelope"></i><p style="color: #262626;"> fitness265@gmail.com</p></div>
              <a href="https://www.facebook.com/HEALTHY.Tunisie/" ><i class="fab fa-facebook" style="margin-bottom: 10% ;"></i></a>
              <a href="https://www.instagram.com/HEALTHY.Tunisie/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/HEALTHY.Tunisie/"><i class="fab fa-youtube"></i></a>
              <div class="phone" >
                  <i class="fas fa-phone-alt"></i>
                  <p style="color: #262626;"> 012 150 147 </p></div>
                      </div>
          <div class="sign">
              <button class="Signin"> <a href="../php/s_in_up.php"  style="    text-decoration: none;">My Account </a> </button>
          </div>
        </div>
    <nav style="background-color: #262626;" >
      <div class="logo">
       <h4><a href="../Index/Index.php" style="color: #FDFFFC;">I am healthy I am wealthy</a></h4>
      </div>
      <ul class="nav-links">
       <li>
        <a  href="../Index/Index.php">Home</a>
       </li>
       <li>
        <a  href="../php/fitness.php">Fitness</a>
       </li>
       <li>
        <a href="../php/nutrition.php">Nutrition</a>
       </li>
       <li>
        <a href="Lifestyle.html">Lifestyle</a>
       </li>
       <li>
        <div class="cart1">
          <span class="nav-icon">
            <button style =" background-color: transparent;border: none; color: #FDFFFC" onclick="togglePopup()"> <i class="fas fa-cart-plus" style ="font-size: 2.1rem;"></i></button>   
          </span>
          <div class="cart-items" style ="font-size: 1.1rem;">-</div>
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
       <!-------------------------------------------------------------------->

<!-- Services Section Begin -->
   <!-- Services Section Begin -->
   <section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>What we do?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
    </section>
        <div class="row">
            <div class="col-lg-1 order-lg-1 col-md-1 p-0">    
            </div>
            <div class="col-lg-3 order-lg-1 col-md-3 p-0" >
                <div class="ss-pic">
                    <img src="Source\image_2021-05-05_14-47-13.png" alt="">
                </div>
            </div>
            
            <div class="col-lg-8 order-lg-2 col-md-8 p-0" >
                <div class="ss-text">
                    <h4>Weight Loss Program</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut dolore
                        facilisis.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ducimus porro eveniet? Molestiae magnam sed et tempora quos dicta quaerat inventore autem tenetur, minima sit distinctio unde fugit modi cum.</p>
                        <p>
                            <a class="btn btn-light" data-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                             View Program>>
                            </a>
                            
                        </p>
                    </div>
            </div>
        </div>
        

        <div class="collapse" id="collapseExample">
                <div class="classes-timetable spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="schedule-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Sunday</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="workout-time">7:00</td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify " data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>3 Ingredient Peanut Butter Cookies</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>3 Ingredient Peanut Butter Cookies</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>3 Ingredient Peanut Butter Cookies</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="workout-time">10.00</td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Full Body Fat Burn</h6>
                                                    <span>30 min</span>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>

                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item">
                                                    <h6>Quick & Effective HIIT Workout</h6>
                                                    <span>16 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal6"> </i>
                                                   
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="yoga">
                                                    <h6>11 Abs</h6>
                                                    <span>11 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>

                                                </td>
                                                <td class="hover-bg ts-item">
                                                    <h6>Burn Arms & Back Fat Workout</h6>
                                                    <span>11 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal7"> </i>

                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="body">
                                                    <h6>Abs Workout 🔥Get that 11 Line </h6>
                                                    <span>11 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <h6>Full Body Fat Burn</h6>
                                                    <span>30 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>
                                                </td>
                                                <td></td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="workout-time">13.00</td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Healthy Mapo Tofu</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Healthy Mapo Tofu</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Healthy Mapo Tofu</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Healthy Mapo Tofu</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->                                                                                                                                             
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="workout-time">16.00</td>
                                                <td class="hover-bg ts-item" data-tsmeta="cardio">
                                                    <h6>Running</h6>
                                                    <span>1 hour</span>
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="body">
                                                    <h6>Get That Booty & Toned Legs</h6>
                                                    <span>16 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                                </td>
                                                
                                                <td class="hover-bg ts-item" data-tsmeta="body">
                                                    <h6>Abs Workout 🔥Get that 11 Line </h6>
                                                    <span>11 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                                
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="yoga">
                                                    <h6>Get That Booty & Toned Legs</h6>
                                                    <span>16 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                                   
                                                </td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <h6>Plank Workout</h6>
                                                    <span>10 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal5"> </i>
                                                <td class="hover-bg ts-item">
                                                    <h6>11 ABS</h6>
                                                    <span>11 min</span>
                                                    <div class="trainer-name">
                                                        Chloe Ting
                                                    </div>
                                                    <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="workout-time">18.00</td>
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Tofu Veggie Curry Soup</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->   </td> 
                                                       <td class="hover-bg ts-item" data-tsmeta="gym">
                                                        <!--  -->
                                                        <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                        <div class="trainer-name">
                                                            Chloe ting
                                                        </div>
                                                       
                                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                           ></a>-->   </td>           
                                                           <td class="hover-bg ts-item" data-tsmeta="gym">
                                                           <!--  -->
                                                           <h6>Tofu Veggie Curry Soup</h6>
                                                           <div class="trainer-name">
                                                               Chloe ting
                                                           </div>
                                                          
                                                           <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                           <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                              ></a>-->   </td> 
                                                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                                                <!--  -->
                                                                <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                                <div class="trainer-name">
                                                                    Chloe ting
                                                                </div>
                                                               
                                                                <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                                <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                                   ></a>-->   </td>  
                                                                  <td class="hover-bg ts-item" data-tsmeta="gym">
                                                                   <!--  -->
                                                                   <h6>Tofu Veggie Curry Soup</h6>
                                                                   <div class="trainer-name">
                                                                       Chloe ting
                                                                   </div>
                                                                  
                                                                   <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                                   <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                                      ></a>-->   </td> 
                                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                                        <!--  -->
                                                        <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                        <div class="trainer-name">
                                                            Chloe ting
                                                        </div>
                                                       
                                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                           ></a>-->   </td>  
                                                           <td class="hover-bg ts-item" data-tsmeta="gym">
                                                           <!--  -->
                                                           <h6>Tofu Veggie Curry Soup</h6>
                                                           <div class="trainer-name">
                                                               Chloe ting
                                                           </div>
                                                          
                                                           <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                           <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                              ></a>-->   </td> 
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <br><br>
            
    <!-- Classes Timetable Section Begin -->
  
  <div class="modal fade" id="modal103" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="receipe-content-area">
        <div class="container" style="background-color: #FDFFFC;">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="receipe-headline my-5">
                        <br>
                        <h2 style="text-align: center;">Pan Seared Salmon with Quinoa Risotto</h2>
                        <p style="color: black;">Pan seared salmon skillet on a bed of soft, flavorful quinoa 'risotto'. It's a lighter dish than regular risotto, so it's perfect for some warmer days ahead, and is very easy to make.</p>
                        <div class="receipe-duration">
                            <h6>Prep: 5 mins</h6>
                            <h6>Cook: 30 mins</h6>
                            <h6>Yields: 2 Servings</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-4"><img src="food\Last\photo_2021-05-05_14-26-04.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Last\photo_2021-05-05_14-26-16.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Last\photo_2021-05-05_14-26-21.jpg" alt=""></div>
                 
            <div class="ingredients">
                <div class="col-md-6">
                    <br>
                        <h4>Ingredients</h4>
                         <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">1 small yellow onion </label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">170g quinoa (1 cup)</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">480ml almond milk (2 cups)</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">240ml vegetable broth (1 cup)</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">2 tsp Italian herbs</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">2 salmon fillets</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">1 tsp olive oil</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Salt, to taste</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Pepper, to taste</label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="steps">
                <div class="col-md-6">
                    <br>
                    <h4>Steps</h4>
                    <br>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>01.</h4>
                        <p>Dice onion.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>02.</h4>
                        <p> Rinse quinoa very well and drain. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>03.</h4>
                        <p>Heat up olive oil in a large non-stick skillet and over medium heat. Add diced onion and sauté for a few minutes until translucent and fragrant.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    
                    <div class="single-preparation-step d-flex">
                        <h4>04.</h4>
                        <p> Add quinoa, almond milk, vegetable broth and Italian herbs. -Bring to a boil then reduce heat. Cover with a lid and let simmer for 30 minutes. Give it a stir every once in a while. Turn down the heat and add a splash of water if it's drying out before the quinoa becomes soft and creamy.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>05.</h4>
                        <p> When quinoa is soft and creamy, season with salt and pepper to taste. Set aside and keep warm.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>06.</h4>
                        <p>Heat up a non-stick skillet over medium heat. Add salmon fillets and let sear for 3-4 minutes on each side. Season liberally with salt and pepper while cooking.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>07.</h4>
                        <p>  Serve seared salmon on top of a bed of quinoa risotto with you favorite vegetables. Enjoy!</p>
                    </div>
                </div>
            </div>

                <!-- Ingredients -->
                
            </div>
        </div>
    </div>
</div>

      <!--/.Content-->
    </div>
  <div class="modal fade" id="modal102" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="receipe-content-area">
        <div class="container" style="background-color: #FDFFFC;">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="receipe-headline my-5">
                        <br>
                        <h2 style="text-align: center;">3 Ingredient Peanut Butter Cookies</h2>
                        <p style="color: black;">This delicious pasta dish is low carb yet nutritious and delicious! Hemp seeds are rich in healthy fats and essential fatty acids and give the mushroom sauce a luscious creamy texture without the need for dairy, and the high fiber in the shirataki noodles will keep you full and satisfied for a long time!</p>
                        <div class="receipe-duration">
                            <h6>Prep: 10 mins</h6>
                            <h6>Cook: 10 mins</h6>
                            <h6>Yields: 20 Servings</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-4"><img src="food\Cookies\photo_2021-05-05_14-14-24.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Cookies\photo_2021-05-05_14-14-49.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Cookies\photo_2021-05-05_14-14-53.jpg" alt=""></div>
                 
            <div class="ingredients">
                <div class="col-md-6">
                    <br>
                        <h4>Ingredients</h4>
                         <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">240g natural peanut butter (1 cup) </label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">100g monk fruit erythritol sweetener (1/2 cup)</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">1 egg</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">1 tsp vanilla extract (optional)</label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="steps">
                <div class="col-md-6">
                    <br>
                    <h4>Steps</h4>
                    <br>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>01.</h4>
                        <p>Preheat oven to 180°C / 350°F.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>02.</h4>
                        <p> In a large mixing bowl, combine all ingredients until thoroughly mixed. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>03.</h4>
                        <p>Line a baking tray with parchment paper.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    
                    <div class="single-preparation-step d-flex">
                        <h4>04.</h4>
                        <p> Shape dough into cookies. Take a tablespoonful of dough and roll it into a ball with your hands, then place on cookie sheet.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>05.</h4>
                        <p> Repeat until you use up all the dough</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>06.</h4>
                        <p>Flatten the cookie dough balls by pressing down on each one with a fork in a criss-cross pattern</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>07.</h4>
                        <p>  Bake for 10 minutes or until cookies are golden brown.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>08.</h4>
                        <p> Remove cookies from oven and let cool completely before eating or storing.</p>
                    </div>
                </div>
            </div>

                <!-- Ingredients -->
                
            </div>
        </div>
    </div>
</div>

      <!--/.Content-->
    </div>
  <div class="modal fade" id="modal101" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="receipe-content-area">
        <div class="container" style="background-color: #FDFFFC;">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="receipe-headline my-5">
                        <br>
                        <h2 style="text-align: center;">Creamy Mushroom Shirataki Spaghetti</h2>
                        <p style="color: black;">This delicious pasta dish is low carb yet nutritious and delicious! Hemp seeds are rich in healthy fats and essential fatty acids and give the mushroom sauce a luscious creamy texture without the need for dairy, and the high fiber in the shirataki noodles will keep you full and satisfied for a long time!</p>
                        <div class="receipe-duration">
                            <h6>Prep: 15 mins</h6>
                            <h6>Cook: 15 mins</h6>
                            <h6>Yields: 2 Servings</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-4"><img src="food\Creamy Mushroom Shirataki Spaghetti\photo_2021-05-05_14-04-41.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Creamy Mushroom Shirataki Spaghetti\photo_2021-05-05_14-04-55.jpg" alt=""></div>
                 <div class="col-md-4"><img src="food\Creamy Mushroom Shirataki Spaghetti\photo_2021-05-05_14-04-59.jpg" alt=""></div>
                 
            <div class="ingredients">
                <div class="col-md-6">
                    <br>
                        <h4>Ingredients</h4>
                         <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">400g spaghetti-style shirataki noodles, drained </label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">500g brown Swiss mushrooms, sliced</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">40g hemp seeds</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">6 tbsp nutritional yeast</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">2 tbsp miso</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">240ml water or almond milk</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">70g frozen peas, defrosted</label>
                        </div>
                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">1/4 tsp salt </label>
                        </div>
                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">1 tsp oil </label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="steps">
                <div class="col-md-6">
                    <br>
                    <h4>Steps</h4>
                    <br>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>01.</h4>
                        <p>Drain the noodles, then rinse in a large sieve under tap water for a few minutes</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>02.</h4>
                        <p> transfer noodles into a pot of boiling water and cook for 2-3 minutes. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>03.</h4>
                        <p>Drain noodles and transfer to a non-stick skillet.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    
                    <div class="single-preparation-step d-flex">
                        <h4>04.</h4>
                        <p> Heat up a non-stick skillet over medium heat, add sliced mushrooms and stir fry, without oil, for 5 minutes, until most of the moisture evaporates</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>05.</h4>
                        <p> Add olive oil and stir fry mushrooms for 5 more minutes or until golden brown. Turn off the heat and set aside.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>06.</h4>
                        <p>Place hemp seeds, nutritional yeast, miso and water/almond milk in a food processor. Process until smooth and creamy, pausing to scrap down the sides if necessary.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>07.</h4>
                        <p> Transfer the sauce and peas to skillet with the browned mushrooms.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>08.</h4>
                        <p> Cook mixture over low heat for 2-3 minutes or until the peas are cooked to your liking. Add a splash of water to thin out the sauce if it gets too thick in the process</p>
                    </div>
                    <div class="single-preparation-step d-flex">
                        <h4>09.</h4>
                        <p> Add shirataki noodles to skillet and toss to coat</p>
                    </div>
                    <div class="single-preparation-step d-flex">
                        <h4>10.</h4>
                        <p> Top with more freshly ground black pepper and hemp seeds if desired. Serve immediately.</p>
                    </div>
                </div>
            </div>

                <!-- Ingredients -->
                
            </div>
        </div>
    </div>
</div>

      <!--/.Content-->
    </div>
  <div class="modal fade" id="modal99" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="receipe-content-area">
        <div class="container" style="background-color: #FDFFFC;">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="receipe-headline my-5">
                        <br>
                        <h2 style="text-align: center;">Healthy Mapo Tofu</h2>
                        <p style="color: black;">Ground pork stir fried with silken tofu in a rich, mildly spicy and deeply flavorsome sauce. Mapo Tofu is a classic Chinese dish full of protein, but this one is healthier as there's less of the chillies and oil. It's very easy to make and great for meal prep too.</p>
                        <div class="receipe-duration">
                            <h6>Prep: 10 mins</h6>
                            <h6>Cook: 20 mins</h6>
                            <h6>Yields: 2 Servings</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-4"><img src="food\Healthy Mapo Tofu\image_2021-05-05_12-33-52.png" alt=""></div>
                 <div class="col-md-4"><img src="food\Healthy Mapo Tofu\image_2021-05-05_12-33-57.png" alt=""></div>
                 <div class="col-md-4"><img src="food\Healthy Mapo Tofu\image_2021-05-05_12-34-02.png" alt=""></div>
                 
            <div class="ingredients">
                <div class="col-md-6">
                    <br>
                        <h4>Ingredients</h4>
                         <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">300g silken tofu </label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">150g ground pork</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">1/2 tbsp doubanjiang</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">1/2 tbsp soy sauce</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">1 tbsp miso paste</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">1/2 tsp Sichuan pepper powder</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">100ml water</label>
                        </div>
                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">1/2 tbsp corn starch </label>
                        </div>
                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">1 tsp oil </label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="steps">
                <div class="col-md-6">
                    <br>
                    <h4>Steps</h4>
                    <br>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>01.</h4>
                        <p>Drain tofu and pat dry, then cut into 0.8 in cubes. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>02.</h4>
                        <p>In a bowl, combine doubanjiang, soy sauce, miso paste, Sichuan pepper powder and half of the water. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>04.</h4>
                        <p> Heat up oil in a non-stick skillet over medium-high heat. Add garlic and stir fry until fragrant.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    
                    <div class="single-preparation-step d-flex">
                        <h4>05.</h4>
                        <p> Add pork to skillet and stir fry until golden brown.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>06.</h4>
                        <p> Add tofu cubes and prepared sauce to skillet. Bring to a boil, then reduce heat to a simmer, stirring gently once in a while. Cook for 2 minutes.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>07.</h4>
                        <p>In a small bowl, add corn starch and the remaining water and mix until combined. Add this mixture to skillet and let the sauce cook and thicken slightly or to your preferred consistency.</p>
                    </div><!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>08.</h4>
                        <p> Taste and add more soy sauce and pepper powder if necessary.</p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>09.</h4>
                        <p> Remove from heat and serve with steamed rice or noodles.</p>
                    </div>
                </div>
            </div>

                <!-- Ingredients -->
                
            </div>
        </div>
    </div>
</div>

      <!--/.Content-->
    </div>

<div class="modal fade" id="modal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="receipe-content-area">
        <div class="container" style="background-color: #FDFFFC;">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="receipe-headline my-5">
                        <br>
                        <h2 style="text-align: center;">Banana-Free Chocolate Protein Smoothie</h2>
                        <p style="color: black;">
                            Looking for a recipe for a low-carb smoothie recipe without banana? Look no further! The secret ingredient in this one is frozen cauliflower which creates a creamy base while being lower in carbs than bananas. Promise you can't taste the cauliflower!</p>
                        <div class="receipe-duration">
                            <h6>Prep: 5 mins</h6>
                            <h6>Yields: 1 Serving</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-4"><img src="food\Banana-Free Chocolate Protein Smoothie\image_2021-05-05_13-06-14.png" alt=""></div>
                 <div class="col-md-4"><img src="food\Banana-Free Chocolate Protein Smoothie\image_2021-05-05_13-06-21.png" alt=""></div>
                 <div class="col-md-4"><img src="food\Banana-Free Chocolate Protein Smoothie\image_2021-05-05_13-06-27.png" alt=""></div>
                 
            <div class="ingredients">
                <div class="col-md-6">
                    <br>
                        <h4>Ingredients</h4>
                         <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">40g frozen cauliflower florets</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">1-2 Medjool dates, pitted</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">1 scoop chocolate protein powder</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">1 tbsp cacao powder</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">1 tbsp miso paste</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">240ml milk of choice</label>
                        </div>

                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">1/4 tsp vanilla extract</label>
                        </div>
                        <!-- Custom Checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">Pinch of salt </label>
                        </div>
                        
                    
                    </div>
                </div>
            <div class="row">
                <div class="steps">
                <div class="col-md-6">
                    <br>
                    <h4>Steps</h4>
                    <br>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>01.</h4>
                        <p>Place all ingredients in a high speed blender and blend until smooth and creamy. </p>
                    </div>
                    <!-- Single Preparation Step -->
                    <div class="single-preparation-step d-flex">
                        <h4>02.</h4>
                        <p>Enjoy! </p>
                    </div>
                </div>
            </div>

                <!-- Ingredients -->
                
            </div>
        </div>
    </div>
</div>

      <!--/.Content-->
    </div>
<div class="modal fade" id="modal100" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <!--Content-->
          <div class="receipe-content-area">
            <div class="container" style="background-color: #FDFFFC;">
    
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="receipe-headline my-5">
                            <br>
                            <h2 style="text-align: center;">Tofu Veggie Curry Soup</h2>
                            <p style="color: black;">
                                A delicious bowl of creamy veggie curry soup made with pantry friendly ingredients in under 15 minutes! It's vegan, dairy free and can be made nut free as well.</p>
                            <div class="receipe-duration">
                                <h6>Prep: 5 mins</h6>
                                <h6>cook: 15 mins</h6>
                                <h6>Yields: 2 Serving</h6>
                                
                            </div>
                        </div>
                    </div>
                </div>
                     <div class="col-md-4"><img src="food\Tofu Veggie Curry Soup\photo_2021-05-05_13-40-32.jpg" alt=""></div>
                     <div class="col-md-4"><img src="food\Tofu Veggie Curry Soup\photo_2021-05-05_13-40-47.jpg" alt=""></div>
                     <div class="col-md-4"><img src="food\Tofu Veggie Curry Soup\photo_2021-05-05_13-40-52.jpg" alt=""></div>
                     
                <div class="ingredients">
                    <div class="col-md-6">
                        <br>
                            <h4>Ingredients</h4>
                             <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">800ml vegetable stock</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">200ml unflavored almond milk</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">400g silken tofu</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">100g frozen corn kernels</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">100g frozen peas</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">6 heaped tbsp nutritional yeast</label>
                            </div>
    
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">1 tbsp curry powder</label>
                            </div>
                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">1 tsp corn starch</label>
                            </div>
                            
                        
                        </div>
                    </div>
                <div class="row">
                    <div class="steps">
                    <div class="col-md-6">
                        <br>
                        <h4>Steps</h4>
                        <br>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>01.</h4>
                            <p>Drain tofu and cut into small cubes. </p>
                        </div>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>02.</h4>
                            <p>Add tofu cubes, vegetable stock, corn kernels, peas and curry powder to a pot. Let simmer over medium-high heat for 5-10 minutes </p>
                        </div>
                        <div class="single-preparation-step d-flex">
                            <h4>03.</h4>
                            <p>Meanwhile, mix almond milk and corn starch in a bowl until combined. </p>
                        </div>
                        <div class="single-preparation-step d-flex">
                            <h4>04.</h4>
                            <p>Add almond milk mixture, nutritional yeast, black pepper and white pepper to the pot. Let simmer for 5 minutes until the soup is thickened slightly. Taste and add more seasoning if necessary. </p>
                        </div>
                        <div class="single-preparation-step d-flex">
                            <h4>05.</h4>
                            <p>Remove from heat and serve. </p>
                        </div>
                    </div>
                </div>
    
                    <!-- Ingredients -->
                    
                </div>
            </div>
        </div>
    </div>
    
          <!--/.Content-->
        </div>
  <!--Modal:1 Name-->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                            It's the 2019 Summer Shred Challenge! Time to burn that belly fat away, lose weight in time to get that summer body! This full body workout is 25 mins long, has warm ups and cool down stretches. Lots of variations of high intensity exercises to help you burn those calories and lose weight.    Enjoy the workouts, and please do hit that like button, subscribe and leave a comment below.
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lscqihirc3c" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>


<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                            It's the 2019 Summer Shred Challenge! Time to burn that belly fat away, lose weight in time to get that summer body! This full body workout is 25 mins long, has warm ups and cool down stretches. Lots of variations of high intensity exercises to help you burn those calories and lose weight.    Enjoy the workouts, and please do hit that like button, subscribe and leave a comment below.
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UBnfm4s7CRA" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                Want that 11 line abs? It's the 2019 Summer Shred Challenge! Time to burn that belly fat away, lose weight in time to get that summer body! This intense abs workout is 10 mins long, contains 12 abs exercises that will help you tone your abs towards that 11 line abs and flat tummy.
                           </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6TmQiugy_qw" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                You can do this challenge on it's own, but preferably do this in addition to any of your workouts. It's just an extra 10 mins a day. Do this anywhere between 3-6 times a week if you want to get that core.
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EJ8XxPvCG0U" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                This 15 minute hiit workout has various high intensity exercise to help you burn those calories and lose weight in a quick and effective cardio session, all in the comfort in your own home. No jumping and no equipment needed in this quick and effective high intensity hiit workout.
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mvlfZ43ehmE" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                This is a 10 mins Upper Body workout to help you shape up those arms of yours in this easy to follow home workout. No jumping and no equipment needed, shape up those arms today!                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d8STqg1VvN0" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                This is a 15 mins home based booty workout to help you get that round butt from home. No jumping and no equipment needed, great for beginners. Get that toned legs and booty!
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mTgc6gpCEng" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>

<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
       <!--Body-->
        <div class="modal-body mb-0 p-0">
                <div class="row">
                   <div class="col-6">
                         <h4>Challenge Yourself This summer</h4>          
                   </div> 
                   
                   <div class="col-6">
                            <p style="color: black;">
                                This 15 minute hiit workout has various high intensity exercise to help you burn those calories and lose weight in a quick and effective cardio session, all in the comfort in your own home. No jumping and no equipment needed in this quick and effective high intensity hiit workout.
                            </p>
                    </div>
                </div>
           <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mvlfZ43ehmE" allowfullscreen></iframe>
           </div>
        </div>
      </div>
      <!--/.Content-->
    </div>
</div>

<!--2nd Table-->

<div class="row">
    <div class="col-lg-1 order-lg-1 col-md-6 p-0">    
    </div>
    <div class="col-lg-3 order-lg-1 col-md-6 p-0" >
        <div class="ss-pic">
            <img src="Source\eb1fe17ef1df7bba3989813986e0c465.jpg" alt="">
        </div>
    </div>
    
    <div class="col-lg-8 order-lg-2 col-md-6 p-0" >
        <div class="ss-text">
            <h4>Weight Loss Program</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut dolore
                facilisis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ducimus porro eveniet? Molestiae magnam sed et tempora quos dicta quaerat inventore autem tenetur, minima sit distinctio unde fugit modi cum.</p>
                <p>
                    <a class="btn btn-light" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                     View Program>>
                    </a>
                </p>
            </div>
    </div>
</div>

<div class="collapse" id="collapseExample1">
    <div class="classes-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time">7:00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify " data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>3 Ingredient Peanut Butter Cookies</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>3 Ingredient Peanut Butter Cookies</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>3 Ingredient Peanut Butter Cookies</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">10.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Full Body Fat Burn</h6>
                                        <span>30 min</span>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>

                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item">
                                        <h6>Quick & Effective HIIT Workout</h6>
                                        <span>16 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal6"> </i>
                                       
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>11 Abs</h6>
                                        <span>11 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>

                                    </td>
                                    <td class="hover-bg ts-item">
                                        <h6>Burn Arms & Back Fat Workout</h6>
                                        <span>11 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal7"> </i>

                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Abs Workout 🔥Get that 11 Line </h6>
                                        <span>11 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Full Body Fat Burn</h6>
                                        <span>30 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>
                                    </td>
                                    <td></td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">13.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Healthy Mapo Tofu</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Healthy Mapo Tofu</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Healthy Mapo Tofu</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Healthy Mapo Tofu</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->                                                                                                                                             
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">16.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Running</h6>
                                        <span>1 hour</span>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Get That Booty & Toned Legs</h6>
                                        <span>16 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                    </td>
                                    
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Abs Workout 🔥Get that 11 Line </h6>
                                        <span>11 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                    
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Get That Booty & Toned Legs</h6>
                                        <span>16 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                       
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Plank Workout</h6>
                                        <span>10 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal5"> </i>
                                    <td class="hover-bg ts-item">
                                        <h6>11 ABS</h6>
                                        <span>11 min</span>
                                        <div class="trainer-name">
                                            Chloe Ting
                                        </div>
                                        <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">18.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <!--  -->
                                        <h6>Tofu Veggie Curry Soup</h6>
                                        <div class="trainer-name">
                                            Chloe ting
                                        </div>
                                       
                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                           ></a>-->   </td> 
                                           <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->   </td>           
                                               <td class="hover-bg ts-item" data-tsmeta="gym">
                                               <!--  -->
                                               <h6>Tofu Veggie Curry Soup</h6>
                                               <div class="trainer-name">
                                                   Chloe ting
                                               </div>
                                              
                                               <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                               <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                  ></a>-->   </td> 
                                                <td class="hover-bg ts-item" data-tsmeta="gym">
                                                    <!--  -->
                                                    <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                    <div class="trainer-name">
                                                        Chloe ting
                                                    </div>
                                                   
                                                    <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                    <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                       ></a>-->   </td>  
                                                      <td class="hover-bg ts-item" data-tsmeta="gym">
                                                       <!--  -->
                                                       <h6>Tofu Veggie Curry Soup</h6>
                                                       <div class="trainer-name">
                                                           Chloe ting
                                                       </div>
                                                      
                                                       <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                       <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                          ></a>-->   </td> 
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->   </td>  
                                               <td class="hover-bg ts-item" data-tsmeta="gym">
                                               <!--  -->
                                               <h6>Tofu Veggie Curry Soup</h6>
                                               <div class="trainer-name">
                                                   Chloe ting
                                               </div>
                                              
                                               <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                               <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                  ></a>-->   </td> 
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
  </div>
    </div>
    <!--end 2nd Table-->
<!--3rd Table-->
    <br><br><br>
    <div class="row">
        <div class="col-lg-1 order-lg-1 col-md-6 p-0">    
        </div>
        <div class="col-lg-3 order-lg-1 col-md-6 p-0" >
            <div class="ss-pic">
                <img src="Source\100865129_2098127220331749_2678680487295188992_n.jpg" alt="">
            </div>
        </div>

        <div class="col-lg-8 order-lg-2 col-md-6 p-0" >
            <div class="ss-text">
                <h4>Weight Loss Program</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut dolore
                    facilisis.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ducimus porro eveniet? Molestiae magnam sed et tempora quos dicta quaerat inventore autem tenetur, minima sit distinctio unde fugit modi cum.</p>
                    <p>
                        <a class="btn btn-light" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                         View Program>>
                        </a>
                    </p>
                </div>
        </div>
    </div>
    <div class="collapse" id="collapseExample2">
  
        <div class="classes-timetable spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="schedule-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="workout-time">7:00</td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify " data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>3 Ingredient Peanut Butter Cookies</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>3 Ingredient Peanut Butter Cookies</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>3 Ingredient Peanut Butter Cookies</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal102"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Banana-Free Chocolate Protein Smoothie</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal0"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="workout-time">10.00</td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Full Body Fat Burn</h6>
                                            <span>30 min</span>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>

                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item">
                                            <h6>Quick & Effective HIIT Workout</h6>
                                            <span>16 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal6"> </i>
                                           
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="yoga">
                                            <h6>11 Abs</h6>
                                            <span>11 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>

                                        </td>
                                        <td class="hover-bg ts-item">
                                            <h6>Burn Arms & Back Fat Workout</h6>
                                            <span>11 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal7"> </i>

                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="body">
                                            <h6>Abs Workout 🔥Get that 11 Line </h6>
                                            <span>11 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <h6>Full Body Fat Burn</h6>
                                            <span>30 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal1"> </i>
                                        </td>
                                        <td></td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="workout-time">13.00</td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Healthy Mapo Tofu</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Healthy Mapo Tofu</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Healthy Mapo Tofu</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Creamy Mushroom Shirataki Spaghetti</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal101"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Healthy Mapo Tofu</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal99"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->                                                                                                                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="workout-time">16.00</td>
                                        <td class="hover-bg ts-item" data-tsmeta="cardio">
                                            <h6>Running</h6>
                                            <span>1 hour</span>
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="body">
                                            <h6>Get That Booty & Toned Legs</h6>
                                            <span>16 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                        </td>
                                        
                                        <td class="hover-bg ts-item" data-tsmeta="body">
                                            <h6>Abs Workout 🔥Get that 11 Line </h6>
                                            <span>11 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal4"> </i>
                                        
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="yoga">
                                            <h6>Get That Booty & Toned Legs</h6>
                                            <span>16 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal8"> </i>
                                           
                                        </td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <h6>Plank Workout</h6>
                                            <span>10 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal5"> </i>
                                        <td class="hover-bg ts-item">
                                            <h6>11 ABS</h6>
                                            <span>11 min</span>
                                            <div class="trainer-name">
                                                Chloe Ting
                                            </div>
                                            <i class="iconify " data-icon="mdi-youtube" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal3"> </i>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="workout-time">18.00</td>
                                        <td class="hover-bg ts-item" data-tsmeta="gym">
                                            <!--  -->
                                            <h6>Tofu Veggie Curry Soup</h6>
                                            <div class="trainer-name">
                                                Chloe ting
                                            </div>
                                           
                                            <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                            <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                               ></a>-->   </td> 
                                               <td class="hover-bg ts-item" data-tsmeta="gym">
                                                <!--  -->
                                                <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                <div class="trainer-name">
                                                    Chloe ting
                                                </div>
                                               
                                                <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                   ></a>-->   </td>           
                                                   <td class="hover-bg ts-item" data-tsmeta="gym">
                                                   <!--  -->
                                                   <h6>Tofu Veggie Curry Soup</h6>
                                                   <div class="trainer-name">
                                                       Chloe ting
                                                   </div>
                                                  
                                                   <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                   <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                      ></a>-->   </td> 
                                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                                        <!--  -->
                                                        <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                        <div class="trainer-name">
                                                            Chloe ting
                                                        </div>
                                                       
                                                        <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                        <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                           ></a>-->   </td>  
                                                          <td class="hover-bg ts-item" data-tsmeta="gym">
                                                           <!--  -->
                                                           <h6>Tofu Veggie Curry Soup</h6>
                                                           <div class="trainer-name">
                                                               Chloe ting
                                                           </div>
                                                          
                                                           <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                           <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                              ></a>-->   </td> 
                                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                                <!--  -->
                                                <h6>Pan Seared Salmon with Quinoa Risotto</h6>
                                                <div class="trainer-name">
                                                    Chloe ting
                                                </div>
                                               
                                                <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal103"> </i>
                                                <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                   ></a>-->   </td>  
                                                   <td class="hover-bg ts-item" data-tsmeta="gym">
                                                   <!--  -->
                                                   <h6>Tofu Veggie Curry Soup</h6>
                                                   <div class="trainer-name">
                                                       Chloe ting
                                                   </div>
                                                  
                                                   <i class="iconify" data-icon="mdi-chef-hat" data-inline="false" style="font-size: 30px;"  data-toggle="modal" data-target="#modal100"> </i>
                                                   <!--<a><img class="img-fluid z-depth-1" src="img/thumbnail/ss-ep1.jpg" alt="video"
                                                      ></a>-->   </td> 
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </div>   
<!--end 3rd Table-->
<br><br><br><br>
<br><b><br><br><br>

    <!-- Trainer Table Schedule Section End -->
         <!-------------------------------------------------------------------------->
<section class="footer-section " style = "font-family: 'Lexend', sans-serif;" >
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
                  <h4>Useful links</h4>
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
                  <h4>Support</h4>
                  <ul>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">My account</a></li>
                      <li><a href="#">Subscribe</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="fs-widget">
                  <h2>I am healthy <br>I am wealthy</h2>
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
      <!-- Footer Section End -->
<script src="js.js"></script>
<script src="project.js"></script>
</body>
</html>