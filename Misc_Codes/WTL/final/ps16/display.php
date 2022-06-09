<!-- Design a shopping application form with following fields [itemID, itemName, itemQuantity]
Write a PHP script to display and delete specific item.--> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TA2 Practical</title>
</head>
<body>
    <?php
    $_server = "localhost";
    $username = "root";
    $password = "";
    $db = "shopping";

    $conn = mysqli_connect($_server, $username, $password, $db);

    if(!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }
    echo("Connection Successful <br>");

    $sqlSelect = 'SELECT * from shoptable';
    $resultSet = mysqli_query($conn, $sqlSelect);

    $nrows = mysqli_num_rows($resultSet);
    echo("<br> Number of records: " . $nrows);
    echo("<table border='3' style='border-collapse:collapse'> 
    <tr>
    <td>Item ID:</td>
    <td>Item Name:</td>
    <td>Item Quantity:</td>
    </tr>");
    if($nrows > 0){
        while($row = mysqli_fetch_assoc($resultSet)){
            echo("<tr>");
            echo("<td>". $row["Item_id"] . "</td>");
            echo("<td>". $row["Item_Name"] . "</td>");
            echo("<td>". $row["Item_Quantity"] . "</td>");
            echo("</tr>");
        }
    }
    else{
        echo("No records.");
    }
    echo("</table>");
    mysqli_close($conn);

    ?>
    
</body>
</html>