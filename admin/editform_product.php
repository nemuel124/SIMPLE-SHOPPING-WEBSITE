<?php
include('Products.php');

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    // Fetch product details from the database based on the ID
    $sql = "SELECT * FROM products WHERE product_id = '$productId'";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
} else {
    // Redirect to Products.php if no ID is provided
    echo '<script>window.location.href = "Products.php";</script>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    
    <form action="update_product.php" method="POST" enctype="multipart/form-data">
        <!-- Pass the product ID as a hidden input field -->
        <input type="hidden" name="id" value="<?php echo $productId; ?>">
        <input type="text" id="name" name="product_name" placeholder="Product Name" value="<?php echo $product['product_name']; ?>" required>
        <input type="text" id="description" name="description" placeholder="Product Model" value="<?php echo $product['description']; ?>" required>
        <input type="number" id="price" name="price" placeholder="Product Price" value="<?php echo $product['price']; ?>" required>
        <input type="number" id="quantity" name="quantity" placeholder="Product Quantity" value="<?php echo $product['quantity']; ?>" required>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <label for="image">Current Image:</label>
        <img src="<?php echo $product['image_path']; ?>" alt="Product Image" width="100"> <!-- Display current product image -->
        <input type="submit" value="Update">
        <a href="Products.php">Cancel</a>
    </form>

</body>
</html>




<style>
   body {
            width: 100%;
        }

        .dashboard {
            display: none;
        }


        form {
            width: 100%;
            max-width: 400px;
            background: rgba(215, 215, 215, 0.912);
            box-shadow: 1px 2px 3px 2px black;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            position: relative;
            left:40%;
           margin-top:2%;
           color:black;
        }

        input[type="text"],input[type="number"],
        textarea,
        input[type="file"] {
            margin: 0.8rem;
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid black;
            outline: none;
            width: calc(100% - 1.6rem);
        }

        input[type="submit"] {
            margin-top: 1rem;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        input:nth-child(6){
            width: 11rem;
            float:left;
            cursor:pointer;
        }
        label {
            display: block;
            text-align: left;
        }

        label,
        input,
        textarea {
            width: 100%;
        }

        a:hover {
            color: red;
        }

        .btn-add {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            right: .5rem;
            top: 1rem;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
        }

        .btn-add:hover {
            background-color: #0056b3;
        }

        

    </style>