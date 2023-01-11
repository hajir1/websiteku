<?php
$server = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db ="db_siswa";
$conn = new mysqli($server, $user_db, $pass_db, $nama_db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
/**
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
*/
?>