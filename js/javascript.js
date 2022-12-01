
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
    if ((header.classList.contains("sticky")) && ($(this).scrollTop() === 0)) {
        header.classList.remove("sticky");
    } else if ( (!header.classList.contains("sticky")) && ($(this).scrollTop() < i) && ($(this).scrollTop() > header.offsetHeight) ) {
        headerSlideIn();
    } else if ( ($("header").css("top") === "0px") && ($(this).scrollTop() > i) ) {
        headerSlideOut();
    }
    i = $(this).scrollTop();
};


$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        autoplay: true
    });
});


function setMargins(value, hide) {
    if (hide) {
        $("body").css("margin-left", `+=${value}`);
        $("body").css("margin-right", `-=${value}`);
        $(".sidebar").addClass("hidden");
    } else {
        $("body").css("margin-left", `-=${value}`);
        $("body").css("margin-right", `+=${value}`);
        $(".sidebar").removeClass("hidden");
    }
}


const breakpointMD = 992;

let sidebarWide = false;
if ($(window).outerWidth() >= breakpointMD) {
    sidebarWide = true;
}

function sidebarWidth() {
    if ($(window).outerWidth() < breakpointMD) {
        sidebarWide = false;
        return 275;
    } else {
        sidebarWide = true;
        return 350;
    }
}

$(window).on("resize", function() {
    if ($(".hamburger").hasClass("is-active")) {
        if ((sidebarWide) && ($(window).outerWidth() < breakpointMD)) {
            setMargins(-75, false);
            sidebarWide = false;
        } else if ((!sidebarWide) && ($(window).outerWidth() >= breakpointMD)) {
            setMargins(75, false);
            sidebarWide = true;
        }
    }
});


$("body").on("click", function(e) {

    // clicks on hamburger
    if ($(e.target).hasClass("hamburger")) {
        $(".hamburger").toggleClass("is-active");
        if ($(".hamburger").hasClass("is-active")) {
            setMargins(sidebarWidth(), false);
            $("body").addClass("sidebar-scroll-lock");
        } else {
            setMargins(sidebarWidth(), true);
            $("body").removeClass("sidebar-scroll-lock");
        }

    // clicks not on sidebar
    } else if (($(".hamburger").hasClass("is-active")) && (!$(e.target).parents(".sidebar").length)) {
        e.preventDefault();
    }
});

$("header").on("mouseenter", function() {
    if ( (!$(".hamburger").hasClass("is-active")) && ($("header").hasClass("sticky")) ) {
        $("body").addClass("hover-scroll-lock");
    }
});
$("header").on("mouseleave", function() {
    if ( (!$(".hamburger").hasClass("is-active")) && ($("header").hasClass("sticky")) ) {
        $("body").removeClass("hover-scroll-lock");
    }
});