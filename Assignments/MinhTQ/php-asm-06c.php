<?php 
session_start();
if (isset($_SESSION['user'])) {
	echo "Xin chào: Quang minh pro.";
}else{
	header("location: php-asm-06b.php");
 }
 ?>
<br>
<br>
<form action="" method="get">
	<input type="submit" name="dx" value="Đăng xuất" >
	<?php
		if (isset($_GET['dx'])) {
			header("location: php-asm-06b.php");
		}
	?>
</form>