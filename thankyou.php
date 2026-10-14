<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Terima Kasih</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --blue-soft: #487a96;
            --blue-medium: #80cfff;
            --blue-dark: #0a2a43;
            --accent-color: #003f79;
            --accent-dark: #003f79;
            --text-dark: #0d1b2a;
            --text-muted: #555;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--blue-soft), var(--blue-medium));
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: var(--text-dark);
        }

        .page {
            background-color: rgb(226, 230, 235);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        .page img {
            width: 150px;
            margin-bottom: 20px;
        }

        h2 {
            color: var(--blue-dark);
            font-size: 28px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        button {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--accent-dark);
        }

        a {
            text-decoration: none;
        }

        @media (max-width: 500px) {
            .page {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <img src="static/logo-kabupaten.png" alt="Terima Kasih">
        <h2>Terima Kasih!</h2>
        <p>Formulir Anda telah berhasil dikirim. Kami akan segera memproses permintaan Anda.</p>
        <a href="form.php"><button>Kembali ke Formulir</button></a>
        <a href="index.php"><button>Ke Beranda</button></a>
    </div>
</body>
</html>
