    <!-- Javascript -->
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE CUSTOM SCROLLER -->
    <script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
        
    <!--loCAL sCROLL -->
    
    <script>
        jQuery(document).ready(function(){
        jQuery('#topnav').localScroll({offset: {top:0}});
        jQuery('#startbtn').localScroll(5000);
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        //jQuery('#top-section').parallax("50%", 0.1);
        //jQuery('#Section-1').parallax("50%", 0.3);
        //jQuery('#Section-2').parallax("50%", 0.1);
        //jQuery('#foot-sec').parallax("50%", 0.1);
        })
    </script>
    
    <script>
        //hide menu after click on mobile
        jQuery('.navbar .nav > li > a').click(function(){
        jQuery('.navbar-collapse.navbar-ex1-collapse.in').removeClass('in').addClass('collapse').css('height', '0');

        });
    </script>
        
    <!-- NICE Scroll plugin -->
    
    <script>
        //scroll bar custom
        jQuery(document).ready(
        function() {  
        jQuery("html").niceScroll({cursorcolor:"#333"});
        }
        );
    </script>

    <!-- Google Analytics Code -->
    <?php include ("admin/content_holders/analytics.php"); ?>

    <!-- Google Remarketing Code -->
    <?php include ("admin/content_holders/remarketing.php"); ?>
        
    <!-- saved from url http://www.bootstraptor.com ==========================
    Don't remove this attribution!
    This template build on Bootstrap 3 Developer  Kit v.2.0. by @Bootstraptor
    Usage Licenses on http://www.bootstraptor.com
    Follow for templates updates & new releases on Twitter.com/Bootstraptor
    ##########################################################################-->
