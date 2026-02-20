<?php
include "koneksi.php";

if(isset($_POST['daftar'])){
$nama=$_POST['nama'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$nama','$email','$password')");
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "navbar.php"; ?>
<div class="container">
<h2>Register</h2>
<form method="POST">
<input type="text" name="nama" placeholder="Nama" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="daftar">Daftar</button>
</form>
</div>
</body>
</html>