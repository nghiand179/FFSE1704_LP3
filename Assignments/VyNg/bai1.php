<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$a1= 5;
	$b1= 4;
		if($a1==0){
			if($b1==0){
				$gc1= "pt vo so nghiem";
			}else{
				$gc1= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x1 = -$b1/$a1;
			$gc1= "pt co nghiem";
		}
?>
<?php
	$a2= 8;
	$b2= 9;
		if($a2==0){
			if($b2==0){
				$gc2= "pt vo so nghiem";
			}else{
				$gc2= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x2 = -$b2/$a2;
			$gc2= "pt co nghiem";
		}
?>
<?php
	$a3= 5;
	$b3= 4;
		if($a3==0){
			if($b3==0){
				$gc3= "pt vo so nghiem";
			}else{
				$gc3= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x3 = -$b3/$a3;
			$gc3= "pt co nghiem";
		}
?>
<?php
	$a4= 6;
	$b4= 6;
		if($a4==0){
			if($b4==0){
				$gc4= "pt vo so nghiem";
			}else{
				$gc4= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x4 = -$b4/$a4;
			$gc4= "pt co nghiem";
		}
?>
<?php
	$a5= 2;
	$b5= 1;
		if($a5==0){
			if($b5==0){
				$gc5= "pt vo so nghiem";
			}else{
				$gc5= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x5 = -$b5/$a5;
			$gc5= "pt co nghiem";
		}
?>
<?php
	$a6= 8;
	$b6= 3;
		if($a6==0){
			if($b6==0){
				$gc6= "pt vo so nghiem";
			}else{
				$gc6= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x6 = -$b6/$a6;
			$gc6= "pt co nghiem";
		}
?>
<?php
	$a7= 4;
	$b7= 3;
		if($a7==0){
			if($b7==0){
				$gc7= "pt vo so nghiem";
			}else{
				$gc7= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x7 = -$b7/$a7;
			$gc7= "pt co nghiem";
		}
?>
<?php
	$a8= 9;
	$b8= 9;
		if($a8==0){
			if($b8==0){
				$gc8= "pt vo so nghiem";
			}else{
				$gc8= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x8 = -$b8/$a8;
			$gc8= "pt co nghiem";
		}
?>
<?php
	$a9= 2;
	$b9= 3;
		if($a9==0){
			if($b9==0){
				$gc9= "pt vo so nghiem";
			}else{
				$gc9= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x9 = -$b9/$a9;
			$gc9= "pt co nghiem";
		}
?>
<?php
	$a10= 4;
	$b10= 4;
		if($a10==0){
			if($b10==0){
				$gc10= "pt vo so nghiem";
			}else{
				$gc10= "pt vo nghiem";
			}
		}
		//th a # 0
		else{
			$x10 = -$b10/$a10;
			$gc10= "pt co nghiem";
		}
?>


<table border="3px" width="50%">
	<tr>
		<th>tt</th>
		<th>a</th>
		<th>b</th>
		<th>x</th>
		<th>ghi chú</th>
	</tr>
	<tr>
		<th>1</th>
		<th><?=$a1?></th>
		<th><?=$b1?></th>
		<th><?=$x1?></th>
		<th><?=$gc1?></th>
	</tr>
	<tr>
		<th>2</th>
		<th><?=$a2?></th>
		<th><?=$b2?></th>
		<th><?=$x2?></th>
		<th><?=$gc2?></th>
	</tr>
	<tr style="color: red">
		<th>3</th>
		<th><?=$a3?></th>
		<th><?=$b3?></th>
		<th><?=$x3?></th>
		<th><?=$gc3?></th>
	</tr>
		<tr>
		<th>4</th>
		<th><?=$a4?></th>
		<th><?=$b4?></th>
		<th><?=$x4?></th>
		<th><?=$gc4?></th>
	</tr>
		<tr>
		<th>5</th>
		<th><?=$a5?></th>
		<th><?=$b5?></th>
		<th><?=$x5?></th>
		<th><?=$gc5?></th>
	</tr>
		<tr>
		<th>6</th>
		<th><?=$a6?></th>
		<th><?=$b6?></th>
		<th><?=$x6?></th>
		<th><?=$gc6?></th>
	</tr>
		<tr>
		<th>7</th>
		<th><?=$a7?></th>
		<th><?=$b7?></th>
		<th><?=$x7?></th>
		<th><?=$gc7?></th>
	</tr>
		<tr>
		<th>8</th>
		<th><?=$a8?></th>
		<th><?=$b8?></th>
		<th><?=$x8?></th>
		<th><?=$gc8?></th>
	</tr>
		<tr>
		<th>9</th>
		<th><?=$a9?></th>
		<th><?=$b9?></th>
		<th><?=$x9?></th>
		<th><?=$gc9?></th>
	</tr>
		<tr>
		<th>10</th>
		<th><?=$a10?></th>
		<th><?=$b10?></th>
		<th><?=$x10?></th>
		<th><?=$gc10?></th>
	</tr>
	
</table>
</body>
</html>