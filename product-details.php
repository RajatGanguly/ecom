<?php
if (isset($_GET["pid"])) {
  $pid = $_GET["pid"];
  include("./db/config.php");
  $sql = "SELECT * FROM `items` WHERE id=$pid";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $now = time();
  $your_date = strtotime($row["time"]);
   $datediff = abs($now - $your_date)/60/60/24;
}
?>


<?php include("db/header.php");?>

  <section class="catalog-product-view">
    <div class="container">
      <div class="row">
        <div class="breadcrumbs">
          <ul class="items">
            <li class="item"><a href="./">Home</a></li>
            <li class="item"><strong><?php echo $row['p_name']; ?></strong></li>
          </ul>
        </div>
      </div>
      <div class="row maincontent">
        <div class="col-md-6">
          <div class="product-image-box">
            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
              <img src="<?php echo $row['image1']; ?>" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">2 / 3</div>
              <img src="<?php echo $row['image2']; ?>" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">3 / 3</div>
              <img src="<?php echo $row['image3']; ?>" style="width:100%">
            </div>
            <a class="prev" onClick="plusSlides(-1)">❮</a>
            <a class="next" onClick="plusSlides(1)">❯</a>
            <div class="caption-container">
              <p id="caption"></p>
            </div>
            <a href="#" class="favorited"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
            <div class="row thumb-img">
              <div class="column">
                <img class="demo cursor" src="<?php echo $row['image1']; ?>" style="width:100%" onClick="currentSlide(1)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo $row['image2']; ?>" style="width:100%" onClick="currentSlide(2)" alt="">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo $row['image3']; ?>" style="width:100%" onClick="currentSlide(3)" alt="">
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="product-details">
            <h2 class="product-name"><?php echo $row['p_name']; ?></h2>
            <p class="product-des"><?php echo $row['description']; ?></p>
            <div class="locate">
              <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['sub_category']; ?></span>
              <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo round($datediff);?> days ago</span>
            </div>
            <div class="qnty-cart">
              <div class="cart-box"><a href="./contact-us.php?pid=<?php echo $pid; ?>"><button class="add-to-cart">contact us</button></a></div>
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
       
      </div>
    </div>
  </section>

 <?php include("db/footer.php");?>