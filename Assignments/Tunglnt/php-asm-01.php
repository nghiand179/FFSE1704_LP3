<!DOCTYPE html>
<html>
<head>
	<title>php-asm-01b.php</title>
	<style type="text/css">
		th { text-align: center; width: 50px; };
		td {  width: 50px; }
	</style>
</head>
<body>
	<h1>Giải phương trình bậc 2, 1 ẩn số</h1>

	<?php
	$a1 = 0;
	$b1 = 0;
	$c1 = 3;

	$delta1 = ($b1*$b1) - (4*$a1*$c1);

	if ($a1 == 0 ){
			if ($b1 == 0){
				$result1 = 'Hệ số sai <style> .1 {color : red}</style>';
				$x01 = '-';
				$x001 = '-';
				
			} else {
				$x01 = -$c1/$b1;
				$x001 = '-';
				$result1 = 'là phương trình bậc 1';
			}
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
			if ($b2 == 0){
				$result2 = 'Hệ số sai';
				$x02 = '-';
				$x002 = '-';
			} else {
				$x02 = -$c2/$b2;
				$x002 = '-';
				$result2 = 'là phương trình bậc 1';
			}
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
			if ($b3 == 0){
				$result3 = 'Hệ số sai';
				$x03 = '-';
				$x003 = '-';
			} else {
				$x03 = -$c3/$b3;
				$x003 = '-';
				$result3 = 'là phương trình bậc 1';
			}
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
			if ($b4 == 0){
				$result4 = 'Hệ số sai';
				$x04 = '-';
				$x004 = '-';
			} else {
				$x04 = -$c4/$b4;
				$x004 = '-';
				$result4 = 'là phương trình bậc 1';
			}
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
			if ($b5 == 0){
				$result5 = 'Hệ số sai';
				$x05 = '-';
				$x005 = '-';
			} else {
				$x05 = -$c5/$b5;
				$x005 = '-';
				$result5 = 'là phương trình bậc 1';
			}
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

<h1 style="text-align: center; color: red;">Giải Phương Trình Bậc Nhất 1 Ẩn Số</h1>
<table border="1px" cellspacing="0px" style="width: 50%; margin: auto;">	
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

</table>

</body>
</html>