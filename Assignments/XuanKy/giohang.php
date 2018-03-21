<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
</head>
<body>
	<h1>Giõ hàng</h1>
	<?php
		session_start();
	?>
	<table cellpadding="10px" cellspacing="0px">
		<tr style="background-color: #00ffdc;">
			<td>Tên sản phẩm</td>
			<td>Giá</td>
			<td>Số lượng</td>
			<td>Tổng tiền</td>
		</tr>
		<?php $sum=0; ?>
		<?php foreach ($_SESSION['giohang'] as $key => $value) {
			$sum= ($sum + $value['dongia'])*$value['soluong'];?>
			<tr>
				<td><?=$value['tenhoa']?></td>
				<td><?=$value['dongia']?></td>
				<td><?=$value['soluong']?></td>
				<td><?= $sum ?></td>
			</tr>
			<?php }?>
		</table>
	</body>
	</html>
	<h2>Tong so tien la: <?=$sum?></h2>
	