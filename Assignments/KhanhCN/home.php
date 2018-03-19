
<?php 
session_start();
if (isset($_SESSION['user'])) {
	echo "Xin chao anh Khánh";
}else{
	header("location : vidulogin.php");
}
?>
<a href="dangxuat.php"> Dang xuat </a>