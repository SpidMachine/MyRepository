<?php
    include('fun.php');
    // phpinfo()
    $mysql = new mysqli('localhost', 'root', '', 'gb');
    
    if (!empty($_POST['text']) && !empty($_POST['name'])) {
        $mysqli->query( 
            "INSERT INTO 'table' VALUES (NULL, '$_POST[text]', '$_POST[name]')" 
        );
    }

    $result = $mysqli->query('SELECT * FROM "table"');

    while ($row = $result->fetch_object()) {
        echo "<b>" . smile($row->text) . "</b><i>$row->text</i>";
    };

    $result->free();

    $mysql->close();
    
