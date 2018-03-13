<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page xử lý</title>
</head>
<body>
	<?php
		echo "Xin chào";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		echo $firstname."<br>";
		echo $lastname."<br>";
	?>

	<?php
		echo "Xin chào";
		echo "<pre>";
		print_r($_GET);
		echo "</pre>";
	
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];

		echo $firstname."<br>";
		echo $lastname."<br>";
	?>
</body>
</html>