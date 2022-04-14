/*$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 100){
      $(".nav").addClass("sticky-header");
    }else{
      $(".nav").removeClass("sticky-header");
    }
  });
});*/
jQuery(function($) {
  if ($(window).width() > 1199) {
    $('.navbar .navbar-nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .navbar-nav li.dropdown > a').click(function() {
      location.href = this.href;
    });

  }
});

$(document).ready(function() {
  $('.navbar-nav .nav-item.dropdown').append('<a href="" class="dropdown-toggle cutomedrop" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chevron-down"></i></a>');
});
// Animation Start
AOS.init({
        easing: 'ease-in-out-sine'
});
$('#banner-content').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      dots:true,
      autoplay:true,
      autoplayTimeout:6000,
      smartSpeed :500,
      //autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }

});

$( ".owl-prev").html('<i class="fas fa-long-arrow-alt-left"></i>');
 $( ".owl-next").html('<i class="fas fa-long-arrow-alt-right"></i>');
 
 $(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
 
$('#articles-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      dots: false,
      autoplay:true,
      autoplayTimeout:6000,
      smartSpeed :500,
      //autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
});

$('.Show').click(function() {
    $('#register-box').show(500);
    $('.Hide').show(0);
});
$('.Hide').click(function() {
    $('#register-box').hide(500);
    $('.Show').show(0);
    $('.Hide').hide(0);
});
$('.toggle').click(function() {
    $('#register-box').toggle('slow');
});






$(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
// 	to remove card
  $(this).parent().remove();
// to clear image
  // $(this).parent().find('.imagePreview').css("background-image","url('')");
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});






$(".increment-quantity,.decrement-quantity").on("click", function(ev) {
  var currentQty = $('input[name="quantity"]').val();
  var qtyDirection = $(this).data("direction");
  var newQty = 0;
  
  if (qtyDirection == "1") {
    newQty = parseInt(currentQty) + 1;
  }
  else if (qtyDirection == "-1") {
    newQty = parseInt(currentQty) - 1;
  }

  // make decrement disabled at 1
  if (newQty == 1) {
    $(".decrement-quantity").attr("disabled", "disabled");
  }
  
  // remove disabled attribute on subtract
  if (newQty > 1) {
    $(".decrement-quantity").removeAttr("disabled");
  }
  
  if (newQty > 0) {
    newQty = newQty.toString();
    $('input[name="quantity"]').val(newQty);
  }
  else {
    $('input[name="quantity"]').val("1");
  }
});


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}





  
