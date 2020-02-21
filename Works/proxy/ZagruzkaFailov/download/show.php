<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php

        $arrFile = scandir("file\\");
        $file = "file\\";

        foreach ($arrFile as $value) {
            //  echo "<li>$value</li>";
            if ($value != '.' && $value != '..') { // Убирает родительские папки(файлы)
                if (is_dir($file . '/' . $value)) { // Является ли это папкой
                    echo "<li><img src='images/folder.png>' width='16' height='16' . $value . </li>";
                } else {
                    switch (explode(".", $arr[$i])[1]) {
                        case 'docx':
                            $icon = 'docx.png';
                            break;
                        case 'pdf':
                            $icon = 'pdf.png';
                            break;
                        default:
                            $icon = 'csv.png';
                            break;
                    }

                    echo "<li><img src='images/$icon' width'16' height='16'><a href='file\\$value'>$value</a></li>";
                }
            }
        }


        // for ($i = 2; $i < count($arr); $i++) {
        //     switch (explode(".", $arr[$i])[1]) {
        //         case 'docx':
        //             $icon = 'docx.png';
        //             break;
        //         case 'pdf':
        //             $icon = 'pdf.png';
        //             break;
        //         default:
        //             $icon = 'csv.png';
        //             break;
        //     }
        //     echo "<a href='file\\$arr[$i]'><img src='$icon' width='16' height='16'>$arr[$i]</a><br >;";
        // }
        ?>

    </ul>

</body>

</html>