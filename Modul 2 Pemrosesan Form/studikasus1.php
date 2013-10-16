<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>studi kasus 1</title> 
</head> 
 
<body> 
 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> 
Pilih Bilangan yang anda suka dari 1 sampai 5 
<input type="number" name="angka" /> <br /> 
 
<input type="submit" value="OK" /> 
</form> 
 
<?php 
if (isset($_GET['angka'])) { 
  echo 'Anda memilih angka, ' . $_GET['angka'];
  $angka=$_GET['angka'];
  {
  if ($angka == 1){ 
   echo ", anda pilih satu"; 
} elseif ($angka == 2) { 
   echo ", anda pilih dua"; 
} elseif ($angka == 3) { 
   echo ", anda pilih tiga"; 
} elseif ($angka == 4) { 
   echo ", anda pilih empat"; 
} elseif ($angka == 5) { 
   echo ", anda pilih lima"; 
} else {
   echo ", Pilihan anda salah";
}
  }
  
} 
?>
 
</body> 
</html> 