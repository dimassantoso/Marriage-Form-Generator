<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf();
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Preview Formulir</title>
</head>
<style type="text/css">
	p tr td{
		font-family: arial, helvetica, sans-serif; font-size: 11pt;
		padding-right: 30px;
		padding-left: 30px;
	}
</style>
<body>
	<?php
		$save = $_COOKIE['save'];
		// if(isset($save)){
		// 	echo"<pre>";
		// 	print_r($save);
		// 	echo "</pre>";
		// }
		// else{
		// 	echo "Error";
		// }

		if(isset($save)){
			//N1
			ob_start();
			require 'form/n1_pria.php';
			$formN1pria = ob_get_contents();
			ob_end_clean();

			ob_start();
			require 'form/n1_wanita.php';
			$formN1wanita = ob_get_contents();
			ob_end_clean();

			//N2
			ob_start();
			require 'form/n2_pria.php';
			$formN2pria = ob_get_contents();
			ob_end_clean();

			ob_start();
			require 'form/n2_wanita.php';
			$formN2wanita = ob_get_contents();
			ob_end_clean();


			//N3
			ob_start();
			require 'form/n3.php';
			$formN3 = ob_get_contents();
			ob_end_clean();

			//N4
			ob_start();
			require 'form/n4_pria.php';
			$formN4pria = ob_get_contents();
			ob_end_clean();

			ob_start();
			require 'form/n4_wanita.php';
			$formN4wanita = ob_get_contents();
			ob_end_clean();

			//N5
			ob_start();
			require 'form/n5_pria.php';
			$formN5pria = ob_get_contents();
			ob_end_clean();

			ob_start();
			require 'form/n5_wanita.php';
			$formN5wanita = ob_get_contents();
			ob_end_clean();

			//N7
			ob_start();
			require 'form/n7.php';
			$formN7 = ob_get_contents();
			ob_end_clean();

			//Surat CATIN
			ob_start();
			require 'form/surat_catin_pria.php';
			$surat_catin_pria = ob_get_contents();
			ob_end_clean();

			ob_start();
			require 'form/surat_catin_wanita.php';
			$surat_catin_wanita = ob_get_contents();
			ob_end_clean();
		}
		else{
			echo "ERROR";
		}

	?>
</body>
</html>
<?php
	$mpdf->WriteHTML($formN7);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN1pria);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN1wanita);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN2pria);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN2wanita);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN3);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN4pria);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN4wanita);
    $mpdf->addPage();
    $mpdf->WriteHTML($formN5pria);
    $mpdf->addPage();
   	$mpdf->WriteHTML($formN5wanita);
    $mpdf->addPage();
    $mpdf->WriteHTML($surat_catin_pria);
    $mpdf->addPage();
    $mpdf->WriteHTML($surat_catin_wanita);
   
    $mpdf->Output(".pdf" ,'I');
    exit;
?>