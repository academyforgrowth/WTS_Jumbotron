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
                        <img class="img-responsive img-mobile" src="images/contactmap.png" alt="Contact Our Friendly Team, ready for all of your tax, <?php echo $business_5; ?> and financial needs">
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
    <!-- END CALL TO ACTION -->

    <!-- CONTACT START -->
    <?php include ("admin/snippets/contact.php"); ?>
    <!-- CONTACT END -->

    <!-- CLINCH -->
    <section id="clinch">
    
        <div class="container text-center">
            <p class="lead"><strong>So what are you waiting for?</strong> Call Today and talk to us about how we can make a real difference to your business. Arrange your <span class="text-danger">FREE, No-Obligation Meeting</span> using the form below or call us direct on <span class="text-danger"><?php echo $phone; ?></span>.</p>
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
                        <?php include ("php/enquiry_form.php"); ?>
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
                                <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super <?php echo $business_4; ?> can make to your business! 
                                <p class="undecided text-center">Remember, you can call us with any questions direct on <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> OR you can find our contact details <a href="contact-us.php">here</a></p>
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