<?php
$marks = 55;

if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45 && $marks<=59)
{
	$grade = "Second Division";
}
else if($marks>=33 && $marks<=44)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>