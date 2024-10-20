<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tshwane Find | Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<!--- banner ---->
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Tshwane Services</h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3> </h3>

					

			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="./Tshwane Find Images/Tshwane Bus.jpg" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Service Name: Tshwane Bus Services</h4>
					<h6>Service Type : Public Transport</h6>					
					<p><b>Features:</b> Access bus schedules, real-time tracking, ticket purchasing, and route planning</p>

                    <h6>Membership Options:</h6>
					<ul>
						<li><b>Basic Plan:</b> R200/month – Access to schedules and pay-as-you-go tickets</li>
						<li><b>Silver Plan:</b> R350/month – Unlimited rides on all routes and real-time bus tracking</li>
						<li><b>Gold Plan:</b> R500/month – All Silver features plus priority boarding and reserved seating</li>
					</ul>


				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					
					<a href="#" class="view">Details</a>
					
				</div>
				<div class="clearfix"></div>
			</div>

            
			<div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="./Tshwane Find Images/Water and Sa.jpg" class="img-responsive" alt="Electricity Service" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Service: Electricity</h4>
					<h6>Service Type: Utility</h6>
					<p><b>Features:</b> Electricity usage monitoring, bill payments, power outage reporting, and energy-saving tips.</p>
					<h6>Membership Options:</h6>
					<ul>
						<li><b>Basic Plan:</b> Free – Bill payments and outage reporting</li>
						<li><b>Silver Plan:</b> R150/month – Real-time usage tracking and monthly consumption reports</li>
						<li><b>Gold Plan:</b> R250/month – All Silver features, priority outage restoration, and energy-saving devices</li>
					</ul>
				</div>

                <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					
					<a href="subscribe.php?serviceid=3" class="view">Details</a>
				</div>

				<div class="clearfix"></div>
			</div>

            
			<div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="./Tshwane Find Images/Electrical.jpg" class="img-responsive" alt="Water and Sanitation">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Service: Water and Sanitation</h4>
					<h6>Service Type: Utility</h6>
					<p><b>Features:</b> Water usage tracking, bill payment, leak detection, and water quality monitoring.</p>
					<h6>Membership Options:</h6>
					<ul>
						<li><b>Basic Plan:</b> Free – Water usage tracking and online payments</li>
						<li><b>Silver Plan:</b> R100/month – Leak detection and monthly consumption reports</li>
						<li><b>Gold Plan:</b> R200/month – All Silver features plus priority customer support and emergency water services</li>
					</ul>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					
					<a href="subscribe.php?serviceid=3" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

			</div>

            


            



			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>