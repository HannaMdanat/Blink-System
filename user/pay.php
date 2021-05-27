<?php
    session_start();
    $total = $_GET['total'];
    if($total==0){
        echo '<script type="text/javascript"> window.open("cart.php","_self"); </script>';
    }
    $amount=0;
    $user = $_SESSION['name'];
    include 'connectiondb.php';
    $result = mysqli_query($link  , "SELECT amout FROM users WHERE user = '$user' ");
    if($row = mysqli_fetch_assoc($result)){
           $amount =  $row['amout'];  
    }
    //echo $amount . " ". $total;
    if($amount>=$total){
        $change = $amount-$total;
        $sql = "UPDATE users SET amout='$change' WHERE user='$user'";

        $q= mysqli_query($link, $sql); 
        echo '<script type="text/javascript"> window.alert("Payment successfully done  !!\nWe wait for you next time..");</script>';
        echo '<script type="text/javascript"> window.open("index.php","_self"); </script>';
        unset($_SESSION['cart']);
        $_SESSION['cart'] = array();
    }
    else{
        echo '<script type="text/javascript"> window.alert("Amount not enough..");</script>';
        echo '<script type="text/javascript"> window.open("cart.php","_self"); </script>';
    }

      
        
         


?>