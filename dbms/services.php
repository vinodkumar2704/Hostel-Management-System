

<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Hostel Selection</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	
</head>

<body >

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php">NITC<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner -->
<!-- services -->
<section class="services py-1">
	<div class="container py-lg-1 py-1">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Select from Hostels </h2>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 service-grid1">
				<a href="application_form.php?id=A"><h3>A Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>1 yr</h4>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5 service-grid1">
				<a href="application_form.php?id=B">
				<h3>B Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>3 yr</h4>
					</div></a>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5 service-grid1">
				<a href="application_form.php?id=C">
				<h3>C Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>2 yr</h4>
					</div></a>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<a href="application_form.php?id=D">
				<h3>D Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div></a>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<a href="application_form.php?id=E">
				<h3>E Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div></a>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<a href="application_form.php?id=F">
				<h3>F Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div></a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- services -->


<!-- footer -->

<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->  
	<!-- //banner js --> 

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>