
function headerSlideIn() {
    header.classList.add("sticky");
    $("header").stop().css("top", "-100%").animate({"top": "0"}, 300);
}

function headerSlideOut() {
    $("header").stop().css("top", "0").animate({"top": "-100%"}, 300, function() {
        header.classList.remove("sticky");
    });
    
}

const header = document.getElementsByTagName("header")[0];


let i = $(this).scrollTop();
window.onscroll = function() {
    if ((!header.classList.contains("sticky")) && ($(this).scrollTop()) < i) {
        headerSlideIn();
        
        
    } else if (($("header").css("top") === "0px") && ($(this).scrollTop()) > i) {
        headerSlideOut();
    }
    i = $(this).scrollTop();
};


//

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: true
    })

  });