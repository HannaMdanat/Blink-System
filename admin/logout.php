<?php
    session_start();
    $_SESSION['user'] = 'NO';
    echo '<script type="text/javascript"> window.open("../../index.html","_self"); </script>';        
    //unset($_SESSION['cart']);
    

?>