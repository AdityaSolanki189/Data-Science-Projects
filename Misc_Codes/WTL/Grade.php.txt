<?php
$marks = 40;

if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45)
{
	$grade = "Second Division";
}
else if($marks>=33)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>