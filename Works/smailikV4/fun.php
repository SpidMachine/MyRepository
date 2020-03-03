<?php
function bb_code($str)
{
    $pat = array(
        '/\[b\](.*?)\[\/b\]/is',
        '/\[i\](.*?)\[\/i\]/is',
        '/\[u\](.*?)\[\/u\]/is'
    );

    $rep = array(
        '<strong>$1</strong>',
        '<em>$1</em>',
        '<u>$1</u>'
    );
    return preg_replace($pat, $rep, $str);
}

function smile($strSmile)
{
    $patSmile = array(
        "/\:\-\)/",
        "/\:\-\(/",
        "/\:\)/",
        "/\:\(/"
    );

    $repSmile = array(
        '<img src="images/smile.png">',
        '<img src="images/sad.png">',
        '<img src="images/smile.png">',
        '<img src="images/sad.png">'
    );
    return preg_replace($patSmile, $repSmile, $strSmile);
}

function cens($strCens) {
    $arrWords = file('banWords.txt');
    foreach ($arrWords as &$word) {
        $word = trim($word);
    }
    $words = implode('|', $arrWords);
    if (preg_match("/$words/ui", $_POST['word'])) {
        echo "Uncorrect";
    } else {
        echo "Correct";
    }
    return $strCens;
}
