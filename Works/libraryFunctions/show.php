<?php
include("fun.php");

echo url(md(bb_code(smile($_POST['text']))));
