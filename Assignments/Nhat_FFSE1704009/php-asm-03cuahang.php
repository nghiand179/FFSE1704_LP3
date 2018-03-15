<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment PHP 3e</title>
</head>
<body>
	<?php
		$id="";
		$tenhoa= "";
		$soluong= "";
		$dongia= "";
		session_start();
		if (isset($_POST['id'])||isset($_POST['tenhoa'])||isset($_POST['soluong'])||isset($_POST['dongia'])) {
			$hoa['id'] = $_POST['id'];
			$hoa['tenhoa'] = $_POST['tenhoa'];
			$hoa['soluong'] = $_POST['soluong'];
			$hoa['dongia'] = $_POST['dongia'];

			$_SESSION['giohoa'][$_POST['id']]= $hoa;
		}
	?>
	<form method="post" action="php-asm-03d.php">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<td colspan="2" align="center" bgcolor="#FF9900"><h1 class="style1">Cửa hàng hoa</h1></td>
			</tr>
			<tr>
				<td width="111"><strong>ID</strong></td>
				<td width="379">
				<input name="id" type="text"  value="<?php echo $id ?>" >
				</td>
			</tr>
			<tr>
				<td><strong>Tên Hoa</strong></td>
				<td width="379">
				<input name="tenhoa" type="text"  value="<?php echo $tenhoa ?>" >
				</td>
			</tr>
			<tr>
				<td><strong>Số lượng</strong></td>
				<td width="379">
				<input name="soluong" type="number"  value="<?php echo $soluong;?> " >
				</td>
			</tr>
			<tr>
				<td><strong>Đơn Giá </strong></td>
				<td width="379">
				<input name="dongia" type="number"  value="<?php echo $dongia;?> " >
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><label>
				<input type="submit" name="post" value="Mua Hoa">
				</label></td>
			</tr>
		</table>
	</form>
</body>
</html>