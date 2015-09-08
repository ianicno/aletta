<?php
//panggil file config.php untuk menghubung ke server
include('config/config.php');
 
//tangkap data dari form
$nama = $_POST['nama'];
$mail = $_POST['email'];
$phone = $_POST['phone'];

//deklarasi variabel untuk upload file
$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];

// kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);

 
//simpan data ke database
$query = mysql_query("insert into peserta values('', '$nama', '$mail', '$phone','$name')") or die(mysql_error());
 
if ($query) {
    header('location:http://localhost/ale/index.php?message=success');
}
?>