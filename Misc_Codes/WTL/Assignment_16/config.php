<?php
    $database = 'localhost';
    $dbName = 'ques_sixteen';
    $dbUser = 'root';
    $dbPass = '';
    $mysql_conn = new mysqli($database, $dbUser, $dbPass, $dbName) or die('Unable to Connect to DB.');

    echo "welcome to ".$dbName." Database";

?>