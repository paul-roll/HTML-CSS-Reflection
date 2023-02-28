<?php
    $pagetitle = "Contact Us";
    include("inc/header.php");

    $contactName = $contactCompany = $contactEmail = $contactPhone = $contactSubject = $contactMessage = "";
    $validationErrors = array();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // only validate when contact form was the one submitted
        if (filter_input(INPUT_POST,"contact") == "Send Enquiry") {

            $contactName = ucfirst(strtolower(trim(filter_input(INPUT_POST,"contact-name",FILTER_SANITIZE_SPECIAL_CHARS))));
            $contactCompany = ucfirst(strtolower(trim(filter_input(INPUT_POST,"contact-company",FILTER_SANITIZE_SPECIAL_CHARS))));
            $contactEmail = strtolower(trim(filter_input(INPUT_POST,"contact-email",FILTER_SANITIZE_EMAIL)));
            $contactPhone = str_replace([" ", "-"], "", trim(filter_input(INPUT_POST,"contact-phone",FILTER_SANITIZE_SPECIAL_CHARS)));
            $contactSubject = ucfirst(strtolower(trim(filter_input(INPUT_POST,"contact-subject",FILTER_SANITIZE_SPECIAL_CHARS))));
            $contactMessage = trim(filter_input(INPUT_POST,"contact-message",FILTER_SANITIZE_SPECIAL_CHARS));

            if ($contactNameErr = validateName($contactName)) {
                $validationErrors["contact-name"] = [0, $contactNameErr];
            }
            if ($contactEmailErr = validateEmail($contactEmail)) {
                $validationErrors["contact-email"] = [0, $contactEmailErr];
            }
            if ($contactPhoneErr = validatePhone($contactPhone)) {
                $validationErrors["contact-phone"] = [0, $contactPhoneErr];
            }
            if ($contactSubjectErr = validateSubject($contactSubject)) {
                $validationErrors["contact-subject"] = [0, $contactSubjectErr];
            }
            if ($contactMessageErr = validateMessage($contactMessage)) {
                $validationErrors["contact-message"] = [0, $contactMessageErr];
            }
            if (isset($_POST["contact-checkbox"])) {
                $contactCheckbox = true;
            }

            // If no errors
            if (!$validationErrors) {
                $validationErrors["success"] = [1, "Your message has been sent!"];
                // push to database

                if (empty(query::select("*", "contact", "WHERE name = '" . $contactName . "' AND message = '" . $contactMessage . "'"))) {
                    $sql = array();
                    $sql["name"] = $contactName;
                    $sql["company"] = $contactCompany;
                    $sql["email"] = $contactEmail;
                    $sql["phone"] = $contactPhone;
                    $sql["subject"] = $contactSubject;
                    $sql["message"] = $contactMessage;
                    $sql["datetime"] = getUTC();
                    query::insert("contact", $sql);
                }

                if ( (isset($contactCheckbox)) && (empty(query::select("*", "marketing", "WHERE email = '" . $contactEmail . "'"))) ) {
                    $sql = array();
                    $sql["name"] = $contactName;
                    $sql["email"] = $contactEmail;
                    $sql["datetime"] = getUTC();
                    query::insert("marketing", $sql);
                }


                // Clear table
                $contactName = $contactCompany = $contactEmail = $contactPhone = $contactSubject = $contactMessage = "";
                $contactCheckbox = null;
            }
        }

    }

?>

            <main>

                <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <div class="wrapper">
                        <p><a href="index.php">Home</a> / Our Offices</p>
                    </div>
                </div>

                <!-- Offices -->
                <section class="offices">
                    <div class="title">
                        <h2 class="wrapper">Our Offices</h2>
                    </div>
                    <div class="wrapper">
                        <div class="flex-container">
<?php foreach ($offices as $office) {
echo"<div>\n";    
echo"                        <div class='office-item'>\n";
echo"                            <a href='#'><img class='office-image' src='img/offices/" . str_replace(' ', '', $office["office"]) . ".jpg' alt=''></a>\n";
echo"                            <div>\n";
echo"                                <h3><a href='#'>" . $office["office"] . "</a></h3>\n";
echo"                                <ul>\n";
    echoList($office["address"]);
echo"                                </ul>\n";
echo"                                <p><a href='#'>" . $office["phone"] . "</a></p>\n";
echo"                                <a href='#'><div class='btn'>View More</div></a>\n";
echo"                           </div>\n";
echo"                        </div>\n";
echo"<iframe style='width:100%;border:0;overflow:hidden;margin:0' height='300' src='https://maps.google.com/maps?q=Netmatters," . str_replace(' ', '', $office["address"][4]) . "&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed'></iframe>";
echo"</div>\n";   
} ?>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section class="contact">
                    <div class="wrapper">
                        <div class="flex-container">
                            <div class="flex-item">
                                <p class="bold">Email us on:</p>
                                <p class="email"><a href="#">sales@netmatters.com</a></p>
                                <p class="bold">Business hours:</p>
                                <p class="bold">Monday - Friday 07:00 - 18:00</p>
                                <p class="bold out-of-hours">Out of Hours IT Support <i class="fa-solid fa-angle-down"></i></p>
                                <div class="hidden">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p class="bold">Monday - Friday 18:00 - 22:00<br>Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</p>
                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                                </div>
                            </div>
                            <div class="flex-item" id="contact-form">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#contact-form" id="contact">
                                <input type="hidden" id="hiddenField">
                                    <div class="flex-form">
                                    <?php echoValidation($validationErrors); ?>
                                        <div class="half">
                                            <label class="required" for="contact-name">Your Name</label><br>
                                            <input id="contact-name" name="contact-name" type="text" value="<?php echo ($contactName); ?>">
                                        </div>
                                        <div class="half">
                                            <label class="" for="contact-company">Company Name</label><br>
                                            <input id="contact-company" name="contact-company" type="text" value="<?php echo $contactCompany; ?>">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="contact-email">Your Email</label><br>
                                            <input id="contact-email" name="contact-email" type="email" value="<?php echo $contactEmail; ?>">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="contact-phone">Your Telephone Number</label><br>
                                            <input id="contact-phone" name="contact-phone" type="text" value="<?php echo $contactPhone; ?>">
                                        </div>
                                        <div>
                                            <label class="required" for="contact-subject">Subject</label><br>
                                            <input id="contact-subject" name="contact-subject" type="text" value="<?php echo $contactSubject; ?>">
                                        </div>
                                        <div>
                                            <label class="required" for="contact-message">Message</label><br>
                                            <textarea id="contact-message" name="contact-message" cols="50" rows="10"><?php echo $contactMessage; ?></textarea>
                                        </div>

                                        <div class="checkboxwrapper">
                                            <input id="contact-checkbox" name="contact-checkbox" type="checkbox" <?php if (isset($contactCheckbox)) {echo "checked";}?>>
                                            <label class="fa-solid" for="contact-checkbox"></label>
                                            <label class="checkbox-label" for="contact-checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                                        </div>

                                        <div>
                                            <input id="contact-submit" type="submit" value="Send Enquiry" name="contact">
                                            <div class="right"><span class="required">*</span> Fields Required</div>
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