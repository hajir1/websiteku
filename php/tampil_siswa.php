
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Lengkap</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
			</tr>
		<?php 
		  session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.html");
    }
		include 'koneksi_db.php';
		$no = 1; 
		$data = mysqli_query($conn,"select * from tbl_user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_lengkap']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
					<a href="hapus_user.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<A href="index.html">Kembali Ke Halaman Utama </a><BR>