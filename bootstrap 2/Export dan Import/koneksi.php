<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "mahasiswa";
$cnn = mysql_connect($host, $user,$pass);
if ($cnn) {
echo 'koneksi berhasil';
}
$db = mysql_select_db($database, $cnn);
if($db) {
echo '<br/>';
echo 'memilih data sukses';
}
?>