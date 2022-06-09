<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <center>
        <form action="register.php" method="post">
            Company ID:
            <input type="text" name="companyID"><br><br>
            Company Name:
            <input type="text" name="companyName"><br><br>
            <label for="Location">Location:</label>
            <select name="Location" id="Location">
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Nashik">Nashik</option>
            </select>
            <br><br>
            Department: 
            <input type="text" name="Department"><br><br>
            JobRole: 
            <input type="text" name="jobrole"><br><br>

            <input type="submit" value="Register">
            <input type="reset" value="Reset"><br><br>
        </form>
        <form action="display.php" method="post">
            <input type="submit" value="Display Managers">
        </form>
    </center>
</body>
</html>
