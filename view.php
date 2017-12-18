<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulir Nikah</title>
</head>
<body>
	<?php
		if(isset($_COOKIE['save'])){
			echo"<pre>";
			print_r($_COOKIE['save']);
			echo "</pre>";
		}
		else{
			echo "Error";
		}
	?>
</body>
</html>