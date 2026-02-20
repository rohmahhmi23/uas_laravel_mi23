<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['login'])){
header("Location: login.php");
}

if(isset($_POST['tambah'])){
$nama=$_POST['nama_kategori'];
mysqli_query($conn,"INSERT INTO kategori VALUES(NULL,'$nama')");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Kategori</h2>
<form method="POST">
<input type="text" name="nama_kategori">
<button name="tambah">Tambah</button>
</form>
<?php
$data=mysqli_query($conn,"SELECT * FROM kategori");
while($d=mysqli_fetch_array($data)){
echo "<div class='card'>$d[nama_kategori]</div>";
}
?>
<a href="dashboard.php">Kembali</a>
</div>
</body>
</html>