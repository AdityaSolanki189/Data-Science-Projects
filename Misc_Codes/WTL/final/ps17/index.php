<!-- Design a shopping application form with following fields [itemID, itemName, itemQuantity]
Write a PHP script to display and delete specific item.--> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TA2 Practical</title>
</head>
<body>
    <form action="display.php" method="post">
        <input type="submit" value="Display">
    </form>

    <form action="delete.php" method="post">
    Item_id : <br>
        <input type="number" name="itemID", id="itemID"><br>
        <input type="submit" value="Delete">
    </form>


</body>
</html>