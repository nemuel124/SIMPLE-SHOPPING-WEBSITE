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


        <div class="loginContainer" id="loginContainer">
            <span class="welcomelogin">Welcome</span>
            <img src="icons/Untitled design.png">

            <form action="login.php" method="POST">

                <?php

                if (isset($_POST['submit'])) {
                    $user_email = $_POST['user_email'];
                    $user_password = $_POST['user_password'];

                    $sql = "SELECT * FROM accounts WHERE user_email = '$user_email'";
                    $query = mysqli_query($conn, $sql);
                    $check_row = mysqli_num_rows($query);


                    if ($check_row == 1) {
                        $row = mysqli_fetch_assoc($query);
                        if ($user_password) {

                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['user_email'] = $row['user_email'];
                            header("Location: index.php");
                        } else {
                            echo '<script>
                            alert("Incorrect password!");
                        </script>';
                        }
                    } else {
                        echo '<script>
                            alert("Email not found!");
                        </script>';
                    }
                }
                ?>
                <input type="email" placeholder="Email" name="user_email" required>
                <i class="icon fa-regular fa-envelope"></i>

                <input type="password" placeholder="Enter password" name="user_password" id="password" required>
                <i id="togglePassword" class="icon fa fa-lock"></i>
                <input type="checkbox">Remember me?</input>

                <span class="forgotpass">Forgot<a href="forgot.html">password?</a></span>
                <input type="submit" value="LOG IN" name="submit">


                <a href="register.php"><button type="button" class="signupOption">Sign up</button></a>

            </form>
        </div>


        <div class="aboutconBorder">
            <div class="aboutContainer">
                <div class="groupAbout">
                    <span> We are a group aims to
                        develop some kind of
                        online shop for certain
                        footwears.</span>

                    <button class="aboutbtn"> About us</button>

                </div>
                <div class="contactContainer">
                    <span class="contactno">Contact no.</span>
                    <span class="contactNum">09** *** ***</span>

                    <span class="EmailAdd">Email Address</span>
                    <span class="Email">nem***@gmail.com</span>

                    <span class="Fb">Facebook Page</span>
                    <span class="fbpage">Nem** Urf***</span>
                </div>

            </div>
        </div>

        <div class="addedAnimation">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>



        <div class="productsContainer">
            <div class="productMargin">
                <div class="item1con">
                    <div class="item1">
                        <span>Stock : 5</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 21</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2023</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P5,999</span>
                        <button>Add to cart</button>
                    </div>
                </div>


                <div class="item2con">
                    <div class="item1">
                        <span>Stock : 3</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 22</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2023</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P4,999</span>
                        <button>Add to cart</button>
                    </div>
                </div>

                <div class="item3con">
                    <div class="item1">
                        <span>Stock : 6</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 23</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2023</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P4,999</span>
                        <button>Add to cart</button>
                    </div>
                </div>

                <div class="item4con">
                    <div class="item1">
                        <span>Stock : 6</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 24</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2024</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P4,599</span>
                        <button>Add to cart</button>
                    </div>
                </div>



                <div class="item5con">
                    <div class="item1">
                        <span>Stock : 6</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 25</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2024</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P4,899</span>
                        <button>Add to cart</button>
                    </div>
                </div>


                <div class="item6con">
                    <div class="item1">
                        <span>Stock : 6</span>
                        <img src="icons/pngegg.png">
                    </div>
                    <div class="item1price">
                        <span class="Pname">AirMaxx 26</span>
                        <span class="Pdate">Model date :</span>
                        <span class="Pdateval">2024</span>
                        <span class="Pprice">Best Price :</span>
                        <span class="Ppriceval">P4,699</span>
                        <button>Add to cart</button>
                    </div>
                </div>


                <div class="showCart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <span class="cartName">Cart</span>

                <div class="cart">
                    <div class="cartloginContainer">
                        <span class="welcomelogin">Welcome</span>
                        <img src="icons/Untitled design.png">
                        <form action="login.php" method="POST">
                            <input type="email" placeholder="Email" name="user_email" required>
                            <i class="cartloginicon fa-regular fa-envelope"></i>
                            <input type="password" placeholder="Enter password" name="user_password" id="passwordcart" required>
                            <i id="togglePasswordcart" class="cartloginicon fa fa-lock"></i>

                            <input type="checkbox">Remember me?</input>
                            <span class="forgotpass">Forgot<a href="forgot.html">password?</a></span>
                            <input type="submit" value="LOG IN" name="submit">
                            <button type="button" class="signupOption" onclick="CartSignup()">Sign up</button>

                        </form>
                    </div>
                </div>





            </div>
        </div>






    </div>
    <!-- Container-->


</body>

</html>
<script src="loginscript.js"></script>
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


    let togglePasswordcart = document.getElementById("togglePasswordcart");
    let passwordInputcart = document.getElementById("passwordcart");

    togglePasswordcart.addEventListener("click", function() {
        if (passwordInputcart.type === "password") {
            passwordInputcart.type = "text";
            togglePasswordcart.classList.remove("fa-lock");
            togglePasswordcart.classList.add("fa-lock-open");
        } else {
            passwordInputcart.type = "password";
            togglePasswordcart.classList.remove("fa-lock-open");
            togglePasswordcart.classList.add("fa-lock");
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
</style>