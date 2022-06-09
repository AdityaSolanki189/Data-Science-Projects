<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
        //1. Connect to the database
        $serverName = "localhost";
        $dbun = "root";
        $dbpass = "";
        $dbName = "player";

        $conn = mysqli_connect($serverName, $dbun, $dbpass, $dbName);
    
        // Fetch the records
        $sqlSelect = "SELECT * FROM `player` WHERE Score=(select max(Score) from player WHERE Game='cricket') ";
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>Player ID</th><th>Player Name</th><th>Game</th><th>Score</th>";
            while($record = mysqli_fetch_assoc($resultSet)){
                echo "<tr><td>" . $record["playerID"] . "</td><td>";
                echo $record["playerName"] . "</td><td>";
                echo $record["Game"] . "</td><td>";
                echo $record["Score"] . "</td></tr>";
            }//end of while
            echo "</table>";
        }//end of if rows>0


    ?>

</body>
</html>
