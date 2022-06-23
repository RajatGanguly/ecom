<?php
// session_start();
include("db/config.php");
$sql = "SELECT * FROM `items` WHERE 1";
$headline = "Discover More Good Finds";
$displayn="";
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    // if($_GET['category']=='category')
    $sql .= " and category= '$category' ";
    $headline = "Result for: ".$category;
    $displayn="style='display:none'";
    $ct=$category;
}
if (isset($_GET['sub_category'])) {
    $sub_category = $_GET['sub_category'];
    // if($_GET['category']=='category')
    $sql .= " and sub_category= '$sub_category' ";
    $headline = "Result for: ".$sub_category;
    $displayn="style='display:none'";
    $ct=$sub_category;
}
// echo $sql;
$result = mysqli_query($conn, $sql);

if(isset($_POST["email"]) and isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql_login = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result_login = mysqli_query($conn, $sql_login);

    if (!$result_login || mysqli_num_rows($result_login) > 0) {

        $row_login = mysqli_fetch_assoc($result_login);

        $_SESSION['user_name'] = $row_login['fname'];
        $_SESSION['id'] = $row_login['id'];
        $_SESSION['loggedin'] = true;

        // header("Location: ./");

    }
}

?>
<?php include("db/header.php");?>




<section class="catic" <?php echo $displayn;?>>
        <div class="sec-products">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="product-boxes row">
                

<div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=sale'; ?>"><img src="Image/housesale.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=sale'; ?>" class="cat-name">Properties for Sale</a>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=rent'; ?>"><img src="Image/houserent.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=rent'; ?>" class="cat-name">Properties for rent</a>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=cars'; ?>"><img src="Image/cars.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=cars'; ?>" class="cat-name">Cars</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=women_clothes'; ?>"><img src="Image/womencloth.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=women_clothes'; ?>" class="cat-name">Women Clothes</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=men_clothes'; ?>"><img src="Image/mencloth.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=men_clothes'; ?>" class="cat-name">Men Clothes</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=kids_clothes'; ?>"><img src="Image/kidswear.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=kids_clothes'; ?>" class="cat-name">Kids Clothes</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=computers_softwares'; ?>"><img src="Image/computers.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=computers_softwares'; ?>" class="cat-name">Computers</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=mobile_phones'; ?>"><img src="Image/mobiles.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=mobile_phones'; ?>" class="cat-name">Mobiles</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tv_dvd'; ?>"><img src="Image/tv.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tv_dvd'; ?>" class="cat-name">TV</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=travel_tourism'; ?>"><img src="Image/travel.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=travel_tourism'; ?>" class="cat-name">Travel & Tourism</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=furnitures'; ?>"><img src="Image/furniture.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=furnitures'; ?>" class="cat-name">Furnitures</a>
                            
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="cat-content aos-init aos-animate" data-aos="fade-right">
                        <div class="cat-image"><a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tution_classes'; ?>"><img src="Image/class.jpg" alt="img"></a></div>
                        <div class="cat-details-box">
                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?sub_category=tution_classes'; ?>" class="cat-name">Tuition Classes</a>
                            
                           
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div></section>

    <section class="products">
        <div class="sec-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="sec-title"><?php echo str_replace("_"," ",$headline); ?></h5>
                    </div>
                </div>
                <?php
				echo '<div class="product-boxes row">';
                    $k = 0;
                    $now = time();
                   while($row = mysqli_fetch_assoc($result)){
                       $your_date = strtotime($row["time"]);
                       $datediff = abs($now - $your_date)/60/60/24;
					   $k = $k+1;
                    if($k%4==0){
                        
                    }
                    echo '<div class="col-md-3">
                    <div class="inner-content" data-aos="fade-right">
                        <div class="product-image"><a href="./product-details.php?pid='.$row["id"].'" ><img src="'.$row["image1"].'" alt="img" /></a></div>
                        <div class="pro-details-box">
                            <a href="./product-details.php?pid='.$row["id"].'"  class="product-name">'.$row["p_name"].'</a>
                            <span class="time">'.round($datediff).' days ago</span>
							<span class="price">'. $row["sub_category"].'</span>
                            
                        </div>
                    </div>
                </div>';
                if($k%4==0){
                    //echo '</div">';
					echo "<div class='clearfix'>&nbsp;</div>";
                }
                
                   }
				
				echo '</div">';
               ?>

                



            </div>
        </div>
    </section>

    

    <?php include("db/footer.php");?>
	


  