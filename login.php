<?php
session_start();
include 'koneksi.php';


$username = $_POST['username'];
$pass = $_POST['password'];

$query  = "select * from users  where username = '$username' ";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($pass, $user['password'])) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal!";
}
