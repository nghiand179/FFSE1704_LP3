<?php  
session_start();
$id="";
$tenhoa= "";
$soluong= "";
$dongia= "";
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $tenhoa = $_POST['tenhoa'];
  $soluong = $_POST['soluong'];
  $dongia = $_POST['dongia'];
  header("location: php-asm-05a.php");

}

?>
<form action="php-asm-05a.php" method="post" accept-charset="utf-8" style="background-color: #C6EDEC; width: 250px; padding-left: 9px;">
	<h2  style="color: #ffffff;background-color: #00A19B">Cửa hàng Sunflower</h2>
	<h4>Id hoa:</h4>
   <input type="text" name="id" value="<?php echo $id ?>">
   <h4>Tên hoa:</h4>
   <input type="text" name="tenhoa" value="<?php echo $tenhoa ?>">
   <h4>Số lượng:</h4>
   <input type="number" name="soluong" value="<?php echo $soluong ?>">
   <h4>Đơn giá :</h4>
   <input type="number" name="dongia" value="<?php echo $dongia ?>"><br><br>
   <input type="submit" name="submit" value="mua hoa" style="margin: 0 85px 11px 85px;">

</form>
