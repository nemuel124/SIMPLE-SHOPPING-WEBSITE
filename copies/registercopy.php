<?php
    session_start();
    require_once('config.php');


    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <form action="register.php" method="POST">
        <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];



                $sql = "SELECT * FROM user WHERE email = '$email'";
                $query = mysqli_query($conn, $sql);
                $check_row = mysqli_num_rows($query);
                
                if($check_row > 0){
                    echo '<script>
                            alert("Email already exists!");
                        </script>';
                }
                if($password != $cpassword){
                    echo '<h2 class="password8">
                          Password must at least reach 8 characters!
                        </h2>';
                } else {

                    if($password >= 8){
                        echo '<script>
                        alert("Password must atleast reach 8 characters!");
                    </script>';
                    
                    }
                    else{
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password_hash');";
                    $query = mysqli_query($conn, $sql);

                    if($query){
                        echo '<script>
                            alert("Successfully registered!");
                        </script>';
                    }}

                }
            }

        ?>
        <input type="username" placeholder="Create username" name="username" required><br><br>
        <input type="email" name="email" placeholder="Create email" required><br><br>
        <input type="password" placeholder="Create password" name="password" required><br><br>
        <input type="password" placeholder="Confirm password" name="cpassword" required><br><br>
        <input type="submit" value="Register" name="submit">
    </form>
    <p>Already have account? <a href="signin.php">Sign In</a></p>
</body>
</html>
