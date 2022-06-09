<html>
<head>
<title>Add Data in Database</title>
</head>
<body>
<?php
include_once("config.php");
if(isset($_POST['Submit'])) 
{
    $roll_no = mysqli_real_escape_string($mysql_conn, $_POST['roll_no']);
    $name = mysqli_real_escape_string($mysql_conn, $_POST['name']);
    $city = mysqli_real_escape_string($mysql_conn, $_POST['city']);
    $pin_code = mysqli_real_escape_string($mysql_conn, $_POST['pin_code']);

    // checking empty fields
    if(empty($roll_no) || empty($name) || empty($city) || empty($pin_code)) 
    {
        if(empty($roll_num)) 
        {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($name)) 
        {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($city)) 
        {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($pin_code)) 
        {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
                //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Previous Page</a>";
    } 
    else 
    {
        // if all the fields are filled (not empty) insert data to database

        $result = mysqli_query($mysql_conn, "INSERT INTO students(roll_no,name,city,pin_code) 
        VALUES('$roll_no','$name','$city','$pin_code')");

        //display success message
        echo "<br><font color='green'>Data added successfully in Table, Please Check";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
