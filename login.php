<?php
session_start();
include "koneksi.php";

$error="";

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$data=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user=mysqli_fetch_array($data);

if($user && password_verify($password,$user['password'])){
$_SESSION['login']=true;
$_SESSION['nama']=$user['nama'];
header("Location: dashboard.php");
}else{
$error="Email atau Password salah!";
}
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
<h2>Login</h2>
<p style="color:red;"><?= $error ?></p>
<form method="POST">
<input type="email" name="email" required>
<input type="password" name="password" required>
<button name="login">Login</button>
</form>
</div>
</body>
</html>