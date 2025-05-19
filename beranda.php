<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Poppins', sans-serif;
      background-color: #fff8e1;
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

    .background-frame {
      width: 100%;
      height: 100%;
      background-image: url('beranda.jpg'); /* langsung pakai beranda.jpg */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }

    .button-polaroid,
    .button-photostrip {
      position: absolute;
      padding: 14px 40px;
      font-size: 22px;
      font-weight: bold;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      z-index: 10;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      color: white;
    }

    .button-polaroid {
      top: 530px;
      left: 380px;
      background-color: #fcd2bb;
    }

    .button-polaroid:hover {
      background-color: #fbb08a;
    }

    .button-photostrip {
      top: 530px;
      left: 1345px;
      background-color: #b0ccc3;
    }

    .button-photostrip:hover {
      background-color: #91b7a9;
    }
  </style>
</head>
<body>

  <form method="post" action="home.php">
    <button type="submit" class="btn-kembali">↩️</button>
  </form>

  <div class="background-frame">
    <!-- Tombol Polaroid -->
    <button class="button-polaroid" onclick="window.location.href='polaroid.php'">Polaroid</button>

    <!-- Tombol Photostrip -->
    <button class="button-photostrip" onclick="window.location.href='photostrip.php'">Photostrip</button>
  </div>

</body>
</html>
