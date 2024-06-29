<?php
session_start();

require_once('config.php');

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icons/footWear.png">
    <title>QuickSave FW</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>

<body>
    <div class="Navigator">
        <i class="fa-solid fa-angle-right"></i>
    </div>

    <div class="container">
        <div class="navSticky">
            <img class="logo" src="icons/footWear.png">
            <div class="navigation">
                <ul class="navList">
                    <li class="homepageNav"><a href="#homepage">Home</a></li>
                    <li class="Products"><a href="#Products">Products</a></li>
                    <li class="About"><a href="#About">About</a></li>
                </ul>
            </div>
        </div>
        <div class="homepage">
            <h1 class="quicksave">QuickSave</h1>
            <h1 class="foot">Foot<span class="wear">Wear</span></h1>

            <button class="shopBtn">
                <a href="#loginContainer">
                    Shop Now
                </a>
            </button>

            <div class="shoePlay">
                <img src="icons/pngegg.png">
            </div>

        </div>
        <div class="signupContainer">
            <span class="welcomelogin">Sign Up</span>
            <img src="icons/Untitled design.png">

            <form action="register.php" method="POST">
                <?php
                if (isset($_POST['submit'])) {
                    $user_email = $_POST['user_email'];
                    $user_username = $_POST['user_username'];
                    $user_password = $_POST['user_password'];
                    $cpassword = $_POST['cpassword'];



                    $sql = "SELECT * FROM accounts WHERE user_email = '$user_email'";
                    $query = mysqli_query($conn, $sql);
                    $check_row = mysqli_num_rows($query);

                    if ($check_row > 0) {
                        echo '<script>
                                alert("Email already exists!");
                            </script>';
                    }
                    else if($user_password != $cpassword) {
                        echo '<script>
                           alert("Password does not match!");
                            </script>';
                        die();
                    } else {

                        $sql = "INSERT INTO accounts (user_username, user_email, user_password) VALUES ('$user_username', '$user_email', '$user_password');";
                        $query = mysqli_query($conn, $sql);

                        if ($query) {
                            echo '<script>
                                alert("Successfully registered!");
                            </script>';
                            echo '<script>window.location.href = "login.php";</script>';
                        }
                    }
                }

                ?>

                <input type="username" placeholder="Create username (max of 15 characters) " minlength="12" name="user_username" maxlength="15" required>
                <i class="icon fa-solid fa-user"></i>
                <input type="email" placeholder="Create email" name="user_email" required>
                <i class="icon fa-regular fa-envelope"></i>
                <input type="password" placeholder="Create password" name="user_password" id="password" required>
                <i id="togglePassword" class="icon fa-solid fa-unlock"></i>
                <input type="password" placeholder="Confirm password" name="cpassword" id="cpassword" required>
                <i class="lock icon fa-solid fa-unlock" id="lock"></i>


                <input type="checkbox" required> Terms & Conditions</input>
                <a href="login.php">Already have an account?</a>
                <input type="submit" value="Register" id="signupSubmit" name="submit">
            </form>

        </div>






    </div>
    <!-- Container-->


</body>

</html>
<script src="registerscript.js"></script>
<script defer>
    let togglePassword = document.getElementById("togglePassword");
    let passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePassword.classList.remove("fa-lock");
            togglePassword.classList.add("fa-lock-open");
        } else {
            passwordInput.type = "password";
            togglePassword.classList.remove("fa-lock-open");
            togglePassword.classList.add("fa-lock");
        }
    });

    let lock = document.getElementById("lock");
    let cpassword = document.getElementById("cpassword");

    lock.addEventListener("click", function() {
        if (cpassword.type === "password") {
            cpassword.type = "text";
            lock.classList.remove("fa-lock");
            lock.classList.add("fa-lock-open");
        } else {
            cpassword.type = "password";
            lock.classList.remove("fa-lock-open");
            lock.classList.add("fa-lock");
        }
    });
</script>
<style>
    i {
        cursor: pointer;
    }

    .container {
        top: 12%;
        position: absolute;
        transform: scale(110%);
        width: clamp(85%, 50%, 20%);
    }

    .signupContainer {
        transition: transform 350ms ease-in-out;
    }
</style>