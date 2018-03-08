<?php 
$a = 12345 ; 
$Tongle = 0 ; 
$mang = str_split($a);

for ($i=0; $i <count($mang); $i++) { 
	if ($mang[$i]%2) {

		$Tongle = $Tongle + $mang[$i];

	}

}
echo "Tổng các số lẽ  là 1 + 3 + 5 = " .$Tongle ;
?>


