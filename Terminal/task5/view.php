<?php
// include("Calculator.php");
include("autoload.php");

// print_r($_POST);

$result = new Square(5);
echo "КВАДРАТ <br>";
echo "периметр квадрата " . $result->perimetr() . "<br>";
echo "площадь квадрата " . $result->area() . "<br>";
echo "<br>";


$circle = new Circle(5);
echo "ОКРУЖНОСТЬ <br>";
echo "периметр окружности " . $circle->perimetr() . "<br>";
echo "площадь окружности " . $circle->area() . "<br>";
echo "<br>";

$triangle = new Triangle(3, 4, 5);
echo "ТРЕУГОЛЬНИК <br>";
echo "периметр треугольника " . $triangle->perimetr() . "<br>";
echo "площадь треугольника " . $triangle->area() . "<br>";