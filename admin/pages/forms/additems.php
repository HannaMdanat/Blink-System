<?php
     $price = $_GET["priceItem"]+0;
     $name = $_GET["nameItem"];
     $id = $_GET["itemID"];
     include '../../connectiondb.php';
    $sql = "INSERT INTO products VALUES ('$id','$name','$price')";
    if(mysqli_query($link, $sql)){
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../../../admin/pages/forms/addItem.php","_self"); </script>';
    }
    else{
        echo '<script type="text/javascript"> window.alert("Error!!");</script>';
        echo '<script type="text/javascript"> window.open("../../../admin/pages/forms/addItem.php","_self"); </script>';
        
    }
?>
<!-- INSERT INTO `products`(`id`, `name`, `price`) VALUES ([value-1],[value-2],[value-3]) -->