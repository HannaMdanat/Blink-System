<?php
     $name = $_POST["username"];
     $pass = $_POST["password"];
     $amount = 500;
     include 'connectiondb.php';
     if($link){
        echo '<script type="text/javascript"> window.alert("Done !!");</script>';
     }
     else{
        echo '<script type="text/javascript"> window.alert("Down !!");</script>';

     }
    $sql = "INSERT INTO users (user,password,amout) VALUES ('$name','$pass','$amount')";
    if(mysqli_query($link, $sql)){
        echo '<script type="text/javascript"> window.alert("Welcome !!");</script>';
        echo '<script type="text/javascript"> window.open("index.php","_self"); </script>';
    }
    else{
        echo '<script type="text/javascript"> window.alert("mysqli_error($link)");</script>';
        echo '<script type="text/javascript"> window.open("register.php","_self"); </script>'; 
    }
?>