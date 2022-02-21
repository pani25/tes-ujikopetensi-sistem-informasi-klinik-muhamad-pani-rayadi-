<?php 
include 'koneksi.php';

$id=uniqid(mt_rand(),true);
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$tindakan = $_POST['tindakan'];
$resepObat = $_POST['resepObat'];
$hargaDokter = 40000;
$hargaDaftar = 5000;

if(isset($_POST['submit'])){
    $q = mysqli_query($koneksi,"select * from obat where id = '$resepObat'");
    $d = mysqli_fetch_array($q);
    $hargaObat = $d['hargaObat'];
    $total = $hargaDaftar + $hargaDokter + $hargaObat;


    $q1 ="INSERT INTO tindakan (id,nama,keluhan,tindakan,idObat) VALUES('$id','$nama','$keluhan','$tindakan','$resepObat')";
    $query=mysqli_query($koneksi,$q1);

    $q2 ="INSERT INTO pembayaran (idBayar,idObat,totalBayar,status) VALUES('$id','$resepObat','$total','BELUM LUNAS')";
    $query2=mysqli_query($koneksi,$q2);

    header("location:halaman_dokter.php?page=rujukan");
}
else{
    echo 'error';
}
 
?>