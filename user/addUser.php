<?php
     $name = $_POST["username"];
     $pass = $_GET["password"];
     $amount = 500;
     include '../../connectiondb.php';
    $sql = "INSERT INTO users VALUES ('$name','$pass','$amount')";
    if(mysqli_query($link, $sql)){
        echo '<script type="text/javascript"> window.alert("Welcome !!");</script>';
        echo '<script type="text/javascript"> window.open("index.php","_self"); </script>';
    }
    else{
        echo '<script type="text/javascript"> window.alert("Error!!");</script>';
        echo '<script type="text/javascript"> window.open("register.php","_self"); </script>'; 
    }
?>