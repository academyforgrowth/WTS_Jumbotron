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
    <?php include ("php/nav.php"); ?>
    <!-- END NAV -->

    <!-- MAIN HEADER -->  
    <header id="top">
        <!-- Main -->
        <div class="jumbotron">
            <div class="container">
                
                <div class="row">
                    
                    <div class="vertalign col-sm-6" >
                        <img class="img-responsive hidden-xs" src="admin/img/newsletter_cover.png" alt="Sign up for regular newsletter, packed full of helpful advice for the small business owner" />
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
                        <h2><span class="standout">Call <?php echo $phone; ?></span></h2>                    
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
                <!-- BUSINESS BUILDER FORM START -->
                <?php include ("php/business_builder_form.php"); ?>
                <!-- BUSINESS BUILDER FORM END -->

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
                            <li><strong><?php echo $currency; ?>100 to your favourite charity</strong> if you do not consider our meeting to be of immense value to you</li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <!--FORM: INPUTS NAME, LAST NAME, Company Name, EMAIL ADDRESS PHONE NUMBER (OPTIONAL)-->                
                        <form>
                            <?php include ("php/enquiry_form.php"); ?>
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
    <!-- FOOTER END -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>