<?php
    session_start();

    require_once('adminconfig.php');

    if(!isset($_SESSION['admin_id'])){
        header("Location: adminlogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="icons/footWear.png">
    <title>QuickSave FW Admin</title>
    <link rel="stylesheet" href="adminsy.css">
     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
</head>
<body>
    <div class="mainCon">
    <span class="Head">QuickSave
        <span class="fw">FW</span></span>

        <i class="showbtn fa-solid fa-angle-right"></i>
    <div class="sideNavs">
        <div class="userCon">
        <i class="fa-regular fa-user"></i>
        <div class="userName">
            <span>
      
            <?php
    require_once('adminconfig.php');
     
        $adminId = $_SESSION['admin_id'];
        $sql = "SELECT admin_username FROM adminaccount WHERE admin_id = '$adminId'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            $admin_userData = mysqli_fetch_assoc($query);
            $admin_username = $admin_userData['admin_username'];
            
            echo $admin_username;
        }
?>

            </span>
        </div>
    </div>
        <ul>
            <a href="index.php"><li>Dashboard</li></a>
            <a href="Orders.php"><li>Orders</li></a>
            <a href="users.php"><li>Users</li></a>
            <a href="Products.php"><li>Product</li></a>
            <a href="adminsignout.php"><li>Sign out</li></a>
        </ul>
    </div>


    <div class="dashboard">
        <h2>DASHBOARD</h2>

        <div class="Orders">
            <span class="totalorder">Total Order :</span>
            <span class="ordercount">0</span>
           
        </div>

    <div class="CompletedOrders">
        <span class="totalcomplete">Products :</span>
        <span class="completedcount">
        <?php
                require_once('adminconfig.php');

                $sql = "SELECT * FROM products";
                $query = mysqli_query($conn,$sql);

                if($total=mysqli_num_rows($query)){
                    echo $total;
                }else{
                    echo $total;
                }
                ?>

        </span>
       

    </div>

    
    <div class="Users">
        <span class="totaluser">Total Users :</span>
        <span class="usercount">
            <?php
                require_once('adminconfig.php');

                $sql = "SELECT * FROM accounts";
                $query = mysqli_query($conn,$sql);

                if($total=mysqli_num_rows($query)){
                    echo $total;
                }else{
                    echo $total;
                }

?>
        </span>
        
    </div>

    <?php

                include('producttable.php');

?>

    </div>
    <!--DashBoard-->
</div>
<!--Main Container-->
</body>
</html>
<script src="admin.js"></script>
<style>



body{
    background:rgba(215, 215, 215, 0.912);
    color: white;
    font-family: serif;
    display: inline-flex;
    overflow-y: hidden;
    overflow-x: hidden;
    
}



.mainCon{
    position: inherit;
    display:inline-block;

}
.Head{
    position: absolute;
    top: .5rem;
    right: 1rem;
    padding: 0.5rem;
    font-size: 1.5em;
    font-weight: 600;
    color: black;
}
.fw{
    color: red;
}

.sideNavs{
    position: absolute;
    top: 0;
    left: -7px;
    height: 150vh;
    width: 16rem;
    background-color:  rgb(17, 17, 243);
   border-radius: 10px;
   box-shadow: 3px 3px 5px 2px rgba(0, 0, 0, 0.86);
   display: block;


   animation-name: none;
   animation-duration: 400ms;
   animation-iteration-count: 1;
}


.sideNavs a{
    text-decoration: none;
    color: white;
}
@keyframes toRight{
0%{opacity: 0;
    transform: translateX(-40rem);
}
50%{
    opacity: 0.5;
    transform: translateX(0rem);
}
100%{
    opacity: 1;
    transform: translateX(0rem);
}
}

@keyframes toLeft{
    0%{
        transform: translateX(0rem);
    }50%{
        transform: translateX(-40rem);
    }100%{
        transform: translateX(0rem);
    }
    
    }

.userCon{
    top: 0rem;
    position: absolute;
    box-shadow: 0px 2px 5px 2px black;
    width: 100%;
    height: 10rem;
    border-radius: 10px;
}
.userCon i{
    border: 2px solid;
    color: white;
    position: absolute;
    top: 2rem;
    left: 6rem;
    font-size: 2em;
    background-color: black;
    padding: 1rem;
   padding-left: 18.5px; 
    border-radius: 50px;
    width: 2rem;
}
.sideNavs span{
    position: relative;
    top: 7rem;
    left: 5rem;
}
.sideNavs ul{
    position: relative;
    top: 10rem;
    left: 2rem;
    border-radius: 25px;
   
}
.showbtn{
    position: absolute;
    color: rgb(191, 191, 197);
    top: .4rem;
    padding: .2rem;
    left: 16rem;
    font-size: 2em;
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.445);
    border-top-right-radius:55px;
    border-bottom-right-radius:55px;
    padding-top: 22rem;
    padding-bottom:21rem ;
    display: none;

    transition: padding 350ms ease-in-out;
    z-index: 19;


    animation-name: none;
    animation-duration: 400ms;
    animation-iteration-count: 1;   
}

