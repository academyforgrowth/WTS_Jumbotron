<?php  

include 'admin/var.php';
include 'admin/language.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Index | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>
        
    <!-- NAV START -->
    <?php include ("php/nav.php"); ?>
    <!-- NAV END -->

    <!-- HEADER START -->
    <header id="top">
    
        <div class="jumbotron">
            <div class="container-fluid">
                    <div class="row">
                        <div style="text-align:center">
                            <h1 class="headline"><?php echo $business; ?> in <?php echo $location; ?></h1>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <h2 class="headline">GROW YOUR BUSINESS AND SAVE YOU MONEY</h2>
                    </div>
                    <hr>
                </div>
                <!-- HEADER ROW START -->
                <div class="row">
    
                    <!--  VIDEO START -->
                    <div class="col-sm-7 col-md-offset-1 col-md-5">
                        <div style="margin-top: 0.67em;" class="hidden-xs panel panel-default" id="video-container">
                            <div class="panel-heading text-center ">
                                <h4 class="text-success">JUST FOUR MINUTES OF YOUR TIME &amp; YOU WILL KNOW WHY THEY CALL US <span style="font-weight: bold;">"THE SUPER <?php echo $business_4; ?>"</span></h4>
                            </div>
                            <div class="panel-body">
                                <div class="vendor">
                                    <div class="container-video">
                                        <!-- VIDEO EMBED CODE START -->
                                        <?php include ("admin/content_holders/video.php"); ?>
                                        <!-- VIDEO EMBED CODE END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 0px; padding-top: 30px;" class="well visible-xs">
                        <div class="container">
                            <div class="row">
                                <div class=" col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <p style="padding-top: 7px;" class="lead text-danger text-center"><strong>DON'T TALK TO ANOTHER <?php echo $business_4; ?> UNTIL YOU'VE SEEN WHAT A SUPER <?php echo $business_4 ; ?> CAN DO FOR YOU!</strong></p>
                                </div>
                                <div class=" text-center col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <a href="#" class="btn btn-danger btn-block btn-md">WATCH OUR VIDEO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- VIDEO END -->

                    <!-- HEADLINE -->
                    <div class="text-right col-xs-12 col-sm-5 col-md-offset-1 col-md-4">
                        <!-- <h2 class="headline">DISCOVER THE <?php echo $business_4; ?> WHO CAN GROW YOUR BUSINESS AND SAVE YOU MONEY</h2> -->
                        <hr />
                        <p class="lead">Grow. Save Tax. Increase Profits. <em>Relax...</em></p>
                        <p>Call Us Today To Find Out How We Can Make A <strong>Real Difference to Your Business</strong></p>
                        <hr />
                        
                    </div>
                </div>
                <!-- HEADER ROW END -->
                <div class="row">
                    <h2 class="text-center"><span class="standout">Call <?php echo $phone; ?></span></h2>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <!-- CALL TO ACTION START -->
    <div style="margin-top: 0px; padding-top: 30px;" class="well">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-8">
                    <p style="padding-top: 7px;" class="lead text-danger text-center"><strong>REQUEST YOUR FREE, NO-OBLIGATION MEETING TODAY</strong></p>
                </div>
                <div class="text-center col-xs-12 col-sm-3">
                    <a href="#meeting" class="btn btn-danger btn-block btn-md">MEET US</a>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- TESTIMONIAL HEADLINES -->
    <?php include ("admin/snippets/top_testimonials.php"); ?>
    <!-- TESTIMONIAL HEADLINES END -->

    <!-- MEETING -->
    <section id="meeting">
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-justify text-danger meeting-sell">
                        <h3 style="padding-top: 7px;" class="text-danger text-center"><strong>ARRANGE YOUR FREE MEETING TODAY! JUST FILL OUT OUR QUICK AND EASY FORM...</strong></h3>
                        <h4 class="text-center">At the <strong>FREE</strong>, No-Obligation Meeting You Will Receive:</h4>
                        <ul>
                            <li><strong>3 proven and easy-to-apply</strong> strategies which could add hundreds (even thousands) of value to your business</li>
                            <li><strong>Powerful solutions</strong> to your most pressing financial challenges (cash flow, cost management, profitability, etc).</li>
                            <li><strong><?php echo $currency; ?>100 to your <?php echo $favourite; ?> charity</strong> if you do not consider our meeting to be of immense value to you</li>
                        </ul>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        
                        <!-- FORM: INPUTS NAME, LAST NAME, Company Name, EMAIL ADDRESS PHONE NUMBER (OPTIONAL) -->
                        <?php include ("php/enquiry_form.php"); ?>
                        <!-- END FORM -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MEETING -->

    <section id="lead-copy">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <div class="page-header">
                        <h1>Business <?php echo $business; ?> and Growth Consultants in <?php echo $location; ?></h1>
                        <h2>Providing <?php echo $business_5; ?> and Consultancy Services to help you <span class="text-info">Grow, Increase Profits, Save Tax, Relax...</span></h2>
                    </div>
                </div>
            </div>

            <!-- START FEATURE -->
            <div class="row marketing">
                
                <!-- FEATURE 1 -->
                <!--  description-->
                <div class="visible-xs visible-sm">
                    <img alt="Logo" src="admin/img/logobig.png" class="img-responsive img-mobile" />
                    <!--</div>-->
                </div>
                <h2 class="text-center section head">KEEPING YOU COMPLIANT... SAVING YOU TIME... SAVING YOU MONEY... AND SO MUCH MORE</h2>
                
                <div class="row">
                    <div class="vertalign text-left col-xs-12 col-md-6">
                        <p class="lead"><strong><?php echo $company_name; ?> is the leading provider of <?php echo $business_2; ?> and tax-planning services in <?php echo $location; ?>.</strong> We do everything that you would expect your <?php echo $business_3; ?> to do, <em>but we also do so much more...</em></p>
                        <p class="lead">We work with you to establish <strong>your goals</strong> for <strong>your business</strong> - and help plan your financial affairs accordingly. All of the compliance services that we offer are fully managed by our expert team, taking the stress away from you.</p>
                        <p class="lead">Take advantage of our compliance, time-saving and value-added services and focus your valuable time and resources on doing what you do best: <strong>your business.</strong></p>
                        <div class="row">
                            <div class="text-center">
                                <a class="btn btn-info btn-lg more" href="how-we-help.php"><em class="icon-info-sign"></em> HOW WE HELP</a>
                            </div>
                        </div>

                    </div>
                    <!-- / description-->
        
                    <div class="vertalign col-xs-12 col-md-6">
                        <img alt="" src="admin/img/logobig.png" class="img-responsive hidden-xs hidden-sm" />
                    </div>
                </div>
            </div>
            <!-- END FEATURE 1 -->

            <hr />
            <h2 class="text-center uppercase">WE'RE NOT LIKE THE OTHER <?php echo $business; ?></h2>
            
            <!-- FEATURE 2 -->
            <div id="marketing" class="row">
                <div class="vertalign col-xs-12 col-md-6">
                    <img alt="We Are Different" src="images/different.png" class="img-responsive hidden-xs hidden-sm" />
                    <!--</div>-->
                </div>
                <!--  description-->
                <div class="vertalign text-left col-xs-12 col-md-6">
                    <hr />
                    <p class="lead">The frustrations felt by business owners are often the same. Are you tired of unpredictable fees? Do you find it difficult to get a straight answer? Are your calls not being returned (and when they are, they're returned late)? Do you feel your <?php echo $business_3; ?> should be doing more to hold onto as much of your hard-earned profits as possible?</p>
                    <p class="lead">Any <?php echo $business_4; ?> can produce a decent set of accounts. But very few have the skills to create <em>a relationship where the client really sees their <?php echo $business_3; ?> as a true asset to their business</em>. Because, a truly great <?php echo $business_3; ?>, <strong>A SUPER <?php echo $business_4; ?>,</strong> does much more than just provide <?php echo $business_2; ?> services.</p>
                    <p class="lead"><strong>A SUPER <?php echo $business_4; ?></strong> is one that gives your business the advantage it needs and demands.</p>
        
                    <div class="row">
                        <div class="text-center">
                            <a class="btn btn-info btn-lg more" href="super-accountant.php"><em class="icon-info-sign"></em> OUR ETHOS</a>
                        </div>
                    </div>

                </div>
                <!-- / description-->
            </div>
            <!-- END FEATURE 2 -->
            <hr />
        
            <!-- FEATURE 3 -->
            <div class="row marketing">
                <h2 class="text-center">GROWING YOUR BUSINESS</h2>
                <!--  description-->
                <div class="text-left vertalign col-xs-12 col-md-6">
                    <hr />
                    <p class="lead">If you are looking to grow your business, we have THE solution. We <?php echo $recognise; ?> that most of our business clients want more sales, more customers and more profit (especially in the current economic climate). Of course this not only helps you, but in turn the more money you make, the more opportunities we'll have to help you.</p>
                    <p class="lead">We have invested a significant sum in sponsoring the <strong>Business Growth System (BGS)</strong>, one of the world's most successful marketing and business growth systems.</p>
                    <p class="lead">Sponsoring the BGS has given us the opportunity to make it available to ALL our business clients completely <strong>FREE OF CHARGE</strong>. </p>
                    <p class="lead">Why not join the thousands of directors and owners of small businesses worldwide who have been given with the <strong>tools and strategies they need to successfully grow their business?</strong></p>

                    <div class="row">
                        <div class="text-center">
                            <a class="btn btn-info btn-lg more" href="business-growth.php"><em class="icon-info-sign"></em> GROW YOUR FIRM</a>
                        </div>
                    </div>

                </div>
        
                <div class="vertalign col-sm-6">
                    <img alt="If your goal is to grow your business then we can help." src="images/seo15.png" class="img-responsive hidden-xs hidden-sm" />
                </div>
                <!-- / description-->
            </div>
            <!--END FEATURE 3 -->
            <hr />

        </div>

        <!-- CONTAINER-->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row"><abbr></abbr>
                            <div class="col-md-9">
                                <p class="lead">SO GO AHEAD,<span> REQUEST YOUR FREE MEETING TODAY. CALL US ON <?php echo $phone; ?> OR CLICK THE BUTTON TO USE OUR QUICK AND EASY WEB FORM.</span></p>
                            </div>
                            <div class="text-center col-md-3">
                                <a href="#meeting" class="btn  btn-danger btn-block btn-lg">FREE MEETING</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- ASSOCIATIONS -->
    <?php include ("admin/snippets/assoc_logos.php"); ?>
    <!-- END ASSOCIATIONS -->

    </section>


    <!-- FOOTER -->
    <?php include ("php/footer.php"); ?>
    <!-- FOOTER END -->
        
    <!-- SCRIPTS START -->
    <?php include ("php/scripts.php"); ?>
    <!-- SCRIPTS END -->
    
</body>
</html>
