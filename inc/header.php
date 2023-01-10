<?php
    spl_autoload_register(function ($class) {
        include 'inc/' . $class . '.class.php';
    });
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?php echo $pagetitle; ?> | Netmatters</title>
	<link rel="shortcut icon" href="/img/favicon.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="https://kit.fontawesome.com/764c638f7d.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div id="page" class="fade-in">

		<header>
                <!-- Header -->
                <div class="header">
                    <div class="wrapper">
                        <div class="flex-container">

                            <a href="index.php" class="logo"><img src="img/netmatters-logo.png" alt=""></a>

                            <div class="hide-sm">
                                <a href="#" class="btn phone"><i class="fa-solid fa-phone"></i></a>
                            </div>

                            <div class="hidden show-md">
                                <a href="#" class="btn support"><i class="fa-solid fa-computer-mouse"></i> Support</a>
                            </div>

                            <div class="hidden show-md">
                                <a href="contact.php" class="btn contact"><i class="fa-regular fa-paper-plane"></i> Contact</a>
                            </div>

                            <div class="hidden show-sm">
                                <form class="searchbar" id="search2">
                                    <input class="hidden show-sm hide-md show-lg" type="text" placeholder="Search...">
                                    <button type="submit" form="search2">
                                        <i class="btn fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>

                            <button class="hamburger hamburger--spin" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>

                        </div>
                        
                        <div class="hide-sm searchbar">
                            <form id="search1">
                                <input class="wide-search" type="text" placeholder="Search...">
                                <button type="submit" form="search1">
                                    <i class="wide-btn fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Header Nav -->
                <nav class="nav hidden show-md">
                    <ul class="wrapper flex-container">

                        <li class="bespoke-software">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Bespoke</li>
                                        <li>Software</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Bespoke Software Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-gears"></i><p>Workflow</p></a>
                                        <a href=""><i class="fa-solid fa-briefcase"></i><p>Automation</p></a>
                                        <a href=""><i class="fa-solid fa-shuffle"></i><p>Integration</p></a>
                                        <a href=""><i class="fa-solid fa-mobile-screen-button"></i><p>Apps</p></a>
                                        <a href=""><i class="fa-solid fa-folder-open"></i><p>Database</p></a>
                                        <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i><p>SharePoint</p></a>
                                        <a href=""><i class="fa-solid fa-download"></i><p>Management</p></a>
                                        <a href=""><i class="fa-solid fa-users"></i><p>Business Central</p></a>
                                        <a href=""><i class="fa-solid fa-display"></i><p>Internet of Things</p></a>
                                        <a href=""><i class="fa-solid fa-cloud"></i><p>Intranet Development</p></a>
                                        <a href=""><i class="fa-solid fa-cloud-arrow-down"></i><p>Customer Portal Development</p></a>
                                        <a href=""><i class="fa-solid fa-earth-americas"></i><p>Reporting Hub</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="it-support">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>IT</li>
                                        <li>Support</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our IT Support Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-headphones"></i><p>Managed IT</p></a>
                                        <a href=""><i class="fa-solid fa-briefcase"></i><p>Business IT</p></a>
                                        <a href=""><i class="fa-solid fa-display"></i><p>Office 365</p></a>
                                        <a href=""><i class="fa-solid fa-graduation-cap"></i><p>Consultancy</p></a>
                                        <a href=""><i class="fa-solid fa-cloud"></i><p>Cloud Provider</p></a>
                                        <a href=""><i class="fa-solid fa-hard-drive"></i><p>Data Backup</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="digital-marketing">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Digital</li>
                                        <li>Marketing</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Digital Marketing Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-magnifying-glass"></i><p>Search (SEO)</p></a>
                                        <a href=""><i class="fa-regular fa-money-bill-1"></i><p>Paid (PPC)</p></a>
                                        <a href=""><i class="fa-solid fa-arrow-trend-up"></i><p>Conversion (CRO)</p></a>
                                        <a href=""><i class="fa-solid fa-envelope"></i><p>Email</p></a>
                                        <a href=""><i class="fa-solid fa-users"></i><p>Social Media</p></a>
                                        <a href=""><i class="fa-solid fa-pencil"></i><p>Content</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="telecoms-services">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Telecoms</li>
                                        <li>Services</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Telecoms Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-ticket"></i><p>Business Mobile</p></a>
                                        <a href=""><i class="fa-solid fa-phone"></i><p>Hosted VoIP</p></a>
                                        <a href=""><i class="fa-solid fa-square-phone"></i><p>Business VoIP</p></a>
                                        <a href=""><i class="fa-solid fa-gauge-high"></i><p>Business Broadband</p></a>
                                        <a href=""><i class="fa-regular fa-handshake"></i><p>Leased Line</p></a>
                                        <a href=""><i class="fa-solid fa-phone-volume"></i><p>3CX Systems</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web-design">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Web</li>
                                        <li>Design</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Web Design Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-pencil"></i><p>Stylish Websites</p></a>
                                        <a href=""><i class="fa-solid fa-cart-shopping"></i><p>eCommerce Stores</p></a>
                                        <a href=""><i class="fa-solid fa-bullhorn"></i><p>Branding</p></a>
                                        <a href=""><i class="fa-solid fa-mobile-screen-button"></i><p>Apps</p></a>
                                        <a href=""><i class="fa-solid fa-cloud"></i><p>Web Hosting</p></a>
                                        <a href=""><i class="fa-solid fa-display"></i><p>Pay Monthly Websites</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cyber-security">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Cyber</li>
                                        <li>Security</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Cyber Security Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-regular fa-paste"></i><p>Assessment</p></a>
                                        <a href=""><i class="fa-regular fa-clock"></i><p>Management</p></a>
                                        <a href=""><i class="fa-solid fa-flask"></i><p>Penetration Testing</p></a>
                                        <a href=""><i class="fa-solid fa-graduation-cap"></i><p>Cyber Essentials</p></a>
                                        <a href=""><i class="fa-solid fa-shield-halved"></i><p>PCI/DSS</p></a>
                                        <a href=""><i class="fa-solid fa-lock"></i><p>Hacker Prevention</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="developer-course">
                            <a href="#">
                                <div class="nav-top">
                                    <i class="fa-solid"></i>
                                    <ul>
                                        <li>Developer</li>
                                        <li>Course</li>
                                    </ul>
                                    <div class="nav-arrow hidden"></div>
                                </div>
                            </a>
                            <div class="nav-panel hidden">
                                <div class="wrapper">
                                    <h2>Our Developer Course Services</h2>
                                    <div class="flex-inner-container">
                                        <a href=""><i class="fa-solid fa-display"></i><p>Train For A Career In Tech</p></a>
                                        <a href=""><i class="fa-solid fa-code"></i><p>Skills Bootcamp</p></a>
                                        <a href=""><i class="fa-solid fa-circle-question"></i><p>Scion Scheme Frequently Asked Questions</p></a>
                                        <a href=""><i class="fa-regular fa-handshake"></i><p>Scion Collaborators</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </header>