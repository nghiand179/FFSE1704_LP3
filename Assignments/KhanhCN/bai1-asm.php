<?php 
$a = 1234;
$TONG = 0 ;
echo "Tổng của số nguyên $a";
while ( $a>0) {
	$TONG += $a%10 ; 
	$a = $a/10;
		

}
echo " là : ".$TONG."-------Hoặc----------";
?>

<?php 
$TONG = 0 ; 
$a = 99999 ; 
$mang = str_split($a); 
echo "Tổng của số nguyên $a";

foreach ($mang as $key => $value) {
	$TONG = $TONG + $value ; 

}
echo " là :".$TONG."---------hoặc----------";

?>


<?php 
$a = 22222 ; 
$TONG = 0 ; 
$mang = str_split($a);
echo "Tổng của số nguyên $a";

for ($i=0; $i <count($mang); $i++) { 
   	$TONG = $TONG + $mang[$i];
}
echo " là :".$TONG;


?> 