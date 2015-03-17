    <footer id="footer">
        <div class="container">
            <div class="row">
                
                <!-- Left -->
                <!-- MAP START -->
                <div class="col-sm-5 col-md-4 map">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe frameborder="0" style="border: 0px none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100940.14245968236!2d-122.43759999999999!3d37.75769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2suk!4v1407503223429" class="embed-responsive-item"></iframe>
                    </div>
                </div>
                <!-- MAP END -->
        
                <!-- Right -->
                <!-- Address -->
                <div class="col-sm-7 col-md-offset-1 col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4>Get In Touch</h4>
                            <!--Address-->
                            <address id="contact">
                                <h5><?php echo $company_name; ?></h5>
                                Address Line 1<br />
                                Address Line 2<br />
                                Suburb or District<br />
                                Town or City<br />
                                State, County or Province<br />
                                Zip or Post Code
                                <!--Phone Number -->
                                <p><abbr title="Phone">Tel:</abbr> <?php echo $phone; ?></p>
                            </address>
                        </div>
        
                        <nav id="sitemap" role="navigation" class="col-sm-4">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="team.php">The Team</a></li>
                                <li><a href="super-accountant.php">Super Accountant</a></li>
                                <li><a href="how-we-help.php">Services</a></li>
                                <li><a href="testimonials.php">Testimonials</a></li>
                                <li><a href="business-builder.php">Business Builder</a></li>
                            </ul>
                            <h4>Legal</h4>
                            <ul>
                                <li><a href="legals.php#privacy">Privacy Policy</a></li>
                                <li><a href="legals.php#anti-spam">Anti-Spam Policy</a></li>
                                <li><a href="legals.php#disclaimer">Disclaimer</a></li>
                            </ul>
                        </nav>
        
                        <nav role="navigation" class="col-sm-4">
                            <h4>Expertise</h4>
                            <ul>
                                <li><a href="who-we-help.php">Here For You</a></li>
                                <li><a href="who-we-help.php#who-we-help">Our Clients</a></li>
                            </ul>
                            <h4>How We Can Help</h4>
                            <ul>
                                <li><a href="how-we-help.php#time-saving">Saving You Time</a></li>
                                <li><a href="how-we-help.php#compliance">Keeping Your Business Compliant</a></li>
                                <li><a href="how-we-help.php#value-added">Giving You More</a></li>
                                <li><a href="#meeting">Meet With Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--row-->
                </div>

            </div>
        
        </div>
        
        <div class="container-fluid">
            <p class="pull-right dim"><?php echo $company_name; ?><br />
            Registered in <?php echo $country; ?>: <?php echo $reg; ?><br />
            &copy; <?php echo $company_name; ?> &amp; Academy for Growth Ltd, 2008 to <?php echo date("Y"); ?>.<br /></p>
        </div>
    </footer>