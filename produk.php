<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['login'])){
header("Location: login.php");
}

if(isset($_POST['tambah'])){
$nama=$_POST['nama_produk'];
$desk=$_POST['deskripsi'];
$kat=$_POST['id_kategori'];

mysqli_query($conn,"INSERT INTO produk VALUES(NULL,'$nama','$desk','$kat')");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Produk</h2>

<form method="POST">
<input type="text" name="nama_produk">
<input type="text" name="deskripsi">
<select name="id_kategori">
<?php
$k=mysqli_query($conn,"SELECT * FROM kategori");
while($kat=mysqli_fetch_array($k)){
echo "<option value='$kat[id]'>$kat[nama_kategori]</option>";
}
?>
</select>
<button name="tambah">Tambah</button>
</form>

<?php
$data=mysqli_query($conn,"SELECT produk.*, kategori.nama_kategori 
FROM produk JOIN kategori ON produk.id_kategori=kategori.id");

while($d=mysqli_fetch_array($data)){
echo "<div class='card'>
<b>$d[nama_produk]</b><br>
$d[deskripsi]<br>
Kategori: $d[nama_kategori]
</div>";
}
?>
<a href="dashboard.php">Kembali</a>
</div>
</body>
</html>