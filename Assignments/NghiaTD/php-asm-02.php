<?php
$lopA=array(
	
		array(
			'id' => 1,
			'name' => "Nguyễn Văn A",
			'lp0' => 9.2,
			'lp1' => 8.7,
			'lp2' => 7.8
		),
		array(
			'id' => 2,
			'name' => "Nguyễn Văn B",
			'lp0' => 7.3,
			'lp1' => 9.7,
			'lp2' => 8.8
		),
		array(
			'id' => 3,
			'name' => "Nguyễn Văn C",
			'lp0' => 9.5,
			'lp1' => 8,
			'lp2' => 9
		)
	);

?>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor: #d6d6d6>
		<th style="text-align:center;">id</th>
		<th style="text-align:center;">name</th>
		<th style="text-align:center;">lp0</th>
		<th style="text-align:center;">lp1</th>
		<th style="text-align:center;">lp2</th>
	</tr>
	<?php for ($i=0;$i < count($lopA);$i++) {?>
			<tr>
				<td><?=$lopA[$i]['id']?></td>
				<td><?=$lopA[$i]['name']?></td>
				<td><?=$lopA[$i]['lp0']?></td>
				<td><?=$lopA[$i]['lp1']?></td>
				<td><?=$lopA[$i]['lp2']?></td>
			</tr>
	<?php }?>
	<h1>cau 2</h1>
	<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor: #d6d6d6>
		<th style="text-align:center;">id</th>
		<th style="text-align:center;">name</th>
		<th style="text-align:center;">lp0</th>
		<th style="text-align:center;">lp1</th>
		<th style="text-align:center;">lp2</th>
		<th style="text-align:center;">Điểm trung bình</th>

	</tr>
	<?php foreach ($lopA as $key => $value) {?>
			<tr>
				<td><?=$value['id']?></td>
				<td><?=$value['name']?></td>
				<td><?=$value['lp0']?></td>
				<td><?=$value['lp1']?></td>
				<td><?=$value['lp2']?></td>
				<td><?=$diemtb=($value['lp0']+$value['lp1']+$value['lp2'])/3?></td>
			</tr>
	<?php }?>
	

</table>
<h1>xep loai</h1>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor: #d6d6d6>
		<th style="text-align:center;">id</th>
		<th style="text-align:center;">name</th>
		<th style="text-align:center;">lp0</th>
		<th style="text-align:center;">lp1</th>
		<th style="text-align:center;">lp2</th>
		<th style="text-align:center;">Điểm trung bình</th>
		<th style="text-align:center;">Xếp loại</th>

	</tr>
	<?php foreach ($lopA as $key => $value) {
			echo "<tr>";
			echo "<td>$value[id]</td>";
			echo "<td>$value[name]</td>";
			echo "<td>$value[lp0]</td>";
			echo "<td>$value[lp1]</td>";
			echo "<td>$value[lp2]</td>";
			$diem=($value['lp0']+$value['lp1']+$value['lp2'])/3;
			echo "<td>$diem</td>";
			if($diem <5){
				$xeploai = 'yeu';
			}
			else{
				if($diem <=7){
					$xeploai = 'trung bình';
				}
				else{
					if($diem <=8.5){
						$xeploai = 'khá';
					}
					else{
						$xeploai = 'giỏi';
					}
				}
			}
			echo "<td>$xeploai<td>";
			echo "</tr>";
		}
	?>

	

</table>
<h1>Hiển thị tên có điểm cao nhất</h1>
<?php
	$max=0;
	$tên="";
	for($i=0;$i<count($lopA);$i++){
		$tb[$i]=($lopA[$i]['lp0']+$lopA[$i]['lp1']+$lopA[$i]['lp2'])/3;
		if($tb[$i]>$max){
			$max=$tb[$i];
			$tên=$lopA[$i]['name'];
		}
	}
	echo "Người có điểm trung bình cao nhất là: " .$tên ." với số điểm là: ".$max;
	
?>