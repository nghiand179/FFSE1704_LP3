<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment PHP 3d</title>
</head>
<body>
	<?php
		session_start();
		foreach ($_SESSION['giohoa'] as $hoa){
			 $tenhoa=$_POST['tenhoa'];
			 $dongia=$_POST['dongia'];
			 $soluong=$_POST['soluong'];

			$tong= 0;
			$tong =($_POST['soluong']*$_POST['dongia']);
			
		}
	?>
	<form method="post" action="">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<th  colspan="2" style="float: left; color: red;" ><h1 class="style1">Giỏ Hàng</h1></th>
			</tr>
			<tr>
				
				<td><strong>Tên Hoa:<br> <?php echo $tenhoa ?></strong></td>
				<td><strong>Số lượng:<br><?php echo $soluong;?></strong></td>
				<td><strong>Đơn Giá:<br> <?php echo $dongia;?></strong></td>
				<td><strong>Tổng:<br> <?php echo $tong;?> </strong></td>
			</tr>
			
		</table>
	</form>
</body>
</html>