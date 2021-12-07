<?php

if (isset($_POST["add"])){
  if (isset($_SESSION["cart"])){
      $item_array_id = array_column($_SESSION["cart"],"product_id");
      if (!in_array($_GET["id"],$item_array_id)){
          $count = count($_SESSION["cart"]);
          $item_array = array(
              'product_id' => $_GET["id"],
              'item_name' => $_POST["hidden_name"],
              'product_price' => $_POST["hidden_price"],
              'item_quantity' => $_POST["quantity"],
          );
          $id= $_GET["id"];
          $name = $_POST["hidden_name"];
          $price =$_POST["hidden_price"];
          $quantity = $_POST["quantity"];
          $_SESSION["cart"][$count] = $item_array;
          echo"salut";
        $insert = mysqli_query($connect,"INSERT INTO `Cart`(`product_id`, `item_name`, `product_price`, `item_quantity`) VALUES ('$id','$name ','$price','$quantity')");
        echo"salut again";
          echo '<script>window.location="fitness.php"</script>';
          
      }else{
          echo '<script>alert("Product is already Added to Cart")</script>';
          echo '<script>window.location="fitness.php"</script>';
      }
  }else{
      $item_array = array(
          'product_id' => $_GET["id"],
          'item_name' => $_POST["hidden_name"],
          'product_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"],
      );
      $_SESSION["cart"][0] = $item_array;
      $id= $_GET["id"];
      $name = $_POST["hidden_name"];
      $price =$_POST["hidden_price"];
      $quantity = $_POST["quantity"];
    $insert = mysqli_query($connect,"INSERT INTO `Cart`(`product_id`, `item_name`, `product_price`, `item_quantity`) VALUES ('$id','$name ','$price','$quantity')");
      
  }
}

if (isset($_GET["action"])){
  if ($_GET["action"] == "delete"){
      foreach ($_SESSION["cart"] as $keys => $value){
          if ($value["product_id"] == $_GET["id"]){
              unset($_SESSION["cart"][$keys]);
              $id = $_GET["id"] ;
              $delete = mysqli_query($connect,"DELETE FROM `Cart` WHERE `product_id`= $id");
              echo '<script>alert("Product has been Removed...!")</script>';
              echo '<script>window.location="fitness.php"</script>';
          }
      }
  }
}

if (isset($_POST["save"])){
  $query = "SELECT * FROM Cart ORDER BY id ASC";
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result) > 0)
  {
     while($row = mysqli_fetch_array($result))
     {   $id = $_GET["id"] ;
         $select = "SELECT * FROM Cart WHERE  `product_id`= $id";
         $res = mysqli_query($connect, $select);
         $r = mysqli_fetch_array($res);
         $initial = $r["item_quantity"];
         $qt=$row["item_quantity"];
         if(mysqli_num_rows($result) == 1 ){
             $update = "UPDATE `product` SET `item_quantity`= $r-$qt WHERE  `product_id`= $id";
         }
         else{
             echo '<script>alert("Oops...!Error! Please Try again later")</script>';
         }
     }
 }
 }

 if (isset($_POST['submit'])) {  
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM user WHERE Email='$Email' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	if (($result) && (mysqli_num_rows($result)) > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['FirstName'] = $row['FirstName'];
		header("Location: ../Index/Index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
} 
?>