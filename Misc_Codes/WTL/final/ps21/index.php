<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <center>
        <form action="register.php" method="post">
            Player ID:
            <input type="text" name="PlayerID"><br><br>
            Player Name:
            <input type="text" name="PlayerName"><br><br>
            Game
            <input type="text" name="Game"><br><br>
            Score: 
            <input type="text" name="Score"><br><br>

            <input type="submit" value="Add">
            <input type="reset" value="Reset"><br><br>
        </form>
        <form action="display.php" method="post">
            <input type="submit" value="Display Highest">
        </form>
    </center>
</body>
</html>
