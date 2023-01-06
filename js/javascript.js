// ==========================================================================
// Variables
// ==========================================================================

const header = document.getElementsByTagName("header")[0]; // pointer to the page header
let lastScollPosition = $(this).scrollTop(); // used with Event: Page Scroll; to track the position of the scroll between function calls
let sidebarWide = false; // remember the sidebar state, used in; function: sidebarWidth and Event: page resize
const cookies = [ // All the data for the cookies table, pretend it was generated.
    ["Hotjar Ltd", "hotjar.com", ["", "https://www.hotjar.com/legal/policies/terms-of-service", "https://www.hotjar.com/legal/policies/privacy"]],
    ["LinkedIn Corporation", "linkedin.com", ["", "https://www.linkedin.com/legal/user-agreement", "https://www.linkedin.com/legal/privacy-policy"]],
    ["Facebook Inc.", "facebook.com, facebook.net", ["Facebook is an online social networking service that enables its users to connect with friends and family as well as make new connections.", "https://www.facebook.com/legal/terms/update", "https://www.facebook.com/about/privacy/update"]],
    ["Google Inc.", "google.com, googletagmanager.com, google-analytics.com", ["", "https://policies.google.com/terms?fg=1", "https://policies.google.com/privacy?fg=1"]],
    ["Lead Forensics", "https://www.leadforensics.com", [`Netmatters use a paid for software on our website which allows us access to information on the company you work for. This is done through the business' registered IP address and only allows us access to the information such as contact details, year founded, SIC codes and other information about the business. It also records the behaviour of the user from the company on the website, such as page views, time on the site, "goals" completed and other similar metrics. We use this data to help us improve lead generation through the website as this tool allows us access to see which businesses have visited the website but have not converted by calling, emailing or sending a contact form.`, "https://www.leadforensics.com/terms-of-service", "https://www.leadforensics.com/privacy-policy"]],
    ["3CX", "https://netmatters.co.uk", ["Personal data to be processed and for the use of cookies in order to engage in a chat processed by Netmatters, for the purpose of Chat/Support for the time of 30 day(s) as per the GDPR.", "", ""]]
];


// ==========================================================================
// Header
// ==========================================================================

// Function: Slide the header onto the screen
function headerSlideIn() {
    header.classList.add("sticky");
    $("header").stop().css("top", "-100%").animate({"top": "0"}, 300);
}

// Function: Slide the header off the screen and unset its sticky class
function headerSlideOut() {
    $("header").stop().css("top", "0").animate({"top": "-100%"}, 300, function() {
        header.classList.remove("sticky");
    });
    
}

// Function: track scolling to slide header and apply sticky class, used when page scroll event triggers
function scrollHeader() {
    if ((header.classList.contains("sticky")) && ($(this).scrollTop() === 0)) {
        header.classList.remove("sticky");
    } else if ( (!header.classList.contains("sticky")) && ($(this).scrollTop() < lastScollPosition) && ($(this).scrollTop() > header.offsetHeight) ) {
        headerSlideIn();
    } else if ( ($("header").css("top") === "0px") && ($(this).scrollTop() > lastScollPosition) ) {
        headerSlideOut();
    }
    lastScollPosition = $(this).scrollTop();
}

// Event: Mouse over header
$("header").on("mouseenter", function() {
    if ( $("header").hasClass("sticky") ) {
        // scrollLock.disablePageScroll();
    }
});
// Event: Mouse leave header
$("header").on("mouseleave", function() {
    if ( $("header").hasClass("sticky") ) {
        // scrollLock.enablePageScroll();
    }
});


// ==========================================================================
// Sidebar
// ==========================================================================

// Function: Offset the page margins by the given value
function setMargins(value) {
    $("body").css("margin-left", `-=${value}`);
    $("body").css("margin-right", `+=${value}`);
    $(".sidebar").removeClass("hidden");
    $("#page").addClass("tint");
}

// Function: Reset the page margins back to zero
function resetMargins() {
    $("body").css("margin-left", "0");
    $("body").css("margin-right", "0");
    $(".sidebar").addClass("hidden");
    $("#page").removeClass("tint");
}

