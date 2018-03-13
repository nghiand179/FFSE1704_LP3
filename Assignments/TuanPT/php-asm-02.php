<?php
  $bangdiem = array(
      array(
          'ten' => 'Trần Nguyễn Nhật Nam',
          'toan' => 9,
          'ly' => 8.5,
          'hoa'=> 8.9
      ),
      array(
          'ten' => 'Nguyễn Hoàng Thanh Mai',
          'toan' => 8.5,
          'ly' => 9.2,
          'hoa'=> 7.5
      ),
      array(
          'ten' => 'Bùi Ngọc Quỳnh Nhi',
          'toan' => 7,
          'ly' => 8.8,
          'hoa'=> 7.8
      ),
      array(
          'ten' => 'Trần Thị Thu Minh',
          'toan' => 6.5,
          'ly' => 6,
          'hoa'=> 7
      ),
      array(
          'ten' => 'Nguyễn Thị Nguyên Thảo',
          'toan' => 4,
          'ly' => 4.1,
          'hoa'=> 3.2
      ),
  );
?>

    <h2>Bảng điểm tổng kết môn của lớp 10A1</h2>
    <table border="1px" cellpadding="5px" cellspacing="0px"style="width:50%;">
        <tr bgcolor=#cccccc>
            <th style="text-align: center;">TT</th>
            <th style="text-align: left;">Họ tên</th>
            <th style="text-align: right;">Điểm toán</th>
            <th style="text-align: right;">Điểm lý</th>
            <th style="text-align: right;">Điểm hóa</th>
            <th style="text-align: left;">Tổng điểm</th>
            <th style="text-align: center;">Xếp loại</th>
        </tr>
        <?php
          foreach ($bangdiem as $key=> $values){
              $dtb = round(($values['toan']+$values['ly']+$values['hoa'])/3,2);
              $style = "";
              if ($dtb < 5){
                  $xl='Loại yếu';
                  $style = "style= 'color: red;'";
              }else{
                  if($dtb <= 6.5){
                      $xl='Trung bình';
                  }else{
                      if($dtb <= 8.5){
                          $xl='Loại khá';
                      }else{
                          $xl='Loại Giỏi';
                      }
                  }
              }
    
            $key++;
            echo "<tr $style>";
			echo "<td style='text-align: center;'>$key</td>";
			echo "<td style='text-align: left;'>$values[ten]</td>";
			echo "<td style='text-align: right;'>$values[toan]</td>";
			echo "<td style='text-align: right;'>$values[ly]</td>";
			echo "<td style='text-align: right;'>$values[hoa]</td>";
			echo "<td style='text-align: right;'>$dtb</td>";		
			echo "<td style='text-align: center;'>$xl</td>";
			echo "</tr>";
            
              }
        ?>

    </table>
