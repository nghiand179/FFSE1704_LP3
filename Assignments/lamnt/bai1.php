<?php 
	$a = 0;
	$b = 1;
	//TH a == 0
	if($a==0){
		if($b==0){
			echo "Pt vo so nghiem";
		}else{
			echo "Pt vo nghiem";
		}
	}
	//TH a # 0 
	else{
		$x = -$b/$a;
		echo "Pt co nghiem la $x";
	}

?>