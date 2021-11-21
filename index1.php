<?php
require_once('database.php');

// Get products 
$queryProducts = 'SELECT * FROM products
                  ORDER BY productID';
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Shopping List Manager</title>
    <link rel="stylesheet" type="text/css" href="main1.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Shopping List Manager</h1></header>
<main>
    <h1>Item List</h1>

    <aside>
        
    <section>
        <!-- display a table of products 
        <h2><?php echo $category_name; ?></h2>-->
        <table>
            <tr>
                
                <th>Item</th>
               
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productName']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Item</a></p>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> </p>
</footer>
</body>
</html>