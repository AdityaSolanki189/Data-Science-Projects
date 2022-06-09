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
        
        // 2. Add the records
        $PlayerID = $_REQUEST["PlayerID"];
        $PlayerName = $_REQUEST["PlayerName"];
        $Game = $_REQUEST["Game"];
        $Score = $_REQUEST["Score"];

        $sqlInsert = "insert into player values ($PlayerID,'$PlayerName','$Game','$Score')";
        // echo "$sqlInsert";

        // // echo $sqlInsert;
        if(mysqli_query($conn, $sqlInsert)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: " . mysqli_error($conn);
        }

        //Fetch the records
        $sqlSelect = 'SELECT * FROM player';
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>Company ID</th><th>Company Name</th><th>Location</th><th>Department</th><th>jobrole</th>";
            while($record = mysqli_fetch_assoc($resultSet)){
                echo "<tr><td>" . $record["playerID"] . "</td><td>";
                echo $record["playerName"] . "</td><td>";
                echo $record["Game"] . "</td><td>";
                echo $record["Score"] . "</td></tr>";
            }//end of while
            echo "</table>";
        }//end of if rows>0


    ?>

    <form action="display.php" method="POST">
        <input type="submit" value="Display Managers">
    </form>

</body>
</html>
