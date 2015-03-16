<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Contact Us | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>

    <!-- NAV START -->
    <?php include ("php/nav.php"); ?>
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
                        <img class="img-responsive img-mobile" src="images/contactmap.png" alt="Contact Our Friendly Team, ready for all of your tax, accounting and financial needs">
                        <!-- END IMAGE -->
                    </div>  
                    <div class="vertalign hidden-xs hidden-sm col-md-7">
                        <!-- IMAGE HERE -->
                        <img class="img-responsive" src="images/contactmap.png" alt="Meet with us for FREE with absolutely no-obligation">
                        <!-- END IMAGE -->
                    </div>  
        
                    <!-- HEADLINE -->
                    <div class="text-right vertalign col-xs-12 col-md-5">
                        <h2 class="headline">CONTACT US</h2>
                        <hr>
                        <p class="lead">
                            Call, Email or Write To Us... We're here for <strong>you</strong>
                        </p>
                        <hr>
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
    <!-- END CALL TO ACTION -->

    <!-- LEAD SECTION -->

    <section id="lead">
        <div class="container">
        
            <div class="row">

                <div class="col-12 col-lg-12 text-center">
                    <div class="row page-header">
                        <h1>Contact Company Name</h1>
                        <h2>However you choose to get in touch, we're ready for your enquiry</h2>
                    </div>
                    
                    <div class="row">

                        <h2>Our Offices</h2>
                        <ul class="inline-list" id="location-list">
                            <!-- REMOVE LIST ITEMS BELOW AS APPROPRIATE TO REFLECT NUMBER OF OFFICES -->
                            <li><a href="#location-1">Location</a></li>
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
                        <h3>Location</h3>
                        <h4>Company Name</h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Zip or Post Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:023 456 789">0123 456 789</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 09:00 - 17:00</p>
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
                        <h4>Company Name</h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Postal or Zip Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:0123 456 789">0123 456 789</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 09:00 - 17:00</p>  
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
                        <iframe src="https://www.google.com/maps/embed?pb=<!1m18!1m12!1m3!1d50470 class="07122984118 43759999999999 75769999999999 ">                   </!1m18!1m12!1m3!1d50470>1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2suk!4v1407136288113" width="600" height="450" frameborder="0" style="border: 0px;"></iframe>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <!-- ADDRESS -->
                    <address class="office-info">
                        <h3>Location</h3>
                        <h4>Company Name</h4>
                        <p>Address Line 1<br />
                        Address Line 2<br />
                        Suburb or District<br />
                        Town or City<br />
                        State, County or Province<br />
                        Postal or Zip Code</p>
                        <h4><abbr title="Phone">Tel:</abbr></h4>
                        <p><a href="tel:0123 456 789">0123 456 789</a></p>
                    </address>
                    <h4>Opening Hours</h4>
                    <p>Mon-Fri 09:00 - 17:00</p>
                    <div>
                        <a href="#meeting" class="btn btn-danger btn-sm more">Request Meeting</a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- LOCATION 3 END -->

    <!-- CLINCH -->
    <section id="clinch">
    
        <div class="container text-center">
            <p class="lead"><strong>So what are you waiting for?</strong> Call Today and talk to us about how we can make a real difference to your business. Arrange your <span class="text-danger">FREE, No-Obligation Meeting</span> using the form below or call us direct on <span class="text-danger">0123 456 789</span>.</p>
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

    <section id="call-to-action">
            <div class="container" id="cta">
                
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <div class="row">
                            
                            <div class="col-lg-offset-2 col-lg-8">
                                <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super Accountant  can make to your business! 
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

    <!-- FOOTER START -->
    <?php include ("php/footer.php"); ?>
    <!-- END FOOTER -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>