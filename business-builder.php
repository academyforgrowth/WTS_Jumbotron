<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>The Business Builder Newsletter | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>
    
    <!-- NAV -->
    <nav id="topnav" class="navbar navbar-default navbar-fixed-top " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- ABOUT -->              
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="about-us.php#ethos">Our Company</a></li>
                            <li><a href="about-us.php#promises">Our Promises</a></li>
                            <li><a href="super-accountant.php">The Super Accountant</a></li>
                        </ul>
                    </li>
                    <!--SERVICES -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="how-we-help.php">Services</a></li>        
                            <li><a href="how-we-help.php#compliance">Compliance</a></li>
                            <li><a href="how-we-help.php#time-saving">Time-Saving</a></li>
                            <li><a href="how-we-help.php#value-added">Giving You More</a></li>
                        </ul>   
                    </li>
                    <!-- WHO WE HELP -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Expertise <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">      
                            <li><a href="who-we-help.php">Here For You</a></li>
                            <li><a href="who-we-help.php#who-we-help">Who We Help</a></li>
                            <li><a href="team.php">The Team</a></li>
                            <li class="divider"></li>
                            <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>   
                    </li>
                    <!-- CONTACT US -->
                    <li><a href="contact-us.php">Contact</a></li>
                    <!-- GROWTH -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grow Your Business <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="business-growth.php">Business Growth System</a></li>
                            <li><a href="business-builder.php">Free Business Builder Newsletter</a></li>
                        </ul>
                    </li>
                </ul>
            
                <div class="nav navbar-nav navbar-right">
                    <a href="tel:0123 456 789"><span class="phone"><i class="icon-phone"></i>0123 456 789</span></a> 
                    <a href="#meeting" class="btn btn-danger navbar-btn">FREE Meeting</a> 
                </div>

            </div>
            <!-- /.navbar-collapse --> 
        </div>  
    </nav>

    <!-- END NAV -->

    <!-- MAIN HEADER -->  
    <header id="top">
        <!-- Main -->
        <div class="jumbotron">
            <div class="container">
                
                <div class="row">
                    
                    <div class="vertalign col-sm-6" >
                        <img class="img-responsive hidden-xs" src="images/newsletter_cover.png" alt="Sign up for regular newsletter, packed full of helpful advice for the small business owner" />
                    </div>

                    <!--  description-->
                    <div class="vertalign text-right col-xs-12 col-sm-6">
                        <h2 class="headline">THE BUSINESS BUILDER NEWSLETTER</h2>
                        <hr>
                        <p class="lead">
                            Innovative Ideas &amp; Practical Advice To Give Small Business Owners The Edge...
                        </p>
                        <p>
                            <a class="header-link" href="#business-builder-form" alt="Sign up for the Business Builder Newsletter">Sign up Today</a> 
                        </p>
                        <hr>
                        <h2><span class="standout">Call 0123 456 789</span></h2>                    
                    </div>
                    <!--end headline column-->
                
                </div>
                <!-- /ROW-->
            </div>
        </div>
    </header>
    <!-- END MAIN HEADER -->

    <!-- CALL TO ACTION -->
    <div class="well" style="margin-top:0px; padding-top:30px;">
        <div class="container">
            
            <div class="row">

                <div class="col-xs-12 col-sm-9 col-md-8">
				    <p class="lead text-danger text-center" style="padding-top:7px;"><strong>REQUEST YOUR FREE, NO-OBLIGATION MEETING TODAY</strong></p>
                </div> 
                <div class="text-center col-xs-12 col-sm-3 ">
				    <a class="btn btn-danger btn-block btn-md" href="#meeting" title="">MEET US</a>
                </div>

            </div>

        </div>
    </div>
    <!-- END CALL TO ACTION -->

    <!-- LEAD SECTION -->

    <section id ="lead">
        <div class="container">
            
            <div class="row">

                <div class="visible-xs">
                    <img class="img-responsive img-mobile" src="images/newsletter_cover.png" alt="" />
                </div>
                <div class="col-12 col-lg-12 text-center">
                    <div class="page-header">
                        <h1>Proven Strategies To Help You Build a Better Business</h1>
                        <h2>Our regular newsletter is crammed full of easy-to-apply strategies to help any director/owner who wants to take <strong><span class="text-info">their business to the next level</span>.</strong></h2>
                        <p class="lead">We genuinely believe that it is required reading, containing invaluable information for every business owner, or indeed anybody interested in developing their firm or organisation.</p>
                        <p class="lead">Simply complete the details below and we'll add you to the mailing list. You will not receive any unsolicited communications and you can opt-out at any time.</p>
                    </div>
                </div>

            </div>
        
            <div class="row">

                <div class="col-sm-offset-3 col-sm-6">
                    <form>
                        <label class="control-label" for="FirstName"></label>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Your First Name" id="FirstName" name="FirstName" class="form-control" />
                        </div>
                        <br />
                        <label class="control-label" for="LastName"></label>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Your Last Name" id="LastName" name="LastName" class="form-control" />
                        </div>
                        <br />
                        <label class="control-label" for="EmailAddress"></label>
                        <div class="col-xs-12">
                            <input type="email" placeholder="Your Email Address" id="EmailAddress" name="EmailAddress" class="form-control" />
                        </div>
                        <br />
                        <label class="control-label" for="CAT_Custom_1038426"></label>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Address" id="CAT_Custom_1038426" name="CAT_Custom_1038426" class="form-control" />
                        </div>
                        <br />
                        <label class="control-label" for="CAT_Custom_1038427"></label>
                        <div class="col-xs-12">
                            <input type="text" placeholder="State Or County" id="CAT_Custom_1038427" name="CAT_Custom_1038427" class="form-control" />
                        </div>
                        <br />
                        <label class="control-label" for="CAT_Custom_1038428"></label>
                        <div class="col-xs-12">
                            <input type="text" placeholder="Zip Or Postcode" id="CAT_Custom_1038428" name="CAT_Custom_1038428" class="form-control" />
                        </div>
                        <br />
                        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 text-center">
                        </div>
                        <br />
                        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 text-center">
                            <input type="submit" style="margin-top: 6px;" class="form-control" />
                        </div>
                    </form>
                </div>
                <!-- col -->

            </div>

        </div>
    </section>

    <!-- MEETING -->

    <section id="meeting">
        
        <div class="container">    
            <div class="well">

                <div class="row">

                    <div class="col-xs-12 col-md-6 text-justify text-danger meeting-sell">
                        <h3 class="text-danger text-center" style="padding-top:7px;"><strong>ARRANGE YOUR FREE MEETING TODAY! JUST FILL OUT OUR QUICK AND EASY FORM...</strong></h3>
                        <h4 class="text-center">At the <strong>FREE</strong>, No-Obligation Meeting You Will Receive:</h4>
                        <ul>
                            <li><strong>3 proven and easy-to-apply</strong> strategies which could add hundreds (even thousands) of value to your business</li>
                            <li><strong>Powerful solutions</strong> to your most pressing financial challenges (cash flow, cost management, profitability, etc).</li>
                            <li><strong>£100 to your favourite charity</strong> if you do not consider our meeting to be of immense value to you</li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <!--FORM: INPUTS NAME, LAST NAME, Company Name, EMAIL ADDRESS PHONE NUMBER (OPTIONAL)-->                
                        <form>
                            <div style="margin-top: 40px;" id="meet-form" class="form-horizontal">
                                <label class="control-label" for="FirstName"></label>
                                <div class="col-xs-12">
                                    <input type="text" placeholder="Your First Name" id="FirstName" name="FirstName" class="form-control" />
                                </div>
                                <br />
                                <label class="control-label" for="LastName"></label>
                                <div class="col-xs-12">
                                    <input type="text" placeholder="Your Last Name" id="LastName" name="LastName" class="form-control" />
                                </div>
                                <br />
                                <label class="control-label" for="Company"></label>
                                <div class="col-xs-12">
                                    <input type="text" placeholder="Your Company Name (optional)" id="Company" name="Company" class="form-control" />
                                </div>
                                <br />
                                <label class="control-label" for="WorkPhone"></label>
                                <div class="col-xs-12">
                                    <input type="text" placeholder="Your Telephone Number" id="WorkPhone" name="WorkPhone" class="form-control" />
                                </div>
                                <br />
                                <label class="control-label" for="EmailAddress"></label>
                                <div class="col-xs-12">
                                    <input type="email" placeholder="Your Email Address" id="EmailAddress" name="EmailAddress" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 text-center">
                                </div>
                                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4 text-center">
                                    <button class="btn btn-lg btn-danger" style="margin-top: 6px;" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM -->
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- END MEETING -->

    <section id="call-to-action">
        <div class="container" id="cta">
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <div class="row">
                        
                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super Accountant can make to your business!</p>
                            <p class="undecided text-center">Remember, you can call us with any questions direct on <a href="tel:0123 456 789">0123 456 789</a> OR you can find our contact details <a href="contact-us.php">here</a></p>
                        </div> 
                        <div class="text-center col-md-6 col-md-offset-3">
                            <a class="btn  btn-danger btn-block btn-lg" href="#meeting" title="">FREE MEETING</a>
                        </div> 

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ASSOCIATIONS -->
    <?php include ("admin/snippets/assoc_logos.php"); ?>
    <!-- END ASSOCIATIONS -->

    <!-- FOOTER START -->
    <?php include ("php/footer.php"); ?>
    <!-- FOOTER END -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>