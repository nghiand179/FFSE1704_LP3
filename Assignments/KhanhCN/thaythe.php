<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center; margin: auto;">

	<?php
	$vm= " 0";
		if (isset($_POST['thuchien'])) {
			$vg = $_POST['dvgoc'];
			$tg = $_POST['tugoc'];
			$tt = $_POST['thaythe'];
			$vm = str_replace($tg, $tt, $vg);
		}
		
		?>

	<form method="POST" style="background: #CDB7B5;width:550px;">
		<h1 style="text-align: center;background:#0033ff; color: #ffcc00">Thay thế chuỗi</h1>

		<p style="text-align: center;">Đoạn văn góc</p>

		<input type="" style="width: 400px; height: 30px" name="dvgoc"><br/><br/>

		Từ góc : <input type="" name="tugoc">

		thay thế bằng : <input type="" name="thaythe"></br><br/>

		<input type="" style="width: 400px ; height: 30px" name="dvtt" value="<?php echo $vm; ?>"><br/><br/>
		
		<input type="submit" name="thuchien" value="Thực hiện">
	</form>
</body>
</html>