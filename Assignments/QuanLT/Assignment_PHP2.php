<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * *Le Trong Quan
 */
$FFSE1701 = array(
    array(
        'tt' => 1,
        'name' => "Le Trong Quan",
        'toan' => 9,
        'ly' => 8.5,
        'hoa' => 8.9
    ), array(   
        'tt' => 2,
        'name' => "Ho Quang Hieu",
        'toan' => 7,
        'ly' => 8.8,
        'hoa' => 7.8
    ), array(
        'tt' => 3,
        'name' => "Nguyen Hoang Thanh Mai",
        'toan' => 8.5,
        'ly' => 9.2,
        'hoa' => 7.5
    ), array(
        'tt' => 4,
        'name' => "Tran Thi Thu Minh",
        'toan' => 6.5,
        'ly' => 6,
        'hoa' => 7
    ), array(
        'tt' => 5,
        'name' => "Nguyen Thai Nguyen Thao",
        'toan' => 4,
        'ly' => 4.1,
        'hoa' => 3.2
    )
);
?>
<html>
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>TT</th>
            <th>Ho ten</th>
            <th>Diem toan</th>
            <th>Diem ly</th>
            <th>Diem hoa</th>
            <th>Tong diem</th>
            <th>Xep loai</th>
        </tr>
        <?php
        foreach ($FFSE1701 as $key => $value) {
            ?>
            <tr>
                <?php $dtbd = (($value['toan'] + $value['ly'] + $value['hoa']) / 3) ?>
                <td><?php
                if($dtbd<5){
                echo "<p>". $value['tt']."</p>";
                }
                else {
                   echo $value['tt'];
                }
                ?></td>
                <td><?php
                if($dtbd<5){
                echo "<p>". $value['name']."</p>";
                }
                else {
                   echo $value['name'];
                }
                ?></td>
                <td><?php
                if($dtbd<5){
                echo "<p>". $value['toan']."</p>";
                }
                else {
                   echo $value['toan'];
                }
                ?></td>
                <td><?php
                if($dtbd<5){
                echo "<p>". $value['ly']."</p>";
                }
                else {
                   echo $value['ly'];
                }
                ?></td>
                <td><?php
                if($dtbd<5){
                echo "<p>". $value['hoa']."</p>";
                }
                else {
                   echo $value['hoa'];
                }
                ?></td>
                <td><?php if($dtbd<5){
                echo "<p>". $dtb = ROUND(($dtbd),2)."</p>";
                } else {
                    echo $dtb = ROUND(($dtbd),2);
                }?></td>
                <td><?php
                    if ($dtb < 5) {
                        echo "<p>Yeu<p>";
                    } elseif ($dtb > 5 && $dtb <= 8.5) {
                        echo "Trung Binh";
                    } else {
                        echo "Gioi";
                        
                    }
                    ?></td>
            <?php }
            ?>            
        </tr>
    </table>
    <style type="text/css">
       p {
        color: red;
       }
    </style>
</html>
