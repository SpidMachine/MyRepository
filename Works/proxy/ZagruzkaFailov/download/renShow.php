<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ren.php" method="POST">
        <input type="text" name="newname" value="<?= $_GET['name'] ?>">
        <input type="hidden" name="oldname" value="<?= $_GET['name'] ?>">
        <input type="submit" value="rename">

    </form>


</body>

</html>