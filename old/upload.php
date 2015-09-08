<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <title>BerryOutlet - Sayembara Aletta</title>
	<meta name="description" content="BerryOutlet.com - Sayembara Aletta">
	<meta name="keywords" content="BerryOutlet.com - Sayembara Aletta">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href=" assets/images/favicon.png">

	<!-- Retina Images -->
	<script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
		document.cookie='HTTP_IS_RETINA=1;path=/';</script>
	<!-- End Retina Images -->

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- Stylesheets -->
	
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/grid.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/colors/ruby-red.css" title="red" media="screen">
	
	
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/animations.css">
</head>

<body class="royal_loader">

	<!-- Begin Navigation -->
	<nav class="clearfix">

		<!-- Logo -->
		<div class="logo">
			<a id="top" href="#"><img src="assets/images/logo.png" alt="Visia"></a>
		</div>

		<!-- Mobile Nav Button -->
		<button type="button" class="nav-button" data-toggle="collapse" data-target=".nav-content">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>

	    <!-- Navigation Links -->
	    <div class="navigation">
			<ul class="nav-content">
				<li><a class="active" href="#section1">Sayembara</a></li>
				<li><a href="#section2">Aletta</a></li>
				<li><a href="#section3">Tahapan</a></li>
				<li><a href="#section4">Persyaratan</a></li>
				<li><a href="#section5">Penilaian</a></li>
			</ul>
		</div>

	</nav>
	<!-- End Navigation -->	

	<!-- Begin Hero -->
	<section id="section1" class="parallax-bg1 hero parallax clearfix">

		<!-- Content -->
		<div class="dark content-left container">


			<!-- Tabs & Alerts -->
		<div class="shortcode clearfix">
			<h4 class="shortcode-title"></h4>

			<div class="grid-3">
				<div class="tabs">
					<img data-appear-bottom-offset="100" src=" assets/images/aletta-event.png" alt="aletta berryoutlet">
					<br/><br/>
					<h3><font color="#d32127">Bantuin kita bikin Aletta maskot dari BerryOutlet yuk!</font></h3>
					<p>Hadiah nya Total uang belanja senilai Rp 5.000.000,- loh! <br/>
					<br/>
					Pendaftaran & Pengumpulan Karya : <br/>
					20 Juni s.d 20 Juli 2015 <br/>
					Pukul 12:00 WIB (Siang). <br/>
					<br/>
					Lebih lebih lengkap lagi? Yuk di scroll ke bawah!</p>
				</div>
			</div>
            
            <?php
			include('lupus/config/config.php');
			if(@$_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$email			= $_POST['email'];
				$phone			= $_POST['phone'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = 'lupus/files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO peserta VALUES(NULL, '$email','$phone','$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>
            <!---BEGIN FORM--->
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
			<h2>Upload</h2>
            <p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
            	<tr>
                	<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>email</b></td><td><b>:</b></td><td><input type="text" name="email" size="40" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>phone</b></td><td><b>:</b></td><td><input type="text" name="phone" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
                </tr>
            </table>
            </form>
            </p>
			<!---./END BEGIN FORM--->
        </div>
    </div>
	<!-- Begin About -->
	<section id="section2" class="content container">

		<!-- Text -->
		<div class="title grid-full">
			<h2>Aletta</h2>
			<span class="border"></span>
			<p class="sub-heading">Hello aku Aletta. Aku adalah maskot dari BerryOutlet. Tahun ini aku baru saja menginjak usia 25 tahun. Aku pun suka berbelanja tetapi juga membantu teman teman ku memilih barang barang belanjaan yang paling bagus untuk mereka. Alasan teman teman ku memilih ku untuk membantu mereka karena aku pintar memilih barang dengan kualitas baik, aku juga tahu dimana mencari tempat yang nyaman dan mudah untuk berbelanja. Aku sangat ramah dan memiliki banyak teman. Aku menyukai banyak hobi dari adventure sampai yang berbau feminim..</p>
		</div>

		<!-- Image -->
		<img class="animated slide"  data-appear-bottom-offset="100" src="assets/images/about.jpg" alt="About Visia">
	</section>
	<!-- End About -->

	<!-- Begin Services -->
	<section id="section3" class="parallax-bg2 parallax colored clearfix">
		<div class="content dark padded container">

			<!-- Text -->
			<div class="title grid-full">
				<h2> Uang Belanja senilai Rp 5.000.000<br/><strong>Rp 5.000.000</strong></h2>
				<span class="border"></span>
				<p class="sub-heading">Pendaftaran & Pengumpulan Karya : 15 Juni s.d 15 Juli 2015, Pukul 12:00 WIB (Siang) <br/>
										Pengumuman Pemenang Lomba : 30 Juli 2015*<br/><br/>
										<i>Catatan :</i><br/>
										* Pengumuman pemenang akan diumumkan pada website dan social media BerryOutlet<br/>
										** Jadwal Pengumuman bersifat tentatif / sewaktu-waktu bisa berubah.<br/>
										*** Hasil pemenang bersifat mutlak
				</p>
			</div>

				
		</div>
		
	</section>
	<!-- End Services -->

	<!-- Begin Portfolio -->
	<section id="section4" class="portfolio clearfix">

		<!-- Title -->
		<div class="content container">
			<div class="title grid-full">
				<h2>Persyaratan</h2>
				<span class="border"></span>
			</div>
		</div>

		<!-- Ajax Section -->
		<div class="ajax-section container">
			<div class="loader"></div>
			<div class="project-navigation">
				<ul>
					<li class="nextProject"><a href="#"></a></li>
					<li class="prevProject"><a href="#"></a></li>
				</ul>
			</div>
			<div class="closeProject">
				<a href="#"><i class="icon-remove"></i></a>               
			</div>
            <div class="ajax-content clearfix"></div>
		</div>
		<!-- End Ajax Section -->

				<p class="sub-heading">Persyaratan untuk dapat mengikuti sayembara Desain Me Aletta adalah :<br/><br/>
1. Peserta umum perorangan / kelompok dan sudah memiliki akun BerryOutlet<br/>
2. Desain Aletta wajib dikirimkan dengan format PDF disertai nama, email, komposisi warna, dan deskripsi/ filosofi/penjelasan dari gambar Aletta.<br/>
3. Logo tidak mengandung unsur SARA dan tidak bertentangan dengan norma-norma yang ada.<br/>
4. Hasil karya yang dikirimkan sepenuhnya menjadi hak milik BerryOutlet.<br/>
5. Desain Aletta yang di kirimkan merupakan karya baru dan orisinal.<br/>
6. Pemenang wajib mengirimkan data mentah kepada BerryOutlet.<br/>
7. Pengumuman pemenang bersifat mutlak.<br/>
8. Panitia berhak melakukan perubahan terhadap maskot yang menjadi pemenang dan menggunakannya untuk kepentingan apapun.<br/>
9. Tertutup untuk karyawan dan keluarga BerryOutlet.
				</p>
			</div>

		<!-- Thumbnails -->
		

	</section>
	<!-- End Portfolio -->

	<!-- Begin Team -->
	<section id="section5" class="content container">
		<div class="title grid-full">
			<h2>Kriteria penilaian</h2>
			<span class="border"></span>
		</div>
		<ul class="team-list clearfix">
			<li class="team-member grid-2">
				<div class="name">
					<h4>KESESUAIAN DENGAN brand personality BerryOutlet (40%)</h4>
				</div>
				<p><font size="2px">Kesesuaian makna BerryOutlet<br/>Komunikatif dalam mengedepankan/menyampaikan makna</font>
				</p>
			</li>
			<li class="team-member grid-2">
				<div class="name">
					<h4>IDE DAN DESAIN LOGO (30%)</h4>
				</div>
				<p><font size="2px">Originalitas<br/>Keunikan</font>
				</p>
			</li>
			<li class="team-member grid-2">
				<div class="name">
					<h4>NILAI ARTISTIK DAN ESTETIKA (30%)</h4>
				</div>
				<p><font size="2px"> Komposisi, warna dan bentuk mempunyai proporsi dan dominasi yang serasi dan seimbang<br/>Mudah diproduksi dan diaplikasikan di berbagai media</font>
				</p>
			</li>
		</ul>
	</section>
	<!-- End Team -->

	<!-- Begin Clients -->
	<section class="parallax-bg3 parallax black clearfix">
		
	</section>
	<!-- End Clients -->

	<!-- Begin Footer -->
	<footer id="footer" class="clearfix">
		<div class="content dark container">

			<!-- Contact Links -->
			<ul class="contact animated hatch clearfix">
				<li class="grid-2">
					<img src="assets/images/icons/telephone.png" alt="telephone" width="20" height="20">
					<p>+62 21 29512851</p>
				</li>
				<li class="grid-2">
					<a id="contact-open" href="#">
						<img src="assets/images/icons/mail.png" alt="mail" width="20" height="20">
						<br>
						marketing@berryoutlet.com
					</a>
				</li>
				<li class="grid-2">
					
						<img src="assets/images/icons/location.png" alt="location" width="20" height="20">
						<br>
						Cipete Selatan<br>Jakarta Selatan, Indonesia
					
				</li>
			</ul>
		</div>

		<!-- Contact Form -->
		<div id="contact-form" class="dark clearfix">
			<div class="container">
				<div class="contact-heading grid-full">
					<h3>Get in touch</h3>
					<span class="border"></span>
				</div>
			</div>

			
		</div>

		<div class="container">

			<!-- Social Links -->
			<ul class="social-links grid-full">
				<li><a href="https://www.facebook.com/berryoutletpage" target="_blank"><img src="assets/images/icons/facebook-large.png" alt="facebook" width="36" height="36"></a></li>
				<li><a href="https://twitter.com/berryoutlet" target="_blank">
				<img src="assets/images/icons/twitter-large.png" alt="twitter" width="36" height="36"></a></li>
				<li><a href="https://instagram.com/berryoutlet" target="_blank">
				<img src="assets/images/icons/instagram-large.png" alt="instagram" width="36" height="36"></a></li>
			</ul>

			<!-- Copyright Info -->
			<div class="copyright grid-full"><h6>©2015 PT Berry Technology. All rights reserved.</h6></div>

		</div>
	</footer>
	<!-- End Footer -->

	
	<!-- Javascript -->
	<script src="assets/javascript/royal-preloader.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	    var images = {
	        'parallax1':    'http://www.aetherthemes.com/demo/visia/images/hero.jpg',
	        'parallax2':    'http://www.aetherthemes.com/demo/visia/images/services-red.jpg',
	        'parallax3':    'http://www.aetherthemes.com/demo/visia/images/clients.jpg',
	        'About Us': 	'http://www.aetherthemes.com/demo/visia/images/about.jpg',
	        'Team':     	'http://www.aetherthemes.com/demo/visia/images/team.jpg',
	        'Thumb1':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project1.jpg',
	        'Thumb2':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project2.jpg',
	        'Thumb3':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project3.jpg',
	        'Thumb4':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project4.jpg',
	        'Thumb5':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project5.jpg',
	        'Thumb6':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project6.jpg',
	        'Thumb7':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project7.jpg',
	        'Thumb8':   	'http://www.aetherthemes.com/demo/visia/images/thumbnails/project8.jpg'
	    };
	 
	    // config
	    Royal_Preloader.config({
	        mode:       'number',
	        images:     images,
	        timeout:    10,
	        showInfo:   false,
	        background: ['#ffffff']
	    });
	</script>
	<script src=" assets/javascript/smoothscroll.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/waypoints.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/parallax.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/navigation.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/styleswitch.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.easing.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.fittext.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.localscroll.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.scrollto.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.appear.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.waitforimages.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.bxslider.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/jquery.fitvids.js" type="text/javascript" charset="utf-8"></script>
	<script src=" assets/javascript/main.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>