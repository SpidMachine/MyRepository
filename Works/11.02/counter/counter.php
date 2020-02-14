<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <?
        $file = "couner.txt";
        $c = fopen($file, 'r+');
        $counter = fgets($c);
        fclose($c);
        echo $counter += 1;

        $c = fopen($file, 'w+');
        fwrite($c, $counter);
        fclose($c);


    // $c = file_get_contents("counter.txt");
    // echo $c++;
    // file_put_contents("counter.txt", $c);
    
    ?>
</body>
</html>