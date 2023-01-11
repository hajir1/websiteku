<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.html");
    }
?>
<?php
$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];

include ("koneksi_db.php");
$sql = "INSERT INTO tbl_user (id_user,nama_lengkap,username,password) VALUES ('$id_user','$nama_lengkap','$username','$password')";
if ($conn->query($sql) === TRUE) {
  echo "Data Sudah Tersimpan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<A href="tampil_siswa.php">Menampilkan Data Terbaru </a><BR>