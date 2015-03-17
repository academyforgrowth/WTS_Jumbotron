<?php  

include 'admin/var.php';
include 'admin/language.php';

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Our Services | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
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

                    <div class="vertalign col-xs-12 col-sm-5 hidden-md hidden-lg">
                        <!-- IMAGE HERE -->
                        <img class="img-responsive img-mobile" src="images/team.png" alt="We save you money, save you time AND keep you compliant, but we are much more than 'just an <?php echo $business_3; ?>'">
                        <!-- END IMAGE -->
                    </div>                
                    <div class="vertalign hidden-xs hidden-sm col-md-7">
                        <!-- IMAGE HERE -->
                        <img class="img-responsive" src="images/team.png" alt="We deliver services to suit your budget and circumstances">
                        <!-- END IMAGE -->
                    </div>                  
    
                    <!-- HEADLINE -->              
                    <!--  description-->
                    <div class="vertalign text-right col-xs-12 col-sm-7 col-md-5">
                        <h2 class="headline">HOW WE HELP</h2>
                        <hr>
                        <p class="lead">
                            All of our Services come with <strong>FREE, UNLIMITED SUPPORT</strong>
                        </p>
                        <p>
                            Count on Us to deliver the services your business really needs
                        </p>
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
                        <h1>Everything you would expect from your <?php echo $business_3; ?>, and then some...</h1>
                        <h2>We do more so <span class="text-info">YOU can focus on what's important for your business</span></h2>
    
                        <p class="lead">All of our services are designed with you firmly in mind. We excel in forming a strong relationship with each and every client. To know you and your business, is to know how we can best serve you, so we take the time to really understand your needs, before recommending a collection of services which we know can be to  your advantage.</p> 
                        <p class="lead"> You can rest assured that, when you become our client, there will not be any hidden charges, and there won't be any nasty surprises.</p>
                        <p class="lead text-info">That's because all of our fees are fixed to one, manageable monthly fee agreed with you in advance.</p>
    
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END LEAD SECTION -->

    <!-- FEATURE SECTION -->
    <section class="altcolor2" id="services">
        <div class="container">
            
            <!-- SERVICES START -->
            <?php include ("admin/snippets/services.php"); ?>
            <!-- SERVICES END -->

            <div class="row marketing" id="value-added">
             
                <div class="text-center col-xs-12">
                    <h2 class="">Value-Added Services</h2>
                    <hr>
                    <p class="lead">
                        Our value added services are focused on making sure you earn more money and keep more of that money for you, your family and your lifestyle... whatever the size of your business or wallet.</p> 
                    <p class="lead"> 
                        They are designed to suit <strong>every client, in every circumstance</strong>.</p> 
                    <p class="lead"> 
                        We currently provide the following Value-Added services...</p>
                </div>        
            
                <div class="row">
                
                    <div class="col-sm-12">
                    
                        <div class="row">
                        
                            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                                <i class="icon-ok-sign icon-4x text-warning"></i> 
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                                <p class="list-item">Business PerformanceTRACKER</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                                <i class="icon-ok-sign icon-4x text-warning"></i> 
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                                <p class="list-item text-warning">DecisionMAKER</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                                <i class="icon-ok-sign icon-4x text-warning"></i> 
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                                <p class="list-item">BusinessBUILDER</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                                <i class="icon-ok-sign icon-4x text-warning"></i> 
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                                <p class="list-item">ProfitSAFE</p>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                                <i class="icon-ok-sign icon-4x text-warning"></i> 
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                                <p class="list-item">FutureSAFE</p>
                            </div>

                        </div>

                    </div>

                </div>
                            
                <p class="lead conclusion text-center">Our team provide a whole range of services to give your business the advantage. </p>
                <p class="lead text-center">Of course, this list doesn't cover everything. We take the time to discover what we can do <strong> to help you make the most out of your business</strong>, tailoring the services we offer in <strong>a bespoke package, unique to <u>your</u> business.</strong></p>
            
            </div>
            <!--row marketing -->

        </div>
        <!-- container -->

    </section>
    <!-- END FEATURE -->

    <!-- CLINCH -->
    <section id="clinch">
    
        <div class="container text-center">
            <p><strong>So what are you waiting for?</strong> Call Today and talk to us about how we can make a real difference to your business. Arrange your <span class="text-danger">FREE, No-Obligation Meeting</span> using the form below or call us direct on <span class="text-danger"><?php echo $phone; ?></span>.</p>
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
                            <li><strong><?php echo $currency; ?>100 to your <?php echo $favourite; ?> charity</strong> if you do not consider our meeting to be of immense value to you</li>
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

<!-- TO DO: UNDECIDED? LINK TO WATCH VIDEO SECTION -->

    <section id="call-to-action">
        <div class="container" id="cta">
            
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                    <div class="row">
                    
                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super <?php echo $business_4; ?> can make to your business! Remember, you can meet with us for free, with no-obligation to become our client. We'll even donate <?php echo $currency; ?>100 to your <?php echo $favourite; ?> charity if you don't feel that the meeting was worth your while. </p>
                            <p class="undecided text-center">So what have you got to lose? Call us direct on <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> OR you can find other ways to get in touch <a href="contact-us.php">here</a></p>
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