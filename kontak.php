<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak Kami</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --dark-green: #414e8a;
      --light-green: #bec0d6;
      --white: #ffffff;
      --grey: #f9f9f9;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: var(--grey);
      color: var(--dark-green);
    }

    header {
      background-color: var(--dark-green);
      color: var(--white);
      padding: 2rem 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .container {
      max-width: 800px;
      margin: 3rem auto;
      background-color: var(--white);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    h2 {
      color: var(--dark-green);
      margin-bottom: 1rem;
      font-size: 1.8em;
      border-bottom: 2px solid var(--light-green);
      padding-bottom: 5px;
    }

    .info p {
      font-size: 1.1em;
      margin: 1rem 0;
      padding-left: 12px;
      border-left: 5px solid var(--dark-green);
      background: var(--light-green);
      padding: 10px 14px;
      border-radius: 8px;
    }

    .info span {
      font-weight: 600;
      display: inline-block;
      width: 130px;
      color: var(--dark-green);
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      font-size: 0.9em;
      background-color: var(--dark-green);
      color: var(--white);
      margin-top: 4rem;
      border-top: 4px solid #1d6e6e;
    }

    @media (max-width: 600px) {
      .info span {
        display: block;
        width: auto;
        margin-bottom: 4px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Kontak Layanan Dinas</h1>
  </header>

  <div class="container">
    <h2>Hubungi Kami</h2>
    <div class="info">
      <p><span>Alamat:</span> Jl. K.H Wahid Hasyim Nomor 143, Jombang, 61411</p>
      <p><span>Telepon:</span> 085608467500</p>
      <p><span>Email:</span> disdagrin@jombangkab.go.id</p>
      <p><span>Jam Layanan:</span> Senin – Kamis, 08.00 – 15.00 WIB | Jumat, 08.00 – 14.00 WIB</p>

    </div>
  </div>

  <footer>
    &copy; 2025 Dinas Perindustrian dan Perdagangan Jombang | Bidang Industri.
  </footer>

</body>
</html>
