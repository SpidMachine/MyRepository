<?php
rename('file//' . $_POST['oldname'], 'file//' . $_POST['newname']);
header("Location: show.php");
