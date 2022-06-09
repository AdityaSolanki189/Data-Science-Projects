<?php
    $dbName = 'ques_14';
    $dbUser = 'root';
    $dbPass = '';
    $mysql_conn = new mysqli('localhost', $dbUser, $dbPass, $dbName) or die('Unable to Connect to DB.');

    echo "Welcome to ".$dbName." Database!"."<br>";
    echo "This is Assignment 14.";
?>