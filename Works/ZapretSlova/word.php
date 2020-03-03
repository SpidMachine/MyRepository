<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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
    ?>


</body>

</html>