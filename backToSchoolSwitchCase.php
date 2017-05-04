<?php

	/*Creates a small form that reacts to the student's grade. 
	If the note is equal to 1, 2 or 3, displays "This job is null." 
	If the note is equal to 6, 7, 8 or 9, displays "This work is not terrible." 
	If the score equals 10, displays "Just Right!" 
	If the note is equal to 11, 12, 13 or 14, displays "It's not bad." 
	If the score is 15, 16, 17, or 18, displays "Bravo!". 
	If the note is 19 or 20, displays "Police! Stop this cheat!".*/

	switch($grade = 6) {
		case 1:
			echo 'This job is null';
		break;
		case 2:
			echo 'This job is null';
		break;
		case 3:
			echo 'This job is null';
		break;
		case 6:
			echo 'This work is not terrible';
		break;
		case 7:
			echo 'This work is not terrible';
		break;
		case 8:
			echo 'This work is not terrible';
		break;
		case 9:
			echo 'This work is not terrible';
		break;
		case 10:
			echo 'Just Right';
		break;
		case 11:
			echo 'Its not bad';
		break;
		case 12:
			echo 'Its not bad';
		break;
		case 13:
			echo 'its not bad';
		break;
		case 14:
			echo 'its not bad';
		break;
		case 15:
			echo 'bravo';
		break;
		case 16:
			echo 'bravo';
		break;
		case 17:
			echo 'bravo';
		break;
		case 18:
			echo 'bravo';
		break;
		case 19:
			echo 'police! stop this cheat';
		break;
		case 20:
			echo 'police! stop this thief';
		break;
	}

?>