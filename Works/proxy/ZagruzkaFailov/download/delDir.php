<? 
rmdir("file\\" . $_GET['file']); // Пытается удалить директорию с именем dirname
header("Location: show.php");