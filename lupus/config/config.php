<?php
//host yang digunakan
//99,9% tidak perlu dirubah
$host = 'localhost'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'outland6_bomg'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = '@dminBerry123';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname = 'outland6_coming';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(1024, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 


?>