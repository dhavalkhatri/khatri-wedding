<?php

	$name = $_POST['fullname']
	$email = $_POST['email']
	$guests = $_POST['guests']
	$event = $_POST['event']

	if(isset($_POST['fcomment'])):
		$comment = $_POST['comment']

	echo $name+$email+$guests+$event+$comment;

	// header("Location: ../wedding-rsvp.html"); 
	// exit();

?>
