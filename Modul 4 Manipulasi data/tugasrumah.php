<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- COPYRIGHT 2013 RIFKI RIZKIA FUADI | RIFKI.MY.ID | brammuda.COM -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Login | Binnervis</title>
	<style type="text/CSS">
	body {font-family: 'Segoe UI', Tahoma, Helvetica, Sans-Serif;}
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0}
	td {margin: 0; padding: 5px 0}
	blockquote {font-size: 12px; margin: 0px 0px 15px 0; padding: 10px; background: #FFFFD0; border: 1px solid #FFD47F; border-radius: 5px}
	#logo {max-width: 400px; width: 100%; margin: 50px auto 20px}
	#logo img {max-width: 400px; width: 100%}
	#header {max-width: 360px; margin: 0 auto; padding: 20px; color: #FFF; background:#768594;}
	#content {max-width: 360px; margin: 0 auto; padding: 20px 20px 0px 20px; background: #F5F5F0;}
	.button {font-weight: bold; max-width:80px; margin: 20px 0 10px 0; padding: 10px 5px; clear: both; color: #FFF; background:#745362; border: none}
	</style>
	<script type="text/javascript">			
		function formCheck(){
		if(login.username.value == "" && login.password.value == ""){
			alert("Username dan Password Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.username.value == ""){
			alert("Username Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.password.value == ""){
			alert("Password harus di isi untuk login");
			login.password.focus();
			return false;
		}
		else
		return true; 
		}
	</script>
	<script language="javascript">
		function getKey(e){
			if (window.event)
				return window.event.keyCode;
			else if (e)
				return e.which;
			else
				return null;
		}

		function restrictChars(e, validList){
			var key, keyChar;
			key = getKey(e);
			if (key == null) return true;
			keyChar = String.fromCharCode(key).toLowerCase();
			if (validList.toLowerCase().indexOf(keyChar) != -1)
				return true;
			if(key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
				return true;
			return false;
		}

		function alphabetOnly(e){
			return restrictChars( e, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
		}
	</script>
</head>
<body>
	</br></br></br></br></br></br>
	</div>
	<div id="header">
		<h1>Login</h1>
	</div>
	<div id="content">
		<?php
			if(isset($_POST['username']) && isset($_POST['password'])){
				if(is_string($_POST['username']) && is_string($_POST['password'])){ // Validasi form bernilai string
					if($_POST['username'] == 'brammuda' && $_POST['password'] == 'sekali'){
						print '<blockquote>Selamat ' . $_POST['username'] . ' kamu berhasil login</blockquote>';
						print '<a href=\baru\studikasus.php>Klik disini untuk melanjutkan</a>';
					}elseif($_POST['username'] == 'brammuda' && $_POST['password'] != 'sekali'){
						print '<blockquote>Password salah</blockquote>';
					}elseif($_POST['username'] != 'brammuda' && $_POST['password'] == 'sekali'){
						print '<blockquote>Username salah</blockquote>';
					}else{
						print '<blockquote>Username & Password salah</blockquote>';
					}
				}
			}
		?>
		<form id="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return formCheck();">
			<table>
				<tr>
					<td><div class="username">Username </div></td>
					<td><input type="text" name="username" id="username" onkeypress="return alphabetOnly(event)"></td>
				</tr>
				<tr>
					<td><div class="password">Password </div></td>
					<td><input type="text" name="password" id="password" onkeypress="return alphabetOnly(event)"></td>
				</tr>
			</table>
			<input class="button" type="submit" value="LOGIN" />
		</form>
	</div>
</body>
</html>