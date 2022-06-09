<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <input type="number" placeholder="Roll No" name="rollno">
            <input type="text" placeholder="Student Name" name="studName">
            <input type="text" placeholder="Student Department" name="studDept">
            <input type="year" placeholder="Passing year" name="passingYear">
            <select name="selectGrade">
            <option value="First_Class">First Class</option>
            <option value="Second_Class">Second Class</option>
            <option value="Pass">Pass</option>
</select>
            <input type="submit">
        </form>
    </div>

    <form action="" method="post">
        years: <select name="selectYear">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        </select>
        firstClass<input type="radio" name="gradeClass" value="First_Class">
        secondClass<input type="radio" name="gradeClass" value="Second_Class">
        All<input type="radio" name="gradeClass" value="All">
        <input type="submit" name="Display" value="Display">
    </form>

    <?php
        if(isset($_POST['rollno']) && isset($_POST['studName'])&& isset($_POST['studDept'])&&isset($_POST['passingYear']) && isset($_POST['selectGrade'])){
            $rollno = $_POST['rollno'];
            $studName = $_POST['studName'];
            $studDept = $_POST['studDept'];
            $passingYear = $_POST['passingYear'];
            $classGrades = $_POST['selectGrade'];
        }

        $host="localhost";
        $user="root";
        $password="";

        $con=mysqli_connect($host,$user,$password);

        mysqli_query($con, "CREATE DATABASE if not exists students");
        mysqli_query($con, "use students");
        mysqli_query($con, "CREATE TABLE if not exists studentTable(rollno INT, studName VARCHAR(100), studDept varchar(100), passingYear YEAR(4), classGrades varchar(25))");

        if(!empty($rollno) && !empty($studName) && !empty($studDept) && !empty($passingYear) && !empty($classGrades)){
            mysqli_query($con, "insert into studentTable (rollno, studName, studDept, passingYear, classGrades) values('$rollno', '$studName', '$studDept', '$passingYear', '$classGrades')");}


        if(isset($_POST['Display'])){
            if(isset($_POST['selectYear']) && isset($_POST['gradeClass'])){
                $year = $_POST['selectYear'];
                $grade = $_POST['gradeClass'];
            }
            echo("<table border='3' style='border-collapse:collapse'> 
            <tr>
            <td>Roll No.</td>
            <td>Name</td>
            <td>Depatment</td>
            <td>Passing Year</td>
            <td>Grade</td>
            </tr>");
            if($grade=="All"){
                $rs = mysqli_query($con, "select*from studentTable");
                $nrows= mysqli_num_rows($rs);
                
                if($nrows > 0){
                    while($row = mysqli_fetch_assoc($rs)){
                    echo("<tr>");
                    echo "<td>{$row['rollno']}</td>" ;
                    echo "<td>{$row['studName']}</td>" ;
                    echo "<td>{$row['studDept']}</td>" ;
                    echo "<td>{$row['passingYear']}</td>";
                    echo "<td>{$row['classGrades']}</td>"; 
                    echo("</tr>");
                    }
                    
                } 
            }else{
                $rs = mysqli_query($con, "select*from studentTable where passingYear = $year and classGrades = '$grade'");
                $nrows = mysqli_num_rows($rs);
                if($nrows>0){
                    while($rows = mysqli_fetch_assoc($rs)){
                    echo("<tr>");
                    echo "<td>{$rows['rollno']}</td>" ;
                    echo "<td>{$rows['studName']}</td>" ;
                    echo "<td>{$rows['studDept']}</td>" ;
                    echo "<td>{$rows['passingYear']}</td>";
                    echo "<td>{$rows['classGrades']}</td>"; 
                    echo("</tr>");
                    }
                }
            }   
        }

    
    ?>
</body>
</html>