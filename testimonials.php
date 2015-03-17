<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Testimonials | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>
        
    <!-- NAV START -->
    <?php include ("php/nav.php"); ?>
    <!-- NAV END -->

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
                        <p>... but we understand if you would rather <strong><em>hear it from them...</em></strong></p>
					   <h2><span class="standout">Call <?php echo $phone; ?></span></h2> 
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
					   <h1>At <?php echo $company_name; ?>, <span class="">we put YOU first.</span></h1> 
					   <h2>We Take The Time to Ensure Each and Every One of Our Clients Gets<br><strong><span class="text-info">The Personal Attention They Deserve</span></strong></h2>
					   <p class="lead">Over the years, we have worked hard to earn the trust of our clients and developed some great working relationships along the way. Many of our clients have been kind enough to leave some feedback recognising the work that we do for them.</p>
					   <p class="lead">Hopefully this will go some of the way to show the attention you can expect to receive when you become our client.</p>
				    </div>
                </div>
            
            </div>

            <!-- TESTIMONIALS START -->
            <?php include ("admin/snippets/testimonials.php"); ?>
            <!-- TESTIMONIALS END -->

	   </div>
    </section>

    <!-- CLINCH -->
    <section id="clinch">
        <div class="container">
            <p class="text-center">To see how you too can benefit from working with us, <a href="#meeting"><span class="text-danger">request your FREE Meeting today</span></a>. Enter your details in the form or phone us direct on <span class="text-danger"><?php echo $phone; ?>.</span></p>
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
                            <li><strong><?php echo $currency; ?>100 to your favourite charity</strong> if you do not consider our meeting to be of immense value to you</li>
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
                            <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super <?php echo $business_4; ?> can make to your business! Remember, you can meet with us for free, with no-obligation to become our client. We'll even donate <?php echo $currency; ?>100 to your favourite charity if you don't feel that the meeting was worth your while.</p>
                            <p class="undecided text-center">So what have you got to lose? Call us direct on <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> OR you can find other ways to get in touch <a href="contact-us.php">here</a>.</p>
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
    <?php include ("admin/snippets/assoc_logos.php"); ?>
    <!-- END ASSOCIATIONS -->

    <!-- FOOTER START -->
    <?php include ("php/footer.php"); ?>
    <!-- END FOOTER -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>