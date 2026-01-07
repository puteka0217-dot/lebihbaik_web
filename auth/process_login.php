<?php
session_start();
include '../config/database.php';

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
  die("Email dan password wajib diisi");
}

// Ambil user dari database
$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");

if (mysqli_num_rows($query) === 1) {

  $user = mysqli_fetch_assoc($query);

  // Cek password (plaintext sesuai permintaan kamu)
  if ($password === $user['password']) {

    // Simpan session
    $_SESSION['login'] = true;
    $_SESSION['id']    = $user['id'];
    $_SESSION['nama']  = $user['nama'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role']  = $user['role'];

    // 🔥 ARAHKAN KE DASHBOARD
    header("Location: ../index2.php");
    exit;

  } else {
    echo "Password salah";
  }

} else {
  echo "Email tidak terdaftar";
}
