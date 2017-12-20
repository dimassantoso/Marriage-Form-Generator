<?php
	$gresik = array
	(
		array('id'=>1, 'kec'=>'Dukun'),
		array('id'=>2, 'kec'=>'Kebomas')
	);
	$surabaya = array
	(
		array('id'=>1, 'kec'=>'Dukuh Pakis'),
		array('id'=>2, 'kec'=>'Gayungan')
	);
	$bogor = array
	(
		array('id'=>1, 'kec'=>'Bogor Barat'),
		array('id'=>2, 'kec'=>'Bogor Timur')
	);
	$sukabumi = array
	(
		array('id'=>1, 'kec'=>'Baros'),
		array('id'=>2, 'kec'=>'Cibeureum')
	);

	$kabkota = $_POST['kabkota'];
	if($kabkota == 'Gresik'){ 
		echo json_encode($gresik);
	}
	else if ($kabkota=='Surabaya'){
		echo json_encode($surabaya);
	}
	else if ($kabkota=='Bogor'){
		echo json_encode($bogor);
	}
	else{
		echo json_encode($sukabumi);
	}
	

?>