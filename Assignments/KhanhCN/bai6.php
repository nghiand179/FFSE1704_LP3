

<?php 
$b = 1; 
$sodu = $b%2;
if ($b>=0 and $sodu==0) {
	echo "$b Là số dương";
	echo "------Và--------là số chẳn";
}elseif ($b<0 and $sodu==0) {
	echo "$b Là số âm";
	echo " là số chẳn";
}elseif ($b>0 and $sodu!=0) {
	echo "Là số dương ";
	echo " là số lẽ";
}else {
	echo "Là số âm lẽ";
}


?>