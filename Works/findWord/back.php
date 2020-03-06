<?php
preg_match_all("/\w+/ui", $_POST['text'], $match);

// print_r($match);

foreach ($match[0] as $word) {
    $arr[$word]++;
}

// print_r ($arr);

foreach ($arr as $key => $value) {
    echo $value . " - " . $key . '<br>';
}