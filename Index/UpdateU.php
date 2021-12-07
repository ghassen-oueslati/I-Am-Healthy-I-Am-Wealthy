<?php
if(isset($_POST['uuupdate'])){		


	
	//$id = $_POST['uuid'];
	$name = $_POST['uuname'];
	$lastname = $_POST['uulastname'];
	$address=$_POST['uuaddress'];
	$password = $_POST['uupassword'];
	$email = $_POST['uuemail'];
	$oldemail = $_POST['uuoldemail'];

	$admin = $_POST['uuadmin'];
     

 $update = mysqli_query($conn,"UPDATE users SET FirstName = '$name',admin='$admin', LastName = '$lastname', Adress = '$address' , Password = '$password' , Email = '$email' WHERE Email='$oldemail'");

 if($update)
 {
     mysqli_close($conn); // Close connection

 }
 else
 {
     echo mysqli_error($conn);
 }             




}
?>