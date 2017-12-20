<?php
$jawatimur = array
	(
		array('id'=>1, 'kota'=>'Gresik'),
		array('id'=>2, 'kota'=>'Surabaya')
	);
$jawabarat = array
	(
		array('id'=>1, 'kota'=>'Bogor'),
		array('id'=>2, 'kota'=>'Sukabumi')
	);
	
	
$prov = $_POST['propinsi'];
if($prov == 'Jawa Timur'){ 
	echo json_encode($jawatimur);
}
else{
	echo json_encode($jawabarat);
}
?>