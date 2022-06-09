<?php
	//including the database connection file
	include_once("./config.php");
	//fetching data in descending order
	$result = mysqli_query($mysql_conn, "SELECT * FROM users"); // using mysqli_query instead
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<a href="add.html">Add New Data</a><br/><br/>
<table width='80%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Name</td>
<td>Age</td>
<td>Email</td>
<td>Update</td>
</tr>
<?php

while($res = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$res['Name']."</td>";
	echo "<td>".$res['Age']."</td>";
	echo "<td>".$res['Email']."</td>";
	echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
?>
</table>
</body>
</html>