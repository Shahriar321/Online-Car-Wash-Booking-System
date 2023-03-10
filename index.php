
<!DOCTYPE HTML>
<html>
	<head>
		<title>Car Wash Booking System: Home Page</title>
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/bootstrap.min.js"></script>
		<script src="js/vue.min.js"></script>
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800|Comfortaa:700' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Comfortaa:700,300,400' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>

	<style>
		body {
			font-size: 15px;
			font-family: Arial;
		}
	
		a {
			/* color: #999; */
		}
	
		.redColor {
			color: #C40000 !important;
		}
	
		nav.top {
			background-color: white;
			padding-top: 5px;
			padding-bottom: 5px;
			border-bottom: 1px solid #e7e7e7;
		}
	
		nav.top span,
		nav.top a {
			/* color: #999; */
			margin: 0px 10px 0px 10px;
		}
	
		nav.top a:hover {
			color: #C40000;
		}

		li {
  /* float: left; */
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:  #f2f2f2;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
  z-index: 999;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
	


	<body>
		<!-- container -->
		<!-- header -->
		<div class="header">
			<div class="container">
				
				<!-- top-nav -->
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="adminPage.html">Admin</a></li>
						<?php
								// if the user is not logged in, show login/register
								session_start();
								error_reporting( error_reporting() & ~E_NOTICE );
								if($_SESSION["user"]==null){
									?><li><a href="login.html">Login/Register</li></a><?php
								} 
								else{
									// if the user has logged in show name and dropdown menu
									?>
										<li class="dropdown"><a href="#" class="dropbtn">Welcome, <?php echo $_SESSION["user"]['fname'] ?></a>
										<div class="dropdown-content">
										<a href="myAccount.php">Profiles</a>
      									<a href="myBooking.php">Booking</a>
      									<a href="phpsrc/userLogOut.php">Log Out</a>
										</div>
										</li>
									<?php
								}
							 ?>
						<!-- <li><a href="contact.html">Contact</a></li> -->
						<div class="clearfix"> </div>
					</ul>
				</div>
				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(1000);
						});
					});
				</script>
				<!-- script-for-nav -->
				<!-- /top-nav -->
				<div class="clearfix"> </div>
			</div>
			<!-- /header -->
		</div>
			<!-- banner -->
			<div class="benner">
				<!-- slider -->
				<!--- img-slider --->
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					       
					        <li>
							<img class="img-responsive" src="images/CarWash3.jpg" alt="">
					          <div class="slider-caption">
					          	<h1>  <span>Online Car Wash CENTER</span> </h1>
					         	 <p>Welcome to the online car wash booking system. </p>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
						<!-- slider -->
					<!-- banner -->
					<!-- top-grids -->
					<div class="top-grids">
						<div class="container">
						<div class="top-grids-head text-center">
							<h2>Our Services</h2>
							<p>We are professional, we provide you with the most comfortable service</p>
						</div>
							<div class="col-md-4">
								<div class="top-grid">
									<div class="grid-icon">
										<span class="icons1"> </span>
									</div>
									<div class="grid-info">
										<h3>Professional Skills</h3>
										<p> We've been in this business for a long time</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="top-grid">
									<div class="grid-icon">
										<span class="icons2"> </span>
									</div>
									<div class="grid-info">
										<h3>Multiple Service</h3>
										<p> We provide different types of services with different prices.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="top-grid">
									<div class="grid-icon">
										<span class="icons3"> </span>
									</div>
									<div class="grid-info">
										<h3>Flexible Time</h3>
										<p> Customers are free to choose when to wash their cars.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="footer">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3">
									<div class="footer-grid">
										<h5>About US</h5>
										<p>We are a professional and efficient car wash team.</p>
										<p> Welcome to book our service online.	</p>
									</div>
								</div>
								<div class="col-md-3" style="display: none;">
									<div class="footer-grid f-blog">
										<h5>Form the Blog</h5>
										<div class="f-blog-artical">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<span>March 20,2014</span>
										</div>
										<div class="f-blog-artical f-blog-artical1">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<span>March 20,2014</span>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="footer-grid site-map">
										<h5>Site Map</h5>
										<ul>
											<li><a href="index.php"><span> </span>Home</a></li>
											<li><a href="about.php"><span> </span>About</a></li>
											<li><a href="services.php"><span> </span>Services</a></li>
											
											<!-- <li><a href="contact.html"><span> </span>Contact</a></li> -->
										</ul>
									</div>
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!-- /footer -->
					<!-- footer-bottom -->
					<!-- <div class="footer-bottom">
						<div class="container">
							<div class="footer-bottom-left">
								<p>Design by<a href="http://w3layouts.com/">W3layouts</a></p>
							</div>
							<div class="footer-bottom-right">
								<ul>
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div> -->
					<!-- footer-bottom -->
		</div>
		<!-- /container -->
	</body>
</html>

