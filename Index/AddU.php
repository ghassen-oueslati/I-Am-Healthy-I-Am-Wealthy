<?php 
if(isset($_POST['auadd'])){	
  
//$id = $_POST['auid'];
$name = $_POST['auname'];
$lastname = $_POST['aulastname'];
$address=$_POST['auaddress'];
$password = $_POST['aupassword'];
$email = $_POST['auemail'];
$admin = $_POST['auadmin'];

$insert = mysqli_query($conn,"INSERT INTO `users`( `FirstName`,`Admin`, `LastName`, `Adress`, `Password`, `Email` ) VALUES ('$name','$admin','$lastname' ,'$address', '$password','$email')");

if(!$insert)
{echo $image;
    echo mysqli_error($conn);
}
 else {
    echo "item added";
    
mysqli_close($conn);

}

}
?>
