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
    <br /><ul class="menu">
			<li><a href="index">Home</a></li>
			<li><a href="download">Download</a></li>
			<li><a href="logout">Logout</a></li>
		</ul>
		
	</div>
	<br /><br /><br />
	<?php
if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
    echo"<script>alert('Data berhasil dihapus!');</script>";
}
?>
	  <div class="table">
<h2 align="center"><font>Peserta Sayembara Aletta</font></h2>
	  <table width="50%" border="1" align="left" cellpadding="10" cellspacing="0">
    <thead>
        <tr class="head">
            <td>No.</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
			<td></td>
        </tr>
    </thead>
    <tbody>
			<?php
		$per_page = 10;
			
			$page_query = mysql_query("SELECT COUNT(*) FROM peserta");
			$pages = ceil(mysql_result($page_query, 0) / $per_page);

			$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
			$start = ($page - 1) * $per_page;
			
			$query = mysql_query("select * from peserta LIMIT $start, $per_page");
		 
			$no = 1;
			while ($data = mysql_fetch_array($query)) {
			?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nama_file']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td>
				<a href="view?id_peserta=<?php echo $data['id_peserta']; ?>">Detail</a>
			</td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>

	
	</div>
	<p><font size="3"><?php
	if($pages >= 1 && $page <= $page){
			for($x=1; $x<=$pages; $x++){
					echo ($x == $page) ? '<b><a href="?page='.$x.'">' .$x. '</a></b>' :
			'<a href="?page='.$x.'">'.$x.'</a>';
				echo '&nbsp;';
			}
	}
?></font></p>
	
</body>
</html>