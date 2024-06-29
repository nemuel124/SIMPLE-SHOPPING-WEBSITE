<?php
include('Products.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productId = $_POST['id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // File upload handling
    if ($_FILES["image"]["name"]) { // Corrected the condition here
        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Ensure the 'uploads' directory exists
        if (!is_dir($targetDir)) {
            // If the directory doesn't exist, create it
            mkdir($targetDir, 0755, true); // Create directory with permissions 0755
        }

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Allow certain file formats
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                    // Update product data including image path in database
                    $sql = "UPDATE products SET product_name = '$product_name', description = '$description', price = '$price', quantity = '$quantity', image_path = '$targetFilePath' WHERE product_id = '$productId'";
                    if (mysqli_query($conn, $sql)) {
                        // Product updated successfully, redirect to Products.php
                        echo '<script>window.location.href = "Products.php";</script>';
                        exit();
                    } else {
                        echo "Error updating product: " . mysqli_error($conn);
                    }
                } else {
                    echo "Error uploading file.";
                }
            } else {
                echo "Only JPG, JPEG, PNG & GIF files are allowed.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        // If no new image is provided, update product data excluding image path in database
        $sql = "UPDATE products SET product_name = '$product_name', description = '$description', price = '$price', quantity = '$quantity' WHERE product_id = '$productId'";
        if (mysqli_query($conn, $sql)) {
            // Product updated successfully, redirect to Products.php
            echo '<script>window.location.href = "Products.php";</script>';
            exit();
        } else {
            echo "Error updating product: " . mysqli_error($conn);
        }
    }
} else {
    // If form is not submitted, redirect to Products.php
    echo '<script>window.location.href = "Products.php";</script>';
    exit();
}
?>

