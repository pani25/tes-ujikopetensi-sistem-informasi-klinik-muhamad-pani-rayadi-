<div class="halaman">
	<h2> EDIT DATA USER </h2>
</div>

    <br/>
        <a href="halaman_user.php?page=user" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <?php
        include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from user where id='$id'");
        while($d = mysqli_fetch_array($data)){
	?>

<form method="post" action="update.php">
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
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
                <tr>
					<td>Level</td>
					<td><input type="text" name="level" value="<?php echo $d['level']; ?>"></td>
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