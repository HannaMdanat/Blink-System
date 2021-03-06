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
  <title>Essentials</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbraroptions">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Check-Out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">
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
        <h2><b>High Quality Essentials</b></h2>
        <br>
        <h3>shop the highest quality products with a low price</h3>
      </span>
    </div>
    <div class="img1">
      <img src="../img/essentials/image1.png" height="272px">
    </div>
  </div>

  <!-- start the shwo of products  -->

    <!-- start offers -->

    <!-- <div class="offers">
      <img src="./img/essentials/image1.png" alt="">
      <p>Special Offers</p>
    </div> -->




    <!-- end offers -->

<div class="products">

  <div class="product-info">
    <p>Lemon</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image2.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.50 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de1'>Add to Card</button>
      </form>
    </div>
  </div>

  <div class="product-info">
    <p>Orange</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image3.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.89 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de2'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Melon</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image4.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.45 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de3'>Add to Card</button>
      </form>
    </div>
  </div>

  <div class="product-info">
    <p>Apple</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image5.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>1.59 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de4'>Add to Card</button>
      </form>
    </div>
  </div>

  <div class="product-info">
    <p>Grape</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image6.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.99 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de5'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Eggplant</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image7.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.79 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de6'>Add to Card</button>
      </form>
    </div>
  </div>

  <div class="product-info">
    <p>White flower
    </p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image8.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.39 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de7'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">

    <p>Banana</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image9.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>1.69 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de8'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">

    <p>Potato</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image10.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.33 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de9'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Zucchini</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image11.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.59 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de10'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Cucumber</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image12.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.29 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='d11'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Lettuce</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image13.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.49 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de12'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Cherries</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image14.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>1.99 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de13'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Okra</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image15.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>3.49 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de14'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>
      Mint</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image16.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.15 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de15'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Onions</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image17.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.19 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de16'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Ginger</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image18.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>2.99 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de17'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Peache</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image19.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>4.89 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de18'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Mendelena</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image20.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.89 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de19'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Avocado</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image21.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>4.39 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de20'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Yellow Apple</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image22.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.50 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de21'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Celery</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image23.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>2.79 </span>JOD /KG
      </p><form action="addItem.php" method="get">
            <button name='item' value='de22'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Carrots</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image24.jpg" height="160px" width="160px">
    <div>
      <p>
        <span>0.59 </span>JOD /KG
      </p><form action="addItem.php" method="get">
            <button name='item' value='de23'>Add to Card</button>
      </form>
    </div>
  </div>
  <div class="product-info">
    <p>Broccoli</p>
    <hr style="margin: 0px; padding: 0px;">
    <img src="../img/essentials/image25.jpg" height="160px" width="160px">
    
    <div>
      <p>
        <span>0.89 </span>JOD /KG
      </p>
      <form action="addItem.php" method="get">
            <button name='item' value='de24'>Add to Card</button>
      </form>
    </div>
  </div>
  
</div>

<footer>
    <p>Copyright &copy; Blink System's Team</p>
</footer>
  
