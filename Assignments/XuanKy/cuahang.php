<!DOCTYPE html>
<html>
<head>
	<title>Xuân Kỳ</title>
</head>
<?php
session_start();
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$tenhoa=$_POST['hoa'];
	$soluong=$_POST['soluong'];
	$dongia=$_POST['dongia'];
	if(isset($_SESSION['giohang'][$id])){
		$_SESSION['giohang'][$id]['soluong']=$soluong;
		$_SESSION['giohang'][$id]['dongia']=$dongia;
	}
	else{
		$_SESSION['giohang'][$id]=array(
			'tenhoa'=>$tenhoa,
			'soluong'=>$soluong,
			'dongia'=>$dongia
		);
	}
}
?>
<body style="width: 200px;text-align: center;">
	<div style="background-color: #00c4ff;padding: 5px;"><strong style="color: white;font-size: 20px">Cửa hàng Sunflower</strong></div>
	<form action="giohang.php" method="post" style="background-color: #4cdada70;text-align: left;
	">
	Id hoa:<br><br>
	<input type="text" name="id"><br><br>
	Tên hoa:<br><br>
	<input type="text" name="hoa"><br><br>
	Số lượng:<br><br>
	<input type="number" name="soluong"><br><br>
	Đơn giá:<br><br>
	<input type="number" name="dongia"><br><br>
	<div style="text-align: center;"><input type="submit" name="submit" value="Mua hoa"></div><br>
</form>
</body>
</html>
