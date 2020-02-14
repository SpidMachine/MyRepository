<?php

$arr = array(
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресение",
);
echo "<pre>";
$today = getdate();
print_r($today);

echo $arr[$today['weekday']];
