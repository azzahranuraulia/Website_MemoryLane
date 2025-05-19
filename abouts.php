<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>abouts</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #fef6e4, #fff0f3);
      font-family: 'Poppins', sans-serif;
      text-align: center;
      color: #5e548e;
    }

    h1 {
      font-size: 34px;
      color: #9b5de5;
      margin-top: 50px;
      font-weight: 700;
    }

    .team-title {
      font-size: 24px;
      font-weight: 600;
      color: #f28482;
      margin-bottom: 40px;
      border-bottom: 2px dashed #fbc4ab;
      display: inline-block;
      padding-bottom: 10px;
    }

    .team-buttons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding-bottom: 60px;
      margin-top: 40px;
    }

    .team-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 200px;
      animation: fadeInUp 1s ease forwards;
    }

    .team-button {
      width: 180px;
      height: 180px;
      background-color: #fff;
      border: 2px solid #fcd5ce;
      border-radius: 16px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .team-button:hover {
      transform: scale(1.07);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .team-button img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .bio-button {
      background-color: #ffb5a7;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 15px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .bio-button:hover {
      background-color: #f28482;
    }

    .btn-kembali {
      position: fixed;
      top: 20px;
      left: 20px;
      font-size: 28px;
      cursor: pointer;
      background: none;
      border: none;
      color: #6d6875;
      transition: color 0.3s ease;
      z-index: 1000;
    }

    .btn-kembali:hover {
      color: #b5838d;
    }

    .quote-section {
      margin-top: 40px;
      padding: 20px;
      font-size: 20px;
      font-style: italic;
      color: #6d6875;
      background-color: #fff0f3;
    }

    .wave {
      margin-top: -20px;
    }

    .wave svg {
      display: block;
      width: 100%;
      height: auto;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .team-buttons {
        flex-direction: column;
        align-items: center;
        gap: 30px;
      }

      .team-button {
        width: 150px;
        height: 150px;
      }

      .quote-section {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <form method="post" action="home.php">
    <button type="submit" class="btn-kembali">↩️</button>
  </form>

  <h1>Kenali Tim Kami!</h1>
  <div class="team-title">Tim dari Memorylane</div>

  <div class="team-buttons">
    <div class="team-item">
      <div class="team-button">
        <img src="azzahra.jpg" alt="Azzahra">
      </div>
      <a href="azzahra.php" class="bio-button">Tentang Azzahra</a>
    </div>

    <div class="team-item">
      <div class="team-button">
        <img src="aufaa.jpg" alt="Aufaa">
      </div>
      <a href="aufaa.php" class="bio-button">Tentang Aufaa</a>
    </div>

    <div class="team-item">
      <div class="team-button">
        <img src="raisa.jpg" alt="Raisa">
      </div>
      <a href="raisa.php" class="bio-button">Tentang Raisa</a>
    </div>

    <div class="team-item">
      <div class="team-button">
        <img src="zahran.jpg" alt="Zahran">
      </div>
      <a href="zahran.php" class="bio-button">Tentang Zahran</a>
    </div>
  </div>

  <div class="quote-section">
    📷 "Setiap foto punya cerita. Di Memorylane, kami bantu kamu menyimpannya selamanya." 💖
  </div>

  <div class="wave">
    <svg viewBox="0 0 1440 320"><path fill="#fcd5ce" fill-opacity="1" d="M0,256L60,224C120,192,240,128,360,128C480,128,600,192,720,197.3C840,203,960,149,1080,122.7C1200,96,1320,96,1380,96L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </div>

</body>
</html>
