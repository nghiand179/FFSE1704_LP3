<?php

session_start();
$_SESSION['id'] =  $_POST['id'];
$_SESSION['tenhoa'] = $_POST['tenhoa'];
$_SESSION['dongia'] = $_POST['dongia'];
$_SESSION['soluong'] = $_POST['soluong'];
$tong= 0;
$tong =($_POST['soluong']*$_POST['dongia']);
?>
<h2>giỏ hàng</h2>
<form action="" method="post">
	<table style="background-color: #c9b5b5; width: 460px;">
		
		<tr>
			<td><strong>id</strong></td>
			<td ><strong>Tên hoa</strong></td>
			<td><strong>Số lượng</strong></td>
			<td><strong>Đơn giá</strong></td>	
		</tr>
		<tr>
			<td><?php echo $_SESSION['id']; ?></td>
			<td style="color: red;"><?php echo $_SESSION['tenhoa']; ?></td>
			<td><?php echo $_SESSION['soluong']; ?></td>
			<td><?php echo $_SESSION['dongia']; ?></td>	
		</tr>

	</table>
	<br>
	<br>
	<?php
	echo "<strong>Tổng số tiền là : </strong>".$tong;
	?>
</form>
