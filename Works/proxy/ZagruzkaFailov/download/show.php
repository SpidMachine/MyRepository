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

       

        // scandir — Получает список файлов и каталогов, расположенных по указанному пути
        // is_dir — Определяет, является ли имя файла директорией

        foreach ($arrFile as $value) {


            if ($value != '.' && $value != '..') { // убрали из списка родительские папки
                if (is_dir($file . '/' . $value)) { // проверка по пути, или это папка или файл
                    echo "<li>" .
                    "<img src='images/folder.png' width='16' height='16'>" .
                    "<a href='file\\$value'>$value</a>" .
                    "<a href='delDir.php?file=$value'><img src='images/bin.png' width='12' height='12'></a>" .
                    "</li>";
                } else {
                    switch (explode(".", $value)[1]) {
                        case 'docx':
                            $icon = 'doc.png';
                            break;
                        case 'pdf':
                            $icon = 'pdf.png';
                            break;
                        case 'csv':
                            $icon = 'csv.png';
                            break;
                        case 'txt':
                            $icon = 'txt.png';
                            break;
                        default:
                            $icon = 'jpg.png';
                            break;
                    }

                    $filesize = round((filesize("file\\$value")  / 1024) / 1024 , 3) . "Mb";

                    echo "<li>" .
                        "<img src='images/$icon' width='16' height='16'>" .
                        "<a href='file\\$value'>$value</a>" . $filesize .
                        "<a href='delLink.php?file=$value'><img src='images/bin.png' width='12' height='12'></a>" .
                        "</li>";
                }
            }
        } // endforeach

        ?>
    </ul>

</body>

</html>S