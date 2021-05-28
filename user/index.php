<?php
    session_start();
    if($_SESSION['user'] == 'YES'){
        $name_user = $_SESSION["name"];
    }
    else {
        echo '<script type="text/javascript"> window.open("signIn.php","_self"); </script>';
        exit;
    }
    ?>
<!DOCTYPE html>
<html>

<head>
  <title>Blink</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/boxes.css">
  <link rel="shortcut icon"  type="image/x-icon"  href="../img/image14.png">
</head>

<body>
  <div class="divnav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blink SuperMarket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbraroptions">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Check-Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <?php echo ucfirst(explode(".",$name_user)[0]); ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                Log out
              </a>
            </li>
          </ul>
          <form class="d-flex navform">
            <input type ="text" class="form-control me-2" type="search" placeholder="Search for products" aria-label="Search">
            <button class="btn searchbtn" type="submit"></button>
          </form>
        </div>
      </div>
    </nav>

  </div>


  <div class="b1">
    <img src="../img/main/image1.png" height="200px" style="border-bottom-left-radius: 20px;">
    <img src="../img/main/image2.png" height="200px" width="650px" style="border-bottom-right-radius: 20px; ">
  </div>
  <div class="b8" onclick="window.location.href='essentials.php'">
    <div class="img2">
      <img src="../img/main/image10.png" height="200px" width="220px">
      <img src="../img/main/image11.png" height="180px" width="340px">
    </div>
    <div class="txt4">
      <h1>Daily Essentials</h1>
    </div>
  </div>

  <div class="b2" onclick="window.location.href='Electronics.php'">
    <div>
      <h3>Electronics</h3>
      <h5>sales up to <b><span style="color:red">15%</span></b></h5>
    </div>
    <img src="../img/main/image4.png" height="240px" width="410">
  </div>
  <div class="b3" onclick="window.location.href='Clothes.php'">
    <div>
      <h3>Fashion</h3>
      <h5>Leather jacket up to <b><span style="color:green">39.99$</span></b></h5>
    </div>
    <img src="../img/main/image5.png" height="200px" width="200">
  </div>
  <div class="b4">
    <div class="txt2">
      <h1>New collection</h1>
    </div>
  </div>
  <div class="b5" onclick="window.location.href='Cleaning.php'">
    <div>
      <h3 >Cleaning & Houshold</h3>
    </div>
    <img src="../img/main/image6.png" height="150px" width="200px">
  </div>
  <div class="b6">
    <div class="txt1">
      <h3>Free Delivery</h3>
      <h5>Don't waste your time and call us</h5>
    </div>
    <img src="../img/main/image7.png" height="330px" width="320px">
  </div>
  <div class="b7" onclick="window.location.href='sweets.php'">
    <img src="../img/main/image9.png" height="220px" width="300px">
    <img src="../img/main/image8.png" height="210px" width="450px">
    <div class="txt3">
      <h1>Biscuits & sweets</h1>
    </div>
  </div>


</body>
</html>
