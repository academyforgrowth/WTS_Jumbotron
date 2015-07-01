    <nav role="navigation" class="navbar navbar-default navbar-fixed-top" id="topnav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#main_nav" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img alt="" src="admin/img/logo.png" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="main_nav">
                <ul class="nav navbar-nav">
                    <!-- ABOUT -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            About Us<span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="about-us.php#ethos">Our Company</a></li>
                            <li><a href="about-us.php#promises">Our Promises</a></li>
                            <li><a href="super-accountant.php">The Super <?php echo $business_4; ?></a></li>
                        </ul>
                    </li>
                    <!-- SERVICES -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">How We Help <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="how-we-help.php">Services</a></li>
                            <li><a href="how-we-help.php#compliance">Compliance</a></li>
                            <li><a href="how-we-help.php#time-saving">Time-Saving</a></li>
                            <li><a href="how-we-help.php#value-added">Giving You More</a></li>
                        </ul>
                    </li>
                    <!-- WHO WE HELP -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Expertise <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="who-we-help.php">Here For You</a></li>
                            <li><a href="who-we-help.php#who-we-help">Who We Help</a></li>
                            <li><a href="team.php">The Team</a></li>
                            <li class="divider"> </li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>
                    </li>
                    <!-- CONTACT -->
                    <li><a href="contact-us.php">Contact</a></li>
                    <!-- GROWTH -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Grow Your Business <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="business-growth.php">Business Growth System</a></li>
                            <li><a href="business-builder.php">Free Business Builder Newsletter</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="nav navbar-nav navbar-right">
                    <a href="tel:<?php echo $phone; ?>"><span class="phone"><em class="icon-phone"></em><?php echo $phone; ?></span></a>
                    <a class="btn btn-danger navbar-btn" href="#meeting">FREE Meeting</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>