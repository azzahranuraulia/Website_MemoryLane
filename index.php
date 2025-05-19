<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      background-image: url('home.jpg'); /* langsung pakai home.jpg */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }

    .btn-masuk {
      position: absolute;
      top: 63%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 24px 50px;
      background-color: #cbe2db;
      color: #333;
      text-decoration: none;
      font-weight: bold;
      border-radius: 16px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
      border: none;
      font-size: 22px;
      cursor: pointer;
      letter-spacing: 0.7px;
    }

    .btn-masuk:hover {
      background-color: #a7cbbf;
      transform: translate(-50%, -50%) scale(1.1);
    }

    .hamburger {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 30px;
      height: 22px;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      z-index: 1001;
    }

    .hamburger span {
      display: block;
      height: 4px;
      background-color: #6d4c41;
      border-radius: 2px;
    }

    .side-panel {
      position: fixed;
      top: 0;
      right: -100%;
      width: 60%;
      height: 100%;
      background-color: #fff;
      box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
      padding: 30px 25px;
      transition: right 0.4s ease;
      z-index: 1000;
      overflow-y: auto;
    }

    .side-panel.active {
      right: 0;
    }

    .side-panel h2 {
      margin-top: 0;
      color: #6d4c41;
      font-size: 22px;
      border-bottom: 2px solid #ffcc80;
      padding-bottom: 5px;
    }

    .side-panel p {
      color: #444;
      line-height: 1.7;
      font-size: 15px;
      margin-bottom: 15px;
    }

    .side-panel .btn-about {
      display: inline-block;
      background-color: #cbe2db;
      color: #333;
      font-weight: bold;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s;
      margin-top: 20px;
    }

    .side-panel .btn-about:hover {
      background-color: #b0ccc3;
    }

    .close-panel {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 22px;
      font-weight: bold;
      color: #999;
      cursor: pointer;
    }

    .close-panel:hover {
      color: #333;
    }

    /* Responsif */
    @media (max-width: 1024px) {
      .hamburger {
        right: 15px;
      }

      .side-panel {
        width: 70%;
      }

      .btn-masuk {
        font-size: 20px;
        padding: 20px 40px;
      }

      .side-panel h2 {
        font-size: 20px;
      }

      .side-panel p {
        font-size: 14px;
      }
    }

    @media (max-width: 600px) {
      .btn-masuk {
        font-size: 18px;
        padding: 18px 35px;
      }

      .side-panel {
        width: 80%;
      }

      .side-panel h2 {
        font-size: 18px;
      }

      .side-panel p {
        font-size: 13px;
      }
    }
  </style>
</head>
<body>

  <form method="post" action="beranda.php">
    <button type="submit" class="btn-masuk">Masuk</button>
  </form>

  <div class="hamburger" onclick="togglePanel()">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="side-panel" id="sidePanel">
    <div class="close-panel" onclick="togglePanel()">&times;</div>
    <h2>✨ Tentang Memorylane</h2>
    <p><strong>Memorylane</strong> adalah usaha jasa cetak <strong>Polaroid</strong> dan <strong>Photostrip</strong> yang memberikan cara unik untuk mengabadikan momen berharga dalam kehidupan. Di Memorylane, kami percaya bahwa setiap foto adalah cerita yang layak dicetak dan dibingkai dengan penuh cinta.</p>

    <p>Dengan hasil cetakan yang berkualitas tinggi, tampilan visual yang estetik, dan harga yang ramah di kantong, <strong>Memorylane</strong> cocok menjadi pilihan untuk berbagai keperluan, mulai dari hadiah istimewa, dekorasi kamar, hingga koleksi pribadi penuh kenangan.</p>

    <p>✨ <strong>Harga:</strong> 
      <br>Cetak <strong>1 foto Polaroid</strong> hanya <strong>Rp500</strong>, 
      <br>Sementara <strong>1 Photostrip</strong> (isi 3 foto lucu) hanya <strong>Rp3.000</strong>. 
      <br>Dengan berbagai pilihan <strong>frame lucu</strong> yang bisa disesuaikan dengan tema atau gaya kamu!
    </p>

    <p>Kami memiliki berbagai desain <strong>frame unik, lucu, dan warna-warni</strong> yang dapat kamu pilih sesuai selera, mulai dari tema minimalis, retro, hingga pastel yang gemesin! Setiap desain kami buat dengan sepenuh hati untuk memberikan sentuhan personal yang istimewa pada setiap momen yang kamu abadikan.</p>

    <p>Didirikan oleh tim muda yang penuh kreativitas: <strong>Azzahra</strong>, <strong>Aufaa</strong>, <strong>Raisa</strong>, dan <strong>Zahran</strong>. Kami berkomitmen memberikan hasil cetakan terbaik dan pelayanan yang ramah untuk setiap pelanggan.</p>

    <p>Ayo, abadikan kenangan kamu di <strong>Memorylane</strong> — karena setiap momen pantas untuk dikenang dan setiap kenangan layak dibingkai indah! ❤️</p>
    <a href="abouts.php" class="btn-about">Lihat lebih lanjut tentang kami</a>
  </div>

  <script>
    function togglePanel() {
      document.getElementById("sidePanel").classList.toggle("active");
    }
  </script>

</body>
</html>
