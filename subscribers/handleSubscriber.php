<?php

	$email = $_POST['email'];
	$date = date("m/d/Y");

	$data = array($email, $date);

	$file = fopen("subscribers.csv", 'a+');

	fputcsv($file, $data);

	fclose($file);

	$emailto = $email;
	$subject = "Subscriber Confirmed";
	$message = "Thank you for subscribing to harshalwedspankti.com.\nAn email will be sent out everytime gallery will be updated with new photos for you to get live updates.\n\nThanks many,\nKhatri family.";
	$headers = "From: events@harshalwedspankti.com" . "\r\n";

	mail($emailto, $subject, $message, $headers);

?>

<html>
	<style>
		.lds-heart {
			display: inline-block;
			position: relative;
			width: 64px;
			height: 64px;
			transform: rotate(45deg);
			transform-origin: 32px 32px;
		}
		.lds-heart div {
			top: 23px;
			left: 19px;
			position: absolute;
			width: 26px;
			height: 26px;
			background: #fff;
			animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
		}
		.lds-heart div:after,
		.lds-heart div:before {
			content: " ";
			position: absolute;
			display: block;
			width: 26px;
			height: 26px;
			background: red;
		}
		.lds-heart div:before {
			left: -17px;
			border-radius: 50% 0 0 50%;
		}
		.lds-heart div:after {
			top: -17px;
			border-radius: 50% 50% 0 0;
		}
		@keyframes lds-heart {
			0% {
				transform: scale(0.95);
			}
			5% {
				transform: scale(1.1);
			}
			39% {
				transform: scale(0.85);
			}
			45% {
				transform: scale(1);
			}
			60% {
				transform: scale(0.95);
			}
			100% {
				transform: scale(0.9);
			}
		}

	</style>

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="../common-css/bootstrap.css" rel="stylesheet">


	<link href="../common-css/fluidbox.min.css" rel="stylesheet">

	<link href="../common-css/font-icon.css" rel="stylesheet">


	<link href="../01-homepage/css/styles.css" rel="stylesheet">

	<link href="../01-homepage/css/responsive.css" rel="stylesheet">

	<body>
		<div class="lds-heart display-table center-text"></div>
		<div class="display-table center-text">
			<h4>Thank you for subscribing.</h4>
			<h5>Confirmation email have been sent to your email. (or Spam)</h5>
		</div>
	</body>

	<script>
		setTimeout("location.href = '../index.html';",4000);
	</script>	
</html>