@keyframes toLeftbtn{
    0%{
        left: 16.5rem;
    }50%{
        left: 0rem;
        
    }100%{
        left: 0rem;

    }
    
    }
    @keyframes toRightbtn{
        0%{
            left: 0rem;
        }50%{
            left: 0rem;
            
        }100%{
            left: 16.5rem;
    
        }
        
        }
.showbtn:hover{
    color: black;
    padding-left: 1rem;
    padding-right: .5rem;
    background-color: rgba(62, 59, 59, 0.445);
    
}
.sideNavs li{
    list-style: none;
    padding: 1rem;
    margin-top: 2rem;
    font-size: 1.1em;
    cursor: pointer;

    transition: all 150ms ease-in-out;
    
    transition: padding 350ms ease-in-out;


}.sideNavs li:hover{
    color: #000;
    background:rgb(215, 215, 215);
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    padding-left: 3rem;
    transition: padding 350ms ease-in-out;

}

.dashboard{   
    right: 8rem;
    z-index: -1;
    top: 0;
    position: absolute;
    width: 83.5%;
    height: 100%;
    display: inline-flex;
    padding-top:5rem;
    
}
.dashboard h2{
    position: relative;
    left:20%;
    top:-6rem;
    color:black;

}
.dashboard .Users,.Orders,.CompletedOrders{
    position: relative;
    border-radius: 25px;
    top: -2rem;
    box-shadow: 2px 1px 2px 1px black;
    width: 20rem;
    height: 13rem;
    margin-left: 6rem;
}
.dashboard .Orders{
    background: linear-gradient(120deg,black,white);
}.dashboard .Users,.CompletedOrders{
    background:rgb(32, 31, 31);
}
.dashboard .totalorder,.totaluser,.totalcomplete {
    position: relative;
    margin: 1rem;
    top: 1rem;
    font-size: 1.5em;

}


.usercount,.ordercount,.completedcount{
    top: 4rem;
    left: 9rem;
    position: absolute;
    background: transparent;
    width: 2rem;
    outline: none;
    border: 0;
    font-size: 6em;
    z-index: 1;
  

}





.QuickAccess{
    border: 1px solid black;
    right: 1.5rem;
    z-index: -1;
    top: 20rem;
    border-radius: 25px;
    position: absolute;
    width: 90.5%;
    height: 25rem;
    display: inline-flex;

}.QuickAccess h2{
    position: absolute;
    color: white;
    background-color: black;
    width: 97.5%;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    margin-top:0;
    height: 2rem;
    padding: 1rem;
    font-size: 1.5em;
    top: 0;

}



.tablecon{
    position: relative;
    top: 4rem;
    width: 100%;
}
table {
        width: 100%;
        border-collapse: collapse;
        color: #000;
    }

 td {   font-size: .9em;
       padding: 2px;
       padding-left:10px;
       text-align:center;

        border-bottom: 1px solid #666363;
    }
   
    th:nth-child(1):hover{
        background-color:white;
    } th:nth-child(2):hover{
        background-color:white;
    }
   
    th:nth-child(3), th:nth-child(4){
        width: 4rem;
        position: relative;
        padding-left: 2rem;
    }

    th {

        padding: 12px;
        text-align:center;
        border-bottom: 1px solid #666363;
        color: black;
        background-color: #fffcfc;
    }th:hover{
        background-color: #000;
    }

   
    .btn-edit, .btn-delete {
        position: relative;
        padding: 10px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 2px 2px;
        margin-left: 1.5rem;
        transition-duration: 0.4s;
        right: 0;
    }
    .btn-delete{
        background-color:rgb(210, 11, 11);
    }
    .btn-edit:hover, .btn-delete:hover {
        background-color: black;
    }

  



</style>
   