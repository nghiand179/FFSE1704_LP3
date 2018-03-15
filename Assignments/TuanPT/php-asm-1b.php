<body>
    <h2>Giải phương trình bậc hai, 1 ẩn số</h2>
    <table border="1px" cellpadding="5px" cellspacing="0px"style="width:50%;">
        <tr bgcolor=#cccccc>
            <th style="text-align: center;">TT</th>
            <th style="text-align: right;">a</th>
            <th style="text-align: right;">b</th>
            <th style="text-align: right;">x1</th>
            <th style="text-align: right;">x2</th>
            <th style="text-align: center;">Ghi chú</th>
        </tr>
        <tr>
            <td style="text-align: center;"><?= $t1 ?></td>
             <td style="text-align: right;"><p><?= $a1 ?></p></td>
             <td style="text-align: right;"><p><?= $b1 ?></p></td>
             <td style="text-align: right;"><p><?= $x11 ?></p></td>
            <td style="text-align: right;"><p><?= $x21?></p></td>
             <td style="text-align: left;"><p><?= $y1 ?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t2?></td>
             <td style="text-align: right;"><p><?=$a2?></p></td>
             <td style="text-align: right;"><p><?=$b2?></p></td>
             <td style="text-align: right;"><p><?=$x12?></p></td>
            <td style="text-align: right;"><p><?= $x22?></p></td>
             <td style="text-align: left;"><p><?=$y2?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t3?></td>
             <td style="text-align: right;"><p><?=$a3?></p></td>
             <td style="text-align: right;"><p><?=$b3?></p></td>
             <td style="text-align: right;"><p><?=$x13?></p></td>
            <td style="text-align: right;"><p><?= $x23?></p></td>
             <td style="text-align: left;"><p><?=$y3?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t4?></td>
             <td style="text-align: right;"><p><?=$a4?></p></td>
             <td style="text-align: right;"><p><?=$b4?></p></td>
             <td style="text-align: right;"><p><?=$x14?></p></td>
            <td style="text-align: right;"><p><?= $x24?></p></td>
             <td style="text-align: left;"><p><?=$y4?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t5?></td>
             <td style="text-align: right;"><p><?=$a5?></p></td>
             <td style="text-align: right;"><p><?=$b5?></p></td>
             <td style="text-align: right;"><p><?=$x15?></p></td>
            <td style="text-align: right;"><p><?= $x25?></p></td>
             <td style="text-align: left;"><p><?=$y5?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t6?></td>
             <td style="text-align: right;"><p><?=$a6?></p></td>
             <td style="text-align: right;"><p><?=$b6?></p></td>
             <td style="text-align: right;"><p><?=$x16?></p></td>
            <td style="text-align: right;"><p><?= $x26?></p></td>
             <td style="text-align: left;"><p><?=$y6?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t7?></td>
             <td style="text-align: right;"><p><?=$a7?></p></td>
             <td style="text-align: right;"><p><?=$b7?></p></td>
             <td style="text-align: right;"><p><?=$x17?></p></td>
            <td style="text-align: right;"><p><?= $x27 ?></p></td>
             <td style="text-align: left;"><p><?=$y7?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t8?></td>
             <td style="text-align: right;"><p><?=$a8?></p></td>
             <td style="text-align: right;"><p><?=$b8?></p></td>
             <td style="text-align: right;"><p><?=$x18?></p></td>
            <td style="text-align: right;"><p><?= $x28 ?></p></td>
             <td style="text-align: left;"><p><?=$y8?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t9?></td>
             <td style="text-align: right;"><p><?=$a9?></p></td>
             <td style="text-align: right;"><p><?=$b9?></p></td>
             <td style="text-align: right;"><p><?=$x19?></p></td>
            <td style="text-align: right;"><p><?= $x29 ?></p></td>
             <td style="text-align: left;"><p><?=$y9?></p></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t10?></td>
             <td style="text-align: right;"><p><?=$a10?></p></td>
             <td style="text-align: right;"><p><?=$b10?></p></td>
             <td style="text-align: right;"><p><?=$x110?></p></td>
            <td style="text-align: right;"><p><?= $x210 ?></p></td>
             <td style="text-align: left;"><p><?=$y10?></p></td>
        </tr>
    </table>
<?php
	$t1=1;
	$a1=1;
	$b1=2;
	$c1=1;
	$delta1=($b1*$b1)-(4*$a1*$c1);
if($delta1==0){
    $x11=-$b1/(2*$a1);
    $x21=-$b1/(2*$a1);
    $y1="<p>Phương trình có nghiệm kép </p>";
}else
    if($delta1>0){
    $x11=-($b1-sqrt($delta1))/(2*$a1);
    $x21=-($b1+sqrt($delta1))/(2*$a1);
    $y1= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t1="<p style='color:red'>$t1</p>";
        $a1="<p style='color:red'>$a1</p>";
        $b1="<p style='color:red'>$b1</p>";
        $x11="<p style='color:red'>-</p>";
        $x21="<p style='color:red'>-</p>";
        $y1= "<p>Phương trình vô nghiệm</p>";
    }
?>
<?php
$t2=2;
$a2=1;
$b2=2;
$c2=1;
$delta2=$b2*$b2-(4*$a2*$c2);
if($delta2==0){
    $x2=-$b2/(2*$a2);
    $y2="<p>Phương trình có nghiệm kép $x2 </p>";
}else
    if($delta>0){
    $x12=-($b2-sqrt($delta2))/(2*$a2);
    $x22=-($b2+sqrt($delta2))/(2*$a2);
    $y2= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t2="<p style='color:red'>$t2</p>";
        $a2="<p style='color:red'>$a2</p>";
        $b2="<p style='color:red'>$b2</p>";
        $x12="<p style='color:red'>-</p>";
        $x22="<p style='color:red'>-</p>";
        $y2= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t3=3;
$a3=1;
$b3=2;
$c3=1;
$delta3=$b3*$b3-(4*$a3*$c3);
if($delta3==0){
    $x31=-$b3/(2*$a3);
    $x32=-$b3/(2*$a3);
    $y3="<p>Phương trình có nghiệm kép $x3 </p>";
}else
    if($delta>0){
    $x13=-($b3-sqrt($delta3))/(2*$a3);
    $x23=-($b3+sqrt($delta3))/(2*$a3);
    $y3= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t3="<p style='color:red'>$t3</p>";
        $a3="<p style='color:red'>$a3</p>";
        $b3="<p style='color:red'>$b3</p>";
        $x13="<p style='color:red'>-</p>";
        $x23="<p style='color:red'>-</p>";
        $y3= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t4=4;
$a4=1;
$b4=2;
$c4=1;
$delta4=$b4*$b4-(4*$a4*$c4);
if($delta4==0){
    $x41=-$b4/(2*$a4);
    $x42=-$b4/(2*$a4);
    $y4="<p>Phương trình có nghiệm kép $x4 </p>";
}else
    if($delta4>0){
    $x14=-($b4-sqrt($delta4))/(2*$a4);
    $x24=-($b4+sqrt($delta4))/(2*$a4);
    $y4= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t4="<p style='color:red'>$t4</p>";
        $a4="<p style='color:red'>$a4</p>";
        $b4="<p style='color:red'>$b4</p>";
        $x14="<p style='color:red'>-</p>";
        $x24="<p style='color:red'>-</p>";
        $y4= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t5=5;
$a5=1;
$b5=2;
$c5=1;
$delta5=$b5*$b5-(4*$a5*$c5);
if($delta5==0){
    $x5=-$b5/(2*$a5);
    $y5="<p>Phương trình có nghiệm kép $x5 </p>";
}else
    if($delta5>0){
    $x15=-($b5-sqrt($delta5))/(2*$a5);
    $x25=-($b5+sqrt($delta5))/(2*$a5);
    $y5= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t5="<p style='color:red'>$t5</p>";
        $a5="<p style='color:red'>$a5</p>";
        $b5="<p style='color:red'>$b5</p>";
        $x15="<p style='color:red'>-</p>";
        $x25="<p style='color:red'>-</p>";
        $y5= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t6=6;
$a6=1;
$b6=62;
$c6=1;
$delta6=$b6*$b6-(4*$a6*$c6);
if($delta6==0){
    $x6=-$b6/(2*$a6);
    $y6="<p>Phương trình có nghiệm kép $x6 </p>";
}else
    if($delta6>0){
    $x16=-($b6-sqrt($delta6))/(2*$a6);
    $x26=-($b6+sqrt($delta6))/(2*$a6);
    $y6= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t6="<p style='color:red'>$t6</p>";
        $a6="<p style='color:red'>$a6</p>";
        $b6="<p style='color:red'>$b6</p>";
        $x16="<p style='color:red'>-</p>";
        $x26="<p style='color:red'>-</p>";
        $y6= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t7=7;
$a7=1;
$b7=2;
$c7=1;
$delta7=$b7*$b7-(4*$a7*$c7);
if($delta7==0){
    $x7=-$b/(2*$a7);
    $y7="<p>Phương trình có nghiệm kép $x7 </p>";
}else
    if($delta>0){
    $x17=-($b7-sqrt($delta7))/(2*$a7);
    $x27=-($b7+sqrt($delta7))/(2*$a7);
    $y7= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t7="<p style='color:red'>$t7</p>";
        $a7="<p style='color:red'>$a7<7/p>";
        $b7="<p style='color:red'>$b7</p>";
        $x17="<p style='color:red'>-</p>";
        $x27="<p style='color:red'>-</p>";
        $y7= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t8=8;
$a8=1;
$b8=2;
$c8=1;
$delta8=$b8*$b8-(4*$a8*$c8);
if($delta8==0){
    $x8=-$b8/(2*$a8);
    $y8="<p>Phương trình có nghiệm kép $x8 </p>";
}else
    if($delta8>0){
    $x18=-($b8-sqrt($delta8))/(2*$a8);
    $x28=-($b8+sqrt($delta8))/(2*$a8);
    $y8= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t8="<p style='color:red'>$t8</p>";
        $a8="<p style='color:red'>$a8</p>";
        $b8="<p style='color:red'>$b8</p>";
        $x18="<p style='color:red'>-</p>";
        $x28="<p style='color:red'>-</p>";
        $y8= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t9=9;
$a9=1;
$b9=92;
$c9=1;
$delta9=$b9*$b9-(4*$a9*$c9);
if($delta9==0){
    $x9=-$b9/(2*$a9);
    $y9="<p>Phương trình có nghiệm kép $x9 </p>";
}else
    if($delta9>0){
    $x19=-($b9-sqrt($delta9))/(2*$a9);
    $x2=9-($b+sqrt($delta9))/(2*$a9);
    $y9= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t9="<p style='color:red'>$t9</p>";
        $a9="<p style='color:red'>$a9</p>";
        $b9="<p style='color:red'>$b9</p>";
        $x19="<p style='color:red'>-</p>";
        $x29="<p style='color:red'>-</p>";
        $y9= "<p>Phương trình vô nghiệm</p>";
    }

?>

<?php
$t10=10;
$a10=1;
$b10=2;
$c10=1;
$delta10=$b10*$b10-(4*$a10*$c10);
if($delta10==0){
    $x10=-$b10/(2*$a10);
    $y10="<p>Phương trình có nghiệm kép $x10 </p>";
}else
    if($delta10>0){
    $x110=(-$b10-sqrt($delta10))/(2*$a10);
    $x210=(-$b10+sqrt($delta10))/(2*$a10);
    $y10= "<p>Phương trình có 2 nghiệm phân biệt</p>";
    }
    else{
        $t10="<p style='color:red'>$t10</p>";
        $a10="<p style='color:red'>$a10</p>";
        $b10="<p style='color:red'>$b10</p>";
        $x110="<p style='color:red'>-</p>";
        $x210="<p style='color:red'>-</p>";
        $y10= "<p>Phương trình vô nghiệm</p>";
    }

?>
</body>










