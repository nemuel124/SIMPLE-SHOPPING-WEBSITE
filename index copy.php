<?php
    session_start();

    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icons/footWear.png">

    <title>QuickSave FW</title>
    <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="navSticky">
        <a href="index.html"><img class="logo" src="icons/footWear.png"></a>
        <div class="navigation">
            <ul class="navList">
            <li class="homepageNav"><a href="#homepage">Home</a></li>
            <li class="Products"><a href="#Products">Products</a></li>
            <li class="About"><a href="#About">About</a></li>
            
        </ul>
        </div>
    </div>
    <!-- Navigation-->


        <div class="homepage">
            
            <span class="WelcomePage">Welcome,<br>
            
            <?php
    require_once('config.php');
     
        $userId = $_SESSION['id'];
        $sql = "SELECT username FROM accounts WHERE id = '$userId'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            $userData = mysqli_fetch_assoc($query);
            $username = $userData['username'];
            
            echo $username."!";
        }
?>
            </span>
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
           
              <div class="userInfo">
                <i class="userInfoicon fa-regular fa-user">
                <span class="userInfoName">
                    <?php
                    require_once('config.php');
                     
                        $userId = $_SESSION['id'];
                        $sql = "SELECT username FROM accounts WHERE id = '$userId'";
                        $query = mysqli_query($conn, $sql);
                        
                        if($query){
                            $userData = mysqli_fetch_assoc($query);
                            $username = $userData['username'];
                            
                            echo $username;
                        }
                ?>
               </span>
            </i>
                <span class="userInfosettings">
                    <i class="fa-solid fa-gear"></i>
                    <a class="userInfologout" href="logout.php">Log out</a>
                    <a class="userInfosettingOpt">Settings</a>
                    <a class="userInfoMeOpt">My info</a>
                </span>
            </div>
        


        </div>  
        <!-- HomePage-->
     
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
  <!-- About-->


<div class="addedAnimation">
    <i class="fa-solid fa-cart-shopping"></i>
</div>
    <div class="productsContainer">
        <div class="productMargin">
      <?php 
        include('prodsect.php');
      ?>


    <div class="showCart">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
    <span class="cartName">Cart</span>

    <div class="cart">
        <span class="userName">
        <?php
    require_once('config.php');
     
        $userId = $_SESSION['id'];
        $sql = "SELECT username FROM accounts WHERE id = '$userId'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            $userData = mysqli_fetch_assoc($query);
            $username = $userData['username'];
            
            echo $username;
        }
?>
        </span>
        <i class="icon fa-regular fa-user"></i>
        <span class="settings">
            <i class="fa-solid fa-gear"></i>
            <a class="logout" href="logout.php">Log out</a>
            <a class="settingOpt">Settings</a>
            <a class="MeOpt">My info</a>
        </span>
        <span class="Header">Cart</span>
        <span class="CartText">Cart is Empty at the moment.</span>
        
        <div class="itemadded1">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 21</span>
                    <span class="infoModel">Model : 2023</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash1 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>


        <div class="itemadded2">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 22</span>
                    <span class="infoModel">Model : 2022</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash2 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>



        <div class="itemadded3">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 23</span>
                    <span class="infoModel">Model : 2023</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash3 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>



        <div class="itemadded4">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 24</span>
                    <span class="infoModel">Model : 2024</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash4 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>



        <div class="itemadded5">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 25</span>
                    <span class="infoModel">Model : 2024</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash5 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>



        <div class="itemadded6">
            <div class="iteminfo">
                <div class="iteminfos">
                    <span class="Information">Information</span>
                    <span class="infoName">AirMaxx 26</span>
                    <span class="infoModel">Model : 2024</span>
                    <span class="infoSize">Size : 43</span>
                </div>

                <div class="itemPrice">
                    <span class="Price">Price :</span>
                    <span class="priceTag">P5,999</span>
                    <button class="placeOrder">Place Order</button>
                    <i class="trash trash6 fa-solid fa-trash"></i>
                </div>

            </div>
            <input type="checkbox">
            <img src="icons/pngegg.png">
        </div>


    </div>
    <!-- Cart-->




    </div>
    </div>



    </div>
    <!-- Container-->
 
</body>
</html>
<script src="script.js"></script>
<style>
    .cart .userName{
  position: absolute;
  font-size:1em;
 

  background:linear-gradient(90deg,white,#a6a6a6);
  padding: .5rem;
  padding-right:.8rem;
  padding-left: 1.2rem;
  margin-left:55%;
  margin-top:5px;
  border-radius: 25px;
  cursor: pointer;
  z-index: 5;
}

.item1price .Pname{
  position: absolute;
  font-size: 1em;
  font-family: "Aleo", serif;
  text-align: center;
  background-color: #a6a6a6;
  margin-left: 1px;
  width: 8.3rem;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 25px;
}
</style>