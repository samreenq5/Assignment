<?php
// Get the product data
//$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');


// Validate inputs
 if (//$category_id == null || $category_id == false ||
        //$code == null || $name == null || $price == null || $price == false
		$name == null) {
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
    
//    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index1.php');
}
?>