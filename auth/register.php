<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDULINK | Daftar Akun</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
<div class="register-box">

  <!-- Logo -->
  <div class="register-logo text-center">
    <span style="font-size:40px; font-weight:bold;">
      EDU<span style="color:#007bff;">LINK</span>
    </span>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg text-center" style="font-size:18px;">
        Daftar untuk mengikuti kelas online
      </p>

      <!-- FORM REGISTER -->
      <form action="process_register.php" method="POST">

  <div class="input-group mb-3">
    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
  </div>

  <div class="input-group mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>

  <div class="input-group mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary btn-block">
    Daftar
  </button>

</form>


      <p class="mt-3 mb-0 text-center">
        <a href="login.php">Sudah punya akun? Login</a>
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
