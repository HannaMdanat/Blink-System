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
<head>
  <title>Clothes</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/products_elctronic.css">
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
              <a class="nav-link " href="logout.php">
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
        <h2><b>High Quality Fashion Products</b></h2>
        <br>
        <h3>Whatever taste you have in fashion, you can find what you want here</h3>
      </span>
    </div>
    <div class="img1">
      <img src="../img/Clothes/img20.png" height="270px" width="380px">
    </div>
  </div>
  <div class="products">

    <div class="product-info">
      <p>Black Nike jacket</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img1.png" height="160px" width="160px">
      <div>
        <p>
          <span>19.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f1'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Hoodie</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img2.png" height="160px" width="160px">

      <div>
        <p>
          <span>9.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f2'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Winter jacket</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img3.png" height="160px" width="160px">
      <div>
        <p>
          <span>14.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f3'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Training suit</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img4.png" height="160px" width="160px">

      <div>
        <p>
          <span>29.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f4'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Nike sneakers</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img5.png" height="160px" width="160px">
      <div>
        <p>
          <span>14.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f5'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Nike sneakers</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img6.png" height="160px" width="160px">

      <div>
        <p>
          <span>17.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f6'>Add to Card</button>
      </form>
      </div>
    </div>

    <div class="product-info">
      <p>Hoodie </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img7.png" height="160px" width="160px">
      <div>
        <p>
          <span>16.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f7'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">

      <p>Puma light jacket</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img8.png" height="160px" width="160px">

      <div>
        <p>
          <span>9.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f8'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">

      <p> Heavy jacket </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img9.png" height="160px" width="160px">
      <div>
        <p>
          <span>22.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f9'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>
        Training suit
      </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img10.png" height="160px" width="160px">

      <div>
        <p>
          <span>19.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f10'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Addidas backpack
      </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img11.png" height="160px" width="160px">
      <div>
        <p>
          <span>9.99 </span>JOD
        </p> <form action="addItem.php" method="get">
            <button name='item' value='f11'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Addidas shirt
      </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img12.png" height="160px" width="160px">

      <div>
        <p>
          <span>11.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f12'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Nike hoodie</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img13.png" height="160px" width="160px">
      <div>
        <p>
          <span>10.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f13'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Nike pants</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img14.png" height="160px" width="160px">

      <div>
        <p>
          <span>9.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f14'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>
        Mini pack</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img15.png" height="160px" width="160px">
      <div>
        <p>
          <span>7.50 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f15'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Nike shorts </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img16.png" height="160px" width="160px">

      <div>
        <p>
          <span>8.99</span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f16'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Summery training suit
      </p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img17.png" height="160px" width="160px">
      <div>
        <p>
          <span>22.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f17'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>Heavy-duty backpack</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img18.png" height="160px" width="160px">

      <div>
        <p>
          <span>29.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f18'>Add to Card</button>
      </form>
      </div>
    </div>
    <div class="product-info">
      <p>waist pack</p>
      <hr style="margin: 0px; padding: 0px;">
      <img src="../img/Clothes/img19.png" height="160px" width="160px">
      <div>
        <p>
          <span>5.99 </span>JOD
        </p>
        <form action="addItem.php" method="get">
            <button name='item' value='f20'>Add to Card</button>
      </form>
      </div>
    </div>


  </div>

  <footer>
    <p>Copyright &copy; Blink System's Team</p>
</footer>