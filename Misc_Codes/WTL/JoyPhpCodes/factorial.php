<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factorial</title>
</head>

<body>
	<div class="container">
		<form action="/ta2/factorial.php" method="post">
			<table>
				<tr>
					<td> Enter number</td>
					<td> <input type="number" name="n" id="n">
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>

	<?php 
	
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
			$n = $_POST['n'];
		}

		function factorical($n){
			if ($n == 1){
				return 1;
			}
			else{
				$m = $n - 1;
				return $n * factorical($m);
			}
		}

		echo "factorial of $n :" . factorical($n);
	
	?>
</body>

</html>