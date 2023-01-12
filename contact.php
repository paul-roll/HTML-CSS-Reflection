<?php
    $pagetitle = "Contact Us";
    include("inc/header.php");

    // validate
    $name = $company = $email = $phone = $subject = $message = "";
    $validationErrors = array();

    //Sanitize, Trim, Lowercase, Capital first
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = ucfirst(strtolower(trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS))));
        if ($nameErr = validateString($name, "Your Name")) {
            $validationErrors["name"] = [0, $nameErr];
        }

        $company = ucfirst(strtolower(trim(filter_input(INPUT_POST,"company",FILTER_SANITIZE_SPECIAL_CHARS))));
        if ($companyErr = validateString($company, "Company Name")) {
            $validationErrors["company"] = [0, $companyErr];
        }

        $email = strtolower(trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL)));
        if ($emailErr = validateEmail($email)) {
            $validationErrors["email"] = [0, $emailErr];
        }

        $phone = str_replace([" ", "-"], "", trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS)));
        if ($phoneErr = validatePhone($phone)) {
            $validationErrors["phone"] = [0, $phoneErr];
        }

        $subject = ucfirst(strtolower(trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS))));
        if ($subjectErr = validateString($subject, "Subject")) {
            $validationErrors["subject"] = [0, $subjectErr];
        }

        $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
        if ($messageErr = validateMessage($message)) {
            $validationErrors["message"] = [0, $messageErr];
        }

        if (isset($_POST['checkbox'])) {
            $checkbox = true;
        }

        // show errors
        if ($validationErrors) {
            // has errors
            var_dump("error");
        } else {
            // push to database
            var_dump("database");
        }

    }





    // $validation = array();
    // $validation[] = [0, "validation.phone"]; //testing line
    // $validation[] = [0, "The message must be at least 5 characters."]; //testing line
    // $validation[] = [1, "Your message has been sent!"]; //testing line
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
echo"                            <a href='#'><img class='office-image' src='img/offices/" . $office["office"] . ".jpg' alt=''></a>\n";
echo"                            <div>\n";
echo"                                <h3><a href='#'>" . $office["office"] . "</a></h3>\n";
echo"                                <ul>\n";
    echoList($office["address"]);
echo"                                </ul>\n";
echo"                                <p><a href='#'>" . $office["phone"] . "</a></p>\n";
echo"                                <a href='#'><div class='btn'>View More</div></a>\n";
echo"                           </div>\n";
echo"                        </div>\n";
echo"<iframe width='100%' height='300px' src='https://maps.google.com/maps?q=Netmatters," . $office["address"][4] . "&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>";
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
                            <div class="flex-item" id="form">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#form" id="contact">
                                    <div class="flex-form">
                                        <?php echoValidation($validationErrors); ?>
                                        <div class="half">
                                            <label class="required" for="name">Your Name</label><br>
                                            <input id="name" name="name" type="text" value="<?php echo htmlspecialchars($name); ?>">
                                        </div>
                                        <div class="half">
                                            <label class="" for="company">Company Name</label><br>
                                            <input id="company" name="company" type="text" value="<?php echo htmlspecialchars($company); ?>">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="email">Your Email</label><br>
                                            <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($email); ?>">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="phone">Your Telephone Number</label><br>
                                            <input id="phone" name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>">
                                        </div>
                                        <div>
                                            <label class="required" for="subject">Subject</label><br>
                                            <input id="subject" name="subject" type="text" value="<?php echo htmlspecialchars($subject); ?>">
                                        </div>
                                        <div>
                                            <label class="required" for="message">Message</label><br>
                                            <textarea id="message" name="message" cols="50" rows="10"><?php echo htmlspecialchars($message); ?></textarea>
                                        </div>

                                        <div class="checkboxwrapper">
                                            <input id="checkbox" name="checkbox" type="checkbox" <?php if (isset($checkbox)) {echo "checked";}?>>
                                            <label class="fa-solid" for="checkbox"></label>
                                            <label class="checkbox-label" for="checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                                        </div>

                                        <div>
                                            <input id="enquiry" type="submit" value="Send Enquiry">
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