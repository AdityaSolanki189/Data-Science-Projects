<?php
// Numeric Arrays
$names = array("ABC", "EFG", "HIJ");
foreach($names as $name){
    echo "<h2>".$name."</h2>";
}

// Associative Arrays
$ages = array("Aditya" => 18, "Anurag" => 15, "Vinith" => 20, "Aayush" => 28);

echo "<h3>".$ages["Aditya"]." ".$ages["Anurag"]." ". $ages["Vinith"]." ".
$ages["Aayush"]."</h3>";

//Multidimensional Arrays
$cars = array (
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15));

// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Vehicle $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

/* 
Sorting Arrays
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key */



?>

