<?php
 include("db/header.php"); 
 ?>
<?php
if (!isset($_SESSION["id"])) {
    header("location: ./login.php");
}
$u_id = $_SESSION["id"];
$title = "";
$description = "";
$prop_type = "";
$bedroom = "";
$monthly_weekly = "";
$reg_no = "";
$make = "";
$model = "";
$milage = "";
$parts_for_vehicle = "";
$parts_name = "";
$website = "";
$youtube = "";
$price = "";
$email = "";
$phone = "";
$city = "";
$country = "";

    // RENT

    if (isset($_POST["rent_prop_type"])) {
        $title .= $_POST["rent_title"];
        $sub_cat = $_POST["optradio"];
        $description .= $_POST["rent_description"];
        // echo "Title: " . $_POST["rent_title"];
        // echo "Lodu title:  ".$title.'\n';

    if (isset($_POST["rent_prop_type"])) {
        $prop_type .= $_POST["rent_prop_type"];
    }
    if (isset($_POST["rent_bedroom"])) {
        $bedroom .= $_POST["rent_bedroom"];
    }
    if (isset($_POST["rent_youtube"])) {
        $youtube .= $_POST["rent_youtube"];
    }
    if (isset($_POST["rent_email"])) {
        $email .= $_POST["rent_email"];
    }
    if (isset($_POST["rent_phone"])) {
        $phone .= $_POST["rent_phone"];
    }
    if (isset($_POST["rent_city"])) {
        $city .= $_POST["rent_city"];
    }
    if (isset($_POST["rent_country"])) {
        $country .= $_POST["rent_country"];
    }
    if (isset($_POST["rent_monthly_weekly"])) {
        $monthly_weekly .= $_POST["rent_monthly_weekly"];
    }
    if (isset($_POST["parts_for_vehicle"])) {
        $parts_for_vehicle .= $_POST["parts_for_vehicle"];
    }
    if (isset($_POST["parts_name"])) {
        $parts_name .= $_POST["parts_name"];
    }
    if (isset($_POST["website"])) {
        $website .= $_POST["website"];
    }
    if (isset($_POST["rent_price"])) {           
        $price .= $_POST["rent_price"];
    }
}

    // SALE
    if (isset($_POST["sale_title"])) {
        $title .= $_POST["sale_title"];
        $sub_cat = $_POST["optradio"];
        $description .= $_POST["sale_description"];
        // echo "Title: " . $title;

    if (isset($_POST["sale_prop_type"])) {
        $prop_type .= $_POST["sale_prop_type"];
    }
    if (isset($_POST["sale_bedroom"])) {
        $bedroom .= $_POST["sale_bedroom"];
    }
    if (isset($_POST["sale_youtube"])) {
        $youtube .= $_POST["sale_youtube"];
    }
    if (isset($_POST["sale_email"])) {
        $email .= $_POST["sale_email"];
    }
    if (isset($_POST["sale_phone"])) {
        $phone .= $_POST["sale_phone"];
    }
    if (isset($_POST["sale_city"])) {
        $city .= $_POST["sale_city"];
    }
    if (isset($_POST["sale_country"])) {
        $country .= $_POST["sale_country"];
    }
    if (isset($_POST["sale_monthly_weekly"])) {
        $monthly_weekly .= $_POST["sale_monthly_weekly"];
    }
    if (isset($_POST["sale_website"])) {
        $website .= $_POST["sale_website"];
    }
    if (isset($_POST["sale_price"])) {           
        $price .= $_POST["sale_price"];
    }
}

    // LAND
    if (isset($_POST["land_title"])) {
        $title .= $_POST["land_title"];
        $sub_cat = $_POST["optradio"];
        $description .= $_POST["land_description"];
        // echo "Title: " . $title;

    if (isset($_POST["land_prop_type"])) {
        $prop_type .= $_POST["land_prop_type"];
    }
    if (isset($_POST["land_bedroom"])) {
        $bedroom .= $_POST["land_bedroom"];
    }
    if (isset($_POST["land_youtube"])) {
        $youtube .= $_POST["land_youtube"];
    }
    if (isset($_POST["land_email"])) {
        $email .= $_POST["land_email"];
    }
    if (isset($_POST["land_phone"])) {
        $phone .= $_POST["land_phone"];
    }
    if (isset($_POST["land_city"])) {
        $city .= $_POST["land_city"];
    }
    if (isset($_POST["land_country"])) {
        $country .= $_POST["land_country"];
    }
    if (isset($_POST["land_monthly_weekly"])) {
        $monthly_weekly .= $_POST["land_monthly_weekly"];
    }
    if (isset($_POST["land_website"])) {
        $website .= $_POST["land_website"];
    }
    if (isset($_POST["land_price"])) {           
        $price .= $_POST["land_price"];
    }
}

   // HOLIDAY
   if (isset($_POST["holiday_title"])) {
    $title .= $_POST["holiday_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["holiday_description"];
    // echo "Title: " . $title;

    if (isset($_POST["holiday_prop_type"])) {
        $prop_type .= $_POST["holiday_prop_type"];
    }
    if (isset($_POST["holiday_bedroom"])) {
        $bedroom .= $_POST["holiday_bedroom"];
    }
    if (isset($_POST["holiday_youtube"])) {
        $youtube .= $_POST["holiday_youtube"];
    }
    if (isset($_POST["holiday_email"])) {
        $email .= $_POST["holiday_email"];
    }
    if (isset($_POST["holiday_phone"])) {
        $phone .= $_POST["holiday_phone"];
    }
    if (isset($_POST["holiday_city"])) {
        $city .= $_POST["holiday_city"];
    }
    if (isset($_POST["holiday_country"])) {
        $country .= $_POST["holiday_country"];
    }
    if (isset($_POST["holiday_monthly_weekly"])) {
        $monthly_weekly .= $_POST["holiday_monthly_weekly"];
    }
    if (isset($_POST["holiday_website"])) {
        $website .= $_POST["holiday_website"];
    }
    if (isset($_POST["holiday_price"])) {           
        $price .= $_POST["holiday_price"];
    }
}

  // HOLIDAY
  if (isset($_POST["holiday_title"])) {
    $title .= $_POST["holiday_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["holiday_description"];
    // echo "Title: " . $title;

    if (isset($_POST["holiday_prop_type"])) {
        $prop_type .= $_POST["holiday_prop_type"];
    }
    if (isset($_POST["holiday_bedroom"])) {
        $bedroom .= $_POST["holiday_bedroom"];
    }
    if (isset($_POST["holiday_youtube"])) {
        $youtube .= $_POST["holiday_youtube"];
    }
    if (isset($_POST["holiday_email"])) {
        $email .= $_POST["holiday_email"];
    }
    if (isset($_POST["holiday_phone"])) {
        $phone .= $_POST["holiday_phone"];
    }
    if (isset($_POST["holiday_city"])) {
        $city .= $_POST["holiday_city"];
    }
    if (isset($_POST["holiday_country"])) {
        $country .= $_POST["holiday_country"];
    }
    if (isset($_POST["holiday_monthly_weekly"])) {
        $monthly_weekly .= $_POST["holiday_monthly_weekly"];
    }
    if (isset($_POST["holiday_website"])) {
        $website .= $_POST["holiday_website"];
    }
    if (isset($_POST["holiday_price"])) {           
        $price .= $_POST["holiday_price"];
    }
}

// VEHICLE
if (isset($_POST["vehicle_title"])) {
    $title .= $_POST["vehicle_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["vehicle_description"];
    // echo "Title: " . $title;

    if (isset($_POST["vehicle_prop_type"])) {
        $prop_type .= $_POST["vehicle_prop_type"];
    }
    if (isset($_POST["vehicle_bedroom"])) {
        $bedroom .= $_POST["vehicle_bedroom"];
    }
    if (isset($_POST["vehicle_youtube"])) {
        $youtube .= $_POST["vehicle_youtube"];
    }
    if (isset($_POST["vehicle_email"])) {
        $email .= $_POST["vehicle_email"];
    }
    if (isset($_POST["vehicle_phone"])) {
        $phone .= $_POST["vehicle_phone"];
    }
    if (isset($_POST["vehicle_city"])) {
        $city .= $_POST["vehicle_city"];
    }
    if (isset($_POST["vehicle_country"])) {
        $country .= $_POST["vehicle_country"];
    }
    if (isset($_POST["vehicle_monthly_weekly"])) {
        $monthly_weekly .= $_POST["vehicle_monthly_weekly"];
    }
    if (isset($_POST["vehicle_website"])) {
        $website .= $_POST["vehicle_website"];
    }
    if (isset($_POST["vehicle_price"])) {           
        $price .= $_POST["vehicle_price"];
    }
    if (isset($_POST["vehicle_reg_no"])) {
        $reg_no .= $_POST["vehicle_reg_no"];
    }
    if (isset($_POST["vehicle_make"])) {
        $make .= $_POST["vehicle_make"];
    }
    if (isset($_POST["vehicle_model"])) {
        $model .= $_POST["vehicle_model"];
    }
    if (isset($_POST["vehicle_milage"])) {
        $milage .= $_POST["vehicle_milage"];
    }
}

// PARTS
if (isset($_POST["parts_title"])) {
    $title .= $_POST["parts_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["parts_description"];
    // echo "Title: " . $title;

    if (isset($_POST["parts_prop_type"])) {
        $prop_type .= $_POST["parts_prop_type"];
    }
    if (isset($_POST["parts_bedroom"])) {
        $bedroom .= $_POST["parts_bedroom"];
    }
    if (isset($_POST["parts_youtube"])) {
        $youtube .= $_POST["parts_youtube"];
    }
    if (isset($_POST["parts_email"])) {
        $email .= $_POST["parts_email"];
    }
    if (isset($_POST["parts_phone"])) {
        $phone .= $_POST["parts_phone"];
    }
    if (isset($_POST["parts_city"])) {
        $city .= $_POST["parts_city"];
    }
    if (isset($_POST["parts_country"])) {
        $country .= $_POST["parts_country"];
    }
    if (isset($_POST["vehicle_monthly_weekly"])) {
        $monthly_weekly .= $_POST["vehicle_monthly_weekly"];
    }
    if (isset($_POST["parts_website"])) {
        $website .= $_POST["parts_website"];
    }
    if (isset($_POST["parts_price"])) {           
        $price .= $_POST["parts_price"];
    }
}

// CLOTHES
if (isset($_POST["clothes_title"])) {
    $title .= $_POST["clothes_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["clothes_description"];
    // echo "Title: " . $title;

    if (isset($_POST["clothes_prop_type"])) {
        $prop_type .= $_POST["clothes_prop_type"];
    }
    if (isset($_POST["clothes_bedroom"])) {
        $bedroom .= $_POST["clothes_bedroom"];
    }
    if (isset($_POST["clothes_youtube"])) {
        $youtube .= $_POST["clothes_youtube"];
    }
    if (isset($_POST["clothes_email"])) {
        $email .= $_POST["clothes_email"];
    }
    if (isset($_POST["clothes_phone"])) {
        $phone .= $_POST["clothes_phone"];
    }
    if (isset($_POST["clothes_city"])) {
        $city .= $_POST["clothes_city"];
    }
    if (isset($_POST["clothes_country"])) {
        $country .= $_POST["clothes_country"];
    }
    if (isset($_POST["clothes_website"])) {
        $website .= $_POST["clothes_website"];
    }
    if (isset($_POST["clothes_price"])) {           
        $price .= $_POST["clothes_price"];
    }
}

// ELECTRICAL
if (isset($_POST["electronics_electrical_title"])) {
    $title .= $_POST["electronics_electrical_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["electronics_electrical_description"];
    // echo "Title: " . $title;

    if (isset($_POST["electronics_electrical_prop_type"])) {
        $prop_type .= $_POST["electronics_electrical_prop_type"];
    }
    if (isset($_POST["electronics_electrical_bedroom"])) {
        $bedroom .= $_POST["electronics_electrical_bedroom"];
    }
    if (isset($_POST["electronics_electrical_youtube"])) {
        $youtube .= $_POST["electronics_electrical_youtube"];
    }
    if (isset($_POST["electronics_electrical_email"])) {
        $email .= $_POST["electronics_electrical_email"];
    }
    if (isset($_POST["electronics_electrical_phone"])) {
        $phone .= $_POST["electronics_electrical_phone"];
    }
    if (isset($_POST["electronics_electrical_city"])) {
        $city .= $_POST["electronics_electrical_city"];
    }
    if (isset($_POST["electronics_electrical_country"])) {
        $country .= $_POST["electronics_electrical_country"];
    }
    if (isset($_POST["electronics_electrical_website"])) {
        $website .= $_POST["electronics_electrical_website"];
    }
    if (isset($_POST["electronics_electrical_price"])) {           
        $price .= $_POST["electronics_electrical_price"];
    }
}
// SERVICE
if (isset($_POST["services_title"])) {
    $title .= $_POST["services_title"];
    $sub_cat = $_POST["optradio"];
    $description .= $_POST["services_description"];
    // echo "Title: " . $title;

    if (isset($_POST["services_prop_type"])) {
        $prop_type .= $_POST["services_prop_type"];
    }
    if (isset($_POST["services_bedroom"])) {
        $bedroom .= $_POST["services_bedroom"];
    }
    if (isset($_POST["services_youtube"])) {
        $youtube .= $_POST["services_youtube"];
    }
    if (isset($_POST["services_email"])) {
        $email .= $_POST["services_email"];
    }
    if (isset($_POST["services_phone"])) {
        $phone .= $_POST["services_phone"];
    }
    if (isset($_POST["services_city"])) {
        $city .= $_POST["services_city"];
    }
    if (isset($_POST["services_country"])) {
        $country .= $_POST["services_country"];
    }
    if (isset($_POST["services_website"])) {
        $website .= $_POST["services_website"];
    }
    if (isset($_POST["services_price"])) {           
        $price .= $_POST["services_price"];
    }
}


if(isset($_POST["rent_title"]) || isset($_POST["sale_title"]) || isset($_POST["holiday_title"]) || isset($_POST["land_title"]) || isset($_POST["vehicles_title"]) || isset($_POST["part_title"]) || isset($_POST["clothes_title"]) || isset($_POST["electronics_electrical_title"]) || isset($_POST["services_title"])){
    if ($sub_cat == 'rent' or $sub_cat == 'sale' or $sub_cat == 'land' or $sub_cat == 'holiday_rental') {
        $cat = "property";
    } else if ($sub_cat == 'cars' or $sub_cat == 'vans' or $sub_cat == 'trucks' or $sub_cat == 'tractors' or $sub_cat == 'motorbikes' or $sub_cat == 'parts') {
        $cat = "cars_vehicles";
    } else if ($sub_cat == 'men_clothes' or $sub_cat == 'women_clothes' or $sub_cat == 'kids_clothes' or $sub_cat == 'men_footwear' or $sub_cat == 'women_footwear' or $sub_cat == 'kids_footwear') {
        $cat = "clothes";
    } else if ($sub_cat == 'computers_softwares' or $sub_cat == 'tv_dvd' or $sub_cat == 'video_games' or $sub_cat == 'mobile_phones' or $sub_cat == 'audio_stereo' or $sub_cat == 'electrical_appliances' or $sub_cat == 'electronic_items') {
        $cat = "electronics_electrical";
    } else if ($sub_cat == 'travel_tourism' or $sub_cat == 'transport_taxis' or $sub_cat == 'tuition_classes' or $sub_cat == 'wedding_halls' or $sub_cat == 'decorations' or $sub_cat == 'furniture' or $sub_cat == 'hair_beauty' or $sub_cat == 'health_services') {
        $cat = "services";
    } else {
        $cat = "others";
    }
    $img_pre = "";
    if ($cat == "clothes" || $cat == "electronics_electrical" || $cat == "services") {
        $img_pre .= $cat;
    }
    if ($cat == "cars_vehicles") {
        if ($sub_cat == "parts") {
            $img_pre .= $sub_cat;
        } else {
            $img_pre .= $cat;
        }
    }
    if ($cat == "property") {
        $img_pre .= $sub_cat;
    }
    $image1 = $_FILES[$img_pre . "_image1"];
    $image_name1 = "./product_pics/" . $image1['name'];
    move_uploaded_file($image1['tmp_name'], $image_name1);

    $image2 = $_FILES[$img_pre . "_image2"];
    $image_name2 = "./product_pics/" . $image2['name'];
    move_uploaded_file($image2['tmp_name'], $image_name2);

    $image3 = $_FILES[$img_pre . "_image3"];
    $image_name3 = "./product_pics/" . $image3['name'];
    move_uploaded_file($image3['tmp_name'], $image_name3);

    $image4 = $_FILES[$img_pre . "_image4"];
    $image_name4 = "./product_pics/" . $image4['name'];
    move_uploaded_file($image4['tmp_name'], $image_name4);

    // echo "Testing";
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    echo $_POST["rent_title"];
    echo "city:" .$city;
    echo "title1:" .$title;
    echo "title2:" .$_POST["rent_title"];

        $sql = "INSERT INTO `items`(`p_name`, `u_id`, `description`, `image1`, `image2`, `image3`, `image4`, `category`, `youtube`, `sub_category`, `price`, `prop_type`, `email`, `phone`, `city`, `country`, `monthly_weekly`, `reg_no`, `make`, `model`, `milage`, `parts_for_vehicle`, `parts_name`, `website`) VALUES('$title','$u_id', '$description','$image_name1','$image_name2','$image_name3','$image_name4','$cat','$youtube','$sub_cat','$price','$prop_type','$email','$phone','$city','$country','$monthly_weekly','$reg_no','$make','$model','$milage','$parts_for_vehicle','$parts_name','$website')";
        $result = mysqli_query($conn, $sql);
        echo '<div class="alert alert-success" role="alert">
        Product uploaded successfully!'.$sql.'
      </div>';
    }
    // header("Location: ./");

?>




<section class="post-ad-content">
    <div class="container">
        <div class="row">
            <h3 class="title">Post an ad</h3>
            <form name="" action="<?php echo $_SERVER["PHP_SELF"]; ?>/" class="post-add-form" method="POST" enctype="multipart/form-data">
                <div class="categoty content-box">
                    <h3 class="sec-title">Category</h3>
                    <div class="secect-category">
                        <label for="posting">select category</label>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#property">Property</a></li>
                            <li><a data-toggle="tab" href="#vehicles">Cars & Vehicles</a></li>
                            <li><a data-toggle="tab" href="#clothes">Clothes</a></li>
                            <li><a data-toggle="tab" href="#electricals">Electronics & Electricals</a></li>
                            <li><a data-toggle="tab" href="#jobs">Jobs</a></li>
                            <li><a data-toggle="tab" href="#services">Services</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="property" class="tab-pane fade in active">
                                <ul class="sub-category">
                                    <li><label><input type="radio" name="optradio" value="rent" checked>Rent</label></li>
                                    <li><label><input type="radio" name="optradio" value="sale" checked>Sale</label></li>
                                    <li><label><input type="radio" name="optradio" value="land" checked>Land</label></li>
                                    <li><label><input type="radio" name="optradio" value="holiday_rental" checked>Holiday Rental</label></li>
                                </ul>
                            </div>
                            <div id="vehicles" class="tab-pane fade">
                                <ul class="sub-category">
                                    <li><label><input type="radio" name="optradio" value="cars" checked>Cars</label></li>
                                    <li><label><input type="radio" name="optradio" value="vans" checked>Vans</label></li>
                                    <li><label><input type="radio" name="optradio" value="trucks" checked>Trucks</label></li>
                                    <li><label><input type="radio" name="optradio" value="tractors" checked>Tractors</label></li>
                                    <li><label><input type="radio" name="optradio" value="motorbikes" checked>Motorbikes</label></li>
                                    <li><label><input type="radio" name="optradio" value="parts" checked>Parts</label></li>
                                </ul>
                            </div>
                            <div id="clothes" class="tab-pane fade">
                                <ul class="sub-category">
                                    <li><label><input type="radio" name="optradio" value="men_clothes" checked>Men Clothes</label></li>
                                    <li><label><input type="radio" name="optradio" value="women_clothes" checked>Women Clothes</label></li>
                                    <li><label><input type="radio" name="optradio" value="kids_clothes" checked>kids Clothes</label></li>
                                    <li><label><input type="radio" name="optradio" value="men_footwear" checked>Men footwear</label></li>
                                    <li><label><input type="radio" name="optradio" value="women_footwear" checked>Women Footwear</label></li>
                                    <li><label><input type="radio" name="optradio" value="kids_footwear" checked>kids footwear</label></li>
                                </ul>
                            </div>
                            <div id="electricals" class="tab-pane fade">
                                <ul class="sub-category">
                                    <li><label><input type="radio" name="optradio" value="computers_softwares" checked>Computers & Software</label></li>
                                    <li><label><input type="radio" name="optradio" value="tv_dvd" checked>TV & DVD players</label></li>
                                    <li><label><input type="radio" name="optradio" value="video_games" checked>Video Games</label></li>
                                    <li><label><input type="radio" name="optradio" value="mobile_phones" checked>Mobile Phones</label></li>
                                    <li><label><input type="radio" name="optradio" value="audio_stereo" checked>Audio & Stereo</label></li>
                                    <li><label><input type="radio" name="optradio" value="electrical_appliance" checked>Electrical Appliances</label></li>
                                    <li><label><input type="radio" name="optradio" value="electronic_items" checked>Electronic Items</label></li>
                                </ul>
                            </div>
                            <div id="jobs" class="tab-pane fade">

                            </div>
                            <div id="services" class="tab-pane fade">
                                <ul class="sub-category">
                                    <li><label><input type="radio" name="optradio" value="travel_tourism" checked>Travel & Tourism</label></li>
                                    <li><label><input type="radio" name="optradio" value="transport_taxis" checked>Transport & Taxis</label></li>
                                    <li><label><input type="radio" name="optradio" value="tuition_classes" checked>Tuition Classes</label></li>
                                    <li><label><input type="radio" name="optradio" value="wedding_hall" checked>Wedding Halls</label></li>
                                    <li><label><input type="radio" name="optradio" value="decorations" checked>Decorations</label></li>
                                    <li><label><input type="radio" name="optradio" value="furnitures" checked>Furniture</label></li>
                                    <li><label><input type="radio" name="optradio" value="hair_beauty" checked>Hair & Beauty</label></li>
                                    <li><label><input type="radio" name="optradio" value="health_services" checked>Health Services</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- RENT -->
                <div class="dynamic-post-ad cat-rent" style="display: none;">
                    <div class="rent">
                        <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_title">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Property Type</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Property Type </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_prop_type">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Number of Bedroom</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Number of Bedroom </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_bedroom">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="rent_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Rent</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="rent_price">
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Monthly / Weekly</h3>
                            <div class="form-group fix-w-l">
                                <select name="rent_rent_time" id="" name="rent_monthly_weekly">
                                    <option value="monthly">Monthly</option>
                                    <option value="weekly">Weekly</option>
                                </select>
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="rent_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="rent_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="rent_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="rent_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>
                        </div>

                        <div class="youtube-link">
                            <h3>Add a YouTube video link:</h3>
                            <div class="link-box"><img src="Image/youtube-icon.png">
                                <div class="form-group fix-w-l">
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_youtube">
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Email</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Email id</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="email" name="rent_email">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Phone</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Phone No</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_phone">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">City</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your city</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_city">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Country</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your country</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="rent_country">
                            </div>
                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>



                <!-- SALE -->
                <div class="dynamic-post-ad cat-sale" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_title">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Property Type</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Property Type </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_prop_type">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Number of Bedroom</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Number of Bedroom </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_bedroom">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="sale_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="sale_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="sale_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="sale_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="sale_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="sale_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>
                        </div>

                        <div class="youtube-link">
                            <h3>Add a YouTube video link:</h3>
                            <div class="link-box"><img src="Image/youtube-icon.png">
                                <div class="form-group fix-w-l">
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_youtube">
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Email</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Email id</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="email" name="sale_email">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Phone</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Phone No</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_phone">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">City</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your city</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_city">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Country</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your country</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="sale_country">
                            </div>
                        </div>



                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>



                <!-- LAND -->
                <div class="dynamic-post-ad cat-land" style="display: none;">
                    <div class="land">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="land_title">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="land_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="land_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="land_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="land_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="land_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="land_image4">
                                    </label>
                                </div>

                            </div>
                            <div class="section-text">
                                <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                            </div>
                        </div>

                        <div class="youtube-link">
                            <h3>Add a YouTube video link:</h3>
                            <div class="link-box"><img src="Image/youtube-icon.png">
                                <div class="form-group fix-w-l">
                                    <input class="form-control contactint" placeholder="" id="posting" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Email</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Email id</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="email" name="land_email">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Phone</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Phone No</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="land_phone">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">City</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your city</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="land_city">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Country</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your country</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="land_country">
                            </div>
                        </div>


                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>



                <!-- HOLIDAY RENTAL -->
                <div class="dynamic-post-ad cat-holiday" style="display: none;">
                    <div class="rent">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_title">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Property Type</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Property Type </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_prop_type">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Number of Bedroom</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Number of Bedroom </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_bedroom">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="holiday_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Rent</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="holiday_price">
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Monthly / Weekly</h3>
                            <div class="form-group fix-w-l">
                                <select name="holiday_rent_time" id="" name="holiday_monthly_weekly">
                                    <option value="monthly">Monthly</option>
                                    <option value="weekly">Weekly</option>
                                </select>
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name=holiday_rental_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name=holiday_rental_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name=holiday_rental_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name=holiday_rental_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>
                        </div>

                        <div class="youtube-link">
                            <h3>Add a YouTube video link:</h3>
                            <div class="link-box"><img src="Image/youtube-icon.png">
                                <div class="form-group fix-w-l">
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_youtube">
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Email</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Email id</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="email" name="holiday_email">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Phone</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your Phone No</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_phone">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">City</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your city</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_city">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Country</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter your country</label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="holiday_country">
                            </div>
                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>







                <!-- VEHICLES -->
                <div class="dynamic-post-ad cat-cars" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_title">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Vehicle Registration Number</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Vehicle Registration Number </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_reg_no">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Make</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Make </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_make">
                            </div>
                        </div>
                        <div class="content-box">
                            <h3 class="sec-title">Model</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Model </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_model">
                            </div>
                        </div>
                        <div class="content-box">
                            <h3 class="sec-title">Milage</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Milage </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_milage">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="vehicles_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="vehicles_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="cars_vehicles_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="cars_vehicles_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="cars_vehicles_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="cars_vehicles_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>

                            <div class="youtube-link">
                                <h3>Add a YouTube video link:</h3>
                                <div class="link-box"><img src="Image/youtube-icon.png">
                                    <div class="form-group fix-w-l">
                                        <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Email</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Email id</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="email" name="vehicles_email">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Phone</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Phone No</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_phone">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">City</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your city</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_city">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Country</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your country</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="vehicles_country">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>



                <!-- PARTS -->
                <div class="dynamic-post-ad cat-parts" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_title">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Parts for Vehicle</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Parts For Vehicle </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_for_vehicle">
                            </div>
                        </div>

                        <div class="content-box">
                            <h3 class="sec-title">Parts Name</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Parts Name </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_name">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="parts_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="parts_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="parts_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="parts_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="parts_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="parts_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>

                            <div class="youtube-link">
                                <h3>Add a YouTube video link:</h3>
                                <div class="link-box"><img src="Image/youtube-icon.png">
                                    <div class="form-group fix-w-l">
                                        <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Email</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Email id</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="email" name="parts_email">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Phone</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Phone No</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_phone">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">City</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your city</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_city">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Country</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your country</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="parts_country">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>






                <!-- CLOTHES & FOOTWARE -->
                <div class="dynamic-post-ad cat-fashion" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="clothes_title">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="clothes_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="clothes_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="clothes_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="clothes_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="clothes_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="clothes_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>

                            <div class="youtube-link">
                                <h3>Add a YouTube video link:</h3>
                                <div class="link-box"><img src="Image/youtube-icon.png">
                                    <div class="form-group fix-w-l">
                                        <input class="form-control contactint" placeholder="" id="posting" type="text" name="clothes_youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Email</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Email id</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="email" name="clothes_email">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Phone</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Phone No</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="clothes_phone">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">City</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your city</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="clothes_city">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Country</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your country</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="clothes_country">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>





                <!-- ELECTRICAL & ELECTRONICS -->
                <div class="dynamic-post-ad cat-clectronics" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="electronics_electrical_title">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="electronics_electrical_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Price you want</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Price: </label>
                                <input class="form-control contactint" placeholder="£" id="posting" type="text" name="electronics_electrical_price">
                            </div>
                        </div>

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="electronics_electrical_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="electronics_electrical_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="electronics_electrical_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="electronics_electrical_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>

                            <div class="youtube-link">
                                <h3>Add a YouTube video link:</h3>
                                <div class="link-box"><img src="Image/youtube-icon.png">
                                    <div class="form-group fix-w-l">
                                        <input class="form-control contactint" placeholder="" id="posting" type="text" name="electronics_electrical_youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Email</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Email id</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="email" name="electronics_electrical_email">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Phone</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Phone No</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="electronics_electrical_phone">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">City</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your city</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="electronics_electrical_city">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Country</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your country</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="electronics_electrical_country">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>





                <!-- SERVICE     -->
                <div class="dynamic-post-ad cat-service" style="display: none;">
                    <div class="sale">
                    <div class="content-box">
                            <h3 class="sec-title">Ad Title</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter Title </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_title">
                            </div>
                        </div>

                        <div class="description content-box">
                            <h3 class="sec-title">Description</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Enter product description</label>
                                <textarea class="form-control" rows="5" id="comment" name="services_description"></textarea>
                                <p>10000 characters remaining (12 words minimum).</p>
                                <p>Enter as much information possible; ads with detailed and longer descriptions get more views and replies!</p>
                            </div>
                        </div>

                        <div class="price content-box">
                            <h3 class="sec-title">Website Link</h3>
                            <div class="form-group fix-w-l">
                                <label for="posting">Website Link </label>
                                <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_website">
                            </div>
                        </div>
                        <!-- <div class="price content-box">
                                <h3 class="sec-title">Price you want</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Price: </label>
                                    <input class="form-control contactint" placeholder="£" id="posting" type="text" name="services_price">
                                </div>
                            </div> -->

                        <div class="images content-box">
                            <h3 class="sec-title">Images</h3>
                            <div class="upload-image">
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="services_image1">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="services_image2">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="services_image3">
                                    </label>
                                </div>
                                <div class="imgUp">
                                    <div class="imagePreview"></div>
                                    <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="services_image4">
                                    </label>
                                </div>
                                <div class="section-text">
                                    <p>Upload as many clear images as possible; this will get your ad more views and replies!</p>
                                </div>

                            </div>

                            <div class="youtube-link">
                                <h3>Add a YouTube video link:</h3>
                                <div class="link-box"><img src="Image/youtube-icon.png">
                                    <div class="form-group fix-w-l">
                                        <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Email</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Email id</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="email" name="services_email">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Phone</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your Phone No</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_phone">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">City</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your city</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_city">
                                </div>
                            </div>

                            <div class="content-box">
                                <h3 class="sec-title">Country</h3>
                                <div class="form-group fix-w-l">
                                    <label for="posting">Enter your country</label>
                                    <input class="form-control contactint" placeholder="" id="posting" type="text" name="services_country">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="submit-btn"><button type="submit" class="btn btn-primary">Submit your product</button></div>
                        </div>

                    </div>
                </div>



            </form>

        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://basabdash.in/esukk/demo/dynamic_post_ad.js"></script>




<?php include("db/footer.php"); ?>