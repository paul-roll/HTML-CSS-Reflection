const header = document.getElementsByTagName("header")[0];

function headerSlideIn() {
    header.classList.add("sticky");
    $("header").stop().css("top", "-100%").animate({"top": "0"}, 300);
}

function headerSlideOut() {
    $("header").stop().css("top", "0").animate({"top": "-100%"}, 300, function() {
        header.classList.remove("sticky");
    });
    
}


let p = $(this).scrollTop();
window.onscroll = function() {
    
    if ((header.classList.contains("sticky")) && ($(this).scrollTop() === 0)) {
        header.classList.remove("sticky");
    } else if ( (!header.classList.contains("sticky")) && ($(this).scrollTop() < p) && ($(this).scrollTop() > header.offsetHeight) ) {
        headerSlideIn();
    } else if ( ($("header").css("top") === "0px") && ($(this).scrollTop() > p) ) {
        headerSlideOut();
    }
    p = $(this).scrollTop();
};


function setMargins(value, hide) {
    if (hide) {
        $("body").css("margin-left", `+=${value}`);
        $("body").css("margin-right", `-=${value}`);
        $(".sidebar").addClass("hidden");
        $("#page").removeClass("tint");
    } else {
        $("body").css("margin-left", `-=${value}`);
        $("body").css("margin-right", `+=${value}`);
        $(".sidebar").removeClass("hidden");
        $("#page").addClass("tint");
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
    
    // clicks on tinted(disabled) page
    if ($(e.target).hasClass("tint")) {
        $(".hamburger").toggleClass("is-active");
        setMargins(sidebarWidth(), true);
        $("body").removeClass("scroll-lock");

    // clicks on hamburger
    } else if ($(e.target).hasClass("hamburger")) {
        $(".hamburger").toggleClass("is-active");
        setMargins(sidebarWidth(), false);
        $("body").addClass("scroll-lock");

    // clicks not on sidebar
    } else if (($(".hamburger").hasClass("is-active")) && (!$(e.target).parents(".sidebar").length)) {
        e.preventDefault();
    }
});


$("header").on("mouseenter", function() {
    if ( $("header").hasClass("sticky") ) {
        $("body").addClass("hover-scroll-lock");
    }
});
$("header").on("mouseleave", function() {
    if ( $("header").hasClass("sticky") ) {
        $("body").removeClass("hover-scroll-lock");
    }
});


$(".cookies .btn.accept").on("click", function() {
    hideCookiePopup();
    hideCookieSettings();
    window.localStorage.setItem("cookies-accepted", true);
});
$(".cookies .btn.settings").on("click", function() {
    hideCookiePopup();
    showCookieSettings();
});
$(".cookies .btn.cancel").on("click", function() {
    hideCookieSettings();
    showCookiePopup();
});

$(".cookies .functional .disable").on("click", function() {
    $(".cookies .functional .disable").removeClass("inactive").addClass("active");
    $(".cookies .functional .enable").removeClass("active").addClass("inactive");
});
$(".cookies .functional .enable").on("click", function() {
    $(".cookies .functional .disable").removeClass("active").addClass("inactive");
    $(".cookies .functional .enable").removeClass("inactive").addClass("active");
});

$(".cookies .analytics .disable").on("click", function() {
    $(".cookies .analytics .disable").removeClass("inactive").addClass("active");
    $(".cookies .analytics .enable").removeClass("active").addClass("inactive");
});
$(".cookies .analytics .enable").on("click", function() {
    $(".cookies .analytics .disable").removeClass("active").addClass("inactive");
    $(".cookies .analytics .enable").removeClass("inactive").addClass("active");
});

$(".cookies .expand-detailed").on("click", function() {
    if ( $(".cookies table").hasClass("hidden") ) {
        $(".cookies table").removeClass("hidden");
        $(".cookies .expand-detailed").text("Hide detailed preferences");
    } else {
        $(".cookies table").addClass("hidden");
        $(".cookies .expand-detailed").text("Show detailed preferences");
    }
});


function showCookieSettings() {
    $(".cookies.settings").removeClass("hidden");
    $("body").addClass("scroll-lock");
    $("#page").addClass("lock");
}
function hideCookieSettings() {
    $(".cookies.settings").addClass("hidden");
    $("body").removeClass("scroll-lock");
    $("#page").removeClass("lock");
}

function showCookiePopup() {
    $(".cookies.popup").removeClass("hidden");
    $("body").addClass("scroll-lock");
    $("#page").addClass("lock");
}

function hideCookiePopup() {
    $(".cookies.popup").addClass("hidden");
    $("body").removeClass("scroll-lock");
    $("#page").removeClass("lock");
}


