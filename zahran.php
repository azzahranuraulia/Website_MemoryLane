<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profil Tim Zahran</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #fef6e4, #fff0f3);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: left;
      color: #5e548e;
    }

    .bio-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 85%;
      max-width: 1200px;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 40px;
      animation: fadeIn 1s ease forwards;
    }

    .bio-photo {
      width: 220px;
      height: 220px;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      margin-right: 60px;
      flex-shrink: 0;
    }

    .bio-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .bio-info {
      max-width: 650px;
    }

    .bio-info h2 {
      font-size: 30px;
      color: #f28482;
      margin-bottom: 16px;
    }

    .bio-info p {
      font-size: 17px;
      line-height: 1.7;
      margin-bottom: 16px;
      color: #6d6875;
    }

    .highlight {
      font-weight: bold;
      color: #ff758f;
    }

    .btn-kembali {
      position: fixed;
      top: 20px;
      left: 20px;
      font-size: 30px;
      cursor: pointer;
      background: none;
      border: none;
      color: #6d6875;
      transition: color 0.3s;
      z-index: 1000;
    }

    .btn-kembali:hover {
      color: #b5838d;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .bio-container {
        flex-direction: column;
        padding: 30px 20px;
        text-align: center;
      }

      .bio-photo {
        margin: 0 0 20px 0;
      }

      .bio-info {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <form method="post" action="abouts.php">
    <button type="submit" class="btn-kembali">↩️</button>
  </form>

  <div class="bio-container">
    <div class="bio-photo">
      <img src="zahran.jpg" alt="Zahran">
    </div>

    <div class="bio-info">
      <h2>Muhammad Zahran Safary</h2>
      <p>
        Nama saya <span class="highlight">Muhammad Zahran Safary</span>, dan saya bertanggung jawab di bidang <strong>Promosi Digital & Layanan Pelanggan</strong> di <strong>Memorylane</strong>.
      </p>
      <p>
        Tugas saya meliputi menyusun strategi promosi melalui berbagai platform media sosial seperti Instagram dan WhatsApp. Saya juga bertanggung jawab untuk merespons pesan dan pertanyaan pelanggan secara cepat dan ramah.
      </p>
      <p
