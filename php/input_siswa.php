<html>
<body>
<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.html");
    }
?>
Masukan Data Siswa
<form action="simpan_siswa.php" method="post">
<table>
<tr>
<td>ID User</td><td>:</td><td><input type="text" name="id_user"</td>
</tr>
<tr>
<td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama_lengkap"</td>
</tr>
<tr>
<td>username</td><td>:</td><td><input type="text" name="username"</td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"</td>
</tr>
<tr>
<td></td><td>:</td><td><input type="Submit" name="simpan_user"</td>
</tr>
</table>
</form>
<A href="index.html">Kembali Ke Halaman Utama </a><BR>
</body>
</html>