<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$a1 = 0;
	$b1 = 0;
	$c1 = 3;
	$d1 = ($b1*$b1)-4*$a1*$c1;
	if($a1==0){
		if($b1!=0){
			$x11 = -$c1/$b1;
			$x21 = -$c1/$b1;
			$y11 = "phương trịnh có nghiệm kép";
		}
		else{
			$a1= "<h3 style='color:red'> $a1</h3>";
			$b1= "<h3 style='color:red'> $b1</h3>";
			$c1= "<h3 style='color:red'> $a1</h3>";
			$x11= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x21= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y11= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d1==0){
		$x1 = -$b1/2*$a1;
		$y1 = "pt có nghiệm kép";;
	}
	else
	{
		if($d1>0){
			$x11 = (-$b1 + sqrt($d1))/(2*$a1);
			$x21 = (-$b1 - sqrt($d1))/(2*$a1);
			$y11 = "pt có 2 nghiệm";
		}
		else
			$a1= "<h4 style='color:red'> $a1 </h4>";
			$b1= "<h4 style='color:red'> $b1 </h4>";
			$c1= "<h4 style='color:red'> $c1 </h4>";
			$x11= "<h4 style='color:red'> $x11 </h4>";
			$x21= "<h4 style='color:red'> $x21 </h4>";
			$y= "<h4 style='color:red'> pt vô nghiệm </h4>";

		}
	}


	?>
	<!-- hết dòng 1 -->
	<?php
	$a2 = 5;
	$b2 = 10;
	$c2 = 3;
	$d2 = ($b2*$b2)-4*$a2*$c2;
	if($a2==0){
		if($b2!=0){
			$x12 = -$c2/$b2;
			$x22 = -$c2/$b2;
			$y12 = "phương trịnh có nghiệm ";
		}
		else{
			$a2= "<h3 style='color:red'> $a2</h3>";
			$b2= "<h3 style='color:red'> $b2</h3>";
			$c2= "<h3 style='color:red'> $a2</h3>";
			$x12= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x22= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y2= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d2==0){
		$x12 = -$b2/2*$a2;
		$x22 = -$b2/2*$a2;
		$y2 = "pt có nghiệm kép";;
	}
	else
	{
		if($d2>0){
			$x12 = (-$b2 + $d2)/(2*$a2);
			$x22 = (-$b2 - $d2)/(2*$a2);
			$y2 = "pt có 2 nghiệm";
		}
		else{
			$a2= "<h4 style='color:red'> $a2 </h4>";
			$b2= "<h4 style='color:red'> $b2 </h4>";
			$c2= "<h4 style='color:red'> $c2 </h4>";
			$x12= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x22= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y2= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?>
	<!-- hết dòng 2 -->
	<?php
	$a3 = 5;
	$b3 = 10;
	$c3 = 3;
	$d3 = ($b3*$b3)-4*$a3*$c3;
	if($a3==0){
		if($b3!=0){
			$x13 = -$c3/$b3;
			$x23 = -$c3/$b3;
			$y13 = "phương trịnh có nghiệm ";
		}
		else{
			$a3= "<h3 style='color:red'> $a3</h3>";
			$b3= "<h3 style='color:red'> $b3</h3>";
			$c3= "<h3 style='color:red'> $a3</h3>";
			$x13= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x23= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y3= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d3==0){
		$x13 = -$b3/2*$a3;
		$x23 = -$b3/2*$a3;
		$y3 = "pt có nghiệm kép";;
	}
	else
	{
		if($d3>0){
			$x13 = (-$b3 + $d3)/(2*$a3);
			$x23 = (-$b3 - $d3)/(2*$a3);
			$y3 = "pt có 2 nghiệm";
		}
		else{
			$a3= "<h4 style='color:red'> $a3 </h4>";
			$b3= "<h4 style='color:red'> $b3 </h4>";
			$c3= "<h4 style='color:red'> $c3 </h4>";
			$x13= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x23= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y3= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
	<!-- hết dòng3 -->
	<?php
	$a4 = 5;
	$b4 = 10;
	$c4 = 3;
	$d4 = ($b4*$b4)-4*$a4*$c4;
	if($a4==0){
		if($b4!=0){
			$x14 = -$c4/$b4;
			$x24 = -$c4/$b4;
			$y14 = "phương trịnh có nghiệm ";
		}
		else{
			$a4= "<h3 style='color:red'> $a4</h3>";
			$b4= "<h3 style='color:red'> $b4</h3>";
			$c4= "<h3 style='color:red'> $a4</h3>";
			$x14= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x24= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y4= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d4==0){
		$x14 = -$b4/2*$a4;
		$x24 = -$b4/2*$a4;
		$y4 = "pt có nghiệm kép";;
	}
	else
	{
		if($d4>0){
			$x14 = (-$b4 + $d4)/(2*$a4);
			$x24 = (-$b4 - $d4)/(2*$a4);
			$y4 = "pt có 2 nghiệm";
		}
		else{
			$a4= "<h4 style='color:red'> $a4 </h4>";
			$b4= "<h4 style='color:red'> $b4 </h4>";
			$c4= "<h4 style='color:red'> $c4 </h4>";
			$x14= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x24= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y4= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
	<!-- hết dòng4 -->
		<?php
	$a5 = 5;
	$b5 = 10;
	$c5 = 3;
	$d5 = ($b5*$b5)-4*$a5*$c5;
	if($a5==0){
		if($b5!=0){
			$x15 = -$c5/$b5;
			$x25 = -$c5/$b5;
			$y15 = "phương trịnh có nghiệm ";
		}
		else{
			$a5= "<h3 style='color:red'> $a5</h3>";
			$b5= "<h3 style='color:red'> $b5</h3>";
			$c5= "<h3 style='color:red'> $a5</h3>";
			$x15= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x25= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y5= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d5==0){
		$x15 = -$b5/2*$a5;
		$x25 = -$b5/2*$a5;
		$y5 = "pt có nghiệm kép";;
	}
	else
	{
		if($d5>0){
			$x15 = (-$b5 + $d5)/(2*$a5);
			$x25 = (-$b5 - $d5)/(2*$a5);
			$y5 = "pt có 2 nghiệm";
		}
		else{
			$a5= "<h4 style='color:red'> $a5 </h4>";
			$b5= "<h4 style='color:red'> $b5 </h4>";
			$c5= "<h4 style='color:red'> $c5 </h4>";
			$x15= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x25= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y5= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
<!-- 	hết dòng 5 -->
		<?php
	$a6 = 5;
	$b6 = 10;
	$c6 = 3;
	$d6 = ($b6*$b6)-4*$a6*$c6;
	if($a6==0){
		if($b6!=0){
			$x16 = -$c6/$b6;
			$x26 = -$c6/$b6;
			$y16 = "phương trịnh có nghiệm ";
		}
		else{
			$a6= "<h3 style='color:red'> $a6</h3>";
			$b6= "<h3 style='color:red'> $b6</h3>";
			$c6= "<h3 style='color:red'> $a6</h3>";
			$x16= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x26= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y6= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d6==0){
		$x16 = -$b6/2*$a6;
		$x26 = -$b6/2*$a6;
		$y6 = "pt có nghiệm kép";;
	}
	else
	{
		if($d6>0){
			$x16 = (-$b6 + $d6)/(2*$a6);
			$x26 = (-$b6 - $d6)/(2*$a6);
			$y6 = "pt có 2 nghiệm";
		}
		else{
			$a6= "<h4 style='color:red'> $a6 </h4>";
			$b6= "<h4 style='color:red'> $b6 </h4>";
			$c6= "<h4 style='color:red'> $c6 </h4>";
			$x16= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x26= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y6= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
	<!-- hết dòng 6 -->
	<?php
	$a7 = 5;
	$b7 = 10;
	$c7 = 3;
	$d7 = ($b7*$b7)-4*$a7*$c7;
	if($a7==0){
		if($b7!=0){
			$x17 = -$c7/$b7;
			$x27 = -$c7/$b7;
			$y17 = "phương trịnh có nghiệm ";
		}
		else{
			$a7= "<h3 style='color:red'> $a7</h3>";
			$b7= "<h3 style='color:red'> $b7</h3>";
			$c7= "<h3 style='color:red'> $a7</h3>";
			$x17= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x27= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y7= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d7==0){
		$x17 = -$b7/2*$a7;
		$x27 = -$b7/2*$a7;
		$y7 = "pt có nghiệm kép";;
	}
	else
	{
		if($d7>0){
			$x17 = (-$b7 + $d7)/(2*$a7);
			$x27 = (-$b7 - $d7)/(2*$a7);
			$y7 = "pt có 2 nghiệm";
		}
		else{
			$a7= "<h4 style='color:red'> $a7 </h4>";
			$b7= "<h4 style='color:red'> $b7 </h4>";
			$c7= "<h4 style='color:red'> $c7 </h4>";
			$x17= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x27= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y7= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
	<!-- hết dòng 7 -->
	<?php
	$a8 = 5;
	$b8 = 10;
	$c8 = 3;
	$d8 = ($b8*$b8)-4*$a8*$c8;
	if($a8==0){
		if($b8!=0){
			$x18 = -$c8/$b8;
			$x28 = -$c8/$b8;
			$y18 = "phương trịnh có nghiệm ";
		}
		else{
			$a8= "<h3 style='color:red'> $a8</h3>";
			$b8= "<h3 style='color:red'> $b8</h3>";
			$c8= "<h3 style='color:red'> $a8</h3>";
			$x18= "<h3 style='color:red'> Vô nghiệm</h3>";
			$x28= "<h3 style='color:red'> Vô nghiệm</h3>";
			$y8= "<h3 style='color:red'>pt Vô nghiệm</h3>";
		}
	}else{
	if($d8==0){
		$x18 = -$b8/2*$a8;
		$x28 = -$b8/2*$a8;
		$y8 = "pt có nghiệm kép";;
	}
	else
	{
		if($d8>0){
			$x18 = (-$b8 + $d8)/(2*$a8);
			$x28 = (-$b8 - $d8)/(2*$a8);
			$y8 = "pt có 2 nghiệm";
		}
		else{
			$a8= "<h4 style='color:red'> $a8 </h4>";
			$b8= "<h4 style='color:red'> $b8 </h4>";
			$c8= "<h4 style='color:red'> $c8 </h4>";
			$x18= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$x28= "<h4 style='color:red'> Vô Nghiệm </h4>";
			$y8= "<h4 style='color:red'> pt vô nghiệm </h4>";
			}
		}
	}


	?> 
	<h1>Giải phương trình bâc hai 2 ẩn số	</h1>
	<table border="1px" width="900px">
		<tr>
			<th>TT</th>
			<th>a</th>
			<th>b</th>
			<th>c</th>
			<th>x1</th>
			<th>x2</th>
			<th>Ghi chú</th>

		</tr>
		<tr>
			<td>1</td>
			<td><?=$a1?></td>
			<td><?=$b1?></td>
			<td><?=$c1?></td>
			<td><?=$x11?></td>
			<td><?=$x21?></td>
			<td><?=$y11?></td>
		</tr>
		<tr>
			<td>2</td>
			<td><?=$a2?></td>
			<td><?=$b2?></td>
			<td><?=$c2?></td>
			<td><?=$x12?></td>
			<td><?=$x22?></td>
			<td><?=$y2?></td>
		</tr>
		<tr>
			<td>3</td>
			<td><?=$a3?></td>
			<td><?=$b3?></td>
			<td><?=$c3?></td>
			<td><?=$x13?></td>
			<td><?=$x23?></td>
			<td><?=$y3?></td>
		</tr>
		<tr>
			<td>4</td>
			<td><?=$a4?></td>
			<td><?=$b4?></td>
			<td><?=$c4?></td>
			<td><?=$x14?></td>
			<td><?=$x24?></td>
			<td><?=$y4?></td>
		</tr>
			<tr>
			<td>5</td>
			<td><?=$a5?></td>
			<td><?=$b5?></td>
			<td><?=$c5?></td>
			<td><?=$x15?></td>
			<td><?=$x25?></td>
			<td><?=$y5?></td>
		</tr>
			<tr>
			<td>6</td>
			<td><?=$a6?></td>
			<td><?=$b6?></td>
			<td><?=$c6?></td>
			<td><?=$x16?></td>
			<td><?=$x26?></td>
			<td><?=$y6?></td>
		</tr>
			<tr>
			<td>7</td>
			<td><?=$a7?></td>
			<td><?=$b7?></td>
			<td><?=$c7?></td>
			<td><?=$x17?></td>
			<td><?=$x27?></td>
			<td><?=$y7?></td>
		</tr>
		</tr>
			<tr>
			<td>8</td>
			<td><?=$a8?></td>
			<td><?=$b8?></td>
			<td><?=$c8?></td>
			<td><?=$x18?></td>
			<td><?=$x28?></td>
			<td><?=$y8?></td>
		</tr>
	</table>
</body>
</html>