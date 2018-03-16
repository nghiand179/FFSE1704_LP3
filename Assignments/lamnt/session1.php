<?php 
	session_start();

	if(isset($_POST['submit'])){
		$id= $_POST['id'];
		$name= $_POST['ten'];
		$age= $_POST['tuoi'];
		if(isset($_SESSION['danhsach'][$id])){
			$_SESSION['danhsach'][$id]['age']=$age;
		}else{
			$_SESSION['danhsach'][$id]=array(
				'name'=>$name,
				'age'=>$age
			);
		}
	}
?>
<form action='' method='POST'>
	ID<input type='text' name='id'/>
	Ten<input type='text' name='ten'/>
	Tuoi<input type='text' name='tuoi'/>
	<input type='submit' name='submit'/>
</form>