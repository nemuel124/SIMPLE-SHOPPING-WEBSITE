<?php
require_once('adminconfig.php');

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    // Get the product ID from the URL parameter
    $productId = $_GET['id'];

    // Prepare a DELETE statement to remove the product from the database
    $sql = "DELETE FROM products WHERE product_id = $productId";

    // Execute the DELETE statement
    if(mysqli_query($conn, $sql)){
        // Product deleted successfully, redirect back to Products.php
        header("Location: index.php");
        exit();
    } else {
        // Handle error if deletion fails
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    // Redirect back to Products.php if no product ID is provided
    header("Location: index.php");
    exit();
}
?>