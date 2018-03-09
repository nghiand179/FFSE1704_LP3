<?php  
	$n = 1234;
	$tong = 0;
	while ($n > 0){
		$Sodu = $n % 10; // chia lấy số dư
		$n = round($n/10);	// chia lấy số nguyên

		if ($Sodu % 2 != 0) {
			$tong = $tong + $Sodu;
		}
	}

echo $tong;
?>