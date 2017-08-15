<?php

/*
If the time is between 5:00 am and 9:00 am, display "Bonjour!". 
If the time is between 9:01 and 12:00, displays "Good day!". 
If the time is between 12:01 and 16:00, displays "Good afternoon!". 
If the time is between 16h01 and 21h00, poster "Good evening!". 
If the time is between 21:01 and 04:59, displays "Good night!".

*/
  $time = date('H:i');
echo $time;
?>