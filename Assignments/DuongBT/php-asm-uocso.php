<?php
$a = 6;
$b = 0;
 for ($uc=1; $uc <= $a;$uc++){
 	if ($a % $uc==0){
 		echo $uc . " ";
 		$b += 1;
 	}
 }
 echo  "<br> số nguyên a=$a có $b ước số";

 if ($a%2 == 0 ) {
 	echo "<br> số nguyên a không phải là số nguyên tố";
 } esle {
 	echo "<br> số nguyên a là số nguyên số";
 }
?>