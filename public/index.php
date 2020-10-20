<?php
// require("../vendor/autoload.php");
require '../vendor/autoload.php';
// require("../src/Wcs/Hello.php");

use App\Wcs\Hello;

$coucou = new Hello();

echo $coucou->talk();