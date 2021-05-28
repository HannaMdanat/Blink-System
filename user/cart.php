<?php
include 'connectiondb.php';
    session_start();
    if($_SESSION['user'] == 'YES'){
        $name_user = $_SESSION["name"];
        $myItems = $_SESSION['cart'];
    }
    else {
        echo '<script type="text/javascript"> window.open("signIn.php","_self"); </script>';
        exit;
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="shortcut icon"  type="../image/x-icon"  href="../img/image14.png">
    <title>Cart</title>
    <script>
    function deleteFunction(item){
      <?php $arr = $_SESSION['cart'];?> 
        var form = document.createElement("form");
        var element1 = document.createElement("input"); 
         form.method = "get";
         form.action = "edit.php";   
       //document.getElementById('ttt').value=document.getElementById('total').innerHTML; 
         element1.value= item ;
          element1.name="id";
          form.appendChild(element1);
          document.body.appendChild(form);
          form.submit();
       }
  



      function pay(){
        var form = document.createElement("form");
        var element1 = document.createElement("input"); 
         form.method = "GET";
         form.action = "pay.php";   
       //document.getElementById('ttt').value=document.getElementById('total').innerHTML; 
         element1.value= document.getElementById('total').innerHTML ;
          element1.name="total";
          form.appendChild(element1);
          document.body.appendChild(form);
          form.submit();
          //console.log("sdsa");
        }

       function mySubmit() {
        let q = 0,p = 0,total = 0 ;
        <?php
          $i = 0 ;
          
          foreach($_SESSION['cart'] as $item){
            $result = mysqli_query($link  , "SELECT name,price FROM products WHERE id = '$item' ");
            if($row = mysqli_fetch_array($result)){
            ?>
             q = (document.getElementById('quantity<?php echo $i; ?>').value);
                /* modify */
              
             p = <?php echo $row['price'] ; ?>;
             total = total + (q*p);
             
<?php
            $i = $i+1;
            

          }}
        ?>      document.getElementById('total').innerHTML  = total.toFixed(2);
               
              }
       
            
    </script>
</head>
<body>
<div class="divnav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blink SuperMarket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbraroptions">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cart.php">Check-Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <?php  echo ucfirst(explode(".",$name_user)[0]); ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="logout.php">
                Log out
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>

    <div class="div__wrapper">

    <div class="payment__box">
        <img src="../img/image12.PNG">
        <h4>Products selected :</h4><br>
        <?php 
            
            $total = 0;
            $counter = 0;
            foreach($myItems as $i){
              $result = mysqli_query($link  , "SELECT name , price FROM products WHERE id = '$i' ");
              if($row = mysqli_fetch_array($result)){
          ?>
        <div class="text">
            <p><?php echo $row['name']; ?>: <span style="color: green;"><?php echo $row['price']; ?></span></p>
            <p>Quantity: <input type="number" id="quantity<?php echo $counter;?>" name="quantity" min="0" max="100" value="1" onchange="mySubmit(<?php echo $counter;?>)"></p>
            <p><button style=" height: 30px;width: 80px;" onclick="deleteFunction(<?php echo $counter;?>)">Delete</button></p>
            <!-- <button value = "Delete"> -->
          </div>
        
        <?php $total = $total + $row['price'];
        $counter = $counter + 1;  
      }

      }$_SESSION = $total;?>
        
          <hr>
          <div class="text">
              <p class="pay">Total Price: </p>
              <p class="pay" style="color: green;"><span id="total" style="color: green;"><?php echo $total;?></span>JD</p>
          </div>
          <button id='btntotal'>Pay</button>
      </div>
    </div>
 <script>
     document.getElementById('btntotal').addEventListener("click" , pay);
  </script>
</body>
</html>