$(document).ready(function(){
    alert("hi")
    $(".sub-category li label input").click(function(){
        let cat = $(this).val();
        console.log(cat)
        if(cat == "rent"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-rent").css("display","block");
        }
        if(cat == "sale"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-sale").css("display","block");
        }
        if(cat == "land"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-land").css("display","block");
        }
        if(cat == "holiday_rental"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-holiday").css("display","block");
        }
        
        
        if(cat == "cars" || cat == "vans" || cat == "trucks" || cat == "tractors" || cat == "motorbikes"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-cars").css("display","block");
        }
        if(cat == "parts"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-parts").css("display","block");
        }


        if(cat == "men_clothes" || cat == "women_clothes" || cat == "kids_clothes" || cat == "men_footwear" || cat == "women_footwear" || cat == "kids_footwear"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-fashion").css("display","block");
        }


        if(cat == "computers_softwares" || cat == "tv_dvd" || cat == "video_games" || cat == "mobile_phones" || cat == "audio_stereo" || cat == "electrical_appliance" || cat == "electronic_items"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-clectronics").css("display","block");
        }


        if(cat == "travel_tourism" || cat == "transport_taxis" || cat == "tuition_classes" || cat == "wedding_hall" || cat == "decorations" || cat == "furnitures" || cat == "hair_beauty" || cat == "health_services"){
            $(".dynamic-post-ad").css("display","none");
            $(".cat-service").css("display","block");
        }


    })
})