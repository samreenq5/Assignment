<?php
// Get the product data
$name = filter_input(INPUT_POST, 'name');


// Validate inputs
 if ($name == null) {
    $error = "Invalid product data. Try again.";
    include('error.php');
} else  {
    require_once('database.php'); 

    // Add the product to the database  
    $query = 'INSERT INTO products
                 (productName)
              VALUES
                 (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index1.php');
}
?>
