<?php 
if(isset($_POST['add'])){	
    if ( isset($_FILES['gimage'])) {
//$id = $_POST['gid'];
$name = $_POST['gname'];
//$image = $_POST['gimage'];
$price = $_POST['gprice'];
$quantity = $_POST['gquantity'];
//$imageP = $_POST['gimageP'];
$imageP = $_FILES['gimageP']['name'];
$img_sizeP = $_FILES['gimageP']['size'];
$tmp_nameP = $_FILES['gimageP']['tmp_name'];
$errorP = $_FILES['gimageP']['error'];
/*----------------------------*/
    $categoryG = $_POST['gcategoryG'];
	$categoryS = $_POST['gcategoryS'];
	$read_more = $_POST['gread_more'];
$image = $_FILES['gimage']['name'];
$img_size = $_FILES['gimage']['size'];
$tmp_name = $_FILES['gimage']['tmp_name'];
$error = $_FILES['gimage']['error'];

if ($error === 0)  {
    if ($img_size) 
    {
      
    
        $img_ex = pathinfo($image, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) 
        {
            $new_image = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../img/'.$imageP;
            $img_upload_pathP = '../img/'.$image;
            move_uploaded_file($tmp_name, $img_upload_path);
            move_uploaded_file($tmp_nameP, $img_upload_pathP);

            // Insert into Database
        
        }
        else 
        {
            $em = "You can't upload files of this type";
            header("Location: update.php?error=$em");
        }
    }
}
else 
{
    $em = "unknown error occurred!";
    header("Location: update.php?error=$em");
}


/*end of image upload*/


$insert = mysqli_query($conn,"INSERT INTO `product`(`categoryG`, `categoryS`,`read_more`,`imageP`,`name`, `image`, `price`, `Quantity` ) VALUES ('$categoryG','$categoryS','$read_more','$imageP','$name','$image' ,'$price', '$quantity')");

if(!$insert)
{echo $image;
    echo mysqli_error($conn);
}
} else {
echo $image;
    echo "item added";
    
mysqli_close($conn);

}

}
?>