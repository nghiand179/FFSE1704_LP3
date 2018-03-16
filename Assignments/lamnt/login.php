<?php 
	session_start();
	if(isset($_SESSION['mess'])){
		$mess= $_SESSION['mess'];
	}else{
		$mess="";
	}
?>
<html>
	<head>
		<title> Login</title>
	</head>
	<body> 
	
	<form action="dangnhap.php" method="POST" >
		Username: <input type="text" name="username" /> <br/>
		Password: <input type="password" name="password" /> <br/>
		<input type="submit" name="login" value="Login" />
		<?=$mess?>
	</form>
		
	</body>
</html>
<?php 
	
	
?>