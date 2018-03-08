<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$a=1555;
$tong=0;
echo "So $a";
echo "</br>";
while ($a>0){
    $tong = $tong + ($a%10);
    $a = $a/10;
    
}
echo "Tong cua cac chu so la: $tong";
?>

