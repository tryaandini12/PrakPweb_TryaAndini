<?php
$valid_username = "tryaandini_";
$valid_password = "cantik123";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    header("Location: profileDiri.php");
    exit;
} else {
    echo "<h1>Login gagal! Username atau password salah.</h1>";
    echo "<a href='index.php'>Coba lagi</a>";
}
?>
