<!DOCTYPE html>
<html>
<body>

<?php
    $normal_array = array("This", "is", "a", "normal", "array");
    $assoc_array = array(1 => "One", 3 => "Three", 7 => "Seven", 19 => "Nineteen");
    $multidim_array = array(
        "first_row" => array(1, 2, 3, 4, 5),
        "second_row" => array("One", "Two", "Three", "Four", "Five"),
        "third_row" => array(10, 9, 8, 7, 6)
    );

    # Code for normal array display
    echo "Normal Array:<br>";
    for ($i = 0; $i < count($normal_array); $i++) {
        echo $normal_array[$i]."<br>";
    }

    sort($normal_array);
    rsort($normal_array);

    echo "<br><br>";

    # Code for associative array display
    echo "Associative Array: <br>";
    foreach ($assoc_array as $key => $value) {
        echo "$key is $value <br>";
    }

    asort($assoc_array);
    ksort($assoc_array);

    echo "<br><br>";

    # Code for multi-dimensional array display
    echo "Multi-dimensional Array: <br>";
    foreach ($multidim_array as $key => $value) {
        echo "$key has ";
        foreach ($value as $element) {
            echo "$element ";
        }
        echo "<br>";
    }
?>

</body>
</html>
