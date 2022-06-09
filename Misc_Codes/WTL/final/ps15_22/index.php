
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <center>
        <form action="register.php" method="post">
            Student ID:
            <input type="text" name="studentID"><br><br>
            Student Name:
            <input type="text" name="studentName"><br><br>
            Email ID:
            <input type="text" name="emailID"><br><br>
            12thGrade: 
            <input type="text" name="12thGrade"><br><br>
            JEEScore: 
            <input type="text" name="JEEScore"><br><br>

            <input type="submit" value="Register">
            <input type="reset" value="Reset"><br><br>
        </form>

        <form action="display.php" method="post">
            <input type="submit" value="Display Top 5 Students">
        </form>
    </center>
</body>
</html>
