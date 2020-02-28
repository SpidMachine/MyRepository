<?php 
if (preg_match("/^[a-z0-9\-]+@([a-z0-9\-]+\.)[a-z]{2,6}$/i", $_POST["str"])) {
    echo "Верно!";
} else {
    echo "Не верно!";
}