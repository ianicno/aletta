<!DOCTYPE html>
<html>
<head>
	<title>FILE PESERTA ALETTA</title>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Lihat Peserta</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/menu.css"/>
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/tabel.css"/>
</head>
<body>
<div id="container">
<ul class="menu">
			<li><a href="index">Home</a></li>
			<li><a href="download">Download</a></li>
			<li><a href="logout">Logout</a></li>
		</ul>
		</div>
	<div id="container">
    	<div id="header">
    		<h1>DOWNLOAD <br/> FILE PESERTA</h1>
			</div>
        
         
        
        <div id="content">
        	
            <p>
            <table width="68%" border="1" align="left" cellpadding="10" cellspacing="0">
			<tbody>
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Upload Date</th>
                    <th>Name File</th>
                    <th width="70">Type</th>
                    <th width="70">Size</th>
                </tr>
                <?php
				include('config/config.php');
				
				$sql = mysql_query("SELECT * FROM peserta ORDER BY id_peserta DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td><a href="../'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
				</tbody>
            </table>
            </p>
        </div>
    </div>

</body>
</html>