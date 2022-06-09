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
        $dbName = "company";

        $conn = mysqli_connect($serverName, $dbun, $dbpass, $dbName);
        
        // 2. Add the records
        $companyID = $_REQUEST["companyID"];
        $companyName = $_REQUEST["companyName"];
        $Location = $_REQUEST["Location"];
        $Department = $_REQUEST["Department"];

        $sqlInsert = "insert into company values ($companyID,'$companyName','$Location','$Department')";

        // // echo $sqlInsert;
        if(mysqli_query($conn, $sqlInsert)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: " . mysqli_error($conn);
        }

        //Fetch the records
        $sqlSelect = 'SELECT * FROM company';
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>Company ID</th><th>Company Name</th><th>Location</th><th>Department</th>";
            while($record = mysqli_fetch_assoc($resultSet)){
                echo "<tr><td>" . $record["companyID"] . "</td><td>";
                echo $record["companyName"] . "</td><td>";
                echo $record["Location"] . "</td><td>";
                echo $record["Department"] . "</td></tr>";
            }//end of while
            echo "</table>";
        }//end of if rows>0


    ?>

    <form action="display.php" method="POST">
            <label for="Option">Location:</label>
            <select name="city" id="Option">
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Nashik">Nashik</option>
            </select>
        <input type="submit" value="Search">
    </form>

</body>
</html>