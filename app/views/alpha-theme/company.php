
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Carousel</title>
  <style>
    body {
      margin: 0;
      background-color: #1a1a1a;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }

    .carousel-section {
      padding: 60px 20px;
      text-align: center;
    }

    .carousel-section h2 {
      font-size: 28px;
      margin-bottom: 30px;
      color: #f5f5f5;
    }

    .carousel-wrapper {
      display: flex;
      flex-direction: column;
      gap: 20px;
      overflow: hidden;
    }

    .carousel-row {
      display: flex;
      animation: scroll 25s linear infinite;
      gap: 40px;
    }

    .carousel-row.reverse {
      animation-direction: reverse;
    }

    .client-item {
      display: flex;
      align-items: center;
      background: rgba(255,255,255,0.05);
      border-radius: 10px;
      padding: 8px 20px;
      min-width: 320px;
      max-width: 100%;
      white-space: nowrap;
    }

    .client-item img {
      height: 40px;
      width: auto;
      margin-right: 15px;
    }

    .client-name {
      font-size: 14px;
      color: #eee;
      text-align: left;
    }

    @keyframes scroll {
      from { transform: translateX(100%); }
      to   { transform: translateX(-100%); }
    }

    @media (max-width: 600px) {
      .client-item {
        min-width: 250px;
        padding: 6px 12px;
      }

      .client-name {
        font-size: 12px;
      }

      .carousel-section h2 {
        font-size: 22px;
      }
    }
  </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Logo Carousel</title>
  <style>
    body {
      margin: 0;
      background: #1a1a1a;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }

    .carousel-section {
      padding: 60px 20px;
      text-align: center;
    }

    .carousel-section h2 {
      font-size: 28px;
      margin-bottom: 30px;
      color: #f5f5f5;
    }

    .carousel-wrapper {
      display: flex;
      flex-direction: column;
      gap: 25px;
      overflow: hidden;
    }

    .carousel-row {
      display: flex;
      gap: 40px;
      animation: scroll 25s linear infinite;
    }

    .carousel-row.reverse {
      animation-direction: reverse;
    }

    .carousel-row:hover {
      animation-play-state: paused;
    }

    .client-item {
      min-width: 320px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .client-item img {
      height: 50px;
      width: auto;
      filter: brightness(0.95);
      transition: transform 0.3s;
    }

    .client-item:hover img {
      transform: scale(1.05);
      filter: brightness(1);
    }

    @keyframes scroll {
      from { transform: translateX(100%); }
      to   { transform: translateX(-100%); }
    }

    @media (max-width: 600px) {
      .carousel-section h2 {
        font-size: 22px;
      }

      .client-item {
        min-width: 220px;
      }

      .client-item img {
        height: 40px;
      }
    }
  </style>
</head>
<body>

<section class="carousel-section">
  <h2>Our Trusted Clients</h2>

  <div class="carousel-wrapper">
    <!-- Row 1 -->
    <div class="carousel-row">
      <div class="client-item">
        <img src="<=ASSETS?>/img/clients/1.jpg" alt="Embassy Bangladesh Vienna">
      </div>
      <div class="client-item">
        <img src="https://i.imgur.com/dZqI3XL.png" alt="Ministry Liberation War Affairs">
      </div>
      <div class="client-item">
        <img src="https://i.imgur.com/CkNmd9H.png" alt="Supreme Court BD">
      </div>
      <!-- Repeat for loop effect -->
      <div class="client-item">
        <img src="https://i.imgur.com/bTzqnVT.png" alt="Embassy Bangladesh Vienna">
      </div>
    </div>

    <!-- Row 2 (reverse direction) -->
    <div class="carousel-row reverse">
      <div class="client-item">
        <img src="https://i.imgur.com/dZqI3XL.png" alt="Ministry Liberation War Affairs">
      </div>
      <div class="client-item">
        <img src="https://i.imgur.com/CkNmd9H.png" alt="Supreme Court BD">
      </div>
      <div class="client-item">
        <img src="https://i.imgur.com/bTzqnVT.png" alt="Embassy Bangladesh Vienna">
      </div>
      <!-- Repeat -->
      <div class="client-item">
        <img src="https://i.imgur.com/dZqI3XL.png" alt="Ministry Liberation War Affairs">
      </div>
    </div>
  </div>
</section>

</body>
</html>
