<?php
$subject = file_get_contents($_POST['url']);
echo preg_match_all("/" . $_POST['word'] . "/iu", $subject);