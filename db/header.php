<!DOCTYPE html>
<html lang="en">

   <?php
    session_start();
    include("./db/config.php");
    if(($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["email"]) && isset($_POST['password']))){
           $email=$_POST['email'];
           $password=$_POST['password'];
           $hash=password_hash($password, PASSWORD_DEFAULT);
           $sql_insert="SELECT * FROM `users` WHERE `email`='$email'";
   
           $result=mysqli_query($conn, $sql_insert);
           $num=mysqli_num_rows($result);
           if($num == 1){
   
               while($row=mysqli_fetch_assoc($result)){
                   if(password_verify($password, $row['password'])){
   
                       $login=true;
                       $_SESSION['loggedin']=true;
                       $_SESSION['username']=$email;
                       $_SESSION['id']=$row["id"];
                       
                    //    header('location: ./');
                   }
                   else{
                       $showerror='Invalid credentials...';
                   }
               }
   
   
               
           }
           else{
               $showerror='Invalid credentials...';
           }
   
           
       }
   ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Esukk</title>
    <link rel="icon" href="<?php echo $website; ?>/images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="<?php echo $website; ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo $website; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $website; ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $website; ?>/css/owl.theme.default.css" />
    <link rel="stylesheet" href="<?php echo $website; ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo $website; ?>/css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo $website; ?>/css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logo.png" />

</head>

<body>
    <section class="section-header">
        <div class="header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"><a class="logo" href="<?php echo $website; ?>"><img src="<?php echo $website; ?>/Image/logo.png" alt="" /></a></div>
                    <div class="col-sm-8">
                        <div class="header-search">
                            <form onSubmit="event.preventDefault()" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="eg. BMW 3 series, 3 seater sofa, lawnmower, dining table">
                                
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 right-box">
                        <div class="header-right">
                           <?php
                               $post_href="./login.php";
                               if(isset($_SESSION["loggedin"])){
                                   if($_SESSION["loggedin"]==true){
                                       $post_href="./post-ad.php";
                                }
                            }
                           ?>
                            <div class="post-ad">
                                <a href="<?php echo $post_href; ?>"><i class="fa fa-thumb-tack" aria-hidden="true"></i> <span>Post ad</span></a>
                            </div>
                           <?php
                                $show_login_btn = '';
                                if(isset($_SESSION["loggedin"])){
                                    if($_SESSION["loggedin"]==true){
                                        $show_login_btn = 'style="display: none;"';
                                    }
                                }
                           ?>
                          <?php
                              if($show_login_btn=='style="display: none;"'){
                                 ?>
                                 <div class="login" >
                                <button class="Show"><i class="fa fa-user" aria-hidden="true"></i> <span>My Account</span></button>
                                <div id="register-box">
                                    <button class="Hide">Hide</button>
                                    <h3>Welcome to Esukk</h3>
                                     <p><a href="./dashboard.php"><i class="fa fa-user" aria-hidden="true"></i> <span>My Items</span></a></p>
                                    <p><a href="./logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a></p>
                                    
                                </div>
                            </div>
                                 <?php //echo '<div class="login"><a href="./logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a></div>';
                              }
                          ?>
                            <div class="login" <?php echo $show_login_btn; ?>>
                                <button class="Show"><i class="fa fa-user" aria-hidden="true"></i> <span>Login/Register</span></button>
                                <div id="register-box">
                                    <button class="Hide">Hide</button>
                                    <h3>Welcome to Esukk</h3>
                                    <p>Register Now</p>
                                    <div class="register-form">
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="wp">
                                            <!-- <div class="form-group fix-w-l">
                                                <label for="fname">First Name</label>
                                                <input class="form-control contactint" placeholder="First Name" id="fname" type="text">
                                            </div>
                                            <div class="form-group fix-w-l">
                                                <label for="mname">Middle Name</label>
                                                <input class="form-control contactint" placeholder="Middle Name" id="name" type="text">
                                            </div>
                                            <div class="form-group fix-w-r">
                                                <label for="sname">Surname Name</label>
                                                <input class="form-control contactint" placeholder="Surname Name" id="lnamme" type="text">
                                            </div> -->
                                            <div class="form-group fix-w-l">
                                                <label for="email">Email</label>
                                                <input class="form-control contactint" placeholder="Email" id="email" type="text" name="email">
                                            </div>
                                            <div class="form-group fix-w-l">
                                                <label for="password">Password</label>
                                                <input class="form-control contactint" placeholder="Password" id="password" type="password" name="password">
                                            </div>
                                            <!-- <div class="form-group fix-w-r">
                                                <label for="phone">Contact number</label>
                                                <input class="form-control contactint" placeholder="Contact no" id="phone" type="text">
                                            </div>
                                            <div class="form-group check fix-w-r">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I am a human</label>
                                            </div> -->
                                            <div class="btn-submit">
                                                <input value="Submit" type="submit">
                                            </div>
                                            <div class="div">
                                                <h3><a href="./signup.php">Have no account? Sign Up</a></h3>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="menubg">
                <div class="container">
                    <div class="header-menu">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar-menu" aria-controls="Navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="Navbar-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'].'?category=property'; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Property</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="row no-gutters Property">
                                                <div class="col-md-12">
                                                    <h6 class="title">Properties</h6>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=rent'; ?>">Rent</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=sale'; ?>">Sale</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=land'; ?>">Land</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=holiday_rental'; ?>">Holiday Rental</a></li>
                                                        <!-- <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=rent'; ?>">Holiday Rental</a></li> -->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'] . '?category=cars_vehicles'; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cars & Vehicles</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="row no-gutters car">
                                                <div class="col-md-12">
                                                    <h6 class="title">Cars & Vehicles</h6>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=cars'; ?>">Cars</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=vans'; ?>">Vans</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=trucks'; ?>">Trucks</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tractors'; ?>">Tractors</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=motorbikes'; ?>">Motorbikes</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=parts'; ?>">Parts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'] . '?category=clothes'; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clothes</a>
                                        <div class="dropdown-menu dropdown-menu2" aria-labelledby="navbarDropdown">
                                            <div class="row no-gutters Sale">
                                                <div class="col-lg-12">
                                                    <h6 class="title">Clothes & Footwears</h6>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=men_clothes'; ?>">Men Clothes</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=women_clothes'; ?>">Women Clothes</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=kids_clothes'; ?>">kids Clothes</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=men_footwear'; ?>">Men footwear</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=women_footwear'; ?>">Women Footwear</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=kids_footwear'; ?>">kids footwear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'] . '?category=electronics_electricals'; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics & Electricals</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="row no-gutters community">
                                                <div class="col-md-12">
                                                    <h6 class="title">Electronics & Electricals</h6>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=computers_softwares'; ?>">Computers & Software</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tv_dvd'; ?>">TV & DVD players</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=video_games'; ?>">Video Games</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=mobile_phones'; ?>">Mobile Phones</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=audio_stereo'; ?>">Audio & Stereo</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=electrical_appliances'; ?>">Electrical Appliances</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=electronic_items'; ?>">Electronic Items </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Jobs</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'] . '?category=services'; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="row no-gutters services">
                                                <div class="col-md-12">
                                                    <h6 class="title">Services</h6>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=travel_tourism'; ?>">Travel & Tourism</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=transport_taxis'; ?>">Transport & Taxis</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tution_classes'; ?>">Tuition Classes</a></li>


                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=wedding_halls'; ?>">Wedding Halls</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=decorations'; ?>">Decorations</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=furnitures'; ?>">Furniture’s</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=hair_beauty'; ?>">Hair & Beauty</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=health_services'; ?>">Health Services</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Other Selling Items</a></li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>