<!DOCTYPE html>
<html>
<head>
	<title>php-asm-01.php</title>
	<style type="text/css">
		th { text-align: center; width: 70px;height: 20px ;background-color: gray};
		
	</style>
</head>
<body>
	<h1 style="color: red; text-align: center;">Giải phương trình bậc 2, 1 ẩn số</h1>

	<?php
	$a1 = 0;
	$b1 = 0;
	$c1 = 3;

	$delta1 = ($b1*$b1) - (4*$a1*$c1);

	if ($a1 == 0 ){
			$result1 = 'Hệ số sai';
			$x01 ='';
			$x001 ='';

		}
	else if ($delta1 < 0){
	        $result1 = 'Phương trình vô nghiệp';
	    }
    else if ($delta1 == 0){
	        $result1 = 'Phương trình nghiệp kép' ;
	        $x01 = (-$b1/2*$a1);
	        $x001 = (-$b1/2*$a1);
	    }
    else {
	        $result1 = 'Phương trình có hai nghiệp phân biệt' ;$x01 = ((-$b1 + sqrt($delta1))/(2*$a1));
	        $x001 =  ((-$b1 - sqrt($delta1))/(2*$a1));
	    }
	?>
	<?php
	$a2 = 0;
	$b2 = 1;
	$c2 = 3;

	$delta2 = ($b2*$b2) - (4*$a2*$c2);

	if ($a2 == 0 ){
			$result2 = 'Hệ số sai';
			$x02 ='';
			$x002 ='';
		}
	else if ($delta2 < 0){
	        $result2 = 'Phương trình vô nghiệp';
	    }
    else if ($delta2 == 0){
	        $result2 = 'Phương trình nghiệp kép' ;
	        $x02 = (-$b2/2*$a2);
	        $x002 = (-$b2/2*$a2);
	    }
    else {
	        $result2 = 'Phương trình có hai nghiệp phân biệt' ;$x02 = ((-$b2 + sqrt($delta2))/(2*$a2));
	        $x002 =  ((-$b2 - sqrt($delta2))/(2*$a2));
	    }
	?>
	<?php
	$a3 = 2;
	$b3 = 5;
	$c3 = 3;

	$delta3 = ($b3*$b3) - (4*$a3*$c3);

	if ($a3 == 0 ){
			$result3 = 'Hệ số sai';
			$x03 ='';
			$x003 ='';
		}
	else if ($delta3 < 0){
	        $result3 = 'Phương trình vô nghiệp';
	    }
    else if ($delta3 == 0){
	        $result3 = 'Phương trình nghiệp kép' ;
	        $x03 = (-$b3/2*$a3);
	        $x002 = (-$b3/2*$a3);
	    }
    else {
	        $result3 = 'Phương trình có hai nghiệp phân biệt' ;$x03 = ((-$b3 + sqrt($delta3))/(2*$a3));
	        $x003 =  ((-$b3 - sqrt($delta3))/(2*$a3));
	    }
	?>
	<?php
	$a4 = 2;
	$b4 = 1;
	$c4 = 3;

	$delta4 = ($b4*$b4) - (4*$a4*$c4);

	if ($a4 == 0 ){
			$result4 = 'Hệ số sai';
			$x04 ='';
			$x004 ='';
		}
	else if ($delta4 < 0){
	        $result4 = 'Phương trình vô nghiệp';
	    }
    else if ($delta4 == 0){
	        $result4 = 'Phương trình nghiệp kép' ;
	        $x04 = (-$b4/2*$a4);
	        $x004 = (-$b4/2*$a4);
	    }
    else {
	        $result4 = 'Phương trình có hai nghiệp phân biệt' ;$x04 = ((-$b4 + sqrt($delta4))/(2*$a4));
	        $x004 =  ((-$b4 - sqrt($delta4))/(2*$a4));
	    }
	?>
	<?php
	$a5 = 1;
	$b5 = 4;
	$c5 = 4;

	$delta5 = ($b5*$b5) - (4*$a5*$c5);

	if ($a5 == 0 ){
			$result5 = 'Hệ số sai';
			$x05 ='';
			$x005 ='';
		}
	else if ($delta5 < 0){
	        $result5 = 'Phương trình vô nghiệp';
	    }
    else if ($delta5 == 0){
	        $result5 = 'Phương trình nghiệp kép' ;
	        $x05 = (-$b5/2*$a5);
	        $x005 = (-$b5/2*$a5);
	    }
    else {
	        $result5 = 'Phương trình có hai nghiệp phân biệt' ;$x04 = ((-$b4 + sqrt($delta4))/(2*$a4));
	        $x005 =  ((-$b5 - sqrt($delta5))/(2*$a5));
	    }
	?>
	<?php
	$a6 = 8;
	$b6 = 5;
	$c6 = 3;

	$delta6 = ($b6*$b6) - (4*$a6*$c6);

	if ($a6 == 0 ){
			$result6 = 'Hệ số sai';
			$x06 ='';
			$x006 ='';

		}
	else if ($delta6 < 0){
	        $result6 = 'Phương trình vô nghiệp';
	    }
    else if ($delta6 == 0){
	        $result6 = 'Phương trình nghiệp kép' ;
	        $x06 = (-$b6/2*$a6);
	        $x006 = (-$b6/2*$a6);
	    }
    else {
	        $result6 = 'Phương trình có hai nghiệp phân biệt' ;$x06 = ((-$b6 + sqrt($delta6))/(2*$a6));
	        $x006 =  ((-$b6 - sqrt($delta6))/(2*$a6));
	    }
	?>
	<?php
	$a7 = 1;
	$b7 = 6;
	$c7 = 3;

	$delta7 = ($b7*$b7) - (4*$a7*$c7);

	if ($a7 == 0 ){
			$result7 = 'Hệ số sai';
			$x07 ='';
			$x007 ='';
		}
	else if ($delta7 < 0){
	        $result7 = 'Phương trình vô nghiệp';
	    }
    else if ($delta7 == 0){
	        $result7 = 'Phương trình nghiệp kép' ;
	        $x07 = (-$b7/2*$a7);
	        $x007 = (-$b7/2*$a7);
	    }
    else {
	        $result7 = 'Phương trình có hai nghiệp phân biệt' ;$x07 = ((-$b7 + sqrt($delta7))/(2*$a7));
	        $x007 =  ((-$b7 - sqrt($delta7))/(2*$a7));
	    }
	?>
	<?php
	$a8 = 0;
	$b8 = 2;
	$c8 = 3;

	$delta8 = ($b8*$b8) - (4*$a8*$c8);

	if ($a8 == 0 ){
			$result8 = 'Hệ số sai';
			$x08 ='';
			$x008 ='';
		}
	else if ($delta8 < 0){
	        $result8 = 'Phương trình vô nghiệp';
	    }
    else if ($delta8 == 0){
	        $result8 = 'Phương trình nghiệp kép' ;
	        $x08 = (-$b8/2*$a8);
	        $x008 = (-$b8/2*$a8);
	    }
    else {
	        $result8 = 'Phương trình có hai nghiệp phân biệt' ;$x08 = ((-$b8 + sqrt($delta8))/(2*$a8));
	        $x008 =  ((-$b8 - sqrt($delta8))/(2*$a8));
	    }
	?>
	<?php
	$a9 = 2;
	$b9 = 6;
	$c9 = 3;

	$delta9 = ($b9*$b9) - (4*$a9*$c9);

	if ($a9 == 0 ){
			$result9 = 'Hệ số sai';
			$x09 ='';
			$x009 ='';
		}
	else if ($delta9 < 0){
	        $result9 = 'Phương trình vô nghiệp';
	    }
    else if ($delta9 == 0){
	        $result9 = 'Phương trình nghiệp kép' ;
	        $x09 = (-$b9/2*$a9);
	        $x009 = (-$b9/2*$a9);
	    }
    else {
	        $result9 = 'Phương trình có hai nghiệp phân biệt' ;$x09 = ((-$b9 + sqrt($delta9))/(2*$a9));
	        $x009 =  ((-$b9 - sqrt($delta9))/(2*$a9));
	    }
	?>
	<?php
	$a5 = 5;
	$b5 = 2;
	$c5 = 4;

	$delta5 = ($b5*$b5) - (4*$a5*$c5);

	if ($a10 == 0 ){
			$result10 = 'Hệ số sai';
			$x010 ='';
			$x0010 ='';
		}
	else if ($delta10 < 0){
	        $result10 = 'Phương trình vô nghiệp';
	    }
    else if ($delta10 == 0){
	        $result10 = 'Phương trình nghiệp kép' ;
	        $x010 = (-$b10/2*$a10);
	        $x0010 = (-$b10/2*$a10);
	    }
    else {
	        $result10 = 'Phương trình có hai nghiệp phân biệt' ;$x010 = ((-$b10 + sqrt($delta10))/(2*$a10));
	        $x0010 =  ((-$b10 - sqrt($delta10))/(2*$a10));
	    }
	?>


