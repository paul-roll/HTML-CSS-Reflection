<?php
    $pagetitle = "Contact Us";
    include("inc/header.php");
?>

            <main>

                <!-- Breadcrumb -->
                <section class="breadcrumb">
                    <div class="wrapper">
                        <p>Home / Our Offices</p>
                        <!-- Wrapper margins too big -->

                    </div>
                </section>

                <!-- Offices -->
                <section class="offices">
                    <div class="wrapper">
                        <h2>Our Offices</h2>
                        <div class="flex-container">
<?php foreach ($offices as $office) {
echo"<div>\n";    
echo"                        <div class='office-item'>\n";
echo"                            <a href='#'>\n";
echo"                                <img class='office-image' src='img/offices/" . $office["office"] . ".jpg' alt=''>\n";
echo"                            </a>\n";
echo"                            <div>\n";
echo"                                <h3>" . $office["office"] . "</h3>\n";
echo"                                <ul>\n";
    echoList($office["address"]);
echo"                                </ul>\n";
echo"                                <p>" . $office["phone"] . "</p>\n";
echo"                                <div class='btn'>View More</div>\n";
echo"                           </div>\n";

echo"                        </div>\n";
echo"<iframe width='100%' height='300px' id='mapcanvas' src='https://maps.google.com/maps?q=Netmatters," . $office["address"][4] . "&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'><div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:100%;'></div></div></iframe>";
echo"</div>\n";   
} ?>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section class="contact">
                    <div class="wrapper">
                        <div class="flex-container">
                            <div class="flex-item">X</div>
                            <div class="flex-item">
                                <form>
                                    <div class="flex-form">
                                        <div class="half">
                                            <label class="required" for="name">Your Name</label><br>
                                            <input id="name" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="company">Company Name</label><br>
                                            <input id="company" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="email">Your Email</label><br>
                                            <input id="email" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="phone">Your Telephone Number</label><br>
                                            <input id="phone" type="text">
                                        </div>
                                        <div>
                                            <label class="required" for="subject">Subject</label><br>
                                            <input id="subject" type="text">
                                        </div>
                                        <div>
                                            <label class="required" for="message">Message</label><br>
                                            <input id="message" type="text">
                                        </div>

                                        <div class="checkboxwrapper">
                                            <input id="checkbox" type="checkbox">
                                            <label class="fa-solid" for="checkbox"></label>
                                            <label class="checkbox-label" for="checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                                        </div>

                                        <div>
                                            <input class="left" id="enquiry" type="submit" value="Send Enquiry">
                                            <div class="right">* Fields Required</div>
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>




                    </div>
                </section>


                <?php include("inc/newsletter.php"); ?>

            </main>

<?php include("inc/footer.php"); ?>