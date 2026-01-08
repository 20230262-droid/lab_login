<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === "admin@gmail.com" && $password === "123456") {
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Sai email hoặc mật khẩu!";
    header("Location: login.php");
    exit();
}
