<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Past Events Gallery</title>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #1e1e1e;
      color: #eee;
    }

    /* HERO SECTION */
    .page-hero {
      position: relative;
      min-height: 75vh;
      background: url('https://images.unsplash.com/photo-1523217582562-09d0def993a6?auto=format&fit=crop&w=1470&q=80') center center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 60px 20px;
      overflow: hidden;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.75), rgba(30, 30, 30, 0.85));
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 900px;
      color: #fff;
      padding: 0 15px;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 16px;
      line-height: 1.2;
      word-spacing: 2px;
    }

    .hero-content h1 span {
      background: #ff9800;
      color: #1e1e1e;
      padding: 6px 14px;
      border-radius: 8px;
      display: inline-block;
      margin-left: 8px;
    }

    .subtitle {
      font-size: 1.25rem;
      font-weight: 300;
      line-height: 1.7;
      max-width: 700px;
      margin: 0 auto 24px auto;
    }

    .cta-button {
      background: #ff9800;
      color: #1e1e1e;
      padding: 12px 30px;
      border-radius: 32px;
      font-weight: 600;
      text-decoration: none;
      font-size: 1.05rem;
      transition: background 0.3s ease, color 0.3s ease;
      display: inline-block;
    }

    .cta-button:hover {
      background: #ffffff;
      color: #000000;
    }

    /* GALLERY SECTION */
    .gallery-section {
      padding: 40px 20px;
      background: #121212;
      color: #fff;
    }

    .gallery-title {
      font-size: 32px;
      font-weight: 700;
      text-align: center;
      letter-spacing: 0.5px;
    }

    .gallery-title span {
      color: #ff9800;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      padding: 30px 0;
      justify-items: center;
    }

    .card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      background: #000;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
    }

    .card img,
    .card video {
      width: 100%;
      height: 240px;
      object-fit: cover;
      display: block;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      opacity: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      transition: opacity 0.3s ease-in-out;
    }

    .card:hover .overlay {
      opacity: 1;
    }

    .overlay h3 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .overlay p {
      font-size: 13px;
    }

    .view-button {
      margin-top: 12px;
      display: inline-block;
      background: #ff9800;
      color: #1e1e1e;
      padding: 8px 16px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 6px;
      transition: background 0.3s, color 0.3s;
    }

    .view-button:hover {
      background: #fff;
      color: #000;
    }

    /* MODAL (optional) */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.95);
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 40px 20px;
      z-index: 1000;
    }

    .modal-media {
      width: 100%;
      max-width: 960px;
      max-height: 70vh;
      object-fit: contain;
      border-radius: 8px;
    }

    .modal h2,
    .modal p {
      color: #fff;
      margin: 8px 0;
    }

    .controls {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-top: 18px;
    }

    .controls button {
      background: transparent;
      border: 1px solid #fff;
      color: #fff;
      padding: 8px 14px;
      font-size: 15px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .controls button:hover {
      background: #fff;
      color: #000;
    }

    .close {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 36px;
      cursor: pointer;
      color: #fff;
    }

    .close:hover {
      color: #ff9800;
    }

    /* Responsive Adjustments */
    @media (max-width: 1024px) {
      .hero-content h1 {
        font-size: 2.8rem;
      }

      .subtitle {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }

      .subtitle {
        font-size: 1rem;
      }

      .cta-button {
        padding: 10px 22px;
        font-size: 0.95rem;
      }

      .modal-media {
        max-height: 60vh;
      }
    }

    @media (max-width: 480px) {
      .hero-content h1 {
        font-size: 1.8rem;
      }

      .cta-button {
        width: 100%;
        max-width: 300px;
      }
    }
  </style>
</head>

<body>

  <!-- HERO SECTION -->
  <section class="page-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1><span><i class="uil uil-image-v"></i> Past</span> Events</h1>
      <p class="subtitle">
        Relive our finest memories — a curated visual experience of impactful celebrations, connections, and community.
      </p>
      <a href="#gallery" class="cta-button">Explore Gallery</a>
    </div>
  </section>

  <!-- GALLERY SECTION -->
  <section class="gallery-section">
    <h2 class="gallery-title">Rewind Our <span>Moments</span></h2>
    <div class="gallery" id="gallery">
      <?php if (!empty($events)): ?>
        <?php foreach ($events as $index => $event):
          $mediaPath = ASSETS . '/img/uploads/' . $event->eventFeatureImage;
          $extension = pathinfo($event->eventFeatureImage, PATHINFO_EXTENSION);
          $videoExtensions = ['mp4', 'webm', 'ogg'];
          $type = in_array(strtolower($extension), $videoExtensions) ? 'video' : 'image';
        ?>
          <div class="card"
            data-index="<?= $index ?>"
            data-type="<?= $type ?>"
            data-src="<?= htmlspecialchars($mediaPath) ?>"
            data-title="<?= htmlspecialchars($event->eventTitle) ?>"
            data-desc="<?= htmlspecialchars($event->eventDescription) ?>">
            <?php if ($type === 'image'): ?>
              <img src="<?= $mediaPath ?>" alt="<?= htmlspecialchars($event->eventTitle) ?>">
            <?php else: ?>
              <video src="<?= $mediaPath ?>" muted autoplay loop></video>
            <?php endif; ?>

            <div class="overlay">
              <i class="uil uil-search-plus"></i>
              <h3><?= htmlspecialchars($event->eventTitle) ?></h3>
              <p><?= htmlspecialchars($event->eventDescription) ?></p>
              <a href="<?= ROOT ?>/event/<?= htmlspecialchars($event->eventIdentify) ?>" class="view-button">View Event</a>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="no-events">No Events Found</div>
      <?php endif; ?>
    </div>
  </section>

</body>
</html>
