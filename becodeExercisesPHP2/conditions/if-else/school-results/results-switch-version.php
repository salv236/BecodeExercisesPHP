<?php

/*if($grade == 1 || $grade == 2 || $grade == 3){
	echo 'This job is null';
}

elseif($grade == 6 || $grade == 7 || $grade == 8 || $grade ==9){
	echo 'This work is not terrible';
}

elseif($grade ==10){
	echo 'Just Right';
}

elseif($grade == 11 || $grade == 12 || $grade == 13 || $grade ==14){
	echo 'Not Bad!';
}

elseif($grade == 15 || $grade == 16 || $grade == 17 || $grade ==18){
	echo 'Bravo!';
}

elseif($grade == 19 || $grade == 20){
	echo 'Stop Cheat!!!!';
} */

$grade = 11;

switch($grade){
	case 1:
		echo 'this job is  null';
	break;
	case 2:
		echo 'this job is  null';
	break;
	case 3:
		echo 'this job is  null';
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
		echo 'This work is just right';
	break;
	default:
		echo 'non attendance';
	break;
}