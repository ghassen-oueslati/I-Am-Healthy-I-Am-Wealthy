<?php
if(isset($_POST['update']))

{		


if ( isset($_FILES['my_image'])) {

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
   // $id = $_POST['id'];
    $namee = $_POST['namee'];
    //$image = $_POST['image'];
    $price = $_POST['price'];
   // $imageP = $_POST['imageP'];
	$quantity = $_POST['quantity'];
    $categoryG = $_POST['categoryG'];
	$categoryS = $_POST['categoryS'];
	$read_more = $_POST['read_more'];

	$imageP =$_FILES['imageP']['name'];
	$tmp_nameP = $_FILES['imageP']['tmp_name'];
	/*----------------------------------------------*/
	$imagee = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size ) {
           // echo $id;
          //  echo $namee;
         //   echo $price;
         //   echo $quantity;
         //   echo $imagee;

			$img_ex = pathinfo($imagee, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_image_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = "../img/".$imagee;
				$img_upload_pathP = "../img/".$imageP;
				move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_nameP, $img_upload_pathP);
				// Insert into Database
			
			}else {
				$em = "You can't upload files of this type";
		        header("Location: update.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: update.php?error=$em");
	}


 /*end of image upload*/
     

 $update = mysqli_query($conn,"UPDATE product SET  categoryG='$categoryG',categoryS='$categoryS',read_more='$read_more',imageP='$imageP',image = '$imagee', price = '$price', quantity = $quantity WHERE name='$namee'");

 if($update)
 {
     mysqli_close($conn); // Close connection

 }
 else
 {
     echo mysqli_error($conn);
 }             

                        
}else {
	header("Location: r.php");
 }


}
?>