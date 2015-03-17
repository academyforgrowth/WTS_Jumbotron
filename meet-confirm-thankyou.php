<?php  

include 'admin/var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php"); ?>
    <title>Thank You | <?php echo $company_name; ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
</head>
<body>
        
    <!-- NAV START -->
    <?php include ("php/nav.php"); ?>
    <!-- NAV END -->

    <!-- LEAD SECTION -->
    <section id="lead-legal" class="no-jumbo">
        <div class="container">
        
            <div class="row">
                
                <div class="col-12 col-lg-12 text-center">
                    <div class="page-header">
                        <h1>Thank You</h1>
                        <h3 class="section-head">Thank you for requesting a meeting,<br> we'll be in contact very soon!</h3>
                        <p class="lead">    
                            <a class="text-info" href="index.php">You can click here if you would like to return to the homepage.</a>
                        </p>
                        <p>
                            Want to connect with us on social media? Follow the links below for regular news & updates
                        </p>
                    </div>
        	   </div>
                <hr>

    	   </div>
    
        </div>
    </section>
    <!-- END LEAD SECTION -->

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