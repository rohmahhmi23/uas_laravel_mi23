<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "navbar.php"; ?>
<div class="container">
<h2>Katalog Produk</h2>
<?php
$data=mysqli_query($conn,"SELECT * FROM produk");
while($d=mysqli_fetch_array($data)){
echo "<div class='card'>
<b>$d[nama_produk]</b><br>
$d[deskripsi]
</div>";
}
?>
</div>
</body>
</html>