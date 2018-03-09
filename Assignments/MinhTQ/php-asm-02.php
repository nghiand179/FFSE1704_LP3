<?php
$dtb = array(
	array(
		'id' => 1,
		'name' => 'Trần Nguyễn Nhật Nam',
		'diemtoan' => 9,
		'diemly' => 8.5,
		'diemhoa' => 8.9,
	),
	array(
		'id' => 2,
		'name' => 'Bùi Ngọc Quỳnh Nhi',
		'diemtoan' => 7,
		'diemly' => 8.8,
		'diemhoa' => 7.8,
	),
	array(
		'id' => 3,
		'name' => 'Nguyễn Hoàng Thanh Mai',
		'diemtoan' => 8.5,
		'diemly' => 9.2,
		'diemhoa' => 7.5,
	),
	array(
		'id' => 4,
		'name' => 'Trần Thi Thu Minh',
		'diemtoan' => 6.5,
		'diemly' => 6,
		'diemhoa' => 7,
	),
	array(
		'id' => 5,
		'name' => 'Nguyễn Thái Nguyên Thảo',
		'diemtoan' => 4,
		'diemly' => 4.1,
		'diemhoa' => 3.2,
	)
);

?>
<style type="text/css" >
th{
	text-align: right;
	background-color: #ced5db;
}
td{
	text-align: right;
}
#tt{
	text-align: center;
}
.ten{
	text-align: left; 
	width: 237px;
}
.th{
	width: 150px;
}
</style>
<h1> <strong>Bảng điểm tổng kết môn của lớp 10A1</strong></h1>
<table border="1px"; cellpadding="5px"; cellspacing="0"; >
	<tr>
		<th>TT</th>
		<th class="ten">Họ tên</th>
		<th class="th">Điểm toán</th>
		<th  class="th">Điểm lý</th>
		<th  class="th">Điểm hóa</th>
		<th  class="th">Điểm trung bình </th>
		<th style="text-align: center;"  class="th">Xếp loại</th>
	</tr>
	
	<?php
	foreach ($dtb as $k => $value) {
		$diem = round(($value['diemtoan'] + $value['diemly'] + $value['diemhoa'])/3);
		$style = "";
		if ($diem < 5 ) {
			$xeploai ='loại yếu ';
			$style = "style='color: red;'";
		}else{
			if ($diem<= 7) {
				$xeploai = 'loại trung bình';
			}else{
				if ($diem <= 8.5) {
					$xeploai = 'xếp loại khá';
				}else{
					$xeploai = 'loại giỏi';
				}
			}
		}
		$k += 1 ;
		echo "<tr $style>";
		echo "<td style='text-align: center'>$k</td>";
		echo "<td style='text-align: left'>$value[name]</td>";
		echo "<td>$value[diemtoan]</td>";
		echo "<td>$value[diemly]</td>";
		echo "<td>$value[diemhoa]</td>";
		echo "<td>$diem</td>";
		echo "<td style='text-align: center'>$xeploai</td>";
		echo "</tr>";
		
	}
		?>
</table>
