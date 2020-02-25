<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="text.php" method="POST">
        <textarea name="text" cols="30" rows="10">
        <?= file_get_contents("file/$_GET[text]") ?>

    </textarea>


    </form>


</body>

</html>