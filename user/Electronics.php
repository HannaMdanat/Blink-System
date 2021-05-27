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
    <title>Electronics</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/products_elctronic.css">
    <link rel="shortcut icon" type="../image/x-icon" href="img/image14.png">
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
                <a class="nav-link" aria-current="page" href="../user/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../user/cart.php">Check-Out</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
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
        <h2><b>High Quality Electronics</b></h2>
          <br>
          <h3>Whatever electronic you or your house needs, you can find it here</h3>
        </span>
      </div>
      <div class="img1">
        <img src="../img/Elctronics/pic20.png" height="270px" width="340px">
      </div>
    </div>
    <div class="products">

        <div class="product-info">
          <p>squeezer</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic1.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>65.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el1'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Washer</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic2.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>120.59 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el2'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>LG Washer</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic3.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>140.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el3'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Toster</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic4.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>36.59 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el4'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>LG squeezer</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic5.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>79.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el5'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Tosheba 32 inch</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic6.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>75.0 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el6'>Add to Card</button>
            </form>
          </div>
        </div> 
        <div class="product-info">
          <p>fan
          </p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic7.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>25.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el7'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
      
          <p>Hand Blinder</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic8.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>15.69 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el8'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
      
          <p>Glassware</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic9.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>250.0 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el9'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Coffee machine
          </p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic10.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>62.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el10'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Air conditioner
          </p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic11.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>242.50 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el11'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Food grinder
          </p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic12.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>29.49 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el12'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Microwave</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic13.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>99.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el13'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>LG TV 42inch </p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic14.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>143.49 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el14'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>
            doughs Mixser</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic15.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>489.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el15'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Oven</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic16.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>220.0</span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el16'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Vacuum Cleaner</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic17.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>62.99 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el17'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Fridge</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic18.jpg" height="160px" width="160px">
          
          <div>
            <p>
              <span>350.89 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el18'>Add to Card</button>
            </form>
          </div>
        </div>
        <div class="product-info">
          <p>Frier</p>
          <hr style="margin: 0px; padding: 0px;">
          <img src="../img/Elctronics/pic19.jpg" height="160px" width="160px">
          <div>
            <p>
              <span>44.89 </span>JOD 
            </p>
            <form action="addItem.php" method="get">
            <button name='item' value='el19'>Add to Card</button>
            </form>
          </div>
        </div>
       
        
      </div>

      <footer>
        <p>Copyright &copy; Blink System's Team</p>
    </footer>