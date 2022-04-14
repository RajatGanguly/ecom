<?php
  if (isset($_GET["pid"])){
    $pid = $_GET["pid"];
    include ("./db/config.php");
    $sql = "SELECT * FROM `items` WHERE id=$pid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Esukk</title>

    <link rel="icon" href="images/favicon.png" type="image/x-icon"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/owl.theme.default.css"/>

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

<div class="col-sm-2"><a  class="logo" href="http://basabdash.in/esukk/index.html"><img src="Image/logo.svg" alt="" /></a></div>

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

</form>

</div>

</div>

</div>

</div>

</div>

</div>





</div>

	<div class="menubg"><div class="container"><div class="header-menu">

<nav class="navbar navbar-expand-lg navbar-light">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar-menu" aria-controls="Navbar-menu" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>



<div class="collapse navbar-collapse" id="Navbar-menu">

<ul class="navbar-nav">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Property</a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown">

<div class="row no-gutters Property">

<div class="col-md-12">

<h6 class="title">Property</h6>

<ul>

<li><a class="dropdown-item" href="#">Rent</a></li>

<li><a class="dropdown-item" href="#">Sale</a></li>

<li><a class="dropdown-item" href="#">Land</a></li>

<li><a class="dropdown-item" href="#">Holiday Rental</a></li>

<li><a class="dropdown-item" href="#">Holiday Rental</a></li>

</ul>



</div>

</div>

</div>

</li>



<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

Cars & Vehicles</a>


<div class="dropdown-menu" aria-labelledby="navbarDropdown">

<div class="row no-gutters car">

<div class="col-md-12">

<h6 class="title">Cars & Vehicles</h6>

<ul>

<li><a class="dropdown-item" href="#">Cars</a></li>

<li><a class="dropdown-item" href="#">Vans</a></li>

<li><a class="dropdown-item" href="#">Trucks</a></li>

<li><a class="dropdown-item" href="#">Tractors</a></li>

<li><a class="dropdown-item" href="#">Motorbikes</a></li>

<li><a class="dropdown-item" href="#">Parts</a></li>

</ul>

</div>

</div>

</div>

</li>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clothes</a>

<div class="dropdown-menu dropdown-menu2" aria-labelledby="navbarDropdown">

<div class="row no-gutters Sale">

<div class="col-lg-12">

<h6 class="title">Clothes</h6>

<ul>

<li><a class="dropdown-item" href="#">Men Clothes</a></li>

<li><a class="dropdown-item" href="#">Women Clothes</a></li>

<li><a class="dropdown-item" href="#">kids Clothes</a></li>

<li><a class="dropdown-item" href="#">Men footwear</a></li>

<li><a class="dropdown-item" href="#">Women Footwear</a></li>

<li><a class="dropdown-item" href="#">kids footwear</a></li>

</ul>

</div>

</div>

</li>



<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics & Electricals</a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown">

<div class="row no-gutters community">

<div class="col-md-12">

<h6 class="title">Electronics & Electrical</h6>

<ul>

<li><a class="dropdown-item" href="#">Computers & Software</a></li>

<li><a class="dropdown-item" href="#">TV & DVD players</a></li>

<li><a class="dropdown-item" href="#">Video Games</a></li>

<li><a class="dropdown-item" href="#">Mobile Phones</a></li>

<li><a class="dropdown-item" href="#">Audio & Stereo</a></li>

<li><a class="dropdown-item" href="#">Electrical Appliances</a></li>

<li><a class="dropdown-item" href="#">Electronic Items </a></li>

</ul>

</div>

</div>

</div>

</li>



<li class="nav-item"><a class="nav-link" href="contact-us.html">Jobs</a></li>



<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown">

<div class="row no-gutters services">

<div class="col-md-12">

<h6 class="title">Services</h6>

<ul>

<li><a class="dropdown-item" href="#">Travel & Tourism</a></li>

<li><a class="dropdown-item" href="#">Transport & Taxis</a></li>

<li><a class="dropdown-item" href="#">Tuition Classes</a></li>





<li><a class="dropdown-item" href="#">Wedding Halls</a></li>

<li><a class="dropdown-item" href="#">Decorations</a></li>

<li><a class="dropdown-item" href="#">Furniture’s</a></li>

<li><a class="dropdown-item" href="#">Hair & Beauty</a></li>

<li><a class="dropdown-item" href="#">Health Services</a></li>

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

</div> </div></div>

</div>

</section>

<section class="catalog-product-view">
<div class="container">
<div class="row">
<div class="breadcrumbs">
<ul class="items">
<li class="item"><a href="http://basabdash.in/esukk/index.html">Home</a></li>
<li class="item"><strong><?php echo $row['p_name']; ?></strong></li>
</ul>
</div>
</div>
<div class="row maincontent">
<div class="col-md-6">
<div class="product-image-box">
<div class="mySlides">
<div class="numbertext">1 / 3</div>
<img src="Image/produtc-img-1.JPG" style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">2 / 3</div>
<img src="Image/produtc-img-2.JPG" style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">3 / 3</div>
<img src="Image/produtc-img-3.JPG" style="width:100%">
</div>
<a class="prev" onClick="plusSlides(-1)">❮</a>
<a class="next" onClick="plusSlides(1)">❯</a>
<div class="caption-container">
<p id="caption"></p>
</div>
<a href="#" class="favorited"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
<div class="row thumb-img">
<div class="column">
<img class="demo cursor" src="Image/produtc-img-1.JPG" style="width:100%" onClick="currentSlide(1)" alt="">
</div>
<div class="column">
<img class="demo cursor" src="Image/produtc-img-2.JPG" style="width:100%" onClick="currentSlide(2)" alt="">
</div>
<div class="column">
<img class="demo cursor" src="Image/produtc-img-3.JPG" style="width:100%" onClick="currentSlide(3)" alt="">
</div>
</div>

</div>
</div>
<div class="col-md-6">
<div class="product-details">
<h2 class="product-name"><?php echo $row['p_name']; ?></h2>
<p class="product-des"><?php echo $row['description']; ?></p>
<div class="locate">
<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Otley</span>
<span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>13 days ago</span>
</div>
<div class="qnty-cart">
<div class="cart-box"><button class="add-to-cart">contact us</button></div>
</div>
<div class="share">
<h6>Share:</h6>
<ul class="social-share">
<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
</ul>
</div>

</div>
</div>
</div>

<div class="row">
<div class="category-tab">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#description" class="active">Description</a></li>
<li><a data-toggle="tab" href="#moreinfo">More Info</a></li>
</ul>
<div class="tab-content">
    <div id="description" class="tab-pane fade in active">
      <h3>Description</h3>
      <p>Newham Way, large family house with 5 bedrooms, 3 bathrooms to let, open plan kitchen, rear garden, front parking for 2 cars, close to all amenities, also 5 minutes from M11. Landlord looking for a family FOR A LONG TERM TEMNANCY. ONLY FAMILIES, NO company let or agents please.</p>
    </div>
    <div id="moreinfo" class="tab-pane fade">
      <table style="width:100%">
  <tr>
    <th>Posted</th>
    <th>Seller Type</th>
    <th>Date Available</th>
	<th>Property Type</th>
    <th>Number Of Bedrooms</th>
  </tr>
  <tr>
    <td>13 days ago</td>
    <td>Private</td>
    <td>28 Mar 2022</td>
	<td>House</td>
    <td>5</td>
  </tr>
</table>
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
<div  class="row top-footer">
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
<li><a href="#">Terms of Use, </a></li><li><a href="#">Privacy Notice,</a></li> <li><a href="#">Privacy Settings, </a></li><li><a href="#">Modern Slavery Statement & <li><a href="#">Cookies Policy</li></a>
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
