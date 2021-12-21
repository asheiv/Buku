<html>
<title>Buku</title>
<link rel="stylesheet" href="css/body.css">
<link rel="stylesheet" href="css/login-class.css">
<link rel="stylesheet" href="css/login-input.css">
<link rel="stylesheet" href="css/register-path.css">

<body>

<div class="login-box">
<div class="login-head">Sign In</div><br>
<form action="php/proses_login.php" method="post">

<input type="text" name="username" placeholder="Username" autocomplete="on"><br>

<input type="password" name="password" placeholder="Password" id="pass" ><br>
<div class="login-checkbox"><input type="checkbox" onclick="myFunction()">Show Password</div>
<input type="submit" value="Login">
</form>
<div class="register-path">Belum punya akun <b>-></b> <a href="php/daftar.php">Daftar Sekarang</a></div>
</div>

<script src="js/login-toggle.js"></script>


</body>
</html>