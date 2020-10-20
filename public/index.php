<?php
// require("../vendor/autoload.php");
require '../vendor/autoload.php';
// require("../src/Wcs/Hello.php");

use App\Wcs\Hello;
use HelloWorld\SayHello;
// $coucou = new Hello();

// echo $coucou->talk();

echo SayHello::world();
