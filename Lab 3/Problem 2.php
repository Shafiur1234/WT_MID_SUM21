<?php
	$marks=90;
	if($marks>=90){
		echo "<br>A+";
	}
	else if($marks>=80 && $marks<90){
		echo "<br>A";
	}
	else if($marks>=70 && $marks<80){
		echo "<br>B";
	}
	else if($marks>=60 && $marks<70){
		echo "<br>C";
	}
	else{
		echo "<br>the grade is : F";
	}
?>