<?php
	$dukun = array
	(
		array('id'=>1, 'deskel'=>'Dukunanyar'),
		array('id'=>2, 'deskel'=>'Padang Bandung')
	);
	$kebomas = array
	(
		array('id'=>1, 'deskel'=>'Randu Agung'),
		array('id'=>2, 'deskel'=>'Segoromadu')
	);

	
	$dukuhpakis = array
	(
		array('id'=>1, 'deskel'=>'Gunung Sari'),
		array('id'=>2, 'deskel'=>'Dukuh Kupang')
	);
	$gayungan = array
	(
		array('id'=>1, 'deskel'=>'Dukuh Menanggal'),
		array('id'=>2, 'deskel'=>'Ketintang')
	);
	
	$bogorbarat = array
	(
		array('id'=>1, 'deskel'=>'Balungbangjaya'),
		array('id'=>2, 'deskel'=>'Curug')
	);
	$bogortimur = array
	(
		array('id'=>1, 'deskel'=>'Baranangsiang'),
		array('id'=>2, 'deskel'=>'Sukasari')
	);
	
	$baros = array
	(
		array('id'=>1, 'deskel'=>'Jayamekar'),
		array('id'=>2, 'deskel'=>'Jayaraksa')
	);
	$cibeureum = array
	(
		array('id'=>1, 'deskel'=>'Babakan'),
		array('id'=>2, 'deskel'=>'Cibeureumhilir')
	);


	$kec = $_POST['kecamatan'];
	if($kec == 'Dukun'){ 
		echo json_encode($dukun);
	}
	else if ($kec=='Kebomas'){
		echo json_encode($kebomas);
	}
	else if ($kec=='Dukuh Pakis'){
		echo json_encode($dukuhpakis);
	}
	else if ($kec=='Gayungan'){
		echo json_encode($gayungan);
	}
	else if ($kec=='Bogor Barat'){
		echo json_encode($bogorbarat);
	}
	else if ($kec=='Bogor Timur'){
		echo json_encode($bogortimur);
	}
	else if ($kec=='Baros'){
		echo json_encode($baros);
	}
	else{
		echo json_encode($cibeureum);
	}
?>