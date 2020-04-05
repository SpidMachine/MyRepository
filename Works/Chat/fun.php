
<?php
function bb_code($str)
{
    $pat = array(
        '/\[b\](.*)\[\/b\]/is',
        '/\[i\](.*)\[\/i\]/is',
        '/\[u\](.*)\[\/u\]/is',
        '/\[IMG\](.*)\[\/IMG\]/is'
    );

    $rep = array(
        '<strong>$1</strong>',
        '<em>$1</em>',
        '<u>$1</u>',
        '<img src="$1">'
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

function cens($strCens)
{
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

function md($str)
{
    $reg = array(
        '/\*\*(.*)\*\*/'
    );

    $rep = array(
        '<b>$1</b>'
    );
    return preg_replace($reg, $rep, $str);
}

function url($strUrl)
{
    $regUrl = array(
        '/https\:\/\/.*\.jpg|png|gif/i',
        // '/https\:\/\/.*/i'
    );

    $repUrl = array(
        "<img src='$0'>",
        // "<a>$1</a>"
    );
    return preg_replace($regUrl, $repUrl, $strUrl);
}

