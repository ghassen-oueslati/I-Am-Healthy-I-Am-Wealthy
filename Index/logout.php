<?php 
if(isset($_POST['logout'])){	
    session_destroy();
    mysqli_query($conn, "UPDATE users SET Conn=0  WHERE FirstName='admin'");
   header("Location:../Index/Index.php");
}
?>