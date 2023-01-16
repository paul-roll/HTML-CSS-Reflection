<?php
    $newsletterName = $newsletterEmail = "";
    $validationErrors = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // only validate when newsletter form was the one submitted
        if (filter_input(INPUT_POST,"newsletter") == "Subscribe") {
            $newsletterName = ucfirst(strtolower(trim(filter_input(INPUT_POST,"newsletter-name",FILTER_SANITIZE_SPECIAL_CHARS))));
            $newsletterEmail = strtolower(trim(filter_input(INPUT_POST,"newsletter-email",FILTER_SANITIZE_EMAIL)));

            if ($newsletterNameErr = validateName($newsletterName)) {
                $validationErrors["newsletter-name"] = [0, $newsletterNameErr];
            }
            if ($newsletterEmailErr = validateEmail($newsletterEmail)) {
                $validationErrors["newsletter-email"] = [0, $newsletterEmailErr];
            }
            if (isset($_POST["newsletter-checkbox"])) {
                $newsletterCheckbox = true;
            } else {
                $validationErrors["newsletter-marketing"] = [0, "The marketing preference field is required."];
            }

            // If no errors
            if (!$validationErrors) {
                $validationErrors["success"] = [1, "Your message has been sent!"];
                // push to database
                $sql = array();
                $sql["name"] = $newsletterName;
                $sql["email"] = $newsletterEmail;
                $sql["datetime"] = getUTC();
                query::insert("marketing", $sql);

                // Clear table
                $newsletterName = $newsletterEmail = "";
                $newsletterCheckbox = null;
            }
        }
    }
?>
                <!-- Newsletter -->
                <section class="newsletter" id="newsletter-form">
                    <div class="wrapper">
                    <?php echoValidation($validationErrors); ?>
                        <h2>Email Newsletter Sign-Up</h2>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#newsletter-form" id="newsletter">
                            <div class="flex-container">
                                <div>
                                    <label class="required" for="newsletter-name">Your Name</label><br>
                                    <input id="newsletter-name" name="newsletter-name" type="text" value="<?php echo $newsletterName; ?>">
                                </div>
                                <div>
                                    <label class="required" for="newsletter-email">Your Email</label><br>
                                    <input id="newsletter-email" name="newsletter-email" type="text" value="<?php echo $newsletterEmail; ?>">
                                </div>
                            </div>
                            <div class="checkboxwrapper">
                                <input id="newsletter-checkbox" name="newsletter-checkbox" type="checkbox" <?php if (isset($newsletterCheckbox)) {echo "checked";}?>>
                                <label class="fa-solid" for="newsletter-checkbox"></label>
                                <label class="checkbox-label" for="newsletter-checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                            </div>
                            <br>
                            <input id="newsletter-submit" type="submit" value="Subscribe" name="newsletter">
                        </form>
                    </div>
                </section>