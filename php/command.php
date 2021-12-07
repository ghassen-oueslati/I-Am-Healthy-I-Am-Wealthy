<?php
//header("Content-Type: text/plain");
//header('Content-Disposition: attachement; filename="commande.txt"');
include 'connect.php';
include 'commandfunction.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/buy.css">
</head>
<body>
     <div class="facture">
         <div class="img">
           <img src="../img/2.svg" class="cute">  
         </div>

        <h1>Please Confirm your order</h1>
        <table>
            <tr>
                <th width = 40%>Product Name</th>
                <th width = 22%>Price</th>
                <th width = 15%>Quantity</th> 
                <th width = 18%>Total Price</th>
            </tr>
            <?php
        $total = 0;
        $query = "SELECT * FROM Cart ORDER BY 'product_id' ASC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
                {
    ?>
            <!-- While 1-1.php?action=add&id= <?php echo $row["id"]; ?>-->
    <form method="post" action="">
    
            <tr>
                <td width = 40%>
                  <div class="input Name">
                    <input type="hidden" name="product_id" value="<?php echo $row["item_name"]; ?>"/>
                    <p> <?php echo $row["item_name"]; ?></p>
                </div>
                </td>
                <td width = 23%>
                  <div class="input Quantity">
                    <input type="hidden" name="product_p" value="<?php echo $row["product_price"]; ?>" >
                    <p><?php echo $row["product_price"]; ?> dt </p>
                </div>   
                </td>
                <td width = 14%>
                   <div class="input price">
                    <input type="hidden" name="product_qt" value="<?php echo $row["item_quantity"]; ?>">
                    <p><?php echo $row["item_quantity"]; ?></p>
                </div>  
                </td>
                <td width = 23%>
                  <div class="input Name">
                    <input type="hidden" name="totalProduct" value="<?php echo $row["item_quantity"] * $row["product_price"]; ?>">
                    <p> <?php echo $row["item_quantity"] * $row["product_price"]; ?> dt</p>
                </div>  
                </td>                
            </tr>
            <tr>
                <?php
                $total = $total + ($row["item_quantity"] * $row["product_price"]);
              }
                ?>
                <td></td>
                <td colspan="2" style="padding-top: 30px; text-align:center;">
                <input type="hidden" name="total" value=" <?php echo number_format($total, 2); ?>">
                <p>Total :</p>
             </td>
                <td style="padding-top: 30px;"><?php echo number_format($total, 2); ?> dt</td>
            </tr>
            <tr>
                <?php }?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align:right;">
                <input type="submit" name="dal" value="confirm">
                </td>
            </tr>
        </table>
    </form>
    </div>

</body>
</html>