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
    $sql_users = "SELECT * FROM `users` LIMIT 10";
    $result_users = mysqli_query($conn, $sql_users);

    $sql_items = "SELECT * FROM `items` LIMIT 10";
    $result_items = mysqli_query($conn, $sql_items);
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

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>-->

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li> -->

                <li>
                    <a href="products.php">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Products</span>
                    </a>
                </li>

                <!--<li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li> -->

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

                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->

                <!-- <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div> -->
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
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Time</td>
                            </tr>
                        </thead>

                        <!-- <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>₹1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>₹110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>₹1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>₹620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>₹1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>₹110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>₹1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>₹620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>-->
                        <tbody>
                            <?php
                            $now = time();
                            while($row_items = mysqli_fetch_assoc($result_items)){
                                $your_date = strtotime($row_items["time"]);
                                $datediff = abs($now - $your_date)/60/60/24;
                                echo '<tr>                                
                                <td>'.$row_items["p_name"].'</td>
                                <td>₹ '.$row_items["price"].'</td>
                                <td>'.$row_items["category"].'</td>
                                <td>'.round($datediff).'</td>
                            </tr>';
                            }
                            ?>   
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Members</h2>
                    </div>

                    <table>
                        <!-- <h4>'.$row["fname"].' '.$row["lname"].' <br></h4> -->
                       <?php
                           while($row = mysqli_fetch_assoc($result_users)){
                               echo '<tr>
                               <td width="60px">
                                
                               </td>
                               <td>
                                   <h4>'.$row["fname"].' '.$row["lname"].' <br> <span>'.$row["email"].'</span></h4>
                               </td>
                           </tr>';
                           }
                       ?>       
                       <!--<div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>           -->
                    </table>
                </div>
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