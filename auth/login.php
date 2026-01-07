<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDULINK | Login</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">

  <!-- Logo -->
  <div class="login-logo">
    <b>EDU</b>LINK
  </div>

  <!-- Card -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk mengikuti kelas</p>

      <!-- FORM LOGIN -->
<form action="process_login.php" method="POST">

  <div class="input-group mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>

  <div class="input-group mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary btn-block">
    Login
  </button>
</form>
      <p class="mb-1 mt-3">
        <a href="#">Lupa password?</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Daftar akun baru</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>
