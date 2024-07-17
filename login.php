<?php
session_start();
require 'functions.php';

if (isset($_POST["login"])) {
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Gunakan prepared statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['id'];

            header("Location: indexuser.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Halaman Login</title>
</head>
<body>


<h1>Login</h1>

<?php if (isset($error)): ?>

<p style="color: red;font-style: italic;">username atau password Anda salah!</p>

<?php endif; ?>

<form class=kotak-login action="" method="post">
	<ul>
		<div>
			<label for="username">Username :</label>
			<input type="text" class=form_login name="username" id="username">
		</div>
		<div>
			<label for="password">Password :</label>
			<input type="password" class=form_login name="password" id="password">
		</div>
		<div>
			<button type="submit" class=tombol_login name="login">Login</button>
		</div>
	</ul>
	<ul>
		Sudah punya akun? Jika belum silahkan<a href="registrasi.php"> Registrasi</a>
	</ul>
</form>

</body>
</html>