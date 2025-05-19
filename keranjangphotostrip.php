<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $abjad = $_POST['abjad'];
    $frame = $_POST['frame'];
    $link = $_POST['link'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO photostrip (nama, kelas, jurusan, abjad_kelas, frame, link_gdrive, no_hp)
              VALUES ('$nama', '$kelas', '$jurusan', '$abjad', '$frame', '$link', '$no_hp')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Berhasil dipesan! Silakan hubungi admin kami di 083829372000'); window.location.href='photostrip.php';</script>";
    } else {
        echo "<script>alert('Gagal memesan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesan Photostrip</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 40px;
      background: repeating-linear-gradient(
        45deg,
        #fdece6,
        #fdece6 20px,
        #fdf7f4 20px,
        #fdf7f4 40px
      );
      font-family: 'Fredoka', sans-serif;
      color: #555;
    }

    .form-container {
      max-width: 650px;
      margin: auto;
      background-color: #fffdfd;
      border-radius: 18px;
      padding: 40px 30px;
      box-shadow: 8px 8px 0px #ffd6cd;
      border: 2px dashed #ffd8cc;
      position: relative;
    }

    h2 {
      text-align: center;
      color: #ff8b84;
      font-size: 32px;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-top: 16px;
      font-weight: 600;
      color: #ff7070;
    }

    input, select {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      border: 2px solid #fdded9;
      border-radius: 12px;
      background-color: #fff9f9;
      font-size: 16px;
    }

    button {
      margin-top: 25px;
      width: 100%;
      padding: 14px;
      background-color: #ffa5a5;
      color: white;
      border: none;
      border-radius: 14px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(255, 133, 133, 0.3);
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #ff8e8e;
    }

    .kembali {
      position: absolute;
      left: 30px;
      top: 30px;
      font-size: 28px;
      text-decoration: none;
      color: #ff7c7c;
      font-weight: bold;
    }

    p {
      text-align: center;
      margin-top: 30px;
      font-size: 16px;
      color: #6e6e6e;
    }

    a[href*="wa.me"] {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 18px;
      background-color: #76d7c4;
      color: white;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(118, 215, 196, 0.3);
      transition: background-color 0.3s ease;
    }

    a[href*="wa.me"]:hover {
      background-color: #5ac2b2;
    }
  </style>
</head>
<body>

<a class="kembali" href="photostrip.php">↩️</a>

<div class="form-container">
  <h2>Pesan Photostrip</h2>
  <form method="POST">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Kelas:</label>
    <select name="kelas" required>
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
    </select>

    <label>Jurusan:</label>
    <select name="jurusan" required>
      <option value="PPLG">PPLG</option>
      <option value="TJKT">TJKT</option>
      <option value="ATPH">ATPH</option>
      <option value="BR">BR</option>
      <option value="TKI">TKI</option>
      <option value="TEI">TEI</option>
      <option value="AXIOO">AXIOO</option>
      <option value="ORACLE">ORACLE</option>
    </select>

    <label>Abjad Kelas:</label>
    <select name="abjad" required>
      <option value="a">a</option>
      <option value="b">b</option>
      <option value="c">c</option>
    </select>

    <label>Frame Photostrip:</label>
    <select name="frame" required>
      <?php for ($i = 1; $i <= 21; $i++) echo "<option value='frame $i'>Frame $i</option>"; ?>
    </select>

    <label>Link GDrive (Opsional):</label>
    <input type="text" name="link" placeholder="Masukkan link Google Drive jika ada">

    <label>No. HP:</label>
    <input type="text" name="no_hp" required>

    <button type="submit">Kirim Pesanan</button>
  </form>
<p>🖼️ Punya lebih dari satu pilihan frame dan bingung memilih yang mana? Jangan khawatir! <br>
Silakan <strong>langsung hubungi admin kami via WhatsApp</strong> untuk bantu memilih frame yang paling cocok buat kamu. <br>
Klik tombol di bawah ini untuk chat sekarang:</p>
<p>
  <a href="https://wa.me/6283829372000?text=Halo%20admin%20Memorylane%21%20Aku%20lagi%20bingung%20milih%20antara%20dua%20frame%20nih.%20Boleh%20minta%20bantuannya%20dong%20%F0%9F%99%82" 
     target="_blank">
     <strong>klik di sini untuk hubungi admin via WhatsApp</strong>
  </a>
</p>

</div>

</body>
</html>
