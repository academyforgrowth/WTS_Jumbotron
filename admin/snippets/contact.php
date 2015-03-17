    <!-- LEAD SECTION -->

    <section id="lead">
        <div class="container">
        
            <div class="row">

                <div class="col-12 col-lg-12 text-center">
                    <div class="row page-header">
                        <h1>Contact <?php echo $company_name; ?></h1>
                        <h2>However you choose to get in touch, we're ready for your enquiry</h2>
                    </div>
                    
                    <div class="row">

                        <h2>Our Offices</h2>
                        <ul class="inline-list" id="location-list">
                            <!-- REMOVE LIST ITEMS BELOW AS APPROPRIATE TO REFLECT NUMBER OF OFFICES -->
                            <li><a href="#location-1"><?php echo $location; ?></a></li>
                            <li><a href="#location-2">Location</a></li>
                            <li><a href="#location-3">Location</a></li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- END LEAD SECTION -->

    <!-- LOCATION 1 START -->
    <section id="location-1">
    
        <div class="container">
        
            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100940.14245968236!2d-122.43759999999999!3d37.75769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2suk!4v1407503223429" frameborder="0" style="border: 0px;"></iframe>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3><?php echo $location; ?></h3>
                        <h4><?php echo $company_name; ?></h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Zip or Post Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 08:00am - 05:30pm</p>
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- LOCATION 1 END -->

    <!-- LOCATION 2 START -->
    <section id="location-2">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.07122984118!2d-122.43759999999999!3d37.75769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2suk!4v1407136288113" width="600" height="450" frameborder="0" style="border: 0px;"></iframe>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>Location</h3>
                        <h4><?php echo $company_name; ?></h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Postal or Zip Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:<?php echo $phone_2; ?>"><?php echo $phone_2; ?></a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 08:00am - 05:30pm</p>  
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- LOCATION 2 END -->

    <!-- LOCATION 3 START -->
    <section id="location-3">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.07122984118!2d-122.43759999999999!3d37.75769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2suk!4v1407136288113" width="600" height="450" frameborder="0" style="border: 0px;"></iframe>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>Location</h3>
                        <h4><?php echo $company_name; ?></h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Postal or Zip Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:<?php echo $phone_3; ?>"><?php echo $phone_3; ?></a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 08:00am - 05:30pm</p>
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- LOCATION 3 END -->