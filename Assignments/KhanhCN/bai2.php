<?php
 $a = 2 ; 
 $b = 7 ; 
 $c = 3 ; 
 $d = $b*$b - 4*$a*$c; 
 if ($d<0) {
 	echo "phuong trinh vo nghiem";
 	if ($d==0) {
 		$nk = ((-$b)/ (2*$a));
 		echo "phuong trinh co nghiem kep là : x = ".$nk;
 	}
 }else{
 	$x1 = ((-$b) + sqrt($d))/ (2*$a);

 	$x2 = ((-$b) - sqrt($d))/ (2*$a);
 		echo "Phuong trinh co nghiem x1 la : ".$x1;
 		echo "Phuong trinh co nghiem x2 la : ".$x2;
 }
?>
