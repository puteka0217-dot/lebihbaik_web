<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include '../config/database.php';

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

if (!$nama || !$email || !$password) {
  die("Form tidak boleh kosong");
}

$cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
  die("Email sudah terdaftar");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);
$role = "user";

$sql = "INSERT INTO users (nama, email, password, role)
        VALUES ('$nama', '$email', '$password_hash', '$role')";

if (mysqli_query($conn, $sql)) {
  $_SESSION['login'] = true;
  $_SESSION['nama']  = $nama;
  $_SESSION['role']  = $role;

  header("Location: ../index2.php");
  exit;
} else {
  die("Error SQL: " . mysqli_error($conn));
}
