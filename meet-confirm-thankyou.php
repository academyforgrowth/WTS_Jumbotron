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
                    </div>
        	   </div>
                <hr>

    	   </div>
    
        </div>
    </section>
    <!-- END LEAD SECTION -->

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