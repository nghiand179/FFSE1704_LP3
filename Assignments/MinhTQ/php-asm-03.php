<?php
$n = 10;
$uoc = 0;
for ($i=1; $i < 10; $i++) { 
	if($n%$i==0){
	   $uoc = $uoc +1;
	   
	   echo "$i <br>" ;
	}
	
}
echo "tong các ước của 10 là :";
echo $uoc;

?>
