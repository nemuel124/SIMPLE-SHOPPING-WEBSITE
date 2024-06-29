<?php
    require_once('adminconfig.php');
    session_start();

    if(isset($_SESSION['admin_id'])){
        header("Location: index.php");
        exit; // Ensure script stops after redirection
    }

    if(isset($_POST['submit'])){ // Check if form is submitted
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];

        $sql = "SELECT * FROM adminaccount WHERE admin_username = '$admin_username'";
        $query = mysqli_query($conn, $sql);

        if($query){
            // Check if username exists
            $check_row = mysqli_num_rows($query);
            
            if($check_row == 1){
                $row = mysqli_fetch_assoc($query);
                // Verify password
                if(password_verify($admin_password, $row['admin_password'])){
                    $_SESSION['admin_id'] = $row['admin_id'];
                    $_SESSION['admin_username'] = $row['admin_username'];
                      header("Location: index.php");
                    exit; // Ensure script stops after redirection
                } else {
                    echo '<script>alert("Incorrect password!");</script>';
                }
            } else {
                echo '<script>alert("Username not found!");</script>';
            }
        } else {
            echo '<script>alert("Error executing query!");</script>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="icons/footWear.png">
    <title>QSFW Admin Log in</title>
     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<body>
    <div class="mainCon">
        <div class="loginCon">
           <img src="icons/footWear.png" class="adminlogo">
            <h2>Admin</h2>
        <form action="adminlogin.php" method="POST">
        
            <input type="username" name="admin_username" placeholder="Enter Username" required>
            <input type="password" name="admin_password" placeholder="Enter Password" required>
            <span class="remember">Remember me?</span>  
            <input type="checkbox" name="checkbox">
            <input type="submit" name="submit" class="submit" value="Log in">
            </form>

          
        </div>

</div>  
<!--Main Container-->
</body>
</html>
<script defer src="/admin/admin.js"></script>
<style>
   body{
        position:relative;
        display: flex;
        justify-content: center;
        top: 10rem;
         background:rgba(215, 215, 215, 0.912);
         color: white;
         font-family: serif;
    }
    .adminlogo{
        position: relative;
        width: 8rem;
        height: 8rem;
        top: .5rem;
        border-radius: 50%;
        justify-self: center;
    }

    
    .loginCon{
        position: relative;
        display: grid;
        width: 25rem;
        height: 30rem;
        box-shadow: 3px 2px 4px 3px black;
        border-radius: 25px;


    }
    .loginCon i{
        font-size: 2.5em;
        color: #000;
        text-align: center;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        padding: .5rem;
        margin-top: 1rem;
        margin-left: 10.5rem;
        background-color: antiquewhite;
    }
    .loginCon h2{
        margin-top:.5rem;
        text-align: center;
        color: black;
    }
    .loginCon form{
        position: relative;
        width: 18.5rem;
        top:-2rem;
        display: grid;
        margin: 3rem;

    }.loginCon form input{
        margin: 1rem;
        margin-top: .5rem;
        padding: .5rem;
        border-radius: 15px;
        border: 0;
        outline: 0;
    }.loginCon .remember{
        position: relative;
        color:#000;
        left: 2rem;
    }
     .loginCon input[type="checkbox"]{
        position: relative;
        left: -8rem;
        top:-1.5rem;
    }
    .loginCon .submit{
        position: relative;
        top: -2rem;
    }
    .loginCon .submit:hover{
        background-color: rgb(0, 0, 0);
        color: white;
        cursor: pointer;
    }

    .registerlink{
        color: black;
        position: relative;
        top: -6rem;
        left: 8rem;

    }
    .registerlink a{
        padding-left: 2px;
    }
</style>
   