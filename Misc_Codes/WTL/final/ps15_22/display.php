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
    
        //Fetch the records
        $sqlSelect = 'SELECT * FROM students ORDER BY JEEScore DESC LIMIT 5';
        //SELECT * FROM student WHERE subject = 'PCM' ORDER BY studentMarks DESC LIMIT 5
        $resultSet = mysqli_query($conn, $sqlSelect);
        
        $nrows= mysqli_num_rows($resultSet);
        echo "There are ".$nrows ." records<br>";

        if ($nrows>0){
            echo "<table border=2><th>studentID</th><th>Student Name</th><th>Email ID</th><th>12th Grade</th><th>JEE Score</th>";
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

</body>
</html>