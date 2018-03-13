<form action="" method="GET" style="background-color: #C6EDEC; width: 250px;">
	<h2 style="background-color: #00A19B">In câu chào</h2>
	<?php
if (isset($_GET['submit'])) {
	echo "hello :".$_GET['name'];
}
?>
	<input type="text" name="name" value="" >

	<input type="submit" name="submit">

</form>