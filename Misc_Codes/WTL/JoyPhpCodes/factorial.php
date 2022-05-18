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
		<form action="" method="post">
			<table>
				<tr>
					<td> Enter number</td>
					<td> <input type="number" name="num" id="num">
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>

	<?php 
		$n = $_POST["num"];

		function fact($n){
			if ($n <= 1){
				return 1;
			}
			else{
				$m = $n - 1;
				return $n * fact($m);
			}
		}

		echo "factorial of $n : " . fact($n);
	?>
</body>

</html>