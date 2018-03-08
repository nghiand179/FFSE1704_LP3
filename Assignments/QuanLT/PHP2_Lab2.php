<?php 
$a = 12345 ; 
$tong = 0 ;
echo "So $a";
echo "</br>";
$mang = str_split($a);

for ($i=0; $i <count($mang); $i++) { 
	if ($mang[$i]%2) {

		$tong = $tong + $mang[$i];

	}

}
echo "Tổng các số lẽ  là: " .$tong ;
?>