<?php 

include 'koneksi.php';


$id = $_GET['id'];
mysqli_query($koneksi,"update pembayaran SET status='LUNAS' where idBayar='$id'");

header("location:halaman_user.php?page=bayar");
 
?>
