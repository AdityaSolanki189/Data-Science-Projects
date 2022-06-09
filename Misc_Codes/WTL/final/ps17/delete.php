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
$sql = "DELETE FROM shoptable where Item_id=$itemID";

if($conn->query($sql)=== TRUE){
    echo("Records Deleted Successfully.");
}
else{
    echo("Error Deleting Record: ". $conn->error);
}

$conn->close();

?>