<?php
	include_once("./config.php");
	$result = mysqli_query($mysql_conn, "SELECT * FROM students");
?>

<html>
<head>
<title>Homepage</title>
</head>
<body>
    <hr>
    <a href="add.html">Record New Data</a><br/><br/>

    <table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
    <td>Roll Number</td>
    <td>Name</td>
    <td>City</td>
    <td>Pin Code</td>
    </tr>

    <?php
        while($res = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$res['roll_no']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['city']."</td>";
            echo "<td>".$res['pin_code']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
    ?>
    </table>
</body>
</html>