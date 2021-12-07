<?php
if (isset($_POST['signin'])) {
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];  
	$sql = "SELECT * FROM users WHERE email='$Email' AND password ='$Password'";
	$result = mysqli_query($conn, $sql);
	if (($result) && (mysqli_num_rows($result) > 0)) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['FirstName'] = $row['FirstName'];
        mysqli_query($conn, "UPDATE users SET Conn=1  WHERE email='$Email'");

        if($Email=='admin@admin.admin' && $Password=='adminadm'){
            $_SESSION['login'] = true;
             header("Location:../Index/update.php");
             mysqli_close($conn); 
             exit;
         }
         else{
            header("Location:../Index/Index.php");
         }
         
       
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
   
     
}
//---------------------------//
if(isset($_POST['submit']))
{		
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $password = $_POST['password']; 
    $adresse = $_POST['adresse']; 
    $query="SELECT * FROM users WHERE Email='$email'";
    $res= mysqli_query($conn, $query);
	if (($res) && (mysqli_num_rows($res) > 0)) {
		echo "<script>alert('Woops! User already exists.')</script>";
    }else{
            $sql = "INSERT INTO `users`(`Email`, `LastName`, `FirstName`, `Password`, `Adress`) VALUES ('$email','$nom','$prenom','$password','$adresse')";
    $insert = mysqli_query($conn,$sql);
    if(!$insert)
    {
        echo mysqli_error($conn);
    }
    else
    {
        header("Location:s_in_up.php");
    }
    }

}
mysqli_close($conn);

?>