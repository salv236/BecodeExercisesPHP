<?php

// displays the date, time, minutes, and seconds

function dateAndTime(){
	$dateTimeStamp = date('d/m/Y - G:i:s');
	echo $dateTimeStamp;
}

dateAndTime();