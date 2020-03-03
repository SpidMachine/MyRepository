<?php
$arr = [
    "/\:\-\)/",
    "/\:\-\(/"
];
$s = $_POST['text'];

$arr2 = [
    '<img src="images/smile.png">',
    '<img src="images/sad.png">'
];

echo preg_replace($arr, $arr2, $s);
?>