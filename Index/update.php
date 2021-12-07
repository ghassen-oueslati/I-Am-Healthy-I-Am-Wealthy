<?php
 include '../php/connect.php';
 include 'checklogin.php';
 include 'logout.php';
 include 'AddP.php';
 include 'UpdateP.php';
 include 'DeleteP.php';
 include 'AddU.php';
 include 'UpdateU.php';
 include 'DeleteU.php';
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
<link rel="stylesheet" href="../css1/Index.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css1/Admin.css?v=<?php echo time(); ?>">
<!--not mine -->
<link rel="icon" type="image/png" href="photos/icon2.png" />
<!-- Font Awesome : importing icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .final{
        position: absolute;
right:    0;
bottom:   0;
padding: 20px;
width:300px;

    }
    </style>
</head>
<body> 
        <header>
         <div class="UpNav" style="text-align: center;" >
             <h3 style="background-color:var(--p)">Admin Control Center</h3>
         </div>
        
<!------ Include the above in your HEAD tag ---------->
<div class=" register">
<form action=""method="POST" enctype="multipart/form-data">

                <div class="row">
                    
                    <div class="col-md-3 register-left">
                        <img src="admin.png" alt=""/>
                        <h3 style="color: #fdfffc;">Welcome Admin</h3>
                    </div>
                    <div class="col-md-9 register-right">
                          <div class="final">
                       
                        <input type="submit" name="logout" class="btnRegister"  value="logout"/>
                        </div>

                       
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">User</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Product Management</h3>
                                <div class="row register-form">
                                    <div class="col-md-4">
                                        <!--<div class="form-group">
                                            <input type="text" name="gid" class="form-control" placeholder="ID *" value="" />
                                        </div>-->
                                        <div class="form-group">
                                            <input type="text" name="gname" class="form-control" placeholder="Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="gquantity"class="form-control" placeholder="Quantity *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="gprice" class="form-control"  placeholder="Price  *" value="" />
                                        </div>
                                        <div class="form-group">    
                                        <label for="">categoryG</label>                               
                                          <select class="form-control"name="gcategoryG" class="form-control"  placeholder="categoryG  *" value="" />
                                            <option>fit</option>
                                            <option>nut</option>
                                        </select>
                                        </div>
                                        <div class="form-group">  
                                        <label for="">categoryS</label>                                 
                                          <select class="form-control"name="gcategoryS" class="form-control"  placeholder="categoryS  *" value="" />
                                            <option>acc</option>
                                            <option>equi</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="gread_more" class="form-control"  placeholder="read_more  *" value="" />
                                        </div>                             
                                        
                                        <div class="button-wrapper">
                                            <input type="file" name="gimageP" >
                                            </div>
                                            <br>
                                        <div class="button-wrapper">
                                            <input type="file" name="gimage" >
                                            </div>
                                        <input type="submit" name="add" class="btnRegister"  value="add"/>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="namee" class="form-control" placeholder="Name of the product to update *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="quantity" class="form-control" placeholder="Quantity*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="price" class="form-control"  placeholder="Price *" value="" />
                                        </div>
                                        
                                        <div class="form-group"> 
                                        <label for="">categoryG</label>
                                                                    
                                          <select class="form-control"name="categoryG" class="form-control"  placeholder="categoryG  *" value="" />
                                            <option>fit</option>
                                            <option>nut</option>
                                        </select>
                                        </div>
                                        <div class="form-group">       
                                        <label for="">categoryS</label>                          
                                          <select class="form-control"name="categoryS" class="form-control"  placeholder="categoryS  *" value="" />
                                            <option>acc</option>
                                            <option>equi</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="read_more" class="form-control"  placeholder="read_more  *" value="" />
                                        </div>                             
                                        
                                        <div class="button-wrapper">
                                            <input type="file" name="imageP" >
                                            </div>
                                            <br>
                                        <div class="button-wrapper">
                                            <input type="file" name="my_image" >
                                            </div>
                                        <input type="submit" name="update" class="btnRegister"  value="Update"/>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="id1" class="form-control" placeholder="Product Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="id2" class="form-control" placeholder="Confirm Product Name *" value="" />
                                        </div>
                                        
                                        <input type="submit" name="submit" class="btnRegister"  value="Delete"/>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">User Management</h3>
                                <div class="row register-form">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                            <input type="text" name="auname" class="form-control" placeholder="First Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="aulastname" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="auemail"class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="aupassword" class="form-control"  placeholder="Password  *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="auaddress" class="form-control"  placeholder="Address  *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="auadmin" class="form-control"  placeholder="1 for Admin*" value="" min="0" max="1" />
                                        </div>
                                       
                                        <input type="submit" name="auadd" class="btnRegister"  value="add"/>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                            <input type="text" name="uuname" class="form-control" placeholder="First Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="uulastname" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="uuoldemail"class="form-control" placeholder="Old Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="uuemail"class="form-control" placeholder="New Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="uupassword" class="form-control"  placeholder="New Password  *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="uuaddress" class="form-control"  placeholder="Address  *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="uuadmin" class="form-control"  placeholder="1 for Admin*" value="" min="0" max="1" />
                                        </div>

                                        <input type="submit" name="uuupdate" class="btnRegister"  value="Upload"/>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="duname" class="form-control" placeholder="First Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="dulastname" class="form-control" placeholder="Last Name" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="duemail" class="form-control" placeholder="Email" value="" />
                                        </div>
                                        
                                        <input type="submit" name="dusubmit" class="btnRegister"  value="Delete"/>

                                     
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                         
                        </div>
                    </div>
                </div>

               
</form>
</div>
<!--end ghassen panel-->
<section class="footer-section" style="margin-top: 0%;">
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
                  <h2>I AM HEALTHY <br>I AM WEALTHY</h2>
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

<!-- Search model Begin -->
<script src="../js1/js.js"></script>
<script src="../js1/project.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
</body>
</html>