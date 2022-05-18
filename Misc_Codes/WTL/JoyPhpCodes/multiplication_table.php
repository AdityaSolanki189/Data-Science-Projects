<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Print Table</title>
</head>


<body>
	<div class="container">
		<form action="/ta2/hello_world.php" method="POST">
			<div class="form-group">
				<label for="no">Enter Number:</label>
				<input type="number" name="no" id="no">
			</div>

			<button type="submit" id="submit_form">Submit</button>
		</form>
	</div>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$number = $_POST['no'];

		echo "<h1>Multiplication Table of number :" . ($number) . "</h1>";

		$i = 1;
		while ($i <= 10) {
			echo ($number * $i) . "<br>";
			$i += 1;
		}
	}
	?>
</body>

</html>