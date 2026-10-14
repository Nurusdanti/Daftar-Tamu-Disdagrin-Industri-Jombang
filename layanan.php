<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Layanan Kami</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fdfcfb;
      color: #333;
      line-height: 1.6;
    }

    header {
      background: #f0f4f8;
      padding: 50px 0;
      text-align: center;
      border-bottom: 2px solid #d1e3f0;
    }

    header h1 {
      font-size: 36px;
      color: #2a3d66;
      font-weight: 600;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
    }

    .service-card {
      background-color: #ffffff;
      border-radius: 16px;
      padding: 30px 20px;
      border: 1px solid #e6ecf2;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
    }

    .service-card img {
      width: 64px;
      height: 64px;
      margin-bottom: 18px;
    }

    .service-card h3 {
      font-size: 20px;
      color: #34699a;
      margin-bottom: 12px;
    }

    .service-card p {
      font-size: 15px;
      color: #5a5a5a;
    }

    footer {
      margin-top: 60px;
      background: #f0f4f8;
      color: #555;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      border-top: 1px solid #d1e3f0;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 28px;
      }

      .service-card {
        padding: 20px 15px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Layanan Kami</h1>
  </header>

  <div class="container">
    <div class="service-grid">
      <div class="service-card">
        <img src="static/logo-kabupaten.png" alt="Konsultasi">
        <h3>Konsultasi Industri</h3>
        <p>Kami membantu pelaku industri dengan saran teknis dan strategi pengembangan usaha.</p>
      </div>
      <div class="service-card">
        <img src="static/logo-kabupaten.png" alt="Pelatihan">
        <h3>Pelatihan IKM</h3>
        <p>Program pelatihan untuk meningkatkan kompetensi SDM di bidang industri kecil menengah.</p>
      </div>
      <div class="service-card">
        <img src="static/logo-kabupaten.png" alt="Perizinan">
        <h3>Bantuan Perizinan</h3>
        <p>Pendampingan penyusunan dokumen legalitas usaha seperti NIB, SIUP, dan lainnya.</p>
      </div>
      <div class="service-card">
        <img src="static/logo-kabupaten.png" alt="Pemasaran">
        <h3>Dukungan Pemasaran</h3>
        <p>Kami bantu promosikan produk IKM melalui event pameran dan platform online.</p>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Dinas Perindustrian dan Perdagangan Jombang | Bidang Industri. Seluruh hak cipta dilindungi.
  </footer>
</body>
</html>
