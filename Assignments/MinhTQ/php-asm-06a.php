
 <?php 
session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username=='quangminh' && $password=='123') {
		$_SESSION['user']=$username;
		header("location: php-asm-06c.php");
	}else{
         header("location: php-asm-06.php");
	}
}
 ?>