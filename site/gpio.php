<?php

	$output = `gpio read 1`;
	if( $output == 1)
	{
	  echo 'The logic value of GPIO pin 18 is 1';
	}
	if( $output == 0)
	{
	  echo 'The logic value of GPIO pin 18 is 0';
	}
?>
