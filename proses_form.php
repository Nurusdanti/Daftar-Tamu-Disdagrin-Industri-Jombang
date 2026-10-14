<?php
session_start();
include 'db.php'; // koneksi database

// Ambil data dari form
$email = $_POST['email'];
$nama = $_POST['nama'];
$phone = $_POST['phone'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$jenis_ikm = $_POST['jenis_ikm'];
$keperluan = $_POST['keperluan'];
$file = $_FILES['file']['name'];
$tmp_file = $_FILES['file']['tmp_name'];

// Upload file
$upload_dir = "uploads/";
move_uploaded_file($tmp_file, $upload_dir . $file);

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO form 
    (email, tanggal, nama, phone, alamat, jenis_ikm, ikm_type_other, keperluan, purpose_other, file_path) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $email, $tanggal, $nama, $phone, $alamat, $jenis_ikm, $ikm_type_other, $keperluan, $purpose_other, $file_path);

if ($stmt->execute()) {
    // Kirim pesan WhatsApp
    $api_url = 'https://sby.wablas.com/api/send-message'; // ✅ GANTI URL DENGAN YANG BENAR
    $token = 'hemAG3tKyW4KI5ksHkU1BSEfa0JtkRKeHTOQPx8qHhVfY4FLIJo7NfwU'; // ✅ GANTI DENGAN API KEY DARI WABLAS

    $pesan = "Halo $nama, terima kasih telah mengisi form layanan industri. Petugas akan segera menghubungi Anda.";

    $data = [
        'phone' => preg_replace('/^0/', '62', $phone), // ubah 08222 menjadi 628222
        'message' => $pesan,
        'secret' => false,
        'priority' => false
    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => [
            "Authorization: $token"
        ],
    ]);
    $response = curl_exec($curl);
    curl_close($curl);

    echo "<pre>";
print_r($response);
echo "</pre>";
exit;


    $_SESSION['messages'][] = ['text' => 'Data berhasil disimpan dan notifikasi terkirim!', 'category' => 'success'];
    header("Location: thankyou.php");
    exit();
} else {
    $_SESSION['messages'][] = ['text' => 'Gagal menyimpan data!', 'category' => 'danger'];
    header("Location: form.php");
    exit();
}
