<?php 
session_start();
if (isset($_POST['Login']) && !empty($_POST['username']) 
   && !empty($_POST['passwork'])) {

 $username = $_POST['username'];
 $passwork = $_POST['passwork'];

if ($_POST['username'] == 'admin' && 
   $_POST['passwork'] == '123') {

   $_SESSION['user'] = $username;

header("location: home.php");

}else {
   echo "Bạn đã nhập sai , xin mời nhập lại ";
}
}
else if (empty($_POST["username"]) || empty($_POST["passwork"])){
 echo " Vui lòng không để trống ...!!";
}
?>

</br></br><a href="vidulogin.php"> Nhập lại </a>

