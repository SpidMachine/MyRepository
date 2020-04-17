<?php

include("autoload.php");

$person = new Person("Peter", "Ivanov");
echo $person->intreduce();

$teacher = new Teacher("Peter", "Ivanov");
echo $teacher->intreduce();