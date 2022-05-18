<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Grade</title>
</head>

<body>
	<form action="/ta2/grade.php" method="post">
		<input type="number" name="marks" id="student_marks" placeholder='Student Marks'>
		<button type="submit">Submit marks</button>
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
			$marks = $_POST['marks'];
		}

		if ($marks >= 60){
			echo "Student is placed in First Division";
		}

		elseif ($marks >= 45 && $marks < 60){
			echo "Student is placed in Second Division";
		}

		elseif ($marks >= 33 && $marks < 45){
			echo "Student is placed in Third Division";
		}

		elseif ($marks < 33){
			echo "Student Failed";
		}

		else{
			echo "INVALID MARKS";
		}
	?>
</body>

</html>