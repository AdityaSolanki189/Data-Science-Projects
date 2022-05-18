<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Day of the week</title>
</head>

<body>
	<form action="" method="post">
		<input type="number" name="day" id="day number" placeholder='Enter a number between 1-7'>
		<button type="submit">Submit</button>
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
			$day = $_POST['day'];
		}

		switch ($day){
			case 1:
				echo "Monday";
				break;
	
			case 2:
				echo "Tuesday";
				break;
			
			case 3:
				echo "Wednesday";
				break;

			case 4:
				echo "Thursday";
				break;
	
			case 5:
				echo "Friday";
				break;
			
			case 6:
				echo "Saturday";
				break;

			case 7:
				echo "Sunday";;
				break;
			
			default:
				echo "Invalid Input";
		}
		
	?>
</body>

</html>