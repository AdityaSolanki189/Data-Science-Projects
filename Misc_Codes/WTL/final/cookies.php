<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by city</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="text" placeholder="Company Id" name="companyid">
            <input type="text" placeholder="Company Name" name="companyname">
            <input type="text" placeholder="Location" name="location">
            <input type="text" placeholder="Department" name="department">
            <input type="submit">
        </form>
    </div>

    <form action="" method="post">
        <input type="text" name= "city" placeholder="city">
        <input type="submit" name="btn1">
    </form>

    <?php

        if(isset($_POST['companyid']) && isset($_POST['companyname'])&& isset($_POST['location'])&&isset($_POST['department'])){
        $CompanyId = $_POST['companyid'];
        $CompanyName = $_POST['companyname'];
        $location = $_POST['location'];
        $department = $_POST['department'];}

        $host="localhost";
        $user="root";
        $password="";

        $con=mysqli_connect($host,$user,$password);

        mysqli_query($con, "CREATE DATABASE if not exists test");
        mysqli_query($con, "use test");
        mysqli_query($con, "CREATE TABLE if not exists companies(companyId INT(5), companyName VARCHAR(100), location varchar(100), department varchar(100))");

        if(!empty($location) && !empty($CompanyId) && !empty($CompanyName) && !empty($department)){
            mysqli_query($con, "insert into companies (companyId, companyName, location, department) values('$CompanyId', '$CompanyName', '$location', '$department')");

            setcookie("name", "Set", time()+3600, "/");
        }


       
        if(isset($_COOKIE["name"])) {
            //to display all the contents
            $rs = mysqli_query($con, "select*from companies");
            $nrows= mysqli_num_rows($rs);
            if($nrows > 0){
                while($row = mysqli_fetch_assoc($rs)){
                echo "id : {$row['companyId']} <br>" ;
                echo "name : {$row['companyName']} <br>" ;
                echo "location : {$row['location']} <br>" ;
                echo "department : {$row['department']} <br><br>" ;
            }
            } 
        }
        else{echo "cookie not set <br>";}
           
    ?>
</body>
</html>