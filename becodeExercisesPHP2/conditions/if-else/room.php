<?php

	/* Represents in code the fact of having to put away his room if it is dirty.

	Tip: Initializes a Boolean variable $chambre_est_saleand then tests it in a condition. If it is true, poster "Range your room, it looks like the cage of a bonobo!". Otherwise, show "Your room is too clean, screw a little!".  

	Fact? Bravo. Now, change your script to represent how your parents would express themselves.

	Then, let's make the script a little more subtle by allowing a gradation. Your room could be either "disgusting", "dirty", "in order", "immaculate", "manic". Use a structure if/ elseif / elsefor this. Inventes messages to display based on each scenario.  */



	/*$dirty = false;

	if($dirty){
		echo 'tidy your room';
	}

	else{
		echo 'your room is too clean, mess it up a little';
	} */

	$room = 'manic';

	if($room == 'disgusting'){
		echo 'filthy pig, cleanup your room.';
	}

	elseif($room == 'dirty'){
		echo 'cleanup your act';
	}

	elseif($room == 'in order'){
		echo 'nice';
	}

	elseif($room == 'immaculate'){
		echo 'well done you make me proud.';
	}

	elseif($room == 'manic'){
		echo 'you are a disaster';
	}

	else{
		'what have you done lately?';
	}

