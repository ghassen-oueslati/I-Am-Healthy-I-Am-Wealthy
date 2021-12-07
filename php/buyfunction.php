<?php



 if (isset($_POST["save"])){
 $query = "SELECT * FROM Cart ORDER BY product_id ASC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 { echo"h1";
    while($row = mysqli_fetch_array($result)) 
    {
    $id = $row["product_id"] ;
    echo"h";
    echo $id ;
        $select = "SELECT * FROM product WHERE  `id`= $id";
        $res = mysqli_query($connect, $select);
        $r = mysqli_fetch_array($res); 
        $initial = $r["quantity"];
        $qt=$row["item_quantity"]; 
        if($initial >= $qt)
        {
    echo"bech ";
            $update = "UPDATE `product` SET `quantity`= $initial-$qt WHERE  `id`= $id"; 
    echo"saye";
}
        else{
            echo '<script>alert("Oops...!Error! Please Try again later")</script>';
        }
    }
    echo '<script>alert("Your order has been successfully placed")</script>';
    header("Location: command.php");
 }else{  
    header("Location: 1-1.php");
 }
 }
?>