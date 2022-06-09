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
        $dbName = "students";

        $conn = mysqli_connect($serverName, $dbun, $dbpass, $dbName);
        
        // 2. Add the records
        $studentID = $_REQUEST["studentID"];
        $studentName = $_REQUEST["studentName"];
        $emailID = $_REQUEST["emailID"];
        $Grade = $_REQUEST["12thGrade"];
        $JEEScore = $_REQUEST["JEEScore"];

        $sqlInsert = "insert into students values ($studentID,'$studentName','$emailID','$Grade','$JEEScore')";
        // echo "$sqlInsert";

        // // echo $sqlInsert;
        if(mysqli_query($conn, $sqlInsert)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: " . mysqli_error($conn);
        }

        //Fetch the records
        $sqlSelect = 'SELECT * FROM students';
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>studentID</th><th>Company Name</th><th>emailID</th><th>12thGrade</th><th>JEEScore</th>";
            while($record = mysqli_fetch_assoc($resultSet)){
                echo "<tr><td>" . $record["studentID"] . "</td><td>";
                echo $record["studentName"] . "</td><td>";
                echo $record["emailID"] . "</td><td>";
                echo $record["12thGrade"] . "</td><td>";
                echo $record["JEEScore"] . "</td></tr>";
            }//end of while
            echo "</table>";
        }//end of if rows>0


    ?>

    <form action="display.php" method="POST">
        <input type="submit" value="Top 5 students">
    </form>

</body>
</html>