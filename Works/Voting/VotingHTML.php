<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="votingResult.php" method="post">
            <?php
            include('config.php');
            $arr = file($fileName);
            ?>
            <h2><?= $arr[0] ?></h2>
            <div class="input">
                for ($i = 1; $i < count($arr); $i++) {
                    
                }
            </div>

        </form>

    </div>


</body>
</html>