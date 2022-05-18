<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Power of 4</title>
</head>
<body>
  <form action="/ta2/power_of_four.php" method="post">
    <table>
      <tr>
        <td>Enter a number:</td>
        <td><input type="number" name="n" id="n"></td>
        <td><input type="submit" value="Submit"></td>
      </tr>
    </table>
  </form>

  <?php
  
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
      $n = $_POST['n'];
    }

    $n = (int)$n;
    $c = $n;

    function prime_factorize($n){
      $counter = array();
      for($i=2; $i <= $n; $i++){
        $flag = True;

        while($flag and $n>1){
          if ($n % $i == 0){
            if (array_key_exists($i, $counter)){
              $counter[$i]++;
              $n /= $i;
              }
            else{
              $counter[$i] = 1;
              $n /= $i;
              }
          }
          else{$flag = false;}
        }
      }
      return $counter;
    }

    $counter = prime_factorize($n);
    echo "Prime factors of $c: ";

    foreach ($counter as $key => $value) {
      for($i = 0; $i < $value; $i++){
        echo "$key ";
      }
    }
    echo "<br>";


    $flag = true;
    $base = 1;
    foreach ($counter as $key=>$value){
      if ($value % 4 != 0){
        $flag = false; 
      }
      else{$base *= $key * $value / 4;}
    }
    echo "<br>";


    if ($flag == true && $c != 1 && $c != 0){
      echo "$c is $base ** 4";
    }
    echo "<br>";

  ?>

</body>
</html>