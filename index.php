<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulir Nikah</title>
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<style type="text/css">
	input{
		text-transform: capitalize;
	}
	textarea{
		text-transform: capitalize;
	}
</style>
</head>

<body>
	<div class="ui container" style="margin-bottom: 10px;">
		<div class="ui large five steps">
		  <div class="ui active step" id="info-mempelai">
		    Data Calon Mempelai
		  </div>
		  <div class="ui disabled step" id="info-ortu-mempelai">
		    Data Orangtua Calon Mempelai
		  </div>
		  <div class="ui disabled step" id="info-saksi">
		    Data Saksi Pernikahan
		  </div>
		  <div class="ui disabled step" id="info-lain">
		    Data Kelengkapan Lainnya
		  </div>
		  <div class="ui disabled step" id="info-selesai">
		    Konfirmasi
		  </div>
		</div>
		<form class="ui form" method="POST" action="save.php">
			<div id="data-mempelai">
				<div class="ui equal width grid segment">
					<div class="equal width row">
						<div class="column">
							<?php include 'include/calon.pria.php'; ?>
						</div>
						<div class="column">
							<?php include 'include/calon.wanita.php'; ?>
						</div>
					</div>
				</div>
				<button class="fluid ui right labeled icon button large nextButton1">Selanjutnya<i class="right arrow icon"></i></button>
			</div>
			<div id="data-ortu-mempelai">
				<div class="ui equal width grid segment">
					<div class="equal width row">
						<div class="column">
							<?php include 'include/ortu.calon.pria.php'; ?>
						</div>
						<div class="column">
							<?php include 'include/ortu.calon.wanita.php'; ?>
						</div>
					</div>
				</div>
				<div class="two ui buttons large">
					<button class="ui left labeled icon button prevButton1">Kembali<i class="left arrow icon"></i></button>
					<button class="ui right labeled icon button nextButton2">Selanjutnya<i class="right arrow icon"></i></button>
				</div>
			</div>
			<div id="data-saksi">
				<?php include 'include/saksi.php'; ?>
				<div class="two ui buttons large">
					<button class="ui left labeled icon button prevButton2">Kembali<i class="left arrow icon"></i></button>
					<button class="ui right labeled icon button nextButton3">Selanjutnya<i class="right arrow icon"></i></button>
				</div>
			</div>
			<div id="data-lain">
				<?php include 'include/final.php'; ?>
				<div class="two ui buttons large">
					<button class="ui left labeled icon button prevButton3">Kembali<i class="left arrow icon"></i></button>
					<button class="ui right labeled icon button nextButton4">Selanjutnya<i class="right arrow icon"></i></button>
				</div>
			</div>
			<div id="selesai">
				<button class="fluid ui right labeled icon button large finishButton" type="submit">Selesai, Cetak</button>
			</div>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	$('select.dropdown').dropdown();

	$('.ui.dropdown').dropdown({
		allowAdditions: true
	});

	$('#datepicker1').calendar({
		type: 'date'
	});
	$('#datepicker2').calendar({
		type: 'date'
	});
	$('#datepicker3').calendar({
		type: 'date'
	});
	$('#datepicker4').calendar({
		type: 'date'
	});
	$('#datepicker5').calendar({
		type: 'date'
	});
	$('#datepicker6').calendar({
		type: 'date'
	});
	$('#datepicker7').calendar({
		type: 'date'
	});
	$('#datepicker8').calendar({
		type: 'date'
	});

	//Mempelai Pria
	$(document).ready(function(){
		$('#pria-asing').hide(); 
		$("#pria-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#pria-asing").hide();
	            } else{
	                $("#pria-asing").show();
	            }
	        });
    	}).change();


		$('#pria-kepercayaan').hide();
    	$("#pria-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#pria-kepercayaan").hide();
	            } else{
	                $("#pria-kepercayaan").show();
	            }
	        });
    	}).change();

    	$('#pria-mantan').hide();
    	$('#pria-istri').hide();

    	$("#pria-status").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Jejaka"){
	                $('#pria-mantan').hide();
    				$('#pria-istri').hide();
	            } 
	            else if(pilih == "Duda" ){
	            	$('#pria-mantan').show();
	            	$('#pria-istri').hide();
	            }
	            else if(pilih == "Beristri"){
	                $('#pria-istri').show();
	                $('#pria-mantan').hide();
 	            }
	        });
    	}).change();


    	//Mempelai Wanita
		$('#wanita-asing').hide(); 
		$("#wanita-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#wanita-asing").hide();
	            } else{
	                $("#wanita-asing").show();
	            }
	        });
    	}).change();


		$('#wanita-kepercayaan').hide();
     	$("#wanita-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#wanita-kepercayaan").hide();
	            } else{
	                $("#wanita-kepercayaan").show();
	            }
	        });
    	}).change();

    	$('#wanita-mantan').hide();
    	$("#wanita-status").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Perawan"){
	                $('#wanita-mantan').hide();
	            } 
	            else if(pilih == "Janda" ){
	            	$('#wanita-mantan').show();
	            }
	        });
    	}).change();

    	//Ayah Mempelai Pria
    	$('#ayah-pria-asing').hide(); 
		$("#ayah-pria-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#ayah-pria-asing").hide();
	            } else{
	                $("#ayah-pria-asing").show();
	            }
	        });
    	}).change();


		$('#ayah-pria-kepercayaan').hide();
    	$("#ayah-pria-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#ayah-pria-kepercayaan").hide();
	            } else{
	                $("#ayah-pria-kepercayaan").show();
	            }
	        });
    	}).change();

    	//Ibu Mempelai Pria
    	$('#ibu-pria-asing').hide(); 
		$("#ibu-pria-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#ibu-pria-asing").hide();
	            } else{
	                $("#ibu-pria-asing").show();
	            }
	        });
    	}).change();


		$('#ibu-pria-kepercayaan').hide();
    	$("#ibu-pria-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#ibu-pria-kepercayaan").hide();
	            } else{
	                $("#ibu-pria-kepercayaan").show();
	            }
	        });
    	}).change();

    	//Ayah Mempelai Wanita
    	$('#ayah-wanita-asing').hide(); 
		$("#ayah-wanita-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#ayah-wanita-asing").hide();
	            } else{
	                $("#ayah-wanita-asing").show();
	            }
	        });
    	}).change();


		$('#ayah-wanita-kepercayaan').hide();
    	$("#ayah-wanita-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#ayah-wanita-kepercayaan").hide();
	            } else{
	                $("#ayah-wanita-kepercayaan").show();
	            }
	        });
    	}).change();

    	//Ibu Mempelai Wanita
    	$('#ibu-wanita-asing').hide(); 
		$("#ibu-wanita-pilih-wn").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih == "Indonesia" || pilih == ""){
	                $("#ibu-wanita-asing").hide();
	            } else{
	                $("#ibu-wanita-asing").show();
	            }
	        });
    	}).change();


		$('#ibu-wanita-kepercayaan').hide();
    	$("#ibu-wanita-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#ibu-wanita-kepercayaan").hide();
	            } else{
	                $("#ibu-wanita-kepercayaan").show();
	            }
	        });
    	}).change();


    	$('#saksi1-kepercayaan').hide();
    	$("#saksi1-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#saksi1-kepercayaan").hide();
	            } else{
	                $("#saksi1-kepercayaan").show();
	            }
	        });
    	}).change();


    	$('#saksi2-kepercayaan').hide();
    	$("#saksi2-pilih-agama").change(function(){
	        $(this).find("option:selected").each(function(){
	            var pilih = $(this).attr("value");
	            if(pilih != "Kepercayaan"){
	                $("#saksi2-kepercayaan").hide();
	            } else{
	                $("#saksi2-kepercayaan").show();
	            }
	        });
    	}).change();

	});
	$('.disenter').on('keyup keypress', function(e) {
	  var keyCode = e.keyCode || e.which;
	  if (keyCode === 13) { 
	    e.preventDefault();
	    return false;
	  }
	});

</script>
