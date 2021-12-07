<?php
  require '../includes/config.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Hostel Managers Info</title>

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
	<!--bootsrap -->

	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

				<h1><a class="navbar-brand" href="admin_home.php">NITC <span class="display"> </span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="create_hm.php">Manage Hostel Managers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="students.php">Students</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="admin_contact.php">Hostel Managers</a>
						</li>
			            <li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['fname'].$_SESSION['lname']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin_profile.php">My Profile</a>
							</li>
							<li>
								<a href="../includes/logout.inc.php">Logout</a>
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

<section class="contact py-1">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="admin_contact.php" method="post">
					<div class="row">
					        <div class="col-md-9">
							<input type="text" placeholder="Search by username" name="search_box">
							</div>
							<div class="col-md-3">
							<input type="submit" value="Search" name="search"></input>
							</div>
					</div>
				</form>
			</div>
	</div>
</section>
<?php
   if (isset($_POST['search'])) {
   	   $search_box = $_POST['search_box'];
   	   /*echo "<script type='text/javascript'>alert('<?php echo $search_box; ?>')</script>";*/
   	   //$hostel_id = $_SESSION['hostel_id'];
   	   $query_search = "SELECT * FROM hostel_manager WHERE username like '$search_box%'";
   	   $result_search = mysqli_query($conn,$query_search);
   	   //select the hostel name from hostel table
       //$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
      // $result6 = mysqli_query($conn,$query6);
      // $row6 = mysqli_fetch_assoc($result6);
       //$hostel_name = $row6['Hostel_name'];
   	   ?>
   	   <div class="container">
   	   <table class="table table-dark">
    <thead>
      <tr>
        <th>useranme</th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Hostel</th>
        <th>Hostel id</th>
      </tr>
    </thead>
    <tbody>
    <?php
   	   if(mysqli_num_rows($result_search)==0){
   	   	  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
   	   }
   	   else{
   	   	  while($row_search = mysqli_fetch_assoc($result_search)){
      		//get the name of the student to display
            $username = $row_search['username'];
            $name = $row_search['fname']." ".$row_search['lname'];
            $contact = $row_search['phone_no'];
            $hostel_id = $row_search['h_id'];
            $query88 = "SELECT * FROM hostel WHERE hostel_id = '$hostel_id'";
            $result88 = mysqli_query($conn,$query88);
            $row88 = mysqli_fetch_assoc($result88);
            $hostel_name = $row88['hostel_name'];

      		echo "<tr><td>{$username}</td><td>{$name}</td><td>{$contact}</td><td>{$hostel_id}</td><td>{$hostel_name}</td></tr>\n";
   	   }
   }
   ?>
   </tbody>
  </table>
</div>
<?php
}
  ?>

<br><br><br>

<div class="container">
<h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostel Managers </h2>
<?php
   //$hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM hostel_manager";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   //$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   //$result6 = mysqli_query($conn,$query6);
   //$row6 = mysqli_fetch_assoc($result6);
   //$hostel_name = $row6['Hostel_name'];
?>

  <table class="table table-striped table-dark table-hover">
    <thead class="thead-light">
      <tr>
        <th>useranme</th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Hostel</th>
        <th>Hostel id</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if(mysqli_num_rows($result1)==0){
         echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{
      	while($row1 = mysqli_fetch_assoc($result1)){
      		//get the room_no of the student from room_id in room table
            $username = $row1['username'];
            $name = $row1['fname']." ".$row1['lname'];
            $contact = $row1['phone_no'];
            $hostel_id = $row1['h_id'];
            $query88 = "SELECT * FROM hostel WHERE hostel_id = '$hostel_id'";
            $result88 = mysqli_query($conn,$query88);
            $row88 = mysqli_fetch_assoc($result88);
            $hostel_name = $row88['hostel_name'];

      		echo "<tr><td>{$username}</td><td>{$name}</td><td>{$contact}</td><td>{$hostel_id}</td><td>{$hostel_name}</td></tr>\n";
      	}
      }
    ?>
    </tbody>
  </table>
</div>
<br>
<br>
<br>

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
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
