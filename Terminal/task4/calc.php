<?php
// include("Calculator.php");
include("autoload.php");

// print_r($_POST);

$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);

echo $calc->{$_POST['op']}();
