<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 2 php</title>
    </head>
    <body>
        <?php
        $name = $_POST["name"];
        $percent = $_POST["number"];

        echo "<h2>".$name." You Got, </h2>";
        if ($percent >= 60) {
            echo "<h2>First Division</h2>";
        }elseif($percent >= 45 && $percent <= 59){
            echo "<h2>Second Division</h2>";
        }elseif ($percent >= 33 && $percent <= 44) {
            echo "<h2>Third Division</h2>";
        }else{
            echo "<h2>FAIL</h2>";
        }
        ?>
    </body>
</html>