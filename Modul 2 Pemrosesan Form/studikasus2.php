<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>studi kasus 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pilih musik kesukaan anda
		<input type="checkbox" name="musik[]" value="Metalcore" checked="checked" />Metalcore
		<input type="checkbox" name="musik[]" value="Slamming" checked="checked" />Slamming
		<input type="checkbox" name="musik[]" value="Death metal" />Death metal
		<input type="checkbox" name="musik[]" value="Pop"  />Pop
		<input type="checkbox" name="musik[]" value="Punk" />Punk <br />
		<input type="submit" value="lanjut" />
	</form>

	<?php
	// Ekstraksi nilai
		if(isset($_POST['musik'])){
			foreach($_POST['musik'] as $key => $val){
				echo $key . ' -> ' . $val . '<br />';
				if($val == 'Metalcore'){
					$check['Metalcore'] = 'checked="checked"';
				}
			}
		}
	?>
</body>
</html>