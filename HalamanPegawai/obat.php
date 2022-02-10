<div class="halaman">
	<h2> DATA OBAT</h2>
</div>

<a href="halaman_pegawai.php?page=tambahobat" class="tombol">+ TAMBAH OBAT</a>
<br/>
<br/>
	<table border="1" width="100%">
        <tr>
            <<th>NO</th>
			<th>Nama Obat</th>
			<th>Jenis Obat</th>
			<th>OPSI</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from obat");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namaObat']; ?></td>
                    <td><?php echo $d['jenisObat']; ?></td>
                    <td>
                        <a href="halaman_pegawai.php?page=edit">EDIT</a>
                        <a href="hapus4.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
        </tr>
        <?php } ?>
	</table>