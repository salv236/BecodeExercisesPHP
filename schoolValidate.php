<?php

/*Creates a small form that reacts to the student's grade. 
If the note is equal to 1, 2 or 3, displays "This job is null." 
If the note is equal to 6, 7, 8 or 9, displays "This work is not terrible." 
If the score equals 10, displays "Just Right!" 
If the note is equal to 11, 12, 13 or 14, displays "It's not bad." 
If the score is 15, 16, 17, or 18, displays "Bravo!". 
If the note is 19 or 20, displays "Police! Stop this cheat!".*/

	$fname = $_GET['fName'];
	$lname = $_GET['lName'];
	$grade = $_GET['grade'];

	if($grade ==1 || $grade ==2 || $grade ==3){
		echo $fname. ' ' . $lname . ' <strong>Your grade is low </strong>';
	} elseif($grade ==6 || $grade ==7 || $grade ==8 || $grade ==9 ){
		echo $fname . ' ' .$lname . ' This is not terrible';
	} elseif($grade ==10){
		echo $fname . ' ' .$lname . ' Just right';
	}elseif($grade ==11 || $grade ==12 || $grade ==13 || $grade ==14){
		echo $fname . ' ' . $lname . ' Its not Bad';
	} elseif($grade ==15 || $grade ==16 || $grade ==17 || $grade ==18){
		echo $fname. ' ' . $lname . ' Bravo!!';
	} elseif($grade ==19 || $grade ==20){
		echo $fname. ' ' . $lname . ' Police! stop this cheat';
	}

?>