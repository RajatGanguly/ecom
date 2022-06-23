<?php
    include("../db/config.php");
    session_start();
    if(isset($_SESSION["admin_log"])){
        if($_SESSION["admin_log"]==true){

        }
        else{
            header("Location: ./login.php");
        }
    }
    else{
        header("Location: ./login.php");
    }
    $sql_users = "SELECT * FROM `users`";
    $result_users = mysqli_query($conn, $sql_users);

    // DELETE
    if(isset($_GET["del"])){
        $del = $_GET["del"];
        $sql_delete = "DELETE FROM `users` WHERE `id`='$del'";
        $result_delete = mysqli_query($conn, $sql_delete);        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | ESUKK</title>
    <link rel="shortcut icon" href="../logo.png" />
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="./">
                        <span class="icon">
                            <!-- <ion-icon name="logo-apple"></ion-icon> -->
                            <img src="../Image/logo.svg" alt="">
                        </span>
                        <span class="title">ESUKK</span>
                    </a>
                </li>

                <li>
                    <a href="./">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="users.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="products.php">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Products</span>
                    </a>
                </li>

                <li>
                    <a href="./logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                               $sql_count = "SELECT * FROM `items`";
                               $result_count = mysqli_query($conn, $sql_count);
                               echo mysqli_num_rows($result_count);
                            ?>
                        </div>
                        <div class="cardName">Products</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                           <?php
                               $sql_count = "SELECT * FROM `users`";
                               $result_count = mysqli_query($conn, $sql_count);
                               echo mysqli_num_rows($result_count);
                            ?>
                        </div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <!-- <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div> -->

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone No</td>
                                <td>Joined</td>
                                <td>Delete</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $now = time();
                        while($row_users = mysqli_fetch_assoc($result_users)){
                            $your_date = strtotime($row_users["time"]);
                            $datediff = abs($now - $your_date)/60/60/24;
                            echo '<tr>                                
                            <td>'.$row_users["fname"].' '.$row_users["lname"].'</td>
                            <td>'.$row_users["email"].'</td>
                            <td>'.$row_users["phone"].'</td>
                            <td>'.round($datediff).' days ago</td>
                            <td><button class="btn btn-warning"><a href=./users.php?del='.$row_users["id"].'>Delete</a></button></td>
                        </tr>';
                        }
                    ?>  
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <!-- <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Members</h2>
                    </div>

                    <table>
                    
                    </table>
                </div> -->
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>