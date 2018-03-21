<?php 
session_start();
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username=='admin' && $password=='123456'){
			$_SESSION['user']=$username;
			unset($_SESSION['mess']);
			header("location: home.php");
		}else{
			$_SESSION['mess']="Tai khoan hoac mat khau khong dung";
			header("location: login.php");
		}
		
	}
?>