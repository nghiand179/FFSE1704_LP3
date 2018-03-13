<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>review PHP Week 1</title>
</head>
<body>
	<?php
		$a = 11;
		$tong = 0;
		echo "Danh sách các ước số của a là: <br>";
		for ($uc=1; $uc<=$a; $uc++) { 
			if($a%$uc==0){
				$tong += 1;
				echo "$uc <br>";
			}
		}
		echo "số $a có $tong ước <br>";
		if($tong>2){
		echo "số $a không là số nguyên tố ";
	}else{
		echo " số $a là số nguyên tố ";
	}
	?>
	
</body>
</html>