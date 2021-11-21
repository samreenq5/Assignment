<?php
require('database.php');
$query = 'SELECT *
          FROM products
          ORDER BY productID';
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Shopping List Manager</title>
    <link rel="stylesheet" type="text/css" href="main1.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Shopping List Manager</h1></header>

    <main>
        <h1>Add Item</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">


            <label>Item:</label>
            <input type="text" name="name"><br>


            <label>&nbsp;</label>
            <input type="submit" value="Add Item"><br>
        </form>
        <p><a href="index1.php">View Item List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> </p>
    </footer>
</body>
</html>