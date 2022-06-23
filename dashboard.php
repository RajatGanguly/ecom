<?php
session_start();
include("./db/config.php");
if (!isset($_SESSION["loggedin"])) {
    header("location: ./");
}
$id = $_SESSION["id"];
$sql_user = "SELECT * FROM `users` WHERE `id`='$id'";
$result_user = mysqli_query($conn, $sql_user);
$row = mysqli_fetch_assoc($result_user);

$sql_items = "SELECT * FROM `items` WHERE `u_id`=$id";
$result_items = mysqli_query($conn, $sql_items);
$total = mysqli_num_rows($result_items);


// DELETE

if(isset($_GET["del"])){
    $del = $_GET["del"];
    $sql_del = "DELETE FROM `items` WHERE `id`='$del'";
    $result_del = mysqli_query($conn,$sql_del);
    header("location: ./dashboard.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<?php
$now = time();
$your_date = strtotime($row["time"]);
$datediff = abs($now - $your_date) / 60 / 60 / 24;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/user.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="Image/user.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?php echo $row["fname"] . ' ' . $row["lname"]; ?>
                        </div>
                        <div class="profile-usertitle-job">
                            <?php echo 'Joined ' . round($datediff) . ' days ago'; ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <!-- <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Overview </a>
                            </li>
                            <li>
                                <a href="https://codepen.io/jasondavis/pen/jVRwaG?editors=1000">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Account Settings </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Tasks </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Help </a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- END MENU -->

                    <div class="portlet light bordered">
                        <!-- STAT -->
                        <div class="row list-separated profile-stat">
                            <!-- <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="uppercase profile-stat-title"> 37 </div>
                                <div class="uppercase profile-stat-text"> Projects </div>
                            </div> -->
                            <!-- <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="uppercase profile-stat-title"> 51 </div>
                                <div class="uppercase profile-stat-text"> Tasks </div>
                            </div> -->
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="uppercase profile-stat-title"> <?php echo $total; ?> </div>
                                <div class="uppercase profile-stat-text"> Uploads </div>
                            </div>
                        </div>
                        <!-- END STAT -->
                        <div>
                            <h4 class="profile-desc-title">Hello <?php echo $row["fname"]; ?></h4>
                            <!-- <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span> -->
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-mail"></i>
                                <p><b>Email: </b><?php echo $row["email"]; ?></p>
                            </div>
                            <!-- <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-mail"></i>
                                <p><b>Phone: </b><?php echo $row["phone"]; ?></p>
                            </div> -->
                        </div>
                    </div>
                    <div class="profile-userbuttons">
                        <!-- <button type="button" class="btn btn-success btn-sm">Follow</button> -->
                        <button type="button" class="btn btn-danger btn-sm"><a href="./">Home</a></button>
                    </div>



                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <section>
                        <div class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <style>
                                        tr td{
                                            font-size: 20px;
                                        }
                                    </style>
                                   <?php
                                        $k = 1;
                                       while($row = mysqli_fetch_assoc($result_items)){
                                           echo "<tr>
                                            <td>".$k."</td>
                                            <td>".$row['p_name']."</td>
                                            <td>".strtoupper(str_replace("_"," ",$row['category']))."</td>
                                            <td><a href='./edit-post.php?id=".$row['id']."&cat=".$row["sub_category"]."' target='_blank'><button class='btn btn-warning'>Edit</button></a></td>
                                            <td><a href='./dashboard.php?del=".$row['id']."'><button class='btn btn-danger'>Remove</button></a></td>
                                           </tr>";
                                           $k++;
                                       }
                                   ?>
                                <tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>