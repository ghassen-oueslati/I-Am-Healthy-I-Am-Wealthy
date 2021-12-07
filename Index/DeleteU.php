<?php
if(isset($_POST['dusubmit']))
{	
  $name = $_POST['duname'];
	$lastname = $_POST['dulastname'];
	$email = $_POST['duemail'];
// sql to delete a use
    $sql = "DELETE FROM tbl_user WHERE name='$name' AND lastname='$lastname' AND email='$email'";
  

if (mysqli_query($conn, $sql)) {
  echo "User deleted successfully";
} else {
  echo "Error deleting User: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>