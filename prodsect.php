<?php
// Fetch and display product data from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Function to display product details
function displayProduct($row)
{
    echo '<div class="item1">';
    echo '<span>Stock: ' . $row['quantity'] . '</span>';
    echo ' <img src="admin/'.$row['image_path'].'">';
    echo '</div>';
    echo '<div class="item1price">';
    echo '<span class="Pname">' . $row['product_name'] . '</span>';
    echo '<span class="Pdate">Model date:</span>';
    echo '<span class="Pdateval">' . $row['description'] . '</span>';
    echo '<span class="Pprice">Best Price:</span>';
    echo '<span class="Ppriceval">P' . $row['price'] . '</span>';
    echo '<button>Add to cart</button>';
    echo '</div>';
}

?>

<div class="item1con">
    <?php
    // Display product details for item1con
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    }else{
        echo '<h2 class="nopro">No Products Available.</h2>';
    }

    ?>
</div>

<div class="item2con">
    <?php
    // Display product details for item2con
    if (mysqli_num_rows($result) > 1) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    } 
    ?>
</div>

<div class="item3con">
    <?php
    // Display product details for item3con
    if (mysqli_num_rows($result) > 2) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    } 
    ?>
</div>

<div class="item4con">
    <?php
    // Display product details for item4con
    if (mysqli_num_rows($result) > 3) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    } 
    ?>
</div>

<div class="item5con">
    <?php
    // Display product details for item5con
    if (mysqli_num_rows($result) > 4) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    } 
    ?>
</div>

<div class="item6con">
    <?php
    // Display product details for item6con
    if (mysqli_num_rows($result) > 5) {
        $row = mysqli_fetch_assoc($result);
        displayProduct($row);
    } 

   
    ?>

</div>
