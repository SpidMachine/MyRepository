<?php
    $smile = $_POST['text'];
    $pat="/\:\-\)/";
    $img="<img src='images/smile.png'>";

    echo preg_replace($pat, $img, $_POST['text']);
?>