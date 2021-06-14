<?php
	$length=10;
	$width=10;
	$P= 2*($length + $width);
	echo "The perimeter of the rectangle " .$P. "<br>";
	
	$A= ($length * $width);
	echo "The area of the rectangle " .$A. "<br>";
	
	if($length === $width){
		echo "<br>The shape is a square";
	}
	
?>