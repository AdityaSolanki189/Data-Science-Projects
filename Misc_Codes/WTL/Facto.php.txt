<?php
$num = 3;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";
?>