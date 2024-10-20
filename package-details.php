<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TF | Attraction Details</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>				
</head>
<body>
<!-- top-header -->
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>R80.00</h3>
				</div>
			</div>
	<h3>Attraction Detail</h3>
<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>
<div class="clearfix"></div>

<!-- Payment Section -->
<div style="text-align: center; margin-top: 30px; max-width: 400px; margin-left: auto; margin-right: auto; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
  <h4>Select Payment Method</h4>
  
  <!-- Payment method buttons -->
  <div style="margin-top: 20px;">
    <!-- Google Pay Button -->
    <div id="googlePayButton" style="display: none;"></div>
    
    <!-- Apple Pay Button -->
    <button id="applePayButton" style="display: none; padding: 10px 20px; border-radius: 5px; background-color: black; color: white; border: none; margin-bottom: 20px;">
      <i class="fa fa-apple" style="margin-right: 10px;"></i> Pay with Apple Pay
    </button>
    
    <!-- Manual Card Entry -->
    <button id="manualCardButton" style="padding: 10px 20px; border-radius: 5px; background-color: #4285F4; color: white; border: none; cursor: pointer;">
      <i class="fa fa-credit-card" style="margin-right: 10px;"></i> Pay with Card
    </button>
  </div>

  <!-- Card Details Form -->
  <div id="cardDetailsForm" style="display: none; margin-top: 20px;">
    <h5>Enter Card Details</h5>
    <form id="cardForm">
      <div style="margin-bottom: 10px;">
        <input type="text" id="cardNumber" placeholder="Card Number" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 10px;">
        <input type="text" id="cardExpiry" placeholder="Expiry Date (MM/YY)" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 10px;">
        <input type="text" id="cardCVV" placeholder="CVV" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 10px;">
        <input type="text" id="cardName" placeholder="Cardholder Name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <button type="submit" style="padding: 10px 20px; border-radius: 5px; background-color: #28a745; color: white; border: none; cursor: pointer;">Submit Payment</button>
    </form>
  </div>
</div>

<script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script>

<script>
// Load Google Pay button
function onGooglePayLoaded() {
  const paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});
  const button = paymentsClient.createButton({
    onClick: onGooglePayButtonClicked
  });
  document.getElementById('googlePayButton').appendChild(button);
  document.getElementById('googlePayButton').style.display = 'block'; // Show Google Pay button
  
  // Show Apple Pay button if available
  if (window.ApplePaySession && ApplePaySession.canMakePayments()) {
    document.getElementById('applePayButton').style.display = 'block';
    document.getElementById('applePayButton').addEventListener('click', onApplePayButtonClicked);
  }
}

// Handle manual card payment button click
document.getElementById('manualCardButton').addEventListener('click', function() {
  document.getElementById('cardDetailsForm').style.display = 'block'; // Show card form
});

// Handle Google Pay button click
function onGooglePayButtonClicked() {
  const paymentDataRequest = {
    apiVersion: 2,
    apiVersionMinor: 0,
    allowedPaymentMethods: [{
      type: 'CARD',
      parameters: {
        allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
        allowedCardNetworks: ['MASTERCARD', 'VISA']
      },
      tokenizationSpecification: {
        type: 'PAYMENT_GATEWAY',
        parameters: {
          gateway: 'example',
          gatewayMerchantId: 'exampleMerchantId'
        }
      }
    }],
    merchantInfo: {
      merchantId: '01234567890123456789',
      merchantName: 'Demo Merchant'
    },
    transactionInfo: {
      totalPriceStatus: 'FINAL',
      totalPrice: '80.00',  // Adjust this to the actual amount
      currencyCode: 'ZAR',   // Changed to South African Rand
      countryCode: 'ZA'      // Changed to South Africa
    }
  };

  const paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});
  paymentsClient.loadPaymentData(paymentDataRequest).then(function(paymentData) {
    // Handle payment success
    console.log('Payment successful', paymentData);
  }).catch(function(err) {
    // Handle payment failure
    console.error('Payment failed', err);
  });
}

// Handle Apple Pay button click
function onApplePayButtonClicked() {
  const request = {
    countryCode: 'ZA',
    currencyCode: 'ZAR',
    total: {
      label: 'Demo Merchant',
      amount: '80.00'  // Adjust this to the actual amount
    },
    supportedNetworks: ['visa', 'mastercard', 'amex'],
    merchantCapabilities: ['capability3DS', 'capabilityDebit', 'capabilityCredit']
  };

  const session = new ApplePaySession(1, request);
  
  session.onvalidatemerchant = (event) => {
    // Validate the merchant with your server
    const promise = performValidation(event.validationURL);
    promise.then((merchantSession) => {
      session.completeMerchantValidation(merchantSession);
    }).catch((error) => {
      console.error('Merchant validation failed', error);
      session.abort();
    });
  };

  session.onpaymentauthorized = (event) => {
    // Process the payment
    const payment = event.payment;
    console.log('Apple Pay Payment Data', payment);
    session.completePayment(ApplePaySession.STATUS_SUCCESS);
  };

  session.begin();
}

// Dummy function for merchant validation
function performValidation(validationURL) {
  return new Promise((resolve, reject) => {
    // Simulate server-side validation
    setTimeout(() => {
      resolve({merchantSessionIdentifier: 'merchantIdentifier'});
    }, 1000);
  });
}

// Handle form submission
document.getElementById('cardForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const cardNumber = document.getElementById('cardNumber').value;
  const cardExpiry = document.getElementById('cardExpiry').value;
  const cardCVV = document.getElementById('cardCVV').value;
  const cardName = document.getElementById('cardName').value;

  // Simulate form processing (replace with your backend logic)
  console.log('Card Payment Details:', {
    cardNumber,
    cardExpiry,
    cardCVV,
    cardName
  });

  alert('Payment submitted successfully!');
});
</script>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<div class="clearfix"></div>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Comment</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>