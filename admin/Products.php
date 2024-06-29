<?php 
require_once('adminconfig.php');

include('index.php');

if(!isset($_SESSION['admin_id'])){
  echo '<script>window.location.href = "adminlogin.php";</script>';

    exit();
}

// Include any necessary PHP files here

// Fetch and display product data from the database
$sql = "SELECT * FROM products LIMIT 6"; // Limit to only six products
$result = mysqli_query($conn, $sql);

// Count the total number of products
$totalProducts = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Include any CSS files here -->
</head>
<body>
    
<div class="QuickAccess">

    <h2>Products</h2>
     <?php 
    // Check if the total number of products is less than 6
    if ($totalProducts < 6) {
        // Display the "Add" button
        echo '<a href="add_product.php" class="btn-add">Add</a>';
    } else {
        // Display a disabled "Add" button with an onclick event to trigger the alert
        echo '<a href="#" class="btn-add" onclick="alertLimitReached()">Add</a>';
    }
    ?>

    <div class="tablecon">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($totalProducts > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td><img src='" . $row['image_path'] . "' alt='Product Image' width='100'></td>";
                        echo "<td>
                            <a href='editform_product.php?id=" . $row['product_id'] . "' class='btn-edit'>Edit</a>
                            <a href='delete_product.php?id=" . $row['product_id'] . "' class='btn-delete'>Delete</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No products found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <p class="totalProd">Total Products: <?php echo $totalProducts; ?></p> <!-- Display total number of products -->

    </div>
</div>

</body>
</html>





<style>
    body{
        width:100%;
    }

    .dashboard{
        display: none;
    }
    .QuickAccess{
    border: 1px solid black;
    right: 1.5rem;
    left:16rem;
    z-index: -1;
    top: 5rem;
    margin-top:0;
    margin-right:0rem;
    border-radius: 25px;
    position: absolute;
    width: 80.5%;
    height: 25rem;
    display: inline-flex;

}
.QuickAccess h2{
  margin-left:0;
}
th:hover{
  background-color:white;
}



td,th{
  text-align:center; 
}
table{
  height:auto;
}


.totalProd{
  color:black;
  position: absolute;
  right:5rem;
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
    display: inline-block;
}

.btn-add:hover {
    background-color: gray;
}

img{      
            width: 2rem;
            height:2rem;
            position: relative;
            left:-1rem;
           
        }
        

        .btn-edit:hover{
        background-color: black;

    }
    
        .btn-delete:hover{
        background-color: black;

    }


    </style>

    <script>
function alertLimitReached(){
  alert("Adding of Products Limit Reached!");
}

    </script>