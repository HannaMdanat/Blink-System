<?php
    session_start();
    $arr = $_SESSION['cart'];
    unset($arr[$_GET["id"]]);
    $_SESSION['cart'] = array_values($arr);
    echo '<script type="text/javascript"> window.open("cart.php","_self"); </script>';


?>