<?php
include("db/config.php");
$sql = "SELECT * FROM `items` WHERE 1";
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    // if($_GET['category']=='category')
    $sql .= " and category= '$category' ";
}
if (isset($_GET['sub_category'])) {
    $sub_category = $_GET['sub_category'];
    // if($_GET['category']=='category')
    $sql .= " and sub_category= '$sub_category' ";
}
// echo $sql;
$result = mysqli_query($conn, $sql);

if (isset($_GET["reg_submit"])) {
    echo $_GET["reg_submit"];
    $u_fname = $_GET['fname'];
    $u_mname = $_GET['mname'];
    $u_lname = $_GET['lname'];
    $u_email = $_GET['email'];
    $u_phone = $_GET['phone'];
    $u_password = $_GET['password'];
    $sql_reg = "INSERT INTO `users`(`fname`,`mname`,`lname`,`email`,`password`,`phone`) VALUES('$u_fname','$u_mname','$u_lname','$u_email','$u_password','$u_phone')";
    echo $sql_reg;
    $result_reg = mysqli_query($conn, $sql_reg);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Esukk</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <section class="section-header">
        <div class="header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"><a class="logo" href="./"><img src="Image/logo.svg" alt="" /></a></div>
                    <div class="col-sm-8">
                        <div class="header-search">
                            <form onSubmit="event.preventDefault()" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="eg. BMW 3 series, 3 seater sofa, lawnmower, dining table">
                                <input class="form-control mr-sm-2 location" type="text" placeholder="Add your postcode or location">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 right-box">
                        <div class="header-right">
                            <div class="post-ad">
                                <a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i> <span>Post ad</span></a>
                            </div>
                            <div class="login">
                                <button class="Show"><i class="fa fa-user" aria-hidden="true"></i> <span>Login/Ragister</span></button>
                                <div id="register-box">
                                    <button class="Hide">Hide</button>
                                    <h3>Welcome to Esukk</h3>
                                    <p>Register Now</p>
                                    <div class="register-form">
                                        <form action="" class="wp">
                                            <div class="form-group fix-w-l">
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
                                            </div>
                                            <div class="form-group fix-w-l">
                                                <label for="email">Email</label>
                                                <input class="form-control contactint" placeholder="Email" id="email" type="text">
                                            </div>
                                            <div class="form-group fix-w-l">
                                                <label for="password">Password</label>
                                                <input class="form-control contactint" placeholder="Password" id="password" type="password">
                                            </div>
                                            <div class="form-group fix-w-r">
                                                <label for="phone">Contact number</label>
                                                <input class="form-control contactint" placeholder="Contact no" id="phone" type="text">
                                            </div>
                                            <div class="form-group check fix-w-r">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I am a human</label>
                                            </div>
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
                                                    <h6 class="title">Property</h6>
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
                                                    <h6 class="title">Clothes</h6>
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
                                                    <h6 class="title">Electronics & Electrical</h6>
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
                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Selling Items</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">How It Works</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="products">
        <div class="sec-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="sec-title">Discover more Good Finds</h5>
                    </div>
                </div>
                
               <?php
                    $k = 0;
                   while($row = mysqli_fetch_assoc($result)){
                    if($k%4==0){
                        echo '<div class="product-boxes row">';
                    }
                    echo '<div class="col-md-3">
                    <div class="inner-content" data-aos="fade-right">
                        <div class="product-image"><a href="./product-details.php?pid='.$row["id"].'" target="_blank""><img src="Image/'.$row["image"].'" alt="img" /></a></div>
                        <div class="pro-details-box">
                            <a href="./product-details.php?pid='.$row["id"].'" target="_blank"" class="product-name">'.$row["p_name"].'</a>
                            <span class="des">Private Date available 01 Apr 2022</span>
                            <span class="price">₹'.$row["price"].'</span>
                            <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>'.$row["location"].'</span>
                            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>13 days ago</span>
                            <a href="./product-details.php?pid='.$row["id"].'" target="_blank"" class="favorited"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>';
                if($k%4==0){
                    echo '</div">';
                }
                $k = $k+1;
                   }
               ?>

                



            </div>
        </div>
    </section>

    <section class="work">
        <div class="container">
            <div class="row">
                <h5 class="sec-title">How it works</h5>
                <ul class="nav nav-tabs">
                    <li class="active"><a class="active" data-toggle="tab" href="#buying">Buying</a></li>
                    <li><a data-toggle="tab" href="#selling">Selling</a></li>
                </ul>

                <div class="tab-content">
                    <div id="buying" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image1.png" alt="img" /></div>
                                <h5 class="title">1. Search our adverts</h5>
                                <p class="details">Search through over five hundred categories to find what you're looking for.</p>
                            </div>

                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image2.png" alt="img" /></div>
                                <h5 class="title">2. Talk to a seller</h5>
                                <p class="details">Speak directly to the seller to confirm a price and make arrangements for collection or delivery.</p>
                            </div>

                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image3.png" alt="img" /></div>
                                <h5 class="title">3. Enjoy your purchase</h5>
                                <p class="details">Receive your delivery or collect your item and enjoy your purchase!</p>
                            </div>
                        </div>
                    </div>
                    <div id="selling" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image4.png" alt="img" /></div>
                                <h5 class="title">1. Place an advert</h5>
                                <p class="details">Follow our simple guide to place a great advert!</p>
                            </div>

                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image5.png" alt="img" /></div>
                                <h5 class="title">2. Chat to buyers</h5>
                                <p class="details">Keep an eye on your messages and reply to interested buyers.</p>
                            </div>

                            <div class="col-md-4">
                                <div class="img-box"><img src="Image/image6.png" alt="img" /></div>
                                <h5 class="title">3. Arrange your sale</h5>
                                <p class="details">Once a price has been agreed, make arrangements with the buyer for collection or delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-search">
        <div class="uk-search">
            <div class="searches">
                <h5 class="sec-title">Top searches in the UK</h5>
                <ul>
                    <li class="title">Community</li>
                    <li class="item"> <a href="#">Keyboard player</a></li>
                    <li class="item"> <a href="#">Football teams looking for players</a></li>
                    <li class="item"> <a href="#">Football</a></li>
                    <li class="item"> <a href="#">Wanted</a></li>
                    <li class="item"> <a href="#">Bands</a></li>
                </ul>

                <ul>
                    <li class="title">For Sale</li>
                    <li class="item"> <a href="#">Free</a></li>
                    <li class="item"> <a href="#">Sofa</a></li>
                    <li class="item"> <a href="#">For for sale</a></li>
                    <li class="item"> <a href="#">Garden</a></li>
                    <li class="item"> <a href="#">Chair</a></li>
                </ul>

                <ul>
                    <li class="title">Jobs</li>
                    <li class="item"> <a href="#">Jobs</a></li>
                    <li class="item"> <a href="#">Part time jobs</a></li>
                    <li class="item"> <a href="#">Immediate start</a></li>
                    <li class="item"> <a href="#">Live in</a></li>
                </ul>

                <ul>
                    <li class="title">Motors</li>
                    <li class="item"> <a href="#">Cars</a></li>
                    <li class="item"> <a href="#">Mercedes-Benz A-Class</a></li>
                    <li class="item"> <a href="#">BMW 1 Series</a></li>
                    <li class="item"> <a href="#">Land Rover Defender</a></li>
                    <li class="item"> <a href="#">VW Campervan</a></li>
                </ul>

                <ul>
                    <li class="title">Pets</li>
                    <li class="item"> <a href="#">Kittens</a></li>
                    <li class="item"> <a href="#">Puppies</a></li>
                    <li class="item"> <a href="#">Dog</a></li>
                    <li class="item"> <a href="#">Cat</a></li>
                    <li class="item"> <a href="#">French bulldog</a></li>
                </ul>

                <ul>
                    <li class="title">Property</li>
                    <li class="item"> <a href="#">Private house to rent</a></li>
                    <li class="item"> <a href="#">Room to rent</a></li>
                    <li class="item"> <a href="#">House to rent</a></li>
                    <li class="item"> <a href="#">Room</a></li>
                    <li class="item"> <a href="#">Rent</a></li>
                </ul>

                <ul>
                    <li class="title">Services</li>
                    <li class="item"> <a href="#">Massage</a></li>
                    <li class="item"> <a href="#">Full body massage</a></li>
                    <li class="item"> <a href="#">Chinese massage</a></li>
                    <li class="item"> <a href="#">Massage for massage</a></li>
                    <li class="item"> <a href="#">Thai massage</a></li>
                </ul>

            </div>
        </div>
    </section>


    <section class="footer">
        <div class="container">
            <div class="row top-footer">
                <div class="col-md-4">
                    <h6 class="footer-title">About Us</h6>
                    <ul class="footer-links">
                        <li class="item"><a href="#">About Gumtree</a></li>
                        <li class="item"><a href="#">Advertise With Us</a></li>
                        <li class="item"><a href="#">Careers</a></li>
                        <li class="item"><a href="#">Media</a></li>
                        <li class="item"><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="footer-title">Help & Contact</h6>
                    <ul class="footer-links">
                        <li class="item"><a href="#">FAQs</a></li>
                        <li class="item"><a href="#">Safety</a></li>
                        <li class="item"><a href="#">Policies</a></li>
                        <li class="item"><a href="#">Contact Us</a></li>
                        <li class="item"><a href="#">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="footer-title">More From Us</h6>
                    <ul class="footer-links">
                        <li class="item"><a href="#">Car Guides</a></li>
                        <li class="item"><a href="#">Gumtree Life</a></li>
                        <li class="item"><a href="#">Car Price Index</a></li>
                        <li class="item"><a href="#">Sell My Car</a></li>
                        <li class="item"><a href="#">Upcycle Revolution</a></li>
                        <li class="item"><a href="#">Popular Searches</a></li>
                    </ul>
                </div>

            </div>
            <div class="row copyright">
                <p class="copyright">© Copyright 2022 esukk.com. All rights reserved.</p>
                <ul class="btm-footer-links">
                    <li><a href="#">Terms of Use, </a></li>
                    <li><a href="#">Privacy Notice,</a></li>
                    <li><a href="#">Privacy Settings, </a></li>
                    <li><a href="#">Modern Slavery Statement &
                    <li><a href="#">Cookies Policy</li></a>
                </ul>
            </div>

        </div>
    </section>

</body>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/aos.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>

</html>