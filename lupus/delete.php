<?php
include('config/config.php');
 
$id = $_GET['id_peserta'];
 
$query = mysql_query("delete from peserta where id_peserta='$id'") or die(mysql_error());
 
if ($query) {
    header('location:index?message=delete');
}
?>