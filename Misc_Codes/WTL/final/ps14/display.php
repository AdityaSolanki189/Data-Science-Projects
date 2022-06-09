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
    
        //Fetch the records
        $sqlSelect = "SELECT * FROM registrations WHERE RegistrationDate < 20220518";
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>Company ID</th><th>Company Name</th><th>Location</th><th>Department</th><th>RegistrationDate</th>";
            while($record = mysqli_fetch_assoc($resultSet)){
                echo "<tr><td>" . $record["companyID"] . "</td><td>";
                echo $record["companyName"] . "</td><td>";
                echo $record["Location"] . "</td><td>";
                echo $record["Department"] . "</td><td>";
                echo $record["RegistrationDate"] . "</td></tr>";
            }//end of while
            echo "</table>";
        }//end of if rows>0


    ?>

</body>
</html>
