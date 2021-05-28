<?php
    $flag = TRUE;
    session_start();
    $item = $_GET['item'];
    $myItems = $_SESSION['cart'];
    foreach($myItems as $i){
        if($i == $item){
            $flag = FALSE;
            break;
        }
    }

    if($flag){
    $myItems[count($myItems)] = $item;
    $_SESSION['cart'] = $myItems;
    
    if (strpos($item, 'c') !== false) {
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Cleaning.php","_self"); </script>';
    }
    if (strpos($item, 'el') !== false) {
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Electronics.php","_self"); </script>';
    }
    if(strpos($item,'de') !== false){
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/essentials.php","_self"); </script>';
    }
    if(strpos($item,'f') !== false){
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Clothes.php","_self"); </script>';
    }
    if(strpos($item,'s') !== false){
        echo '<script type="text/javascript"> window.alert("Item added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/sweets.php","_self"); </script>';
    }
    else{

    }
} 
else{
    if (strpos($item, 'c') !== false) {
        echo '<script type="text/javascript"> window.alert("This item arlady added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Cleaning.php","_self"); </script>';
    }
    if (strpos($item, 'el') !== false) {
        echo '<script type="text/javascript"> window.alert("This item arlady added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Electronics.php","_self"); </script>';
    }
    if(strpos($item,'de') !== false){
        echo '<script type="text/javascript"> window.alert("This item arlady added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/essentials.php","_self"); </script>';
    }
    if(strpos($item,'f') !== false){
        echo '<script type="text/javascript"> window.alert("This item arlady added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/Clothes.php","_self"); </script>';
    }
    if(strpos($item,'s') !== false){
        echo '<script type="text/javascript"> window.alert("This item arlady added !!");</script>';
        echo '<script type="text/javascript"> window.open("../user/sweets.php","_self"); </script>';
    }
}
?>