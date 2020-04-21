<?php

include 'autoload.php';

$b = new B();

echo $b
    ->setInnerText("Hello world")
    ->html();