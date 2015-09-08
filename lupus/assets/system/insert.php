<?php
//panggil file config.php untuk menghubung ke server
include('config/config.php');
 
//tangkap data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//deklarasi variabel untuk upload foto
$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];

// kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);

 
//simpan data ke database
$query = mysql_query("insert into peserta values('NULL','$fullname', '$email', '$phone',)") or die(mysql_error());
 
if ($query) {
    header('location:input.php?message=success');
}
?>