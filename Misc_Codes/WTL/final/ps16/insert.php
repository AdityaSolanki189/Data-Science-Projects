<?php

$_server = "localhost";
$username = "root";
$password = "";
$db = "shopping";

$conn = mysqli_connect($_server, $username, $password, $db);

    if(!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }
    
    $itemID = $_REQUEST["itemID"];
    $itemName = $_REQUEST["itemName"];
    $itemQuantity = $_REQUEST["itemQuantity"];

    $sql = "insert into shoptable values('$itemID', '$itemName', '$itemQuantity')";

    if(mysqli_query($conn, $sql)){
       echo("Records inserted Successfully.");
    }
    else{
       echo("Error:" . mysqli_error($conn));
    }


$conn->close();

?>