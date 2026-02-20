<?php
session_start();
if(!isset($_SESSION['login'])){
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Selamat Datang, <?= $_SESSION['nama'] ?></h2>
<a href="kategori.php">Kelola Kategori</a><br><br>
<a href="produk.php">Kelola Produk</a><br><br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>