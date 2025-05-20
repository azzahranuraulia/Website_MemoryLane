<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Photostrip</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      background-color: #fff8e1;
      font-family: 'Poppins', sans-serif;
      overflow-x: auto;
    }

    .btn-kembali {
      position: fixed;
      top: 20px;
      left: 20px;
      font-size: 30px;
      cursor: pointer;
      background: none;
      border: none;
      color: #333;
      transition: color 0.3s;
      z-index: 1000;
    }

    .btn-kembali:hover {
      color: #b0ccc3;
    }

    .btn-keranjang {
      position: fixed;
      bottom: 65px;
      right: 85px;
      font-size: 34px;
      background: none;
      border: none;
      cursor: pointer;
      z-index: 1000;
    }

    .background-image {
      width: 100%;
      max-width: 1920px;
      height: auto;
      display: block;
      margin: 0 auto;
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
  <button class="btn-keranjang" onclick="window.location.href='keranjangphotostrip.php'">🛒</button>

  <!-- Gambar latar photostrip -->
  <img src="photostrip.jpg" alt="Photostrip" class="background-image">

</body>
</html>
