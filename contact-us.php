<?php
    if (isset($_GET["pid"])) {
        $pid = $_GET["pid"];
        include("./db/config.php");
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
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        .contact-form .first-container {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("<?php echo $row['image1']; ?>") center center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-logo{
            width: 12vw;
        }
        @media(max-width: 757px){
            .contact-logo{
                width: 36vw;
            }
        }
    </style>

</head>

<body>
    <section class="contact-body">
        <div class="contact-form">
            <div class="first-container">
                <div class="info-container">
                <div class="col-sm-2"><a class="logo" href="./"><img class="contact-logo" src="logo.png" alt="" /></a></div>
                    <div><img class="icon" />
                        <h3>Product Name</h3>
                        <p><?php echo $row["p_name"]; ?></p>
                    </div>
                    <div><img class="icon" />
                        <h3>Product Location</h3>
                        <p><?php echo $row['location']; ?></p>
                    </div>
                    <!--<div> <img class="icon" />-->
                    <!--    <h3>Price</h3>-->
                    <!--    <p>₹ <?php echo $row['price']; ?></p>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="second-container">
                <h2>Send Us A Message</h2>
                <form>
                    <div class="form-group">
                        <label for="name-input">Tell us your name*</label>
                        <input id="name-input" type="text" placeholder="First name" required="required" />
                        <input type="text" placeholder="Last name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email-input">Enter your email*</label>
                        <input id="email-input" type="text" placeholder="Eg. example@email.com" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="phone-input">Enter phone number*</label>
                        <input id="phone-input" type="text" placeholder="Eg. +1 800 000000" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="message-textarea">Message</label>
                        <textarea id="message-textarea" placeholder="Write us a message"></textarea>
                    </div>
                    <button>Send message</button>
                </form>
            </div>
        </div>
    </section>