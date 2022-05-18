<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 1 php</title>
    </head>
    <body>
        <?php
        $name = $_POST["name"];
        $x = $_POST["number"];
        

        echo "<h2>Hello There, " . $name ."</h2>";
        echo "<h3>Table of ". $x . "</h3>";
        
        
        for ($i=1; $i <= 10; $i++) { 
            echo $x."*".$i." = ".($x*$i)."<br>";
        }
        ?>
    </body>
</html>