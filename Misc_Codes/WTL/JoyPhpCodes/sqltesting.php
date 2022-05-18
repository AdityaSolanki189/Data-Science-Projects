 <!-- Write a PHP Script to Add the following filed in Student Table with database connection:
i. Roll Number
ii. Name
iii. City
iv. Pin Code
Show the Result on Browser Screen through Display Record button -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

 <body>

   <hr>
   <form action="/ta2/displayrecords.php" method="post">
     <table name="create_db_form">
       <tr>
         <td>Enter New DB name:</td>
         <td><input type="text" name="new_db_name" id="new_db_name"></td>
       </tr>
     </table>
     <input type="submit" value="Submit">
     <input type="reset" value="Reset">
   </form>

   <hr>
   <form action="/ta2/displayrecords.php" method="post">
     <table>

       <tr>
         <td>Enter db name:</td>
         <td><input type="text" name="dbname" id="dbname" value='fdb'></td>
       </tr>

       <tr>
         <td>Enter Roll Number:</td>
         <td><input type="number" name="rno" id="rno"></td>
       </tr>

       <tr>
         <td>Enter Name:</td>
         <td><input type="text" name="name" id="name"></td>
       </tr>

       <tr>
         <td>Enter City:</td>
         <td><input type="text" name="city" id="city"></td>
       </tr>

       <tr>
         <td>Enter Pincode:</td>
         <td><input type="number" name="pincode" id="pincode"></td>
       </tr>

     </table>

     <input type="submit" value="Submit">
     <input type="reset" value="Reset">

   </form>


   <hr>
   <form action="/ta2/displayrecords.php" method="post">
     <table name="update_table">
       <tr>
         <td>Enter db name:</td>
         <td><input type="text" name="dbname" id="dbname" value='fdb'></td>
       </tr>

       <tr>
         <td>Enter Roll Number:</td>
         <td><input type="number" name="check_rno" id="check_rno"></td>
       </tr>

       <tr>
         <td>Enter new Pincode:</td>
         <td><input type="number" name="new_pincode" id="new_pincode"></td>
       </tr>
     </table>
     <input type="submit" value="Submit">
     <input type="reset" value="Reset">
   </form>


   <?php

    $create = false;
    $insert = false;
    $update = false;
    $create_table = false;
    $dbname = NULL;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      foreach ($_POST as $key => $value) {

        if ($key == 'new_db_name') {
          $create = true;
          $new_db_name = $_POST['new_db_name'];
        }

        if ($key == 'rno') {
          $insert = true;
          $dbname = $_POST['dbname'];
          $rno = $_POST['rno'];
          $name = $_POST['name'];
          $city = $_POST['city'];
          $pincode = $_POST['pincode'];
        }

        if ($key == 'check_rno') {
          $update = true;
          $dbname = $_POST['dbname'];
          $check_rno = $_POST['check_rno'];
          $new_pincode = $_POST['new_pincode'];
        }
      }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";

    if ($dbname){
      $database = $dbname;}
    else{
      $database = 'mysql';}



    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
      die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
      echo "Connection was successful<br>";
    }

    if ($create) {

      $conn = mysqli_connect($servername, $username, $password);

      $sql = "CREATE DATABASE $new_db_name";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "The db was created successfully!<br>";
      } else {
        echo "The db was not created successfully because of this error ---> " . mysqli_error($conn);
      }


      $conn = mysqli_connect($servername, $username, $password, $new_db_name);
      $create_table = true;
    }

    if ($create_table) {
      $sql = "CREATE TABLE `students_info` ( `rno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `city` VARCHAR(30) NOT NULL , `pincode` INT(6) NOT NULL , PRIMARY KEY (`rno`))";

      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "The table was created successfully!<br>";
      } else {
        echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
      }
    }


    if ($insert) {
      $sql = "INSERT INTO `students_info` (`rno`, `name`, `city`, `pincode`) VALUES ('$rno', '$name', '$city', '$pincode')";
      $result = mysqli_query($conn, $sql);

      $sql = "SELECT * FROM `students_info` WHERE `rno` = '$rno'";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "Roll No : " . $row['rno'] .  " Name : " . $row['name'] . " City : " . $row['city'] .  " pincode : " . $row['pincode'];
        echo "<br>";
      }

      if ($result) {
        echo "The record has been inserted successfully successfully!<br>";
      } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
      }
    }

    if ($update) {

      $sql = "UPDATE `students_info` SET `pincode` = '$new_pincode' WHERE `rno` = $check_rno";
      $result = mysqli_query($conn, $sql);

      $sql = "SELECT * FROM `students_info` WHERE `rno` = '$check_rno'";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "Roll No : " . $row['rno'] .  " Name : " . $row['name'] . " City : " . $row['city'] .  " pincode : " . $row['pincode'];
        echo "<br>";
      }
    }

    ?>


 </body>

 </html>