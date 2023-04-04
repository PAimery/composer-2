<?php


require_once '../src/Hello.php';

use App\Hello;

$hello = new Hello();
echo $hello->talk();
var_dump($hello);
?>