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

                        <h2><?php if ($address2 == true) { echo 'Our Offices'; } elseif ($address3 == true) {echo 'Our Offices';} else { echo 'Our Office';} ?></h2>
                        
                        <?php

                        if ($address2 == true) {
                            echo
                        '<ul class="inline-list" id="location-list">
                            <li><a href="#location-1">'.$location.'</a></li>
                            <li><a href="#location-2">'.$location2.'</a></li>
                        </ul>'; }
                        elseif ($address3 == true) {
                            echo
                        '<ul class="inline-list" id="location-list">
                            <li><a href="#location-1">'.$location.'</a></li>
                            <li><a href="#location-2">'.$location2.'</a></li>
                            <li><a href="#location-3">'.$location3.'</a></li>
                        </ul>';
                        }
                        else {
                            echo '';
                        }

                        ?>

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
                        <?php echo $map1; ?>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3><?php echo $location; ?></h3>
                        <h4><?php echo $company_name; ?></h4>
                        <p><?php echo $address_line1; ?><br />
                            <?php echo $address_line2; ?><br />
                            <?php echo $address_line3; ?><br />
                            <?php echo $address_line4; ?><br />
                            <?php echo $address_line5; ?><br /></p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri <?php echo $opening_hours; ?></p>
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- LOCATION 1 END -->

    <!-- LOCATION 2 START -->
        <?php
        if ($address2 == true){
            echo
    '<section id="location-2">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        '.$map2.'
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>'.$location2.'</h3>
                        <h4>'.$company_name.'</h4>
                        <p>'.$address2_line1.'<br />
                                '.$address2_line2.'<br />
                                '.$address2_line3.'<br />
                                '.$address2_line4.'<br />
                                '.$address2_line5.'<br /></p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:'.$phone_2.'">'.$phone_2.'</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri '.$opening_hours.'</p>  
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>';
    } else {
    echo '';
}
    ?>
    <!-- LOCATION 2 END -->

    <!-- LOCATION 2 & 3 START -->
    <?php
        if ($address3 == true){
            echo
    '<section id="location-2">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        '.$map2.'
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>'.$location2.'</h3>
                        <h4>'.$company_name.'</h4>
                        <p>'.$address2_line1.'<br />
                                '.$address2_line2.'<br />
                                '.$address2_line3.'<br />
                                '.$address2_line4.'<br />
                                '.$address2_line5.'<br /></p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:'.$phone_2.'">'.$phone_2.'</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri '.$opening_hours.'</p>  
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="location-3">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <!-- MAP -->
                        '.$map3.'
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>'.$location3.'</h3>
                        <h4>'.$company_name.'</h4>
                        <p>'.$address3_line1.'<br />
                                '.$address3_line2.'<br />
                                '.$address3_line3.'<br />
                                '.$address3_line4.'<br />
                                '.$address3_line5.'<br /></p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:'.$phone_3.'">'.$phone_3.'</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri '.$opening_hours.'</p>
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>';
    } else {
    echo '';
}
    ?>
    <!-- LOCATION 2 & 3 END -->