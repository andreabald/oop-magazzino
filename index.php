<?php
require "Computer.php";

$computer = new Computer("i7", "16gb", "12345", "macbook pro");

$computer->setBrand("apple");

var_dump($computer);

echo "<br>";

$computer->stampaBrand();

?>
