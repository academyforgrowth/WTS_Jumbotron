	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a href="index.php" class="navbar-brand"><img alt="" src="admin/img/logo.png" /></a>
	<!-- TO DO: INSERT AND FORMAT IMAGE HERE, THEN DOCUMENT SUITABLE DIMENSIONS -->
	      <!--<img alt="Brand" src="...">-->
	    </div>
	    <div class="collapse navbar-collapse" id="main_nav">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>

			<li class="dropdown">
          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">About
          		<span class="caret"></span></a>
          		<ul class="dropdown-menu">
		            <li><a href="about-us.php">About Us</a></li>
		            <li><a href="about-us.php#ethos">Our Company</a></li>
                    <li><a href="about-us.php#promises">Our Promises</a></li>
                    <li><a href="super-accountant.php">The Super <?php echo $business_4; ?></a></li>		            
		            <!--<li><a href="#">Page 1-3</a></li>--> 
		        </ul>
        	</li>
			<li class="dropdown">
          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">How We Help
          		<span class="caret"></span></a>
          		<ul class="dropdown-menu">
                    <li><a href="how-we-help.php">Services</a></li>
                    <li><a href="how-we-help.php#compliance">Compliance</a></li>
                    <li><a href="how-we-help.php#time-saving">Time-Saving</a></li>
                    <li><a href="how-we-help.php#value-added">Giving You More</a></li>
		            <!--<li><a href="#">Page 1-3</a></li>--> 
		        </ul>
        	</li>
           <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Expertise <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="who-we-help.php">Here For You</a></li>
                    <li><a href="who-we-help.php#who-we-help">Who We Help</a></li>
                    <li><a href="team.php">The Team</a></li>
                    <li class="divider"> </li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                </ul>
            </li>
                    <!-- GROWTH -->
	        <li class="dropdown">
	            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Grow Your Business <span class="caret"></span></a>
	            <ul role="menu" class="dropdown-menu">
	                <li><a href="business-growth.php">Business Growth System</a></li>
	                <li><a href="business-builder.php">Free Business Builder Newsletter</a></li>
	            </ul>
	        </li>            
	        <li><a href="contact-us.php">Contact</a></li>	         
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <!-- telephone number -->
                <a href="tel:<?php echo $phone; ?>"><span class="phone"><em class="icon-phone"></em><?php echo $phone; ?></span></a>
				<br class="visible-xs">
                <a class="btn btn-danger navbar-btn" href="#meeting">FREE Meeting</a>
	        <!-- call to action -->
	        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
	      </ul>
	    </div>
	  </div>
	</nav>