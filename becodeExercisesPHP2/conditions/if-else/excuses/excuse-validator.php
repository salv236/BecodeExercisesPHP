<?php
	
	$name = $_GET['name'];
	$teacher = $_GET['teachName'];
	$reason = $_GET['reason'];

	echo 'Dear ' .$teacher . ' ' . $name . ' was absent from class due to ' . $reason;