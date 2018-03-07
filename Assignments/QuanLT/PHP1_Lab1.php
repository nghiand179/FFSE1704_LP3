

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
 $a=1;
 $b=2;
 //TH a ==0
 if($a==0){
     if($b==0){
         echo "PT vo so nghiem";
         
     } else {
         echo "PT vo nghiem";
     }
     
 }
 //TH a#0
 else {
     $x=-$b/$a;
     echo "PT co nghiem la $x";
}
?>

