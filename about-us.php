<?php  

include 'admin/var.php';
include 'admin/language.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>About Us | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
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

                    <!--  image -->
                    <div class="hidden-xs col-sm-7" >
                        <img class="img-responsive" src="images/info.png" alt="About " />
                    </div>
              
                    <!--  HEADLINE-->
                    
                    <div class="text-right col-sm-5">
                        <h2 class="headline">ABOUT US</h2>
                        <hr>
                        <p class="lead">With Our Expertise, Your Business Can Be An Even More Powerful Force</p>
                        <p>Call Today and find out <strong>why we are different</strong></p>
                        <hr>
                        <h2><span class="standout">Call <?php echo $phone; ?></span></h2>   
                    </div>

                </div>

            </div>
        </div>
    </header>

    <!-- HEADER END -->

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
                        <h1>Accounting &amp; Tax Services for Small Business in Location</h1>
                        <h2><strong><span class="text-info">Proven Solutions</span></strong> for the modern small business</h2>
                        <p class="lead">We redefine what it means to be an accountant. Yes, we manage your books, and help take care of your tax burden, <strong>but we do more...</strong>  
                        <p class="lead">Here is a little more about us, and the lengths we go to <b>build profitable, long-term relationships with our clients</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END LEAD SECTION -->

    <!-- FEATURE -->

    <section class="altcolor2" id="">
        <div class="container">

            <div class="row marketing" id="ethos">

                <div class="col-xs-offset-3 col-xs-6 hidden-md hidden-lg">
                    <div class="row img-row">
                        <img class="img-responsive img-mobile" src="images/logobig.png" alt="Logo" />
                    </div>
                </div>

                <!--  description-->
                <div class="text-justify vertalign col-xs-12 col-md-7">
                    <h2 class="">Our Ethos</h2>
                    <hr>
                    <h3>The SUPER ACCOUNTANT</h3>
                    <p class="lead">
                        Small businesses are the lifeblood of the community, as well as the drivers of any local economy. The conditions that small business owners have to operate in often put them at a disadvantage when compared the nationals and multinationals that surround them. So as <strong>A Super Accountant</strong>, we look to give your business the advantages it needs and deserves.
                    </p>
                    <p class="lead">
                        We Put You First. We want to create a relationship, to help your business compete and thrive, so that YOU, our client, see us as <strong>a valuable asset to your business.</strong> 
                    </p>
                    <p class="lead">
                        To find out more about how working with a Super Accountant can benefit your business, call our friendly team on <span class="text-danger"><?php echo $phone; ?></span> to arrange a free no-obligation meeting, or for a little more information on the lengths we go to for our clients, take a few moments of your time to <a href="index.php">Watch Our Video</a>.
                    </p>
                
                    <div class="row">
                        <div class="col-md-6">
                            <a href="services.php" class="btn btn-info btn-block btn-lg"><i class="icon-info-sign"></i> OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            
                <!-- / description-->
            
                <div class="hidden-xs hidden-sm vertalign col-md-5">
                    <img class="img-responsive" src="images/logobig.png" alt="" />
                </div>
            
            </div>
            <!-- /ROW-->
        
            <div class="row marketing" id="promises">
			
                <div class="col-xs-offset-3 col-xs-6 hidden-md hidden-lg">
                    <img class="img-responsive img-mobile" src="images/award.png" alt="Quality" />
                </div>
        
                <!--  description-->
                <div class="text-justify vertalign col-xs-12 col-md-7">
                    <h2 class="">Quality Assured</h2>
                    <hr>
                    <h3>OUR PROMISES <u>TO YOU</u></h3>
                    <p class="lead">
                        We are committed to your business success, and we go further to provide the best possible service to you:
                    </p>
                
                    <div class="row">
                        
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                            <i class="icon-ok-sign icon-4x text-danger"></i> 
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item"><strong>All of our fees are fixed.</strong> No more nasty surprises on your next billing date, we'll agree with you in advance a figure that you can afford.</p> 
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                            <i class="icon-ok-sign icon-4x text-danger"></i> 
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item"><strong>All Support is FREE and Unlimited.</strong> Need a word of advice? Call us, its included in your low, fixed, monthly fee. This includes access to the partners of the firm, whenever you need them.</p> 
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 text-center">           
                            <i class="icon-ok-sign icon-4x text-danger"></i> 
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10"> 
                            <p class="list-item">We promise to meet all your key filing deadlines, <em>on time, every time,</em>  or we will <strong>pay any fines you are subjected to <u>AND</u> give you <?php echo $currency; ?>250 for the inconvenience</strong></p> 
                        </div>

                    </div>

                </div>
                <!-- / description-->

                <div class="hidden-xs hidden-sm vertalign col-md-5">
                    <img class="img-responsive" src="images/award.png" alt="" />
                </div>

                <div class="row">
                    <p class="lead conclusion text-center">Because that's the type of <?php echo $business_3; ?>s we are</p>
                </div>    
    
            </div>
        </div>
        <!--container-->
    </section>

    <!-- END FEATURE -->

    <!-- CLINCH -->

    <section id="clinch">
        <div class="container">
            <p class="text-center">Of course, you will never know for certain whether we will get along - or indeed what we can do for your business - until you meet with us. Call Us Today on <span class="text-danger"><?php echo $phone; ?></span> or fill out our form below (it only takes one minute!), to arrange your <span class="text-danger emp">FREE, No-Obligation Meeting.</span>
            </p>
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

    <section id="call-to-action">
        <div class="container" id="cta">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8">
                            <p class="undecided text-center">Still Not Convinced? Why not take a moment to <a href="index.php">watch this video</a> and see the difference a Super Accountant can make to your business! Remember, you can meet with us for free, with no-obligation to become our client. We'll even donate <?php echo $currency; ?>100 to your <?php echo $favourite; ?> charity if you don't feel that the meeting was worth your while.</p>
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