<?php
require_once 'phpqrcode/qrlib.php';

$path = 'CustomerQrCodes/';
$file = $path.uniqid().".png";
//for unique id

//show to screen web page qr code 
//QRcode::png("https://www.google.com"); 

//-- for saving in the path file --
QRcode::png("https://www.google.com" , $file , 'L' , 10);
echo "<center><img src='".$file."'></center>";//error level remind it