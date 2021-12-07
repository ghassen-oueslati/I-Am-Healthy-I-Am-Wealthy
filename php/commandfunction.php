<?php 
if(isset($_POST['dal'])){
    $query = "SELECT * FROM Cart";
    $result = mysqli_query($conn, $query);
      
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)) {
    $id = $row["product_id"] ;
    $n =  $row["item_quantity"];
    
            $edit = mysqli_query($conn,"UPDATE `product` SET `quantity`= `quantity`-$n WHERE  `id`= $id");
           
  
      }
      if($edit){
        
        $sql = "DELETE FROM Cart";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location:../Index/index.php");
          } else {
            echo "Error deleting record: " . $conn->error;
          }
            mysqli_close($conn); // Close connection
            header("location:../Index/Index.php"); 
            exit;
          }
        else{
            echo mysqli_error();
            } 
    }     
  
  }
  ?>