<?php 
	$sv1 = array(
		'hoten'=>'Nguyen Nam',
		'lop'=>'10A1',
		'gioitinh'=>'Nam'
	);
	
	$arSV = array(
		array(
		'hoten'=>'Nguyen Minh',
		'diemtoan'=>1,
		'gioitinh'=>'Nam'
		),
		array(
		'hoten'=>'Nguyen Lan',
		'diemtoan'=>2,
		'gioitinh'=>'Nam'
		),
		array(
		'hoten'=>'Nguyen Nam',
		'diemtoan'=>3,
		'gioitinh'=>'Nam'
		),
	);
	foreach($arSV as $key => $item){
		echo ($key+1) . "<br>";
	}
?>