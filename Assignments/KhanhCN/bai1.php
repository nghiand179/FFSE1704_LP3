<?php

$a = 2.5;
$b = 2;
//TH a == 0
if ($a==0) {
	if ($b==0) {
		$vsn = "Phuong trinh vo so nghiem";
	}else {
		$vn = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x = -$b/$a;
	$cn =  "phuong trinh co nghiem";
}
?>

<?php
$a0 =0;
$b0 =1;

//TH a == 0
if ($a0==0) {
	$vn0 = "Hệ số không hợp lên a = 0 ";
		$x0 = "-";
	}else {
		$x0 = -$b0/$a0	;
	$cn1 =  "phuong trinh co nghiem ";
	}

?>
	



<?php
$a1 = -1.70;
$b1 = -9.60;
//TH a == 0
if ($a1==0) {
	if ($b1==0) {
		$vsn1 = "Phuong trinh vo so nghiem";
	}else {
		$vn1 = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x1 = -$b1/$a1;
	$cn1 =  "phuong trinh co nghiem ";
}
?>


<?php
$a2 = 0.20;
$b2 = 0.50;
//TH a == 0
if ($a2==0) {
	if ($b2==0) {
		$vsn2 = "Phuong trinh vo so nghiem";
	}else {
		$vn2 = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x2 = -$b2/$a2;
	$cn2 =  "phuong trinh co nghiem";
}
?>

<?php
$a3 = -6.2;
$b3 = 0.30;
//TH a == 0
if ($a3==0) {
	if ($b3==0) {
		$vsn2 = "Phuong trinh vo so nghiem";
	}else {
		$vn2 = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x3 = -$b3/$a3;
	$cn3 =  "phuong trinh co nghiem";
}
?>


<?php
$a4 = 0.2;
$b4 = 3.6;
//TH a == 0
if ($a4==0) {
	if ($b4==0) {
		$vsn4 = "Phuong trinh vo so nghiem";
	}else {
		$vn4 = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x4 = -$b4/$a4;
	$cn4 =  "phuong trinh co nghiem";
}
?>

<?php
$a5 = 9.5;
$b5 = 6.0;
//TH a == 0
if ($a5==0) {
	if ($b5==0) {
		$vsn5 = "Phuong trinh vo so nghiem";
	}else {
		$vn5 = "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x5 = -$b5/$a5;
	$cn5 =  "phuong trinh co nghiem";
}
?>


<?php
$a6 = -3.9;
$b6 = -0.3;
//TH a == 0
if ($a6==0) {
	if ($b6==0) {
		$vsn6 = "Phuong trinh vo so nghiem";
	}else {
		$vn6 =  "Phuong trinh vo nghiem";
	}
// TH a # 0

}
else{
	$x6 = -$b6/$a6;
	$cn6 =  "phuong trinh co nghiem";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px" , cellpadding="5", cellspacing="0">
		<tr>
			<th>STT</th>
			<th>a</th>
			<th>b</th>
			<th>x</th>
			<th>Ghi chú</th>
		</tr>

		<tr>
			<td>1</td>
			<td><?=$a?></td>
			<td><?=$b?></td>
			<td><?=round($x,2)?></td>
			<td><?=$cn?></td>
		</tr>
		<tr style="color: red">
			<td>2</td>
			<td><?=$a0?></td>
			<td><?=$b0?></td>
			<td><?=$x0?></td>
			<td><?=$vn0?></td>
		</tr>

		<tr>
			<td>3</td>
			<td><?=$a1?></td>
			<td><?=$b1?></td>
			<td><?=round($x1,2)?></td>
			<td><?=$cn1?></td>
		</tr>

		<tr>
			<td>4</td>
			<td><?=$a2?></td>
			<td><?=$b2?></td>
			<td><?=$x2?></td>
			<td><?=$cn2?></td>
		</tr>

		<tr>
			<td>5</td>
			<td><?=$a3?></td>
			<td><?=$b3?></td>
			<td><?=round($x3,2)?></td>
			<td><?=$cn3?></td>
		</tr>

		<tr>
			<td>6</td>
			<td><?=$a4?></td>
			<td><?=$b4?></td>
			<td><?=$x4?></td>
			<td><?=$cn4?></td>
		</tr>

		<tr>
			<td>7</td>
			<td><?=$a5?></td>
			<td><?=$b5?></td>
			<td><?=round($x5,2)?></td>
			<td><?=$cn5?></td>
		</tr>

		<tr>
			<td>8</td>
			<td><?=$a6?></td>
			<td><?=$b6?></td>
			<td><?=round($x6,2)?></td>
			<td><?=$cn6?></td>
		</tr>
	</table>

</body>
</html>