<?php
	//PRIA
	$pria_ktp				= ucwords($_POST['pria-ktp']);
	$pria_nama				= ucwords($_POST['pria-nama']);
	$pria_tmp_lahir			= ucwords($_POST['pria-tmp_lahir']);
	$pria_tgl_lahir			= ucwords($_POST['pria-tgl_lahir']);
	$pria_wn				= ucwords($_POST['pria-wn']);
	$pria_wna				= ucwords($_POST['pria-wna-negara']);
	if($pria_wn=='Indonesia'){
		$pria_wn='Indonesia';
	}
	else{
		$pria_wn=$pria_wna;
	}
	$pria_suku				= ucwords($_POST['pria-suku']);
	$pria_agama				= ucwords($_POST['pria-agama']);
	$pria_kepercayaan		= ucwords($_POST['pria-kepercayaan']);
	if($pria_agama=='Kepercayaan'){
		$pria_agama=$pria_kepercayaan;
	}
	$pria_pendidikan		= ucwords($_POST['pria-pendidikan']);
	$pria_tmp_tinggal		= ucwords($_POST['pria-tmp_tinggal']);
	$pria_status			= ucwords($_POST['pria-status']);
	$pria_istri_terdahulu	= ucwords($_POST['istri-terdahulu']);
	if($pria_istri_terdahulu==''){
		$pria_istri_terdahulu = '-';
	}
	$pria_jml_istri 		= ucwords($_POST['pria-jml_istri']);
	if($pria_jml_istri==''){
		$pria_jml_istri='-';
	}

	//WANITA
	$wanita_ktp				= ucwords($_POST['wanita-ktp']);
	$wanita_nama			= ucwords($_POST['wanita-nama']);
	$wanita_tmp_lahir		= ucwords($_POST['wanita-tmp_lahir']);
	$wanita_tgl_lahir		= ucwords($_POST['wanita-tgl_lahir']);
	$wanita_wn				= ucwords($_POST['wanita-wn']);
	$wanita_wna				= ucwords($_POST['wanita-wna-negara']);
	if($wanita_wn=='Indonesia'){
		$wanita_wn='Indonesia';
	}
	else{
		$wanita_wn=$wanita_wna;
	}
	$wanita_suku			= ucwords($_POST['wanita-suku']);
	$wanita_agama			= ucwords($_POST['wanita-agama']);
	$wanita_kepercayaan		= ucwords($_POST['wanita-kepercayaan']);
	if($wanita_agama=='Kepercayaan'){
		$wanita_agama=$wanita_kepercayaan;
	}
	$wanita_pendidikan		= ucwords($_POST['wanita-pendidikan']);
	$wanita_tmp_tinggal		= ucwords($_POST['wanita-tmp_tinggal']);
	$wanita_status			= ucwords($_POST['wanita-status']);
	$wanita_suami_terdahulu	= ucwords($_POST['suami-terdahulu']);
	if($wanita_suami_terdahulu==''){
		$wanita_suami_terdahulu='-';
	}

	//ORTU PRIA (AYAH)
	$ayah_pria_ktp			= ucwords($_POST['ayah-pria-ktp']);
	$ayah_pria_nama			= ucwords($_POST['ayah-pria-nama']);
	$ayah_pria_tmp_lahir	= ucwords($_POST['ayah-pria-tmp_lahir']);
	$ayah_pria_tgl_lahir	= ucwords($_POST['ayah-pria-tgl_lahir']);
	$ayah_pria_wn			= ucwords($_POST['ayah-pria-wn']);
	$ayah_pria_wna			= ucwords($_POST['pria-wna-negara']);
	if($ayah_pria_wn=='Indonesia'){
		$ayah_pria_wn='Indonesia';
	}
	else{
		$ayah_pria_wn=$ayah_pria_wna;
	}
	$ayah_pria_agama		= ucwords($_POST['ayah-pria-agama']);
	$ayah_pria_kepercayaan	= ucwords($_POST['ayah-pria-kepercayaan']);
	if($ayah_pria_agama=='Kepercayaan'){
		$ayah_pria_agama=$ayah_pria_kepercayaan;
	}
	$ayah_pria_tmp_tinggal	= ucwords($_POST['ayah-pria-tmp_tinggal']);

	//ORTU PRIA (IBU)
	$ibu_pria_ktp			= ucwords($_POST['ibu-pria-ktp']);
	$ibu_pria_nama			= ucwords($_POST['ibu-pria-nama']);
	$ibu_pria_tmp_lahir		= ucwords($_POST['ibu-pria-tmp_lahir']);
	$ibu_pria_tgl_lahir		= ucwords($_POST['ibu-pria-tgl_lahir']);
	$ibu_pria_wn			= ucwords($_POST['ibu-pria-wn']);
	$ibu_pria_wna			= ucwords($_POST['pria-wna-negara']);
	if($ibu_pria_wn=='Indonesia'){
		$ibu_pria_wn='Indonesia';
	}
	else{
		$ibu_pria_wn=$ibu_pria_wna;
	}
	$ibu_pria_agama		= ucwords($_POST['ibu-pria-agama']);
	$ibu_pria_kepercayaan	= ucwords($_POST['ibu-pria-kepercayaan']);
	if($ibu_pria_agama=='Kepercayaan'){
		$ibu_pria_agama=$ibu_pria_kepercayaan;
	}
	$ibu_pria_tmp_tinggal	= ucwords($_POST['ibu-pria-tmp_tinggal']);




	//ORTU WANITA (AYAH)
	$ayah_wanita_ktp			= ucwords($_POST['ayah-wanita-ktp']);
	$ayah_wanita_nama			= ucwords($_POST['ayah-wanita-nama']);
	$ayah_wanita_tmp_lahir		= ucwords($_POST['ayah-wanita-tmp_lahir']);
	$ayah_wanita_tgl_lahir		= ucwords($_POST['ayah-wanita-tgl_lahir']);
	$ayah_wanita_wn				= ucwords($_POST['ayah-wanita-wn']);
	$ayah_wanita_wna			= ucwords($_POST['wanita-wna-negara']);
	if($ayah_wanita_wn=='Indonesia'){
		$ayah_wanita_wn='Indonesia';
	}
	else{
		$ayah_wanita_wn=$ayah_wanita_wna;
	}
	$ayah_wanita_agama		= ucwords($_POST['ayah-wanita-agama']);
	$ayah_wanita_kepercayaan	= ucwords($_POST['ayah-wanita-kepercayaan']);
	if($ayah_wanita_agama=='Kepercayaan'){
		$ayah_wanita_agama=$ayah_wanita_kepercayaan;
	}
	$ayah_wanita_tmp_tinggal	= ucwords($_POST['ayah-wanita-tmp_tinggal']);

	//ORTU WANITA (IBU)
	$ibu_wanita_ktp			= ucwords($_POST['ibu-wanita-ktp']);
	$ibu_wanita_nama		= ucwords($_POST['ibu-wanita-nama']);
	$ibu_wanita_tmp_lahir	= ucwords($_POST['ibu-wanita-tmp_lahir']);
	$ibu_wanita_tgl_lahir	= ucwords($_POST['ibu-wanita-tgl_lahir']);
	$ibu_wanita_wn			= ucwords($_POST['ibu-wanita-wn']);
	$ibu_wanita_wna			= ucwords($_POST['wanita-wna-negara']);
	if($ibu_wanita_wn=='Indonesia'){
		$ibu_wanita_wn='Indonesia';
	}
	else{
		$ibu_wanita_wn=$ibu_wanita_wna;
	}
	$ibu_wanita_agama		= ucwords($_POST['ibu-wanita-agama']);
	$ibu_wanita_kepercayaan	= ucwords($_POST['ibu-wanita-kepercayaan']);
	if($ibu_wanita_agama=='Kepercayaan'){
		$ibu_wanita_agama=$ibu_wanita_kepercayaan;
	}
	$ibu_wanita_tmp_tinggal	= ucwords($_POST['ibu-wanita-tmp_tinggal']);

	//SAKSI 1
	$saksi1_ktp				= ucwords($_POST['saksi1-ktp']);
	$saksi1_nama			= ucwords($_POST['saksi1-nama']);
	$saksi1_tmp_lahir		= ucwords($_POST['saksi1-tmp_lahir']);
	$saksi1_tgl_lahir		= ucwords($_POST['saksi1-tgl_lahir']);
	$saksi1_agama			= ucwords($_POST['saksi1-agama']);
	$saksi_tmp_tinggal		= ucwords($_POST['saksi1-tmp_lahir']);

	//SAKSI 2
	$saksi2_ktp				= ucwords($_POST['saksi2-ktp']);
	$saksi2_nama			= ucwords($_POST['saksi2-nama']);
	$saksi2_tmp_lahir		= ucwords($_POST['saksi2-tmp_lahir']);
	$saksi2_tgl_lahir		= ucwords($_POST['saksi2-tgl_lahir']);
	$saksi2_agama			= ucwords($_POST['saksi2-agama']);
	$saksi_tmp_tinggal		= ucwords($_POST['saksi2-tmp_lahir']);

	//Detail
	$tgl_surat				= ucwords($_POST['tgl-surat']);
	$propinsi				= ucwords($_POST['propinsi']);
	$kabkota				= ucwords($_POST['kabkota']);
	$kecamatan				= ucwords($_POST['kecamatan']);
	$deskel					= ucwords($_POST['deskel']);
	$mas_kawin				= ucwords($_POST['mas-kawin']);
	$bayar_maskawin			= ucwords($_POST['bayar-maskawin']);
	$tgl_nikah				= ucwords($_POST['tgl-nikah']);
	$jam_nikah				= ucwords($_POST['jam-nikah']);
	$waktu_bagian			= ucwords($_POST['waktu-bagian']);
	$tmp_nikah				= ucwords($_POST['tmp-nikah']);


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
		setcookie ("save[tgl_surat]", $tgl_surat, time() + 300);
		setcookie ("save[propinsi]", $propinsi, time() + 300);
		setcookie ("save[kabkota]", $kabkota, time() + 300);
		setcookie ("save[kecamatan]", $kecamatan, time() + 300);
		setcookie ("save[deskel]", $deskel, time() + 300);
		setcookie ("save[mas_kawin]", $mas_kawin, time() + 300);
		setcookie ("save[bayar_maskawin]", $bayar_maskawin, time() + 300);
		setcookie ("save[tgl_nikah]", $tgl_nikah, time() + 300);
		setcookie ("save[jam_nikah]", $jam_nikah, time() + 300);
		setcookie ("save[waktu_bagian]", $waktu_bagian, time() + 300);
		setcookie ("save[tmp_nikah]", $tmp_nikah, time() + 300);

	}
	else{
		echo "Error";
	}

	header ("Location: preview.php"); 

?>