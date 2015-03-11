<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Testimonials | Company Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Company Name are accountants in Location. Here are just a few of the testimonials written by business clients & customers in our area about the service they receive. Call today on 0123 456 789. There's always room for one more happy customer.">
    <!-- INCLUDES -->
    <!-- Latest compiled and minified CSS BS 3.0. latest minifined--> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/theme-custom.css" rel="stylesheet">
    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Comfortaa:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
    <!-- FontAwesome icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
    <!-- FAV & TOUCH ICONS -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
				    
                    <!--CONTACT IMAGE-->
                    <div class="vertalign col-xs-12 col-sm-12 hidden-md hidden-lg">
                        <!-- IMAGE HERE -->
                        <img class="img-responsive img-mobile" src="images/testimonials.png" alt="See for yourself what our satisfied clients say about our service">
                        <!-- END IMAGE -->
                    </div>  
                    <div class="vertalign hidden-xs hidden-sm col-md-7">
                        <!-- IMAGE HERE -->
                        <img class="img-responsive" src="images/testimonials.png" alt="See for yourself what our satisfied clients say about our service">
                        <!-- END IMAGE -->
                    </div>  
        
                    <!-- HEADLINE -->
                    <div class="text-right vertalign col-xs-12 col-md-5">
                        <h2 class="headline">WHAT OUR CLIENTS SAY</h2>
                        <hr>
                        <p class="lead">Of Course, we think we do a <strong><em>great job for our clients</em></strong></p>
                        <p>.. but we understand if you would rather <strong><em>hear it from them..</em></strong></p>
					   <h2><span class="standout">Call 0123 456 789</span></h2> 
                    </div>
			
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
    <!-- CALL TO ACTION -->

    <!-- LEAD SECTION -->

    <section id ="lead">
        <div class="container">
		
            <div class="row">
			
                <div class="col-12 col-lg-12 text-center">
				    <div class="page-header">
					   <h1>At Company Name, <span class="">we put YOU first.</span></h1> 
					   <h2>We Take The Time to Ensure Each and Every One of Our Clients Gets<br><strong><span class="text-info">The Personal Attention They Deserve</span></strong></h2>
					   <p class="lead">Over the years, we have worked hard to earn the trust of our clients and developed some great working relationships along the way. Many of our clients have been kind enough to leave some feedback recognising the work that we do for them.</p>
					   <p class="lead">Hopefully this will go some of the way to show the attention you can expect to receive when you become our client.</p>
				    </div>
                </div>
            
            </div>

            <!-- TESTIMONIAL =============================== -->

            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>

            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>

            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>

            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>
            
            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>
            
            <div class="panel panel-default testimonial">
                <div class="panel-body">
                    <blockquote class="testimonial">
                        <h4>Headline</h4>
                        <p>Testimonial</p>
                        <p class="text-right"><small>Client Name</small></p>
                    </blockquote>
                </div>
            </div>

	   </div>
    </section>

    <!-- CLINCH -->
    <section id="clinch">
        <div class="container">
            <p class="text-center">To see how you too can benefit from working with us, <a href="#meeting"><span class="text-danger">request your FREE Meeting today</span></a>. Enter your details in the form or phone us direct on <span class="text-danger">0123 456 789.</span></p>
        </div>
    </section>
    <!-- END CLINCH -->
    
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

    <!-- NOT CONVINCED =================================== -->
    <section id="call-to-action">
        <div class="container" id="cta">
            
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <div class="row">

                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super Accountant can make to your business! Remember, you can meet with us for free, with no-obligation to become our client. We'll even donate £100 to your favourite charity if you don't feel that the meeting was worth your while.</p>
                            <p class="undecided text-center">So what have you got to lose? Call us direct on <a href="tel:0123 456 789">0123 456 789</a> OR you can find other ways to get in touch <a href="contact-us.php">here</a>.</p>
                        </div> 
                        <div class="text-center col-md-6 col-md-offset-3">
                            <a class="btn  btn-danger btn-block btn-lg" href="#meeting" title="">FREE MEETING</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- END NOT CONVINCED -->

    <!-- ASSOCIATIONS -->
    
    <div style="margin-bottom: 0px; margin-top: 0px;" id="associations" class="well">
        <div class="container-fluid">
            
            <div class="row">
                
                <div class="col-xs-6 col-sm-4 col-md-offset-2 col-md-2 text-center">
                    <div class="well-sm">
                        <img alt="" width="100" height="100" src="images/assoclogo1.png" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
                    <div class="well-sm">
                        <img alt="" width="100" height="100" src="images/assoclogo2.png" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
                    <div class="well-sm">
                        <img alt="" width="100" height="100" src="images/assoclogo3.png" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
                    <div class="well-sm">
                        <img alt="" width="100" height="100" src="images/assoclogo4.png" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
                    <div class="well-sm">
                        <img alt="" width="100" height="100" src="images/assoclogo5.png" />
                    </div>
                </div>
            
            </div>
        
        </div>
    </div>

    <!-- END ASSOCIATIONS -->

    <!-- FOOTER -->
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
                                <h5>Company Name</h5>
                                Address Line 1<br />
                                Address Line 2<br />
                                Suburb or District<br />
                                Town or City<br />
                                State, County or Province<br />
                                Zip or Post Code
                                <!--Phone Number -->
                                <p><abbr title="Phone">Tel:</abbr> 0123 456 789</p>
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
            <p class="pull-right dim">Company Name<br />
            Registered in Country: #00000000<br />
            &copy; Company Name &copy;Academy for Growth, 2009 to present.<br />
            Site by Academy For Growth Ltd</p>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Javascript -->
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE CUSTOM SCROLLER -->
    <script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
    <script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
    <script src="assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>
    <!-- responsive video-->
    <script type="text/javascript" src="http://afg.evsuite.com/player/QUZHLUV1cm9zLU5vLUJvb2stTW9iaWxlLTUxMngyODgubXA0/?responsive=1&autoResponsive=1&container=evp-M6I7N835X6"></script>
    <!-- / responsive video-->

    <!--loCAL sCROLL -->
    <script>
        jQuery(document).ready(function(){
        jQuery('#topnav').localScroll({offset: {top:0}});
        jQuery('#startbtn').localScroll(5000);
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        //jQuery('#top-section').parallax("50%", 0.1);
        //jQuery('#Section-1').parallax("50%", 0.3);
        //jQuery('#Section-2').parallax("50%", 0.1);
        //jQuery('#foot-sec').parallax("50%", 0.1);
        })
    </script>

    <script>
        //hide menu after click on mobile
        jQuery('.navbar .nav > li > a').click(function(){
        jQuery('.navbar-collapse.navbar-ex1-collapse.in').removeClass('in').addClass('collapse').css('height', '0');
        });
    </script>

    <!-- NICE Scroll plugin -->
    <script>
        //scroll bar custom
        jQuery(document).ready(
        function() {  
        jQuery("html").niceScroll({cursorcolor:"#333"});
        }
        );
    </script>

    <!-- saved from url http://www.bootstraptor.com ==========================
    This template build on Bootstrap 3 Developer  Kit v.2.0. by @Bootstraptor
    Read usage license on http://www.bootstraptor.com
    ##########################################################################-->

</body>
</html>