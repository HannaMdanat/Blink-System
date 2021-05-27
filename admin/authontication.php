<?php
    session_start();
    $user = $_POST['username'];
    $pass = $_POST['password'];
    include 'connectiondb.php';
    $result = mysqli_query($link  , "SELECT user FROM admin WHERE user = '$user' AND pass = '$pass' ");
    if(mysqli_num_rows($result) > 0){
        //session_start();
        $_SESSION['user'] = 'YES';
        $_SESSION['name'] = $user;
        $_SESSION['cart'] = array();
        echo '<script type="text/javascript"> window.open("http://localhost/Blink/admin/index.php","_self"); </script>';
        exit;
        }
    else{
    echo '<script type="text/javascript"> window.open("http://localhost/Blink/admin/signIn.php","_self"); </script>';        ;
        exit;}

?>