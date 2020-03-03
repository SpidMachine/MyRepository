<?php
    $str = $_POST['text'];
    $pat= [
        "/\[b\](.*)\[\/b\]/i",
        "/\[i\](.*)\[\/i\]/i",
        "/\[u\](.*)\[\/u\]/i"
    ];
    $rep= [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>"
];
    $str2 = preg_replace($pat, $rep, htmlspecialchars($str));
    echo $str2;