const cookies = [
    ["Hotjar Ltd", "hotjar.com", ["", "https://www.hotjar.com/legal/policies/terms-of-service", "https://www.hotjar.com/legal/policies/privacy"]],
    ["LinkedIn Corporation", "linkedin.com", ["", "https://www.linkedin.com/legal/user-agreement", "https://www.linkedin.com/legal/privacy-policy"]],
    ["Facebook Inc.", "facebook.com, facebook.net", ["Facebook is an online social networking service that enables its users to connect with friends and family as well as make new connections.", "https://www.facebook.com/legal/terms/update", "https://www.facebook.com/about/privacy/update"]],
    ["Google Inc.", "google.com, googletagmanager.com, google-analytics.com", ["", "https://policies.google.com/terms?fg=1", "https://policies.google.com/privacy?fg=1"]],
    ["Lead Forensics", "https://www.leadforensics.com", [`Netmatters use a paid for software on our website which allows us access to information on the company you work for. This is done through the business' registered IP address and only allows us access to the information such as contact details, year founded, SIC codes and other information about the business. It also records the behaviour of the user from the company on the website, such as page views, time on the site, "goals" completed and other similar metrics. We use this data to help us improve lead generation through the website as this tool allows us access to see which businesses have visited the website but have not converted by calling, emailing or sending a contact form.`, "https://www.leadforensics.com/terms-of-service", "https://www.leadforensics.com/privacy-policy"]],
    ["3CX", "https://netmatters.co.uk", ["Personal data to be processed and for the use of cookies in order to engage in a chat processed by Netmatters, for the purpose of Chat/Support for the time of 30 day(s) as per the GDPR.", "", ""]]
];

function populateCookiesTable() {
    let html = "";

    for (let i = 0; i < cookies.length; i++) {
        html += `
            <tr class="${i}">
                <td class="toggle-on"><span>+ ${cookies[i][0]}</span></td>
                <td>${cookies[i][1]}</td>
                <td>
                    <div class="buttons">
                        <div class="btn detailed ${i} disable active">Disable</div>
                        <div class="btn detailed ${i} enable inactive">Enable</div>
                    </div>
                </td>
            </tr>
        `;
    }

    $(".cookies table").append(html);

    $(".cookies table .toggle-on span").on("click", function(e) {
        const i = e.target.parentNode.parentNode.classList[0];
        if ($(e.target.parentNode).hasClass("toggle-on")) {
            expandCookie(i);
            e.target.innerHTML = `- ${cookies[i][0]}`;
            $(e.target.parentNode).addClass("toggle-off").removeClass("toggle-on");
        } else {
            $(`.cookies table tr.${i}`)[1].remove();
            e.target.innerHTML = `+ ${cookies[i][0]}`;
            $(e.target.parentNode).addClass("toggle-on").removeClass("toggle-off");
        }
    });

    $(`.cookies table .detailed`).on("click", function(e) {
        if ($(e.target).hasClass("disable")) {
            $(`.cookies .detailed.${e.target.classList[2]}.disable`).removeClass("inactive").addClass("active");
            $(`.cookies .detailed.${e.target.classList[2]}.enable`).removeClass("active").addClass("inactive");
        } else if ($(e.target).hasClass("enable")) {
            $(`.cookies .detailed.${e.target.classList[2]}.disable`).removeClass("active").addClass("inactive");
            $(`.cookies .detailed.${e.target.classList[2]}.enable`).removeClass("inactive").addClass("active");
        }
    });
}


function expandCookie(i) {
    let html = `<tr class="${i}"><td colspan=3>`;
    if (`${cookies[i][2][0]}`) {
        html += `<p>${cookies[i][2][0]}</p>`;
    }
    if (`${cookies[i][2][1]}`) {
        html += `<a href="${cookies[i][2][1]}" target="_blank" class="btn basic">Terms & Conditions</a>`;
    }
    if (`${cookies[i][2][2]}`) {
        html += `<a href="${cookies[i][2][2]}" target="_blank" class="btn basic">Privacy Policy</a>`;
    }
    html += `</td></tr>`;
    $(`.cookies table tr.${i}`).after(html);
}

$("#search1 button").on("click", function() {
    if ( $("#search1 input").val() ) {
        alert(`do search: ${$("#search1 input").val()}`);
        $("#search1 input").val("");
    }
});

$("#search2 button").on("click", function() {

    // do a search if there is input
    if ( $("#search2 input").val() ) {
        alert(`do search: ${$("#search2 input").val()}`);
        $("#search2 input").val("");

    } else if ((window.outerWidth >= 992) && (window.outerWidth < 1260)) {
        // hide buttons, show input
        if ( $("#search2 input").hasClass("show-lg") ) {
            
            $(".btn.support").fadeOut(function() {
                $(".btn.support").removeAttr("style");
            });
            $(".btn.contact").fadeOut(function() {
                $(".btn.contact").removeAttr("style");

                $("#search2 input").fadeIn();
                $(".btn.support").parent().removeClass("show-md").addClass("show-lg").removeAttr("style");
                $(".btn.contact").parent().removeClass("show-md").addClass("show-lg").removeAttr("style");
                $("#search2 input").removeClass("hide-md").removeClass("show-lg");
            });
            
            
        } else { // hide input, show buttons

            $("#search2 input").fadeOut(function() {
                $("#search2 input").removeAttr("style");
                $(".btn.support").css("display", "none").fadeIn();
                $(".btn.contact").css("display", "none").fadeIn();

                $(".btn.support").parent().addClass("show-md").removeClass("show-lg");
                $(".btn.contact").parent().addClass("show-md").removeClass("show-lg");
                $("#search2 input").addClass("hide-md").addClass("show-lg");
            });



        }
    }

});


$(document).ready(function(){
    $('.carousel.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        autoplay: true
    });
    $('.services-footer.owl-carousel').owlCarousel({
        loop: true,
        items: 9,
        dots: false,
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
    });
    console.log("Type: clear(); To allow cookie popup on next load.");
    if (!window.localStorage.getItem("cookies-accepted")) {
        populateCookiesTable();
        showCookiePopup();
    }
});

function clear() {
    window.localStorage.removeItem("cookies-accepted");
}