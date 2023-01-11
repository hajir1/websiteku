<html>
<head>
<title>Selamat Datang</title>
</head>

<body>
<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.html");
    }
	echo "Selamat Datang   : ".$_SESSION['username']."<BR>";
?>
HALAMAN UTAMA
<HR>
<A href="input_siswa.php">1. MASUKAN DATA USER</a> <BR>
<A href="tampil_siswa.php">2. TAMPILKAN DATA USER </a><BR>

<hr>
<A href="logout.php">logout</a><BR>

</body>
</html>