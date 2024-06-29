<?php
include('Products.php');
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // File upload handling
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
    if($check !== false) {
        // Allow certain file formats
        $allowTypes = array('jpg','jpeg','png','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
                // Insert product data into database
                $sql = "INSERT INTO products (product_name, description, price, quantity, image_path) VALUES ('$product_name', '$description', '$price', '$quantity', '$targetFilePath')";
                if(mysqli_query($conn, $sql)){
                    // Product added successfully, redirect to Products.php
                    echo '<script>window.location.href = "Products.php";</script>';
                    exit();
                } else{
                    echo "Error adding product: " . mysqli_error($conn);
                }
            }else{
                echo "Error uploading file.";
            }
        }else{
            echo "Only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }else{
        echo "File is not an image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    
    <form action="add_product.php"  method="POST" enctype="multipart/form-data">
        <input type="text" id="name" name="product_name" placeholder="Product Name" required>
        <input type="text" id="description" name="description"  placeholder="Product Model" required>
        <input type="number" id="price" name="price" placeholder="Product Price" required>
        <input type="number" id="quantity" name="quantity" placeholder="Product Quantity" required>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>
        <input type="submit" value="Submit">
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