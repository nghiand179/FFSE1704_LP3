<?php
  $n=20;
   if($n%5==0){
       echo "Số n chia hết cho 5";
   }else{
       echo"số n không chia hết cho 5";
   }
?>
<br>
<?php
 $m=-18;
if($m%2==0 && $m>0){
    echo"Số m là số nguyên dương chẵn";
}else{
    if($m%2==0 && $m<0){
        echo"Số m là số nguyên âm chẵn";
    }else{
        if($m%2!=0 && $m>0){
            echo"Số m là số nguyên dương lẻ";
        }else{
            echo"Số m là số nguyên âm lẻ";
        }
    }
}
?>