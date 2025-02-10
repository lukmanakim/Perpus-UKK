<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded username dan password
    $valid_username = "admin";
    $valid_password = "admin123";

    // Cek input kosong
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username atau password tidak boleh kosong!";
        header("Location: login.php");
        exit();
    }

    // Cek apakah username dan password valid
    if ($username === $valid_username && $password === $valid_password) {
        // Jika valid, buat sesi untuk user
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika salah, simpan pesan error di sesi dan redirect kembali ke login
        $_SESSION['error'] = "Username atau password salah!";
        header("Location: login.php");
        exit();
    }
}
?>
