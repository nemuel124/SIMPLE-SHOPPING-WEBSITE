<?php
include('users.php');
require_once('adminconfig.php');

// Check if the user ID is provided in the URL
if(isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Retrieve user data based on the ID
    $sql = "SELECT * FROM accounts WHERE user_id = '$edit_id'"; // Corrected the column name to user_id
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_username = $row['user_username'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];
    } else {
        echo "User not found";
        exit();
    }
} else {
    echo "User ID not provided";
    exit();
}

// Check if the form is submitted for updating user data
if (isset($_POST['submit'])) {
    // Retrieve updated form data
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $new_password = $_POST['new_password'];

    // Validate form data
    // Add your validation logic here

    // Update user data
    $sql = "UPDATE accounts SET user_username='$user_username', user_email='$user_email'";
    if(!empty($new_password)) {
        $sql .= ", user_password='$new_password'";
    }
    $sql .= " WHERE user_id='$edit_id'"; // Corrected the column name to user_id
    $query = mysqli_query($conn, $sql);

    if ($query) {
        // Redirect to user list page after updating
        echo '<script>window.location.href = "users.php";</script>';
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    
<form method="POST" action="update_user.php?edit_id=<?php echo $edit_id; ?>">
    <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $edit_id; ?>">
    <input type="text" id="user_username" name="user_username" placeholder="Edit Username" maxlength="15" minlength="12" value="<?php echo $user_username; ?>" required>
    <input type="email" id="user_email" name="user_email" placeholder="Edit Email" value="<?php echo $user_email; ?>" required>
    <input type="text" id="new_password" name="new_password" placeholder="New Password" value="<?php echo $user_password; ?>">
    <input type="submit" name="submit" class="add" value="Update">
    <a href="users.php">Cancel</a>
</form> 
</body>
</html>



<style>
    body{
        width: 100%;
    }
  
   form{
    position: relative;
    margin-top: 10%;
    left:40%;
    width: 20rem;
    display:grid;
    text-align:center;
    border-radius:10px;
    background:rgba(215, 215, 215, 0.912);
    box-shadow:1px 2px 3px 2px black;
    padding:1rem 1.5rem 2rem;
   } 
   input{
    margin:.8rem;
    padding-left:5px;
    border-radius:5px;
    padding:5px;
    border:1px solid black;
    outline:none;
   }
   input:nth-child(5){
    cursor:pointer;
    position: relative;
        padding: 10px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        transition-duration: 0.4s;
   }
   input:nth-child(5):hover{
    background-color:#000;
   }
   a:hover{
    color:red;
   }
</style>