// Function: Return value for width of scroll bar
function scrollBarWidth() {
    return ($(window).outerWidth() - $(window).width());
}

// Function: Return value for width of sidebar, taking into consideration scroll bar.
function sidebarWidth() {
    if ($(window).outerWidth() < 992) {
        sidebarWide = false;
        return 275 - scrollBarWidth();
    } else {
        sidebarWide = true;
        return 350 - scrollBarWidth();
    }
}

// Function: Resize the sidebar, used when page resize event triggers
function resizeSidebar() {
    if ($(".hamburger").hasClass("is-active")) {
        if ((sidebarWide) && ($(window).outerWidth() < 992)) {
            setMargins(-75);
            sidebarWide = false;
        } else if ((!sidebarWide) && ($(window).outerWidth() >= 992)) {
            setMargins(75);
            sidebarWide = true;
        }
    }
}


// ==========================================================================
// Cookies
// ==========================================================================

// Event: clicked cookies accept-button
$(".cookies .btn.accept").on("click", function() {
    hideCookiePopup();
    hideCookieSettings();
    window.localStorage.setItem("cookies-accepted", true);
});
// Event: clicked cookies settings-button
$(".cookies .btn.settings").on("click", function() {
    hideCookiePopup();
    showCookieSettings();
});
// Event: clicked cookies cancel-button
$(".cookies .btn.cancel").on("click", function() {
    hideCookieSettings();
    showCookiePopup();
});

// Event: clicked cookies functional-disable
$(".cookies .functional .disable").on("click", function() {
    $(".cookies .functional .disable").removeClass("inactive").addClass("active");
    $(".cookies .functional .enable").removeClass("active").addClass("inactive");
});
// Event: clicked cookies functional-enable
$(".cookies .functional .enable").on("click", function() {
    $(".cookies .functional .disable").removeClass("active").addClass("inactive");
    $(".cookies .functional .enable").removeClass("inactive").addClass("active");
});

// Event: clicked cookies analytics-disable
$(".cookies .analytics .disable").on("click", function() {
    $(".cookies .analytics .disable").removeClass("inactive").addClass("active");
    $(".cookies .analytics .enable").removeClass("active").addClass("inactive");
});
// Event: clicked cookies analytics-enable
$(".cookies .analytics .enable").on("click", function() {
    $(".cookies .analytics .disable").removeClass("active").addClass("inactive");
    $(".cookies .analytics .enable").removeClass("inactive").addClass("active");
});

// Event: clicked cookies expand-detailed
$(".cookies .expand-detailed").on("click", function() {
    // Show table
    if ( $(".cookies .table-wrapper").hasClass("hidden") ) {
        $(".cookies .table-wrapper").removeClass("hidden");
        $(".cookies .expand-detailed").text("Hide detailed preferences");
    // Hide table
    } else {
        $(".cookies .table-wrapper").addClass("hidden");
        $(".cookies .expand-detailed").text("Show detailed preferences");
    }
});

// Function: Show the cookies settings page
function showCookieSettings() {
    $(".cookies.settings").removeClass("hidden");
    $("body").addClass("scroll-lock");
    $("#page").addClass("lock");
}
// Function: Hide the cookies settings page
function hideCookieSettings() {
    $(".cookies.settings").addClass("hidden");
    $("body").removeClass("scroll-lock");
    $("#page").removeClass("lock");
}

// Function: Show the cookies popup
function showCookiePopup() {
    $(".cookies.popup").removeClass("hidden");
    // scrollLock.disablePageScroll();
    $("#page").addClass("lock");
}
// Function: Hide the cookies popup
function hideCookiePopup() {
    $(".cookies.popup").addClass("hidden");
    // scrollLock.enablePageScroll();
    $("#page").removeClass("lock");
}

