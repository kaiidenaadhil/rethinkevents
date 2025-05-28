<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Clients</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet"/>
  <style>
    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #121212;
      color: #eee;
    }

    /* === HERO === */
    .page-hero {
      position: relative;
      height: 50vh;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.7), rgba(30,30,30,0.85)),
        url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1470&q=80')
        center center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 40px 20px;
    }

    .page-hero .content {
      position: relative;
      z-index: 2;
      max-width: 800px;
    }

    .page-hero h1 {
      font-size: 2.8rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      color: #fff;
      flex-wrap: wrap;
    }

    .page-hero h1 i {
      font-size: 2.2rem;
      color: #ff9800;
    }

    .page-hero h1 span {
      background: #ff9800;
      color: #1e1e1e;
      padding: 6px 14px;
      border-radius: 6px;
    }

    .page-hero .subtitle {
      font-size: 1.1rem;
      font-weight: 300;
      max-width: 700px;
      margin: 12px auto 0;
      color: #ddd;
    }

    /* === CLIENT SECTION === */
    .client-section {
      padding: 60px 20px;
      background: #1a1a1a;
    }

    .container {
      max-width: 960px;
      margin: auto;
    }

    .client-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .client-title span {
      color: #ff9800;
    }

    .client-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      justify-items: center;
      align-items: center;
    }

    .client-card {
      background: #1e1e1e;
      border: 1px solid #2a2a2a;
      border-radius: 10px;
      padding: 30px 20px;
      text-align: center;
      width: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .client-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
    }

    .client-card img {
      width: 100%;
      height: 60px;
      object-fit: contain;
      display: block;
    }

    .no-events {
      color: #bbb;
      text-align: center;
      font-size: 1.1rem;
      padding: 20px;
    }

    @media (max-width: 768px) {
      .client-grid {
        grid-template-columns: 1fr;
      }

      .page-hero h1 {
        font-size: 2rem;
        flex-direction: column;
      }

      .client-title {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>

<!-- === HERO SECTION === -->
<section class="page-hero">
  <div class="content">
    <h1><i class="uil uil-users-alt"></i> <span>Our</span> Clients</h1>
    <p class="subtitle">We’re proud to have worked with these amazing partners.</p>
  </div>
</section>

<!-- === CLIENT LOGOS === -->
<section class="client-section">
  <div class="container">
    <h2 class="client-title">Trusted <span>Partners</span></h2>
    <div class="client-grid">
      <?php if (!empty($clients)): ?>
        <?php foreach ($clients as $index => $client): 
          $mediaPath = ASSETS . '/img/uploads/' . $client->clientImage;
        ?>
          <div class="client-card">
            <img src="<?= $mediaPath ?>" alt="<?= htmlspecialchars($client->clientName) ?>">
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="no-events">No Clients Found</div>
      <?php endif; ?>
    </div>
  </div>
</section>

</body>
</html>
