<div class="halaman">
	<h2> EDIT DATA RUJUKAN </h2>
</div>

    <br/>
        <a href="halaman_dokter.php?page=rujukan" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tindakan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

<form method="post" action="HalamanDokter/updaterujukan.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="keluhan" value="<?php echo $d['keluhan']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="tindakan" value="<?php echo $d['tindakan']; ?>"></td>
				</tr>
                <tr>
					<td>Level</td>
					<td><input type="text" name="resepObat" value="<?php echo $d['resepObat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
</form>
<?php 
	}
	?>