<!DOCTYPE html>
<html>
<head>
	<title>MENU UTAMA</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<!--<?php 
		session_start();
	
		
		if($_SESSION['level']==""){
			header("location:index.php?pesan=gagal");
		}
	
		?>-->
<div class="content">
	<header>
		<img src="asset/logo.png" width="120" align="left"/>
		<img src="asset/parmasi.png" width="120" align="right"/>
		<h1 class="judul">KLINIK SEJAHTERA SENTOSA</h1>
		<h3 class="deskripsi"></h3>

		<h4 class="user">Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h4>

	</header>
 
	<div class="menu">
		<ul>
			<li><a href="halaman_dokter.php?page=home">HOME</a></li>
			<li><a href="halaman_dokter.php?page=rujukan">RUJUKAN PASIEN</a></li>
			<li><a href="halaman_dokter.php?page=dokter">DATA DOKTER</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "HalamanDokter/home.php";
				break;
			case 'rujukan':
				include "HalamanDokter/rujukan.php";
				break;
			case 'dokter':
				include "HalamanDokter/dokter.php";
				break;
			case 'tambahrujukan':
				include "HalamanDokter/tambahRujukan.php";
				break;
			case 'tambahdokter':
				include "HalamanDokter/tambahdokter.php";
				break;	
			case 'editrujukan':
				include "HalamanDokter/editRujukan.php";
				break;
			case 'editdokter':
				include "HalamanDokter/editdokter.php";
				break;	
			case 'hapus':
				include "HalamanUser/hapus.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "HalamanDokter/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>