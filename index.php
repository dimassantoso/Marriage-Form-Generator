<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulir Nikah</title>
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
</head>

<body>
	<div class="ui container">
		<div class="ui large four steps">
		  <div class="ui active step">
		    Data Calon Mempelai
		  </div>
		  <div class="ui disabled step">
		    Data Orangtua Calon Mempelai
		  </div>
		  <div class="ui disabled step">
		    Data Saksi Pernikahan
		  </div>
		  <div class="ui disabled step">
		    Konfirmasi
		  </div>
		</div>
		<div id="data-mempelai">
			<form class="ui form" method="POST">
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
				<button class="fluid ui right labeled icon button positive large">Selanjutnya<i class="right arrow icon"></i></button>
			</form>
		</div>
		<div id="data-ortu-mempelai">
			<form class="ui form">
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
			</form>
		</div>
		<div class="two ui buttons large">
		  <button class="ui left labeled icon button negative">Kembali<i class="left arrow icon"></i></button>
		  <button class="ui right labeled icon button positive">Selanjutnya<i class="right arrow icon"></i></button>
		</div>
		<div id="data-saksi">
			<?php include 'include/saksi.php'; ?>
		</div>
		<div id="data-final">
			<?php include 'include/final.php'; ?>
		</div>
		<div id="selesai">
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('.ui.radio.checkbox').checkbox();
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
</script>
