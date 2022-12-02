<DOCTYPE HTML!>
      <head>
      <style>
            a{
            text-decoration:none;
            font-size 20px;
            color:black;
            font-family:sans-serif;
            margin-top:50px;
            }
            </style>
            </head>
            <body>
                  <script type="text/javascript">
                         var code="a";
            if(code=="a"){
            alert("apabila anda menemui tulisan fatal error artinya nama anda sudah pernah di pakai, silahkan masukkan nama baru. dan apabila ingin kembali ke home silahkan klik BACK TO HOME");
        }
                  </script>
      </body>
<?php
$id = $_POST['nama'];
$nama = $_POST['email'];
$user = $_POST['komentar'];


include 'koneksi.php';
$sql = "INSERT INTO pribadi (id_username, email, komentar) VALUES ('$id', '$nama', '$user')";

if (mysqli_query($conn, $sql)) {
      ?><center>
            <h1>Data Berhasil Disimpan</h1>
            <a href="index2/index.html">back to home</a>
            </center>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
</html>