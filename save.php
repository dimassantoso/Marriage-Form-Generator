<?php
	//PRIA
	$pria_ktp				= $_POST['pria-ktp'];
	$pria_nama				= $_POST['pria-nama'];
	$pria_tmp_lahir			= $_POST['pria-tmp_lahir'];
	$pria_tgl_lahir			= $_POST['pria-tgl_lahir'];
	$pria_wn				= $_POST['pria-wn'];
	$pria_wna				= $_POST['pria-wna-negara'];
	if($pria_wn=='Indonesia'){
		$pria_wn='Indonesia';
	}
	else{
		$pria_wn=$pria_wna;
	}
	$pria_suku				= $_POST['pria-suku'];
	$pria_agama				= $_POST['pria-agama'];
	$pria_kepercayaan		= $_POST['pria-kepercayaan'];
	if($pria_agama=='Kepercayaan'){
		$pria_agama=$pria_kepercayaan;
	}
	$pria_pendidikan		= $_POST['pria-pendidikan'];
	$pria_tmp_tinggal		= $_POST['pria-tmp_tinggal'];
	$pria_status			= $_POST['pria-status'];
	$pria_istri_terdahulu	= $_POST['istri-terdahulu'];
	$pria_jml_istri 		= $_POST['pria-jml_istri'];

	//WANITA
	$wanita_ktp				= $_POST['wanita-ktp'];
	$wanita_nama			= $_POST['wanita-nama'];
	$wanita_tmp_lahir		= $_POST['wanita-tmp_lahir'];
	$wanita_tgl_lahir		= $_POST['wanita-tgl_lahir'];
	$wanita_wn				= $_POST['wanita-wn'];
	$wanita_wna				= $_POST['wanita-wna-negara'];
	if($wanita_wn=='Indonesia'){
		$wanita_wn='Indonesia';
	}
	else{
		$wanita_wn=$wanita_wna;
	}
	$wanita_suku			= $_POST['wanita-suku'];
	$wanita_agama			= $_POST['wanita-agama'];
	$wanita_kepercayaan		= $_POST['wanita-kepercayaan'];
	if($wanita_agama=='Kepercayaan'){
		$wanita_agama=$wanita_kepercayaan;
	}
	$wanita_pendidikan		= $_POST['wanita-pendidikan'];
	$wanita_tmp_tinggal		= $_POST['wanita-tmp_tinggal'];
	$wanita_status			= $_POST['wanita-status'];
	$wanita_suami_terdahulu	= $_POST['suami-terdahulu'];

	//ORTU PRIA (AYAH)
	$ayah_pria_ktp			= $_POST['ayah-pria-ktp'];
	$ayah_pria_nama			= $_POST['ayah-pria-nama'];
	$ayah_pria_tmp_lahir	= $_POST['ayah-pria-tmp_lahir'];
	$ayah_pria_tgl_lahir	= $_POST['ayah-pria-tgl_lahir'];
	$ayah_pria_wn			= $_POST['ayah-pria-wn'];
	$ayah_pria_wna			= $_POST['pria-wna-negara'];
	if($ayah_pria_wn=='Indonesia'){
		$ayah_pria_wn='Indonesia';
	}
	else{
		$ayah_pria_wn=$ayah_pria_wna;
	}
	$ayah_pria_agama		= $_POST['ayah-pria-agama'];
	$ayah_pria_kepercayaan	= $_POST['ayah-pria-kepercayaan'];
	if($ayah_pria_agama=='Kepercayaan'){
		$ayah_pria_agama=$ayah_pria_kepercayaan;
	}
	$ayah_pria_tmp_tinggal	= $_POST['ayah-pria-tmp_tinggal'];

	//ORTU PRIA (IBU)
	$ibu_pria_ktp			= $_POST['ibu-pria-ktp'];
	$ibu_pria_nama			= $_POST['ibu-pria-nama'];
	$ibu_pria_tmp_lahir	= $_POST['ibu-pria-tmp_lahir'];
	$ibu_pria_tgl_lahir	= $_POST['ibu-pria-tgl_lahir'];
	$ibu_pria_wn			= $_POST['ibu-pria-wn'];
	$ibu_pria_wna			= $_POST['pria-wna-negara'];
	if($ibu_pria_wn=='Indonesia'){
		$ibu_pria_wn='Indonesia';
	}
	else{
		$ibu_pria_wn=$ibu_pria_wna;
	}
	$ibu_pria_agama		= $_POST['ibu-pria-agama'];
	$ibu_pria_kepercayaan	= $_POST['ibu-pria-kepercayaan'];
	if($ibu_pria_agama=='Kepercayaan'){
		$ibu_pria_agama=$ibu_pria_kepercayaan;
	}
	$ibu_pria_tmp_tinggal	= $_POST['ibu-pria-tmp_tinggal'];




	//ORTU WANITA (AYAH)
	$ayah_wanita_ktp			= $_POST['ayah-wanita-ktp'];
	$ayah_wanita_nama			= $_POST['ayah-wanita-nama'];
	$ayah_wanita_tmp_lahir	= $_POST['ayah-wanita-tmp_lahir'];
	$ayah_wanita_tgl_lahir	= $_POST['ayah-wanita-tgl_lahir'];
	$ayah_wanita_wn			= $_POST['ayah-wanita-wn'];
	$ayah_wanita_wna			= $_POST['wanita-wna-negara'];
	if($ayah_wanita_wn=='Indonesia'){
		$ayah_wanita_wn='Indonesia';
	}
	else{
		$ayah_wanita_wn=$ayah_wanita_wna;
	}
	$ayah_wanita_agama		= $_POST['ayah-wanita-agama'];
	$ayah_wanita_kepercayaan	= $_POST['ayah-wanita-kepercayaan'];
	if($ayah_wanita_agama=='Kepercayaan'){
		$ayah_wanita_agama=$ayah_wanita_kepercayaan;
	}
	$ayah_wanita_tmp_tinggal	= $_POST['ayah-wanita-tmp_tinggal'];

	//ORTU WANITA (IBU)
	$ibu_wanita_ktp			= $_POST['ibu-wanita-ktp'];
	$ibu_wanita_nama			= $_POST['ibu-wanita-nama'];
	$ibu_wanita_tmp_lahir	= $_POST['ibu-wanita-tmp_lahir'];
	$ibu_wanita_tgl_lahir	= $_POST['ibu-wanita-tgl_lahir'];
	$ibu_wanita_wn			= $_POST['ibu-wanita-wn'];
	$ibu_wanita_wna			= $_POST['wanita-wna-negara'];
	if($ibu_wanita_wn=='Indonesia'){
		$ibu_wanita_wn='Indonesia';
	}
	else{
		$ibu_wanita_wn=$ibu_wanita_wna;
	}
	$ibu_wanita_agama		= $_POST['ibu-wanita-agama'];
	$ibu_wanita_kepercayaan	= $_POST['ibu-wanita-kepercayaan'];
	if($ibu_wanita_agama=='Kepercayaan'){
		$ibu_wanita_agama=$ibu_wanita_kepercayaan;
	}
	$ibu_wanita_tmp_tinggal	= $_POST['ibu-wanita-tmp_tinggal'];

	//SAKSI 1
	$saksi1_ktp				= $_POST['saksi1-ktp'];
	$saksi1_nama			= $_POST['saksi1-nama'];
	$saksi1_tmp_lahir		= $_POST['saksi1-tmp_lahir'];
	$saksi1_tgl_lahir		= $_POST['saksi1-tgl_lahir'];
	$saksi1_agama			= $_POST['saksi1-agama'];
	$saksi_tmp_tinggal		= $_POST['saksi1-tmp_lahir'];

	//SAKSI 2
	$saksi2_ktp				= $_POST['saksi2-ktp'];
	$saksi2_nama			= $_POST['saksi2-nama'];
	$saksi2_tmp_lahir		= $_POST['saksi2-tmp_lahir'];
	$saksi2_tgl_lahir		= $_POST['saksi2-tgl_lahir'];
	$saksi2_agama			= $_POST['saksi2-agama'];
	$saksi_tmp_tinggal		= $_POST['saksi2-tmp_lahir'];

	if(isset($pria_ktp) AND strlen($pria_ktp)>1){
		setcookie ("save[pria_ktp]", $pria_ktp, time() + 300);
		setcookie ("save[pria_nama]", $pria_nama, time() + 300);
		setcookie ("save[pria_tmp_lahir]", $pria_tmp_lahir, time() + 300);
		setcookie ("save[pria_tgl_lahir]", $pria_tgl_lahir, time() + 300);
		setcookie ("save[pria_wn]", $pria_wn, time() + 300);
		setcookie ("save[pria_suku]", $pria_suku, time() + 300);
		setcookie ("save[pria_agama]", $pria_agama, time() + 300);
		setcookie ("save[pria_pendidikan]", $pria_pendidikan, time() + 300);
		setcookie ("save[pria_tmp_tinggal]", $pria_tmp_tinggal, time() + 300);
		setcookie ("save[pria_status]", $pria_status, time() + 300);
		setcookie ("save[pria_istri_terdahulu]", $pria_istri_terdahulu, time() + 300);
		setcookie ("save[pria_jml_istri]", $pria_jml_istri, time() + 300);
		setcookie ("save[wanita_ktp]", $wanita_ktp, time() + 300);
		setcookie ("save[wanita_nama]", $wanita_nama, time() + 300);
		setcookie ("save[wanita_tmp_lahir]", $wanita_tmp_lahir, time() + 300);
		setcookie ("save[wanita_tgl_lahir]", $wanita_tgl_lahir, time() + 300);
		setcookie ("save[wanita_wn]", $wanita_wn, time() + 300);
		setcookie ("save[wanita_suku]", $wanita_suku, time() + 300);
		setcookie ("save[wanita_agama]", $wanita_agama, time() + 300);
		setcookie ("save[wanita_pendidikan]", $wanita_pendidikan, time() + 300);
		setcookie ("save[wanita_tmp_tinggal]", $wanita_tmp_tinggal, time() + 300);
		setcookie ("save[wanita_status]", $wanita_status, time() + 300);
		setcookie ("save[wanita_suami_terdahulu]", $wanita_suami_terdahulu, time() + 300);
		setcookie ("save[ayah_pria_ktp]", $ayah_pria_ktp, time() + 300);
		setcookie ("save[ayah_pria_nama]", $ayah_pria_nama, time() + 300);
		setcookie ("save[ayah_pria_tmp_lahir]", $ayah_pria_tmp_lahir, time() + 300);
		setcookie ("save[ayah_pria_tgl_lahir]", $ayah_pria_tgl_lahir, time() + 300);
		setcookie ("save[ayah_pria_wn]", $ayah_pria_wn, time() + 300);
		setcookie ("save[ayah_pria_agama]", $ayah_pria_agama, time() + 300);
		setcookie ("save[ayah_pria_tmp_tinggal]", $ayah_pria_tmp_tinggal, time() + 300);
		setcookie ("save[ibu_pria_ktp]", $ibu_pria_ktp, time() + 300);
		setcookie ("save[ibu_pria_nama]", $ibu_pria_nama, time() + 300);
		setcookie ("save[ibu_pria_tmp_lahir]", $ibu_pria_tmp_lahir, time() + 300);
		setcookie ("save[ibu_pria_tgl_lahir]", $ibu_pria_tgl_lahir, time() + 300);
		setcookie ("save[ibu_pria_wn]", $ibu_pria_wn, time() + 300);
		setcookie ("save[ibu_pria_agama]", $ibu_pria_agama, time() + 300);
		setcookie ("save[ibu_pria_tmp_tinggal]", $ibu_pria_tmp_tinggal, time() + 300);
		setcookie ("save[ayah_wanita_ktp]", $ayah_wanita_ktp, time() + 300);
		setcookie ("save[ayah_wanita_nama]", $ayah_wanita_nama, time() + 300);
		setcookie ("save[ayah_wanita_tmp_lahir]", $ayah_wanita_tmp_lahir, time() + 300);
		setcookie ("save[ayah_wanita_tgl_lahir]", $ayah_wanita_tgl_lahir, time() + 300);
		setcookie ("save[ayah_wanita_wn]", $ayah_wanita_wn, time() + 300);
		setcookie ("save[ayah_wanita_agama]", $ayah_wanita_agama, time() + 300);
		setcookie ("save[ayah_wanita_tmp_tinggal]", $ayah_wanita_tmp_tinggal, time() + 300);
		setcookie ("save[ibu_wanita_ktp]", $ibu_wanita_ktp, time() + 300);
		setcookie ("save[ibu_wanita_nama]", $ibu_wanita_nama, time() + 300);
		setcookie ("save[ibu_wanita_tmp_lahir]", $ibu_wanita_tmp_lahir, time() + 300);
		setcookie ("save[ibu_wanita_tgl_lahir]", $ibu_wanita_tgl_lahir, time() + 300);
		setcookie ("save[ibu_wanita_wn]", $ibu_wanita_wn, time() + 300);
		setcookie ("save[ibu_wanita_agama]", $ibu_wanita_agama, time() + 300);
		setcookie ("save[ibu_wanita_tmp_tinggal]", $ibu_wanita_tmp_tinggal, time() + 300);
		setcookie ("save[saksi1_ktp]", $saksi1_ktp, time() + 300);
		setcookie ("save[saksi1_nama]", $saksi1_nama, time() + 300);
		setcookie ("save[saksi1_tmp_lahir]", $saksi1_tmp_lahir, time() + 300);
		setcookie ("save[saksi1_tgl_lahir]", $saksi1_tgl_lahir, time() + 300);
		setcookie ("save[saksi1_agama]", $saksi1_agama, time() + 300);
		setcookie ("save[saksi1_tmp_tinggal]", $saksi1_tmp_tinggal, time() + 300);
		setcookie ("save[saksi2_ktp]", $saksi2_ktp, time() + 300);
		setcookie ("save[saksi2_nama]", $saksi2_nama, time() + 300);
		setcookie ("save[saksi2_tmp_lahir]", $saksi2_tmp_lahir, time() + 300);
		setcookie ("save[saksi2_tgl_lahir]", $saksi2_tgl_lahir, time() + 300);
		setcookie ("save[saksi2_agama]", $saksi2_agama, time() + 300);
		setcookie ("save[saksi2_tmp_tinggal]", $saksi2_tmp_tinggal, time() + 300);

	}
	else{
		echo "Error";
	}

	// if(isset($pria_ktp) AND strlen($pria_ktp)>1){
	// 	setcookie ("save[pria_ktp]", $pria_ktp);
	// }
	// else{
	// 	echo "Error";
	// }

	header ("Location: view.php"); 

?>