<?php
$xmlDate = date("d.m.y h-m-s");

$str = <<<XML

<msg>
    <text>$_POST[text]</text>
    <name>$_POST[input]</name>
    <date>$xmlDate<date>
</msg>
XML;

file_put_contents("tags.txt", $str, FILE_APPEND);