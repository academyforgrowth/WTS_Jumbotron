<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Thank you! | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>

    <!-- NAV START -->
    <?php include ("php/nav.php"); ?>
    <!-- NAV END -->

    <!-- LEAD SECTION -->
    
    <section id="lead-legal" class="no-jumbo">
        <div class="container">
            
            <div class="row">
                
                <div class="col-sm-12 text-center">
                    <div class="page-header">
                        <h1>Thank You</h1>
                        <h3 class="section-head">Thank you for signing up to the Business Builder Newsletter.</h3>
                        <p class="lead">You will receive your free copy on next publication date. If you would like to speak to us about the Business Builder Newsletter or any part of our service, please call us on <?php echo $phone; ?>.
                        </p>
                        <p class="lead"><a class="text-info" href="index.php">Return to the homepage</a></p>
                    </div>
                </div>
                <hr>  

            </div>

        </div>
    </section>

    <!-- END LEAD SECTION -->

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
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super Accountant can make to your business! 
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

    <!-- FOOTER -->
    <?php include ("php/footer.php"); ?>
    <!-- END FOOTER -->

    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->

</body>
</html>