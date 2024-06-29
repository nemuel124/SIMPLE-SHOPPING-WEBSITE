



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
        <div class="loginbtnContainer">
            <button class="btnLogin">
                Log in</button>
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

        <div class="shoePlay2">
            <img src="icons/pngegg.png">
          </div> 
        <div class="loginContainer" id="loginContainer"> 
            <i class="closebutton fa-solid fa-x"></i>
            <span class="welcomelogin">Welcome</span>
            <img src="icons/Untitled design.png">
            <form action="connection.php" method="POST">
                <input type="email" placeholder="Email" name="email" required>
                <i class="icon fa-regular fa-envelope"></i>
                <input type="password" placeholder="Enter password" name="password" required>
                <i class="icon fa-solid fa-lock"></i>
                <input type="checkbox">Remember me?</input>
                <span class="forgotpass">Forgot<a href="forgot.html">password?</a></span>
                <input type="submit" value="LOG IN" name="submit">
                <button type="button" class="signupOption" onclick="Signup()">Sign up</button>
               
            </form>
        </div>

        <div class="signupContainer">
            <i class="closebutton fa-solid fa-x"></i>
            <span class="welcomelogin">Sign Up</span>
            <img src="icons/Untitled design.png">
        
            <form action="login.php" method="POST">



                <input type="email" placeholder="Create email" name="email" required>
                <i class="icon fa-regular fa-envelope"></i>
                <input type="username" placeholder="Create username" name="username" required>
                <i class="icon fa-solid fa-user"></i>
                <input type="password" placeholder="Create password" name="password" required>
                <i class="icon fa-solid fa-unlock"></i>
                <input type="password" placeholder="Confirm password" name="cpassword" required>
                <i class="icon fa-solid fa-unlock"></i>
                <input type="checkbox"> Terms & Conditions</input>
                <a href="#" onclick="alreadyAcc()">Already have an account?</a>
                <input type="Submit" value="Sign Up" id="signupSubmit" name="signupSubmit">
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
            <form action="connection.php" method="POST">
                <input type="email" placeholder="Email" name="email" required>
                <i class="cartloginicon fa-regular fa-envelope"></i>
                <input type="password" placeholder="Enter password" name="password" required>
                <i class="cartloginicon fa-solid fa-lock"></i>
                <input type="checkbox">Remember me?</input>
                <span class="forgotpass">Forgot<a href="forgot.html">password?</a></span>
                <input type="submit" value="LOG IN" name="submit">
                <button type="button" class="signupOption" onclick="CartSignup()">Sign up</button>
               
            </form>
        </div>

        <div class="cartsignupContainer">
         
            <span class="welcomelogin">Sign Up</span>
            <img src="icons/Untitled design.png">
           
            <form action="login.php" method="POST">
                
                <input type="email" placeholder="Create email" name="email" required>
                <i class="cartsignupicon fa-regular fa-envelope"></i>
                <input type="username" placeholder="Create username" name="username" required>
                <i class="cartsignupicon fa-solid fa-user"></i>
                <input type="password" placeholder="Create password" name="password" required>
                <i class="cartsignupicon fa-solid fa-unlock"></i>
                <input type="password" placeholder="Confirm password" name="cpassword" required>
                <i class="cartsignupicon fa-solid fa-unlock"></i>
                <input type="checkbox"> Terms & Conditions</input>
                <a href="#" onclick="cartalreadyAcc()">Already have an account?</a>
                <input type="Submit" value="Sign Up" name="submit">
            </form>

        </div>
    </div>





    </div>
    </div>






    </div>
    <!-- Container-->


</body>
</html>
<script src="login.js"></script>