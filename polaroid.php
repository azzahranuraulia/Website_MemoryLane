<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Polaroid</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #fff8e1;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      position: relative;
    }

    .btn-kembali {
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 30px;
      cursor: pointer;
      background: none;
      border: none;
      color: #333;
      transition: color 0.3s;
      z-index: 10;
    }

    .btn-kembali:hover {
      color: #b0ccc3;
    }

    .btn-keranjang {
      position: absolute;
      bottom: 65px;
      right: 85px;
      font-size: 34px;
      background: none;
      border: none;
      cursor: pointer;
      z-index: 10;
      transition: transform 0.3s;
    }

    .btn-keranjang:hover {
      transform: scale(1.2);
    }

    .background-frame {
      position: relative;
      width: 1920px;
      height: 1080px;
      background-image: url('polaroid.jpg');
      background-size: cover;
      background-position: center;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(63, 69, 81, 0.16);
    }
  </style>
</head>
<body>

  <!-- Tombol kembali -->
  <form method="post" action="beranda.php">
    <button type="submit" class="btn-kembali">↩️</button>
  </form>

  <!-- Tombol keranjang -->
  <button class="btn-keranjang" onclick="window.location.href='keranjangpolaroid.php'">🛒</button>

  <!-- Background dari gambar lokal -->
  <div class="background-frame"></div>

</body>
</html>
