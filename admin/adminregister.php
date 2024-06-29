<?php
   require_once('adminconfig.php');
   session_start();

   if(isset($_SESSION['admin_id'])){
       header("Location: index.php");   
       exit; // Ensure script stops after redirection
   }

    if(isset($_POST['submit'])){
        $admin_username = $_POST['admin_username']; // Corrected variable assignment
        $admin_email = $_POST['admin_email']; // Corrected variable assignment
        $admin_password = $_POST['admin_password'];
        $admin_cpassword = $_POST['admin_cpassword'];

        $sql = "SELECT * FROM adminaccount WHERE admin_email = '$admin_email'";
        $query = mysqli_query($conn, $sql);
        $check_row = mysqli_num_rows($query);
        
        if($check_row > 0){
            echo '<script>alert("Email or Username already exists!");</script>';
        }
       else if($admin_password != $admin_cpassword){
            echo '<script>alert("Password does not match!");</script>'; 
        } else {
            $password_hash = password_hash($admin_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO adminaccount (admin_username, admin_email, admin_password) VALUES ('$admin_username', '$admin_email', '$password_hash')";
            $query = mysqli_query($conn, $sql);

            if($query){
                echo '<script>alert("Successfully registered!");</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="icons/footWear.png">
    <title>QSFW Admin Register(Temporary)</title>
     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<body>
    <div class="mainCon">
        <div class="loginCon">
            <i class="fa-regular fa-user"></i>
            <h2>Admin</h2>
            
            <form action="adminregister.php" method="POST">
               
                <input type="username" name="admin_username" placeholder="Create Username (max of 15 characters)" maxlength="15" required>
                <input type="email" name="admin_email" placeholder="Create Email" required>
                <input type="password" name="admin_password" placeholder="Create Password" required>
                <input type="password" name="admin_cpassword" placeholder="Confirm Password" required>
                    
                <span class="conditions">Agree to Terms and Conditions</span>  
                <input type="checkbox" name="checkbox" required>
                <input type="submit" name="submit" class="submit" value="Log in">
            </form>

            <span class="registerlink">Already an  <a href="adminlogin.php">admin?</a></span>
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
    }.loginCon .conditions{
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
        top: -7rem;
        left: 7rem;

    }
    .registerlink a{
        padding-left: 2px;
    }
</style>
   