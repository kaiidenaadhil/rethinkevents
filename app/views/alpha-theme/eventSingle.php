<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Event Single Page</title>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <style>
    :root {
      --primary: #ffcc00;
      --dark: #111;
      --light: #f4f4f4;
      --white: #fff;
      --transition: all 0.3s ease;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: var(--light);
      color: var(--dark);
    }

    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?=ASSETS?>/img/uploads/<?=$event->eventFeatureImage?>') center/cover no-repeat;
      padding: 80px 20px;
      color: var(--white);
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2rem;
    }

    .container {
      max-width: 1140px;
      margin: auto;
      padding: 40px 20px;
    }

    .section {
      background: var(--white);
      padding: 30px;
      border-radius: 16px;
      margin-bottom: 40px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .section h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .event-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
    }

    .event-info div {
      background: #fafafa;
      padding: 15px;
      border-left: 5px solid var(--primary);
      border-radius: 8px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      cursor: pointer;
      transition: var(--transition);
    }

    .gallery img:hover {
      transform: scale(1.03);
    }

    /* Lightbox */
    #lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.85);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    #lightbox-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #lightbox-img {
      max-height: 70vh;
      border-radius: 12px;
    }

    .lightbox-controls {
      margin-top: 20px;
      display: flex;
      align-items: center;
      gap: 20px;
      color: #fff;
      font-size: 1.2rem;
    }

    .lightbox-controls button {
      background: var(--primary);
      border: none;
      padding: 10px 18px;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: var(--transition);
    }

    .lightbox-controls button:hover {
      background: #e6b800;
    }

    .close-btn {
      position: absolute;
      top: -50px;
      right: -10px;
      font-size: 2rem;
      color: #fff;
      cursor: pointer;
    }

    .close-btn:hover {
      color: var(--primary);
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>

  <!-- Hero -->
  <div class="hero">
    <h1><i class="uil uil-calendar-alt"></i> <?= htmlspecialchars($event->eventTitle) ?></h1>
    <p><?= nl2br(htmlspecialchars($event->eventDescription)) ?></p>
  </div>

  <div class="container">

    <!-- Event Info -->
    <div class="section">
      <h2><i class="uil uil-info-circle"></i> Event Details</h2>
      <div class="event-info">
        <div><strong>Venue:</strong><?= htmlspecialchars($event->location) ?></div>
        <div><strong>Organized by:</strong> <?= htmlspecialchars($event->organisedBy) ?></div>
        <div><strong>Date:</strong> <?= htmlspecialchars($event->eventCreatedAt) ?></div>
        <div><strong>Time:</strong> <?= htmlspecialchars($event->eventCreatedAt) ?></div>
      </div>
    </div>

    <!-- Gallery -->
    <div class="section">
      <h2><i class="uil uil-images"></i> Event Gallery</h2>
      <div class="gallery" id="gallery">
        <?php foreach ($galleries as $gallery): ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars($gallery->galleryMedia) ?>" alt="Gallery Image" width="200" />

        <?php endforeach; ?>

      </div>
    </div>
<a href="<?= ROOT ?>/past-events" style="
  display: inline-block;
  margin-top: 20px;
  background: var(--primary);
  color: var(--dark);
  padding: 10px 18px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  transition: var(--transition);
">
  <i class="uil uil-arrow-left"></i> Back to Events
</a>

  </div>

  <!-- Lightbox -->
  <div id="lightbox">
    <div id="lightbox-content" onclick="event.stopPropagation()">
      <span class="close-btn" onclick="closeLightbox()"><i class="uil uil-times-circle"></i></span>
      <img id="lightbox-img" src="" alt="Preview" />
      <div class="lightbox-controls">
        <button onclick="prevImage()"><i class="uil uil-angle-left"></i> Prev</button>
        <span id="image-counter">1 of 4</span>
        <button onclick="nextImage()">Next <i class="uil uil-angle-right"></i></button>
      </div>
    </div>
  </div>

  <script>
    const images = [...document.querySelectorAll('.gallery img')];
    const lightbox = document.getElementById('lightbox');
    const lightboxContent = document.getElementById('lightbox-content');
    const lightboxImg = document.getElementById('lightbox-img');
    const counter = document.getElementById('image-counter');
    let currentIndex = 0;

    images.forEach((img, index) => {
      img.addEventListener('click', () => {
        currentIndex = index;
        openLightbox();
      });
    });

    function openLightbox() {
      lightbox.style.display = 'flex';
      updateLightbox();
    }

    function closeLightbox() {
      lightbox.style.display = 'none';
    }

    function updateLightbox() {
      lightboxImg.src = images[currentIndex].src;
      counter.textContent = `${currentIndex + 1} of ${images.length}`;
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      updateLightbox();
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      updateLightbox();
    }

    // Close when clicking outside the content
    lightbox.addEventListener('click', () => {
      closeLightbox();
    });

    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') nextImage();
      if (e.key === 'ArrowLeft') prevImage();
    });
  </script>
</body>

</html>