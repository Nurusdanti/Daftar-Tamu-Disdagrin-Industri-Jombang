<?php
require 'db.php';
$members = mysqli_query($conn, "SELECT * FROM tim ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tim Kami</title>
    <link rel="stylesheet" href="static/tim.css">
</head>
<body>
<div class="container">
    <h1 class="title">Tim Bidang Industri</h1>
    <div class="team-grid">
        <?php while ($member = mysqli_fetch_assoc($members)): ?>
            <div class="card">
                <img src="admin/static/img/<?= htmlspecialchars($member['foto']) ?>" alt="<?= htmlspecialchars($member['nama']) ?>">
                <h3><?= htmlspecialchars($member['nama']) ?></h3>
                <p><?= htmlspecialchars($member['jabatan']) ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>
