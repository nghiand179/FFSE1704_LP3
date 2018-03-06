<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$a = 300;
if($a>=200 && $a<300){
    $tkm= ($a / 100) * 20;
    echo "So tien $a VND";
    echo "</br>";
    echo "Khuyen mai 20% : $tkm VND";
} else {
    if($a>=300){
    $tkm= ($a / 100) * 30;
    echo "So tien $a VND";
    echo "</br>";
    echo "Khuyen mai 30% : $tkm VND";
} else {
    echo "So tien $a VND";
    echo "</br>";
    echo "Khong duoc khuyan mai";
}
}
