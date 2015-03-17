<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Who We Help | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
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
            
                    <div class="hidden-xs col-sm-7">
				        <img class="img-responsive" src="images/helping.png" alt="Whatever Challenges Your Business Faces, We're Here To Help">
                    </div>

                    <!--  description-->
                    <div class="text-right col-md-5">
                        <h2 class="headline">HERE FOR YOU</h2>
                        <hr>
                        <p class="lead">No matter what type of business you're running, we have the tools and the expertise to help!</p>
                        <p>Call Us Today And Find Out<br> <strong>What We Can Do For Your Business</strong></p>
                        <hr>
                        <h2><span class="standout">Call <?php echo $phone; ?></span></h2>
                    </div>
                    <!-- / description-->
                
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

                <div class="col-12 col-lg-12 text-center">
                    <div class="page-header">
                        <h1><?php echo $business; ?> in <?php echo $location; ?> Helping Small Businesses Grow &amp; Reach Their Goals</h1>
                        <h2>We don't JUST do the books</h2>
                        <p class="lead">The landscape for small and medium business is ever more competitive. The market is forever changing, and its easy to get left behind.</p>
                        <p class="lead">That's why we provide innovative solutions tailored for your business, to meet the real challenges you face on a daily basis.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END LEAD SECTION -->
    
    <!-- START FEATURE -->
    <section class="altcolor2" id="who-we-help">
        <div class="container text-center"> 
            <h2 class="page-header">Solutions for EVERY BUSINESS, in EVERY circumstance</h2>
            <p class="lead">We are here to give you the edge over your rivals. Working closely with you, our experts can give your business solutions to achieve your goals. We work with ALL types of businesses with ALL types of owners.</p>
            <p class="lead">We also have specific expertise working with [list any specific industries that you have specialist expertise in – it doesn't matter if you don't list any here]</p>
            <p class="lead">We love making lasting, rewarding working relationships with our clients, and we build these relationships with all types of owners and directors.</p>

            <div class="row">

                <p class="lead separator">... and we are here to help <strong>business owners</strong> who are...</p>
                
                <div class="row">
                    
                    <div class="row">
                        
                        <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 text-center">      
                            <i class="icon-ok-sign icon-4x text-info"></i> 
                        </div>   
                        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item text-left"><strong>Ambitious &amp; Entrepreneurial -</strong> The only limit is your ambition. We'll provide the structure for you to get to the next level, and the next, and the next...</p> 
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 text-center">  
                                <i class="icon-ok-sign icon-4x text-info"></i> 
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item text-left"><strong>Content -</strong> We'll help you make the most of your business and ensure you remain compliant with as little fuss as possible.</p> 
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 text-center">
                                <i class="icon-ok-sign icon-4x text-info"></i> 
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item text-left"><strong>Dissatisfied or "Lost" -</strong> You may have fallen out of love with your business, but we can help you find the heartbeat you felt in the beginning, or if not, we can help you exit your business on your terms, in the best possible way.</p> 
                        </div>

                    </div>

                    <div class="row">

                    	<p class="lead text-center conclusion">No matter where your business is in its development, we can help you towards a better future.</p>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- END FEATURE -->

    <!-- CLINCH -->
    <section id="clinch">
        <div class="container text-center">
            <p class="lead"><strong>So what are you waiting for?</strong> Call Today and talk to us about how we can make a real difference to your business. Arrange your <span class="text-danger">FREE, No-Obligation Meeting</span> using the form below or call us direct on <span class="text-danger"><?php echo $phone; ?></span>.</p>
        </div>
    </section>
    <!-- END CLINCH -->

    <!-- MEETING -->
    <section id="meeting">
        <div class="well">
            <div class="container">
            
                <div class="row">
                
                    <div class="col-xs-12 col-md-6">
                        <h3 class="page-header text-danger text-center" style="padding-top:7px;"><strong>ARRANGE YOUR FREE MEETING TODAY! JUST FILL OUT OUR QUICK AND EASY FORM...</strong></h3>
                        <p class="text-danger text-center">At the <strong>FREE</strong>, No-Obligation Meeting You Will Receive:</p>
                        <ul class="text-danger text-justify">
                            <li>3 proven and easy-to-apply strategies which could add hundreds (even thousands) of value to your business</li>
                            <li>Powerful solutions to your most pressing financial challenges (cash flow, cost management, profitability, etc).</li>
                            <li><?php echo $currency; ?>100 to your favourite charity if you do not consider our meeting to be of immense value to you</li>
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

    <!-- UNDECIDED -->
    <section id="call-to-action">
        <div class="container" id="cta">
        
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                    <div class="row">
                    
                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super <?php echo $business_4; ?> can make to your business!</p>
                            <p class="undecided text-center">Remember, you can meet with us for free, with no-obligation to become our client. We'll even donate <?php echo $currency; ?>100 to your favourite charity if you don't feel that the meeting was worth your while.</p>
                            <p class="undecided text-center">So what have you got to lose? Call us direct on<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> OR you can find our contact details <a href="contact-us.php">here</a></p>
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
    <!-- END FOOTER -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>