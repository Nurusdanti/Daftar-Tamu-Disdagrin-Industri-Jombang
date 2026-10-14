<?php
// tentang.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tentang Kami - Dinas Perdagangan dan Perindustrian | Bidang Industri</title>
  <style>
    :root {
      --primary-color: #1b1c43;       
      --secondary-color: #95c3d5;     
      --accent-color: #404891;       
      --white: #ffffff;
      --gray-light: #f8fafc;
      --text-dark: #212529;
      --highlight: #332d6a;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--gray-light);
      color: var(--text-dark);
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, var(--secondary-color), var(--white));
      padding: 60px 20px;
      text-align: center;
      box-shadow: 0 6px 18px rgba(27, 67, 50, 0.25);
      border-bottom-left-radius: 60px;
      border-bottom-right-radius: 60px;
    }

    header h1 {
      font-size: 2.8rem;
      color: var(--primary-color);
      margin-bottom: 10px;
      letter-spacing: 0.8px;
      font-weight: 700;
    }

    header p {
      font-size: 1.2rem;
      color: var(--accent-color);
      margin-top: 0;
      font-weight: 600;
    }

    main {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }

    section {
      margin-bottom: 40px;
    }

    section h2 {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 15px;
      border-left: 6px solid var(--accent-color);
      padding-left: 12px;
      letter-spacing: 0.4px;
    }

    section p, section ul {
      font-size: 1.1rem;
      color: #333;
    }

    footer {
      background-color: var(--primary-color);
      color: var(--white);
      text-align: center;
      padding: 20px 0;
      font-size: 0.9rem;
      letter-spacing: 0.4px;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }
      main {
        margin: 20px 10px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Dinas Perdagangan dan Perindustrian</h1>
    <p>Bagian Industri</p>
  </header>

  <main>
    <section>
      <h2>Visi</h2>
      <p>
        Mewujudkan industri yang berdaya saing, inovatif, dan berkelanjutan demi mendukung pertumbuhan ekonomi daerah yang inklusif dan ramah lingkungan.
      </p>
    </section>

    <section>
      <h2>Misi</h2>
      <ul>
        <li>Mendorong pengembangan industri kecil dan menengah yang kompetitif.</li>
        <li>Memfasilitasi inovasi teknologi dan peningkatan kualitas produk industri.</li>
        <li>Meningkatkan daya saing sumber daya manusia di sektor industri.</li>
        <li>Mendukung penerapan standar lingkungan dalam kegiatan industri.</li>
        <li>Memperkuat kemitraan antara pemerintah, pelaku industri, dan masyarakat.</li>
      </ul>
    </section>

    <section>
      <h2>Tentang Kami</h2>
      <p>
        Dinas Perdagangan dan Perindustrian Bagian Industri bertanggung jawab dalam pengembangan dan pengawasan kegiatan industri di wilayah kami. Kami berkomitmen untuk menciptakan lingkungan bisnis yang kondusif bagi pelaku industri dengan memberikan dukungan teknis, informasi, dan pelatihan yang diperlukan. Melalui kolaborasi yang erat dengan berbagai pihak, kami berupaya mendorong pertumbuhan industri yang inovatif dan berkelanjutan demi kemajuan ekonomi daerah.
      </p>
    </section>
  </main>

  <footer>
    &copy; <?= date("Y") ?> Dinas Perdagangan dan Perindustrian - Bagian Industri. All rights reserved.
  </footer>
</body>
</html>