<table border="1px" cellspacing="0px" style="width: 70%; margin: auto;">	
	<tr>
		<th>TT</th>
		<th>a</th>
		<th>b</th>
		<th>c</th>
		<th>x1</th>
		<th>x2</th>
		<th>Ghi Chú</th>
	</tr>
	<tr >
		<td class="1">1</td>
		<td class="1"><p><?=$a1?></p></td>
		<td class="1"><p><?=$b1?></p></td>
		<td class="1"><p><?=$c1?></p></td>
		<td class="1"><p><?=$x01?></p></td>
		<td class="1"><p><?=$x001?></p></td>
		<td class="1"><p><?=$result1?></p></td>
	</tr>
	<tr>
		<td class="2">2</td>
		<td class="2"><p><?=$a2?></p></td>
		<td class="2"><p><?=$b2?></p></td>
		<td class="2"><p><?=$c2?></p></td>
		<td class="2"><p><?=$x02?></p></td>
		<td class="2"><p><?=$x002?></p></td>
		<td class="2"><p><?=$result2?></p></td>
	</tr>
	<tr>
		<td class="3">3</td>
		<td class="3"><p><?=$a3?></p></td>
		<td class="3"><p><?=$b3?></p></td>
		<td class="3"><p><?=$c3?></p></td>
		<td class="3"><p><?=$x03?></p></td>
		<td class="3"><p><?=$x003?></p></td>
		<td class="3"><p><?=$result3?></p></td>
	</tr>
	<tr>
		<td class="4">4</td>
		<td class="4"><p><?=$a4?></p></td>
		<td class="4"><p><?=$b4?></p></td>
		<td class="4"><p><?=$c4?></p></td>
		<td class="4"><p><?=$x04?></p></td>
		<td class="4"><p><?=$x004?></p></td>
		<td class="4"><p><?=$result4?></p></td>
	</tr>
	<tr>
		<td class="5">5</td>
		<td class="5"><p><?=$a5?></p></td>
		<td class="5"><p><?=$b5?></p></td>
		<td class="5"><p><?=$c5?></p></td>
		<td class="5"><p><?=$x05?></p></td>
		<td class="5"><p><?=$x005?></p></td>
		<td class="5"><p><?=$result5?></p></td>
	</tr>
	<tr >
		<td class="6">6</td>
		<td class="6"><p><?=$a1?></p></td>
		<td class="6"><p><?=$b1?></p></td>
		<td class="6"><p><?=$c1?></p></td>
		<td class="6"><p><?=$x01?></p></td>
		<td class="6"><p><?=$x001?></p></td>
		<td class="6"><p><?=$result1?></p></td>
	</tr>
	<tr>
		<td class="7">7</td>
		<td class="7"><p><?=$a2?></p></td>
		<td class="7"><p><?=$b2?></p></td>
		<td class="7"><p><?=$c2?></p></td>
		<td class="7"><p><?=$x02?></p></td>
		<td class="7"><p><?=$x002?></p></td>
		<td class="7"><p><?=$result2?></p></td>
	</tr>
	<tr>
		<td class="8">8</td>
		<td class="8"><p><?=$a3?></p></td>
		<td class="8"><p><?=$b3?></p></td>
		<td class="8"><p><?=$c3?></p></td>
		<td class="8"><p><?=$x03?></p></td>
		<td class="8"><p><?=$x003?></p></td>
		<td class="8"><p><?=$result3?></p></td>
	</tr>
	<tr>
		<td class="9">9</td>
		<td class="9"><p><?=$a4?></p></td>
		<td class="9"><p><?=$b4?></p></td>
		<td class="9"><p><?=$c4?></p></td>
		<td class="9"><p><?=$x04?></p></td>
		<td class="9"><p><?=$x004?></p></td>
		<td class="9"><p><?=$result4?></p></td>
	</tr>
	<tr>
		<td class="10">10</td>
		<td class="10"><p><?=$a5?></p></td>
		<td class="10"><p><?=$b5?></p></td>
		<td class="10"><p><?=$c5?></p></td>
		<td class="10"><p><?=$x05?></p></td>
		<td class="10"><p><?=$x005?></p></td>
		<td class="10"><p><?=$result5?></p></td>
	</tr>
	

</table>

</body>
</html>