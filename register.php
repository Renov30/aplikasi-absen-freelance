<?php
include 'koneksi.php';

$username  = $_POST['username'];
$pass  = $_POST['password'];

$query_cek = "select * from users where username= '$username' ";
$query_daftar = "insert into users (username, password) values ('$username', '$pass')";

$cek_user = mysqli_query($koneksi, $query_cek);
if (mysqli_num_rows($cek_user) > 0) {
    echo "Username dan password sudah ada silahkan login <a href='daftar.php'>Coba lagi</a>";
} else {
    if (mysqli_query($koneksi, $query_daftar)) {
        echo "Pendaftaran berhasil! <a href='index.php'>Login disini</a>";
    } else {
        echo "Gagal mendaftar" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
