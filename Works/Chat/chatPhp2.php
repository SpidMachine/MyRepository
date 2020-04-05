<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="refresh" content="0.5">
    <link rel="stylesheet" href="decoration.css">

</head>

<body>

    <div class="cont">

        <?php

        $mess_arr = file("chat.txt");

        foreach ($mess_arr as $value) {
            echo "<div class='mess'>$value</div>";
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
        ?>

    </div>
    
</body>

</html>