<?php
if(isset($_POST['submit']))
{	
$id1  = $_POST['id1'];
$id2 = $_POST['id2'];
// sql to delete a record
if($id1==$id2){
    $sql = "DELETE FROM product WHERE name='$id1'";
}

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>