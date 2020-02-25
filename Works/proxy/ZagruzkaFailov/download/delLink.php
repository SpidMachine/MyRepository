<? 
// print_r($_GET); // ['file']
unlink("file\\" . $_GET['file']); // Удаляет файл
header("Location: show.php");