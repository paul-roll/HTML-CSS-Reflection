            <!-- Footer -->
            <footer class="footer">
                <div class="wrapper">
                    
                    <div class="flex-container">
                        <div class="flex-inner-container">
                            <div class="flex-item">
                                <h4>About Netmatters</h4>
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Our Careers</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Environmental Policy</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="flex-item">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><a href="#">Bespoke Software</a></li>
                                    <li><a href="#">IT Support</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                    <li><a href="#">Telecoms Services</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Cyber Security</a></li>
                                    <li><a href="#">Developer Training</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex-inner-container">
                            <div class="flex-item">
                                <h4>Cambridge Office</h4>
                                <ul>
                                    <?php echoList($offices["Cambridge"]["address"]); ?>
                                    <li>&nbsp;</li>
                                    <li>Tel: <a href="#"><?php echo $offices["Cambridge"]["phone"]; ?></a></a></li>
                                </ul>
                            </div>

                            <div class="flex-item">
                                <h4>Wymondham Office</h4>
                                <ul>
                                <?php echoList($offices["Wymondham"]["address"]); ?>
                                    <li>&nbsp;</li>
                                    <li>Tel: <a href="#"><?php echo $offices["Wymondham"]["phone"]; ?></a></a></li>
                                </ul>
                            </div>

                            <div class="flex-item">
                                <h4>Great Yarmouth Office</h4>
                                <ul>
                                <?php echoList($offices["Great Yarmouth"]["address"]); ?>
                                    <li>&nbsp;</li>
                                    <li>Tel: <a href="#"><?php echo $offices["Great Yarmouth"]["phone"]; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="hr"></div>
                    <div class="bottom">
                        <p>&copy; Copyright Netmatters 2022. <br class="hide-sm">All rights reserved.</p>
                        <p>-</p>
                        <p><a href="#">Sitemap</a></p>
                        <p class="social-media">
                            <a class="facebook" href="#">
                                <img src="img/social-media/facebook.png" alt="">
                            </a>
                            <a class="twitter" href="#">
                                <img src="img/social-media/twitter.png" alt="">
                            </a>
                            <a class="instagram" href="#">
                                <img src="img/social-media/instagram.png" alt="">
                            </a>
                            <a class="linkedin" href="#">
                                <img src="img/social-media/linkedin.png" alt="">
                            </a>
                        </p>
                    </div>

                </div>
            </footer>
        </div>

        <!-- Sidebar-->
        <div class="hidden sidebar">


            <div class="hide-md sidebar-narrow">

                <ul>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                
                <ul class="bespoke-software">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Bespoke</p>Software</a></li>
                    <li><a href="#">Workflow</a></li>
                    <li><a href="#">Automation</a></li>
                    <li><a href="#">Integration</a></li>
                    <li><a href="#">Apps</a></li>
                    <li><a href="#">Database</a></li>
                    <li><a href="#">SharePoint</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Business Central</a></li>
                    <li><a href="#">Internet of Things</a></li>
                    <li><a href="#">Intranet Development</a></li>
                    <li><a href="#">Customer Portal Development</a></li>
                    <li><a href="#">Reporting Hub</a></li>
                </ul>

                <ul class="it-support">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">IT</p>Support</a></li>
                    <li><a href="#">Managed IT</a></li>
                    <li><a href="#">Business IT</a></li>
                    <li><a href="#">Office 365</a></li>
                    <li><a href="#">Consultancy</a></li>
                    <li><a href="#">Cloud Provider</a></li>
                    <li><a href="#">Data Backup</a></li>
                </ul>

                <ul class="digital-marketing">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Digital</p>Marketing</a></li>
                    <li><a href="#">Search (SEO)</a></li>
                    <li><a href="#">Paid (PPC)</a></li>
                    <li><a href="#">Conversion (CRO)</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Content</a></li>
                </ul>

                
                <ul class="telecoms-services">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Telecoms</p>Services</a></li>
                    <li><a href="#">Business Mobile</a></li>
                    <li><a href="#">Hosted VoIP</a></li>
                    <li><a href="#">Business VoIP</a></li>
                    <li><a href="#">Business Broadband</a></li>
                    <li><a href="#">Leased Line</a></li>
                    <li><a href="#">3CX Systems</a></li>
                </ul>

                <ul class="web-design">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Web</p>Design</a></li>
                    <li><a href="#">Stylish Websites</a></li>
                    <li><a href="#">eCommerce Stores</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Apps</a></li>
                    <li><a href="#">Web Hosting</a></li>
                    <li><a href="#">Pay Monthly Websites</a></li>
                </ul>

                <ul class="cyber-security">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Cyber</p>Security</a></li>
                    <li><a href="#">Assessment</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Penetration Testing</a></li>
                    <li><a href="#">Cyber Essentials</a></li>
                    <li><a href="#">PCI/DSS</a></li>
                    <li><a href="#">Hacker Prevention</a></li>
                </ul>        

                <ul class="developer-course">
                    <li><a href="#"><i class="fa-solid"></i><p class="small">Developer</p>Course</a></li>
                    <li><a href="#">Train For A Career In Tech</a></li>
                    <li><a href="#">Skills Bootcamp</a></li>
                    <li><a href="#">Scion Scheme Frequently Asked Questions</a></li>
                    <li><a href="#">Scion Collaborators</a></li>
                </ul>

            </div>

            <ul class="hidden show-md">
                <li><a href="#">Services</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Bespoke Software</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>IT Support</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Digital Marketing</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Telecoms Services</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Web Design</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Cyber Security</a></li>
            </ul>

            <ul>
                <li><a href="#">Our Work</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Case Studies</a></li>
            </ul>

            <ul>
                <li><a href="#">Our Knowledge</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Technologies</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Industries</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>News</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Insights</a></li>
            </ul>

            <ul>
                <li><a href="#">Training</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Train For A Career In Tech</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Skills Bootcamp</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>SCS Frequently Asked Questions</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Scion Collaborators</a></li>
            </ul>

            <ul>
                <li><a href="#">Events</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Business Automation Seminar</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>GA4 Webinar</a></li>
            </ul>

            <ul>
                <li><a href="#">Our Company</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Our Careers</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Our Team</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Our Culture</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Our Benefits</a></li>
            </ul>

            <ul>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Cambridge Office</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Wymondham Office</a></li>
                <li><a href="#"><i class="fa-solid fa-angles-right"></i>Great Yarmouth Office</a></li>
            </ul>

            <ul>
                <li><a href="#">COVID Risk Assessments</a></li>
            </ul>

            <ul class="hide-md">
                <li><a href="#">Support</a></li>
            </ul>

        </div>

        <!-- Cookies -->
        <div class="cookies popup hidden">
            <h3>Cookies Policy</h3>
            <hr>
            <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="#">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.</p>
            <hr>
            <div class="buttons">
                <div class="btn settings">Change Settings</div>
                <div class="btn accept">Accept Cookies</div>
            </div>
        </div>

        <div class="cookies settings hidden">
            <div class="wrapper">

                <h3>Cookies Preferences</h3>
                <p>Netmatters uses cookies on their website. Cookies are small text files that are stored on your computer or other device by websites that you visit. This page explains the cookies we use and what we use them for, and lets you turn them on or off. (Some cookies are necessary in order for our website to work properly.) We also explain below which other companies use cookies on our website and what they use them for, and lets you turn those other companies' cookies on or off.</p>
                <p>Our website uses cookies in order to make the website easier to use, to support the provision of information and functionality to you, as well as to provide us with information about how the website is used so that we can make sure it is as up to date, relevant and error free as we can. We also use cookies to try to ensure that our online adverts reflect the interests of web users. Further information about the types of cookies that are used on our website is set out box below.</p>
                <p>As well as the options provided below, you can choose to restrict or block cookies through your browser settings at any time. For more information about how to do this, and about cookies in general, you can visit <a href="#">www.cookiepedia.co.uk</a> and <a href="#">www.youronlinechoices.eu</a>. However, please be aware that restricting or blocking cookies set on our website may impact the functionality or performance of the website, or prevent you from using certain services provided through the website.</p>
                <p>Please note that third parties (including, for example, advertising networks and providers of external services like website analysis services) may also use cookies, over which we have no control, although we may receive services from these third parties (including, for example, for targeted advertising purposes and website analytics). These cookies are likely to be performance cookies or targeting cookies (as described below).</p>

                <h2>Functional Cookies</h2>
                <p>Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences, and any customisations you make to pages on our website during your visit.</p>
                <h4>Examples of how we use these cookies include:</h4>
                <ul>
                    <li>Live chat</li>
                </ul>
                <div class="buttons functional">
                    <div class="btn disable active">Disable</div>
                    <div class="btn enable inactive">Enable</div>
                </div>

                <h2>Performance & Analytics</h2>
                <p>These cookies help us understand how people use our website. They collect information such as which pages on our website visitors go to most often, which features they use, and which websites people have visited before they visit ours. We use this information to improve our website and provide a better user experience.</p>
                <h4>Examples of how we use these cookies include:</h4>
                <ul>
                    <li>Monitoring and providing statistics on how our website is used.</li>
                    <li>Helping us improve our website by measuring any errors that occur.</li>
                    <li>Testing the website's design and operability.</li>
                </ul>
                <div class="buttons analytics">
                    <div class="btn disable active">Disable</div>
                    <div class="btn enable inactive">Enable</div>
                </div>

                <p>Different web browsers may use different methods for managing cookies. Please follow the instructions below, from the web browser manufacturers directly, to configure your browser settings*.</p>
                <ul>
                    <li><a href="#">Microsoft Internet Explorer (IE)</a></li>
                    <li><a href="#">Google Chrome</a></li>
                    <li><a href="#">Safari</a></li>
                    <li><a href="#">Firefox</a></li>
                </ul>

                
                <div class="btn expand-detailed">Show detailed preferences</div>
                <div class="table-wrapper hidden">
                    <table>
                        <tr>
                            <th>Company</th>
                            <th>Domain</th>
                            <th class="toggle-col"></th>
                        </tr>
                    </table>
                </div>
                
                <div class="buttons final">
                    <div class="btn cancel">Cancel</div>
                    <div class="btn accept">Continue to website</div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.disablescroll.min.js"></script>
        <script src="js/javascript.js"></script>
    </body>
</html>