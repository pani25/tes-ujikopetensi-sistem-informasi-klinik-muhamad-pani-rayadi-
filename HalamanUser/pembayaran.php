<div class="halaman">
	<h2>PEMBAYARAN PASIEN</h2>
	<p></p>
</div>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama Pasien</th>
			<th>Keluhan</th>
			<th>Tindakan</th>
			<th>Resep Obat</th>
			<th>Total Pembayaran</th>
			<th>Status</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from pembayaran JOIN tindakan ON pembayaran.idBayar = tindakan.id JOIN obat on pembayaran.idObat = obat.id");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['keluhan']; ?></td>
                    <td><?php echo $d['tindakan']; ?></td>
                    <td><?php echo $d['namaObat']; ?></td>
                    <td><?php echo $d['totalBayar']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <td>
                        <a href="updatepembayaran.php?id=<?php echo $d['idBayar'];?>" class="tombol">BAYAR</a>
                    </td>
        </tr>
        <?php } ?>
	</table>