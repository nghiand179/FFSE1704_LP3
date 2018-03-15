<?php
	$a=10;
	$dem=0;
	echo " các ước số của $a là:<br>";
	for($i=1;$i<=$a;$i++){
		if($a%$i==0){
			echo "$i <br>";
			$dem +=1;
		}
	}
	echo "số $a có tổng các ước là $dem";
	if($dem<2){
		echo "số $a là số nguyên tố";
	}
	else{
		echo "số $a không phải la số nguyên tố";
	}
?>

