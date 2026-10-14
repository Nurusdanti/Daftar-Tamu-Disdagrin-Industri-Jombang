<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Pelayanan Dinas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="static/dashboard.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand fw-bold" href="#">Pelayanan Dinas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="tentang-kami.php">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="layanan.php">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero text-center py-5 d-flex flex-column justify-content-center align-items-center">
    <!-- Foto Profil -->
    <img src="static/logo.png" alt="Foto Profil" class="hero-profile mb-4">

    <h1 class="display-5 fw-bold">Pendaftaran Tamu<br>untuk pelayanan Bidang Industri</h1>
    <p class="mt-3 mb-4 fs-5">Mudah digunakan dan dapat disesuaikan</p>
    <a href="form.php" class="btn btn-success btn-lg">Pendaftaran</a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <h5>Pelayanan Dinas</h5>
        <ul>
          <li><a href="tentang-kami.php">Tentang Kami</a></li>
          <li><a href="tim.php">Tim</a></li>
          <li><a href="#">Karir</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Layanan</h5>
        <ul>
          <li><a href="form.php">Pendaftaran</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="kontak.php">Hubungi Kami</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Ikuti Kami</h5>
        <div class="social-icons d-flex">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="https://www.instagram.com/disdagrin?igsh=ZHhoM2duYjk5dDE="><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Dinas Perindustrian dan Perdagangan Jombang | Bidang Industri. Semua Hak Dilindungi.
    </div>
  </footer>

</body>
</html>
