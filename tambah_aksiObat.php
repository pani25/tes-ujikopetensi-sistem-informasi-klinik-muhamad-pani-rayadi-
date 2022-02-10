<?php 
include 'koneksi.php';
 
$namaObat = $_POST['namaObat'];
$jenisObat = $_POST['jenisObat'];
 
mysqli_query($koneksi,"insert into obat values('','$namaObat','$jenisObat')");
 
header("location:halaman_pegawai.php?page=obat");
 
?>