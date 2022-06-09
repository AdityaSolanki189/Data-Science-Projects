<?php
include_once("./config.php");
if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($mysql_conn, $_GET['id']);
    $roll_no = mysqli_real_escape_string($mysql_conn, $_POST['roll_no']);
    $name = mysqli_real_escape_string($mysql_conn, $_POST['name']);
    $city = mysqli_real_escape_string($mysql_conn, $_POST['city']);
    $pin_code = mysqli_real_escape_string($mysql_conn, $_POST['pin_code']);

	if(empty($roll_no) || empty($name) || empty($city) || empty($pin_code)){
		if(empty($roll_no)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
        if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($city)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		if(empty($pin_code)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
	} 
	else {
        $id = mysqli_real_escape_string($mysql_conn, $_GET['id']);
		$result = mysqli_query($mysql_conn, "UPDATE users SET
		roll_no='$roll_no',name='$name',city='$city',pin_code='$pin_code' WHERE id=$id");
		
        echo "<br><font color='green'>Data Updated successfully in Table, Please Check";
        echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>

<?php
	//getting id from url
	//$id = $_GET['id'];
    $id = mysqli_real_escape_string($mysql_conn, $_GET['id']);
	//selecting data associated with this particular id
	$result = mysqli_query($mysql_conn, "SELECT * FROM students WHERE id=$id");
	while($res = mysqli_fetch_array($result)){
		$roll_no = $res['roll_no'];
        $name = $res['name'];
		$city = $res['city'];
		$pin_code = $res['pin_code'];
	}
?> 

<html>
<head>
<title>Edit Data</title>
</head>
<body>
<a href="index.php">Home</a>
<br>
<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr>
        <td>Roll Number</td>
        <td><input type="text" name="roll_no" value="<?php echo
        $roll_no;?>"></td>
        </tr>
        <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?php echo
        $name;?>"></td>
        </tr>
        <tr>
        <td>City</td>
        <td><input type="text" name="city" value="<?php echo
        $city;?>"></td>
        </tr>
        <tr>
        <td>Pin Code</td>
        <td><input type="text" name="pin_code" value="<?php echo
        $pin_code;?>"></td>
        </tr>
        <tr>
        <td><input type="hidden" name="id" value=<?php echo
        $_GET['id'];?>></td>I
        <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>