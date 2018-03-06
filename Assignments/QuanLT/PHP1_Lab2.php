<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=2;
$b=-7;
$c=3;
$d= $b*$b - 4*$a*$c;
echo "Denta = $d" ;
echo "</br>";
if($d<0){
    echo "Phuong trinh vo nghiem";
    if($d==0){
        $xk= ((-$b) / (2*$a));
        echo "Phuong trinh co nghiem kep x1=x2=x0=$xk";
        
    }
} else {
    $x1=((-$b)+ sqrt($d)) / (2*$a);
    $x2= ((-$b)- sqrt($d)) / (2*$a);
    echo "Phuong trinh co nghiem x1 la: $x1";
    echo "</br>";
    echo "Phuong trinh co nghiem x2 la: $x2";
}
?>