<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrome</title>
</head>
<body>
  <form action="/ta2/palindrome.php" method="post">
    <table>
      <tr>
        <td>Enter string to check for palindrome</td>
        <td><input type="text" name="input_string" id="input_string"></td>
        <td><input type="submit" value="Submit String"></td>
      </tr>
    </table>
  </form>

  <?php 
  
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
      $s = $_POST['input_string'];
    }

    if ($s == strrev($s)){
      echo $s . " is a palindrome <br>";
    }
    else{
      echo "$s is not a palindrome <br>";
    }

  ?>


</body>
</html>