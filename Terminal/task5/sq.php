<?php
// include("Calculator.php");
include("autoload.php");

print_r($_POST);

$result = new Square(
    $_POST['a']
);


echo $result->{$_POST['op']}();

// echo $result->perimetr();
// echo "\n";
// echo $result->area();