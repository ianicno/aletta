<?php
include('config/config.php');
include('config/cek-login.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>	
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Lihat Peserta</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/menu.css"/>
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/tabel.css"/>	
</head>

<body>
	<ul class="menu">
			<li><a href="index">Home</a></li>
			<li><a href="download">Download</a></li>
			<li><a href="logout">Logout</a></li>
		</ul>
		
	</div>
	<br /><br /><br />
	  <div class="table">

		  <?php
		$id = $_GET['id_peserta'];
		 
		$query = mysql_query("select * from peserta where id_peserta='$id'") or die(mysql_error());
		 
		$data = mysql_fetch_array($query);
		?>
		
		
<h2 align="center"><font>Detail Data Peserta</font></h2>
<form action="insert.php" method="post" name="form">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table width="68%" border="0" align="left" cellpadding="10" cellspacing="0">
	<tbody>
		<tr class="head">
			<td colspan="3"></td>
            <td rowspan="7"><img src="./<?=$data['file_gambar'];?>" width="250" height="250"></td>
           </tr>
		<tr class="head" rowspan="3">
            <td width="20%">ID Peserta</td>
			<td width="3%">:</td>
			<td width="64%">ALETTA<?php echo $data['id_peserta']; ?></td>
        </tr>
         <tr class="head" rowspan="3">
            <td width="20%">Nama</td>
			<td width="3%">:</td>
			<td width="64%"><?php echo $data['nama_file']; ?></td>
        </tr>
		<tr class="head">
			<td>Email</td>
			<td>:</td>
			<td><?php echo $data['email']; ?>
			</td>
		</tr>
		<tr class="head">
            <td width="20%">Phone</td>
			<td width="3%">:</td>
			<td width="64%"><?php echo $data['phone']; ?></td>
        </tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
			<a href="delete.php?id_peserta=<?php echo $data['id_peserta']; ?>"><button type="button" name="delete">Delete</button></a>
			<input type="button" name="back" value="Back" onclick="history.back(-1)" />
			
		</tr>
		
    </tbody>
		
	</div>
	</table>
	
	
</body>
</html>