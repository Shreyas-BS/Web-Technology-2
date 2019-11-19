<?php 
$obj = json_decode($_GET["FL"], false);
//$obj=$obj + ".txt";
$lines = json_encode(file($obj)); 

echo $lines
?>