<?php
	$n = 123;
	$tong = 0;
	$sodu = 0;

	while ($n > 0){
		$Sodu = $n % 10; // chia lấy số dư
		$n = round($n/10);	// chia lấy số nguyên

		if ($Sodu % 2 != 0) {
			$tong = $tong + $Sodu;
		}
	}

	echo "Tổng số nguyên lẻ n: $tong";
?>