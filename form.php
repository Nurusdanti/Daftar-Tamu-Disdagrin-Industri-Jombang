<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Layanan Industri</title>
    <link rel="stylesheet" href="static/form.css"> <!-- Ganti path sesuai lokasi file CSS -->
    <script>
        function toggleIKMLainnya(select) {
            const otherInput = document.getElementById('ikm-other');
            if (select.value === 'Lainnya') {
                otherInput.style.display = 'block';
            } else {
                otherInput.style.display = 'none';
            }
        }

        function toggleKeperluanLainnya(select) {
            const otherPurpose = document.getElementById('purpose-other');
            if (select.value === 'Lainnya') {
                otherPurpose.style.display = 'block';
            } else {
                otherPurpose.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="page">
        <div class="form-section">
            <h2>Formulir Layanan Industri</h2>

            <!-- Flash Messages (jika pakai session) -->
            <?php
            session_start();
            if (isset($_SESSION['messages'])) {
                foreach ($_SESSION['messages'] as $message) {
                    echo '<div class="alert ' . htmlspecialchars($message['category']) . '">';
                    echo htmlspecialchars($message['text']);
                    echo '</div>';
                }
                unset($_SESSION['messages']); // Hapus setelah ditampilkan
            }
            ?>

            <!-- Form -->
            <form method="POST" enctype="multipart/form-data" action="proses_form.php">
                <div class="form-row">
                    <div class="form-group">
                        <label>Email <span style="color:red">*</span></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal <span style="color:red">*</span></label>
                        <input type="date" name="date" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Lengkap <span style="color:red">*</span></label>
                        <input type="text" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP (WhatsApp) <span style="color:red">*</span></label>
                        <input type="text" name="phone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap <span style="color:red">*</span></label>
                    <input type="text" name="alamat" required>
                </div>

                <div class="form-group">
                    <label>Jenis IKM <span style="color:red">*</span></label>
                    <select name="ikm_type" onchange="toggleIKMLainnya(this)" >
                        <option value="">-- Pilih Jenis IKM --</option>
                        <option>Industri Rumah Tangga</option>
                        <option>Kerajinan Tanah Liat</option>
                        <option>Kerajinan Kayu</option>
                        <option>Kerajinan Konveksi</option>
                        <option>Usaha Kuliner</option>
                        <option>Industri Produk Pertanian</option>
                        <option>Industri Serat Alami</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div id="ikm-other" style="display:none; margin-top: 10px;">
                        <em>Silakan isi di bawah ini terlebih dahulu:</em>
                        <input type="text" name="ikm_type_other">
                    </div>
                </div>

                <div class="form-group">
                    <label>Keperluan <span style="color:red">*</span></label>
                    <select name="purpose" onchange="toggleKeperluanLainnya(this)" >
                        <option value="">-- Pilih Keperluan --</option>
                        <option>Layanan Konsultasi Bisnis</option>
                        <option>Izin Usaha Industri (SIINAS)</option>
                        <option>Sertifikat Halal</option>
                        <option>Sertifikat HKI (Merek dan Hak Cipta)</option>
                        <option>Izin Edar (S-PIRT dan BPOM)</option>
                        <option>Re-design Kemasan</option>
                        <option>Diversifikasi Produk</option>
                        <option>Layanan Akses Pemasaran</option>
                        <option>layanan advokasi dan Pendampingan </option>
                        <option>NIB</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div id="purpose-other" style="display:none; margin-top: 10px;">
                        <em>Silakan isi di bawah ini terlebih dahulu:</em>
                        <textarea name="purpose_other" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload Bukti Pelayanan (Opsional)</label>
                    <input type="file" name="file" accept="image/*" capture="environment">
                </div>

                <div class="form-group">
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
