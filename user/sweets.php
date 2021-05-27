<?php
    session_start();
    if($_SESSION['user'] == 'YES'){
        $name_user = $_SESSION["name"];
    }
    else {
        echo '<script type="text/javascript"> window.open("signIn.php","_self"); </script>';
        exit;
    }
?><!DOCTYPE html>
<html>

<head>
  <title>Sweets</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/products1.css">
  <link rel="shortcut icon" type="image/x-icon" href="../img/image14.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
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
              <a class="nav-link" href="cart.php">Check-Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <?php  echo ucfirst(explode(".",$name_user)[0]); ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="signout.php">
                Log out
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <div class="b1">
    <div class="txt1">
      <span style="color:black;">
        <h2><b>Delights & sweets</b></h2>
        <br>
        <h3>Every kind of delights you wish for, you can find it here</h3>
      </span>
    </div>
    <div class="img1">
      <img src="../img/sweets/image25.png" height="200px">
    </div>
  </div>


  <div class="products">

    <div class="product-info">
      <p>Balik Kraker</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image1.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.26 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s1'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Hershey's Milk Chocolate</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image2.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>3.80 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s2'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Loacker Wafer 175 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image3.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>2.25 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s3'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Galaxy Flutes 45 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image4.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.40 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s4'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Oreo Biscuit 16 Pieces</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image5.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>2.23 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s5'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Oreo Cookies</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image6.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.21 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s6'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Kinder Chocolate Bueno</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image7.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.59 </span>JOD
        </p><form action="addItem.php" method="get">
            <button name='item' value='s7'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">

      <p>Skittles Candy 38 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image8.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.49 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s8'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">

      <p>Kinder Surprise Egg</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image9.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.40 </span>JOD
        </p><form action="addItem.php" method="get">
            <button name='item' value='s9'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Bazooka Tutti Frutti</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image10.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.24 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s10'>Add to Card</button>
      </form>      </div>
    </div>
    <div class="product-info">
      <p>Gingerbon</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image11.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.45 </span>JOD
        </p><form action="addItem.php" method="get">
            <button name='item' value='s11'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Bazooka Raspberry</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image12.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.24 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s12'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Candy Land Roll</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image13.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.60 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s13'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Quattro buiscuits</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image14.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.99 </span>JOD
        </p><form action="addItem.php" method="get">
            <button name='item' value='s14'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Baklawa 500 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image15.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>8.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s15'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Baklava 800 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image16.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>11.00 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s16'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Loacker Wafer Vanilla</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image17.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>2.20 </span>JOD 
        </p><form action="addItem.php" method="get">
            <button name='item' value='s17'>Add to Card</button>
      </form>     </div>
    </div>
    <div class="product-info">
      <p>Oreo Cookies 16 Pieces</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image18.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>2.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s18'>Add to Card</button>
      </form>      </div>
    </div>
    <div class="product-info">
      <p>Loacker Wafer Coconut</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image19.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>2.80 </span>JOD 
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s19'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Papadopoulos Cookie</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image20.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>1.35 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s20'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Griesson Cookies</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image21.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>2.15 </span>JOD 
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='ss21'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Loacker Wafer 125 Gram</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image22.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>1.95 </span>JOD 
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s22'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Loacker Crispy Wafer</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image23.jpg" height="160px" width="160px">
      <div>
        <p>
          <span>0.61 </span>JOD 
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='s23'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Papadopoulou Crackers</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/sweets/image24.jpg" height="160px" width="160px">

      <div>
        <p>
          <span>0.49 </span>JOD 
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f24'>Add to Card</button>
      </form>
      </div>
    </div>

  </div>

  <footer>
    <p>Copyright &copy; Blink System's Team</p>
</footer>