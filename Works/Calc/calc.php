<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $result = require __DIR__ . 'Works\Calc\calc.php';
    ?>

    <b>Результат вычислений</b>
    <br>

    <?= $result ?>
</body>

</html>