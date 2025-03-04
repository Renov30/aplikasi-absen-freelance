<?php
session_start();

// Jika user belum login, kirimkan respon kosong
if (!isset($_SESSION['username'])) {
    echo json_encode(["username" => "Guest"]);
    exit();
}

// Kirim username dalam format JSON
echo json_encode(["username" => $_SESSION['username']]);