// Function: Add cookies data to the table
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

    // Event: clicked toggle text in first cell of cookie table
    $(".cookies table .toggle-on span").on("click", function(e) {
        const i = e.target.parentNode.parentNode.classList[0];

        // Inject extra row
        if ($(e.target.parentNode).hasClass("toggle-on")) {
            expandCookie(i);
            e.target.innerHTML = `- ${cookies[i][0]}`;
            $(e.target.parentNode).addClass("toggle-off").removeClass("toggle-on");
        // delete the extra row
        } else {
            $(`.cookies table tr.${i}`)[1].remove();
            e.target.innerHTML = `+ ${cookies[i][0]}`;
            $(e.target.parentNode).addClass("toggle-on").removeClass("toggle-off");
        }
    });

    // Event: Clicked on one of the enable or disable buttons on the cookies table
    $(`.cookies table .detailed`).on("click", function(e) {
        // Disable clicked
        if ($(e.target).hasClass("disable")) {
            $(`.cookies .detailed.${e.target.classList[2]}.disable`).removeClass("inactive").addClass("active");
            $(`.cookies .detailed.${e.target.classList[2]}.enable`).removeClass("active").addClass("inactive");
        // Enable clicked
        } else if ($(e.target).hasClass("enable")) {
            $(`.cookies .detailed.${e.target.classList[2]}.disable`).removeClass("active").addClass("inactive");
            $(`.cookies .detailed.${e.target.classList[2]}.enable`).removeClass("inactive").addClass("active");
        }
    });
}

// Function: To inject the extra cookie row at the given position
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


// ==========================================================================
// Search
// ==========================================================================

// Function: When the header (narrow screens) search button is clicked
$("#search1 button").on("click", function() {
    if ( $("#search1 input").val() ) {
        alert(`do search: ${$("#search1 input").val()}`);
        $("#search1 input").val("");
    }
});

// Function: When the header (wider screens) search button is clicked
$("#search2 button").on("click", function() {

    // do a search if there is input
    if ( $("#search2 input").val() ) {
        alert(`do search: ${$("#search2 input").val()}`);
        $("#search2 input").val("");

    // widths where the search input can be toggled
    } else if ((window.outerWidth >= 992) && (window.outerWidth < 1260)) {
        // hide buttons, show input
        if ( $("#search2 input").hasClass("show-lg") ) {
            $(".btn.support").fadeOut(function() { // wait until fade out is completed, then
                $(".btn.support").removeAttr("style");
            });
            $(".btn.contact").fadeOut(function() { // wait until fade out is completed, then
                $(".btn.contact").removeAttr("style");
                $("#search2 input").fadeIn();
                $(".btn.support").parent().removeClass("show-md").addClass("show-lg").removeAttr("style");
                $(".btn.contact").parent().removeClass("show-md").addClass("show-lg").removeAttr("style");
                $("#search2 input").removeClass("hide-md").removeClass("show-lg");
            });
        // hide input, show buttons
        } else { 
            $("#search2 input").fadeOut(function() { // wait until fade out is completed, then
                $("#search2 input").removeAttr("style");
                $(".btn.support").css("display", "none").fadeIn();
                $(".btn.contact").css("display", "none").fadeIn()
                $(".btn.support").parent().addClass("show-md").removeClass("show-lg");
                $(".btn.contact").parent().addClass("show-md").removeClass("show-lg");
                $("#search2 input").addClass("hide-md").addClass("show-lg");
            });
        }
    }
});


// ==========================================================================
// Core Events
// ==========================================================================

// Event: Page clicks
$("body").on("click", function(e) {
    
    // clicks on tinted(disabled) page
    if ($(e.target).hasClass("tint")) {
        $(".hamburger").removeClass("is-active");
        resetMargins();
        // scrollLock.enablePageScroll();

    // clicks on hamburger
    } else if ($(e.target).hasClass("hamburger")) {
        $(".hamburger").addClass("is-active");
        setMargins(sidebarWidth());
        // scrollLock.disablePageScroll();
    }
});

// Event: Page resize
$(window).on("resize", function() {
    resizeSidebar();
});

// Event: Page Scroll
$("body").on("scroll", function() {
    scrollHeader();
});


// ==========================================================================
// Page Load
// ==========================================================================
$(document).ready(function(){
    $('.carousel.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        autoplay: true,
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
    if ($(window).outerWidth() >= 992) {
        sidebarWide = true;
    }
});


// ==========================================================================
// Testing
// ==========================================================================

// Console Function: To allow cookie popup on next load.
function clear() {
    window.localStorage.removeItem("cookies-accepted");
}