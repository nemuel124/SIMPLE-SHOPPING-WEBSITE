<!-- users.php -->
<?php
session_start();
require_once('adminconfig.php');

if (!isset($_SESSION['admin_id'])) {
    header("Location: adminlogin.php");
    exit(); // Ensure script stops execution after redirection
}

// Check if the delete button is clicked
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // Perform the delete operation
    $sql = "DELETE FROM accounts WHERE user_id = '$delete_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Redirect to the same page after deleting
        header("Location: users.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickSave FW Admin</title>
    <link rel="icon" type="image/png" href="icons/footWear.png">
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

        <div class="usersCon">
            <div class="tablecon">
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <a href="adduser.php" class="adduser">add user</a>
                        <?php
                        // Fetch and display user data
                        $sql = "SELECT * FROM accounts";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['user_username'] . "</td>";
                                echo "<td>" . $row['user_email'] . "</td>";
                                echo "<td>" . $row['user_password'] . "</td>";
                                echo "<td>
                                    <a href='update_user.php?edit_id=" . $row['user_id'] . "' class='btn-edit'>Update</a> 
                                    <a href='?delete_id=" . $row['user_id'] . "' class='btn-delete'>Delete</a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No users found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
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
    z-index: 5;

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

.usersCon{
     right: 1.5rem;
    z-index: -1;
    top: 0;
    position: absolute;
    width: 83.5%;
    height: 100%;
    display: inline-flex;
    justify-content:center;
}

 
.tablecon{
    position: relative;
    top: 10rem;
    width: 80%;
}
table {
        width: 100%;
        border-collapse: collapse;
        color: #000;
        border:1px solid black;

    }

 td {   font-size: .9em;
       padding: 2px;
        text-align:center;
        border-bottom: 1px solid #666363;
    }
    tr:hover{
        cursor:pointer;
        color:white;
        background-color:black;
    }
 

    th {
        cursor:default;
        padding: 12px;
        border-bottom: 1px solid #666363;
        color: black;
        background-color: #fffcfc;
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
        transition-duration: 0.4s;
        right: 0;
    }
    .btn-delete{
        background-color:rgb(210, 11, 11);
    }
    .adduser{
    text-decoration:none;
    text-align:center;
    color:white;
    float:right;
    padding:.5rem;
    border-radius:5px;
    border:1px solid black;
    cursor:pointer; 
    background-color: black;

}  
    .btn-edit:hover, .btn-delete:hover, .adduser:hover{
        background-color: gray;
    }



</style>
   