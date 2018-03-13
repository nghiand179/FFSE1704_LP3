<?php 
$arso= array(1,2,3,4);
	for ($i = 0; $i < 4; $i++){
    echo $arso[$i] . ' ';
	}	
 ?>
 <br>
 <table border="1px">
 	<tr>
 		<th>STT</th>
 					</tr>
 				<?php for ($i = 1; $i <= 4; $i++){ ?>
 					<tr>
 						<td>  <?= $i ?> </td>
 										</tr>
 				<?php } ?>
 		
 </table>

 <?php 
 	$arso = array(1,4,5,6,7,9,11,15);
 	for ($i = 0; $i < 8;$i++){
 		echo $arso[$i] . ' ';
 	}

?>
 <table border="1px">
 	<tr>
 		<th>STT</th>
 					</tr>
 				<?php for ($i = 0; $i < 8; $i++){ ?>
 					<tr>
 						<td>  <?=$arso[$i]?> </td>
 										</tr>
 				<?php } ?>
 		
 </table>

 <table border="1">	
	<tr>
		<th>STT</th>
	</tr>
	<?php $arSO= array(
  		1,2,5,9
  	);
  	for ($i=0;$i<=3;$i++){  ?>
	<tr>
		<td><?=$arSO[$i]?></td>
	<?php } ?>
	</tr>
</table>

<?php 
$arso= array(1,2,3,4);
	foreach ($arSO as $key => $value) {
	 	    echo $value . ' ';

	 } 
 ?>
 <br>

 <table border="1">	
	<tr>
		<th>STT</th>
	</tr>
	<?php $arSO= array(
  		1,2,5,9
  	);
  	foreach ($arSO as $key => $value) { ?>
	<tr>
		<td><?=$value?></td>
	<?php } ?>
	</tr>
</table>