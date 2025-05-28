<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Unified Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
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
      min-height: 70vh;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.75), rgba(30,30,30,0.85)),
        url('https://images.unsplash.com/photo-1523217582562-09d0def993a6?auto=format&fit=crop&w=1470&q=80')
        center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 60px 20px;
    }

    .page-hero .content {
      max-width: 900px;
      z-index: 2;
    }

    .page-hero h1 {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 14px;
      color: #fff;
    }

    .page-hero h1 i {
      font-size: 2.8rem;
      color: #ff9800;
    }

    .page-hero h1 span {
      background: #ff9800;
      color: #1e1e1e;
      padding: 6px 14px;
      border-radius: 6px;
    }

    .page-hero .subtitle {
      font-size: 1.2rem;
      font-weight: 300;
      color: #ddd;
      max-width: 700px;
      margin: 0 auto;
    }

    /* === GALLERY SECTION === */
    .gallery-section {
      padding: 50px 20px;
    }

    .gallery-title {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .gallery-title span {
      color: #ff9800;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
    }

    .card {
      position: relative;
      background: #000;
      overflow: hidden;
      border-radius: 14px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 10px 25px rgba(0,0,0,0.7);
    }

    .card img,
    .card video {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.7);
      opacity: 0;
      transition: opacity 0.3s ease;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .card:hover .overlay {
      opacity: 1;
    }

    .overlay h3 {
      font-size: 1rem;
      margin: 4px 0;
    }

    .overlay p {
      font-size: 0.85rem;
      opacity: 0.9;
    }

    /* === MODAL === */
    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.92);
      justify-content: center;
      align-items: center;
      z-index: 1000;
      flex-direction: column;
      padding: 30px;
    }

    .modal-media {
      width: 90%;
      max-width: 900px;
      max-height: 70vh;
      object-fit: contain;
      border-radius: 8px;
    }

    .controls {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-top: 20px;
    }

    .controls button {
      background: #fff;
      color: #111;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: background 0.3s;
    }

    .controls button:hover {
      background: #ff9800;
      color: #000;
    }

    .close {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 32px;
      cursor: pointer;
      color: #fff;
    }

    .close:hover {
      color: #ff9800;
    }

    @media (max-width: 768px) {
      .page-hero h1 {
        font-size: 2.2rem;
        flex-direction: column;
        gap: 10px;
      }

      .page-hero h1 i {
        font-size: 2rem;
      }

      .gallery-title {
        font-size: 2rem;
      }

      .modal-media {
        max-height: 50vh;
      }
    }
  </style>
</head>
<body>

<!-- HERO -->
<section class="page-hero">
  <div class="content">
    <h1>
      <i class="uil uil-images"></i>
      <span>Unified</span> Gallery
    </h1>
    <p class="subtitle">
      A collection of our best media moments — curated for impact and inspiration.
    </p>
  </div>
</section>

<!-- GALLERY -->
<section class="gallery-section">
  <h2 class="gallery-title">Our <span>Showcase</span></h2>
  <div class="gallery" id="gallery">
    <?php if (!empty($galleries)): ?>
      <?php foreach ($galleries as $index => $gallery):
        $mediaPath = ASSETS . '/img/uploads/' . $gallery->galleryMedia;
        $extension = pathinfo($gallery->galleryMedia, PATHINFO_EXTENSION);
        $videoExtensions = ['mp4', 'webm', 'ogg'];
        $type = in_array(strtolower($extension), $videoExtensions) ? 'video' : 'image';
      ?>
        <div class="card"
             data-index="<?= $index ?>"
             data-type="<?= $type ?>"
             data-src="<?= htmlspecialchars($mediaPath) ?>"
             data-title="<?= htmlspecialchars($gallery->caption) ?>"
             data-desc="<?= htmlspecialchars($gallery->caption) ?>">
          <?php if ($type === 'image'): ?>
            <img src="<?= $mediaPath ?>" alt="<?= htmlspecialchars($gallery->caption) ?>">
          <?php else: ?>
            <video src="<?= $mediaPath ?>" muted autoplay loop></video>
          <?php endif; ?>
          <div class="overlay">
            <i class="uil uil-search-plus"></i>
            <h3><?= htmlspecialchars($gallery->caption) ?></h3>
            <p><?= htmlspecialchars($gallery->caption) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div style="text-align: center; margin-top: 40px;">No gallery media found.</div>
    <?php endif; ?>
  </div>
</section>

<!-- MODAL -->
<div class="modal" id="modal">
  <i class="uil uil-times close" onclick="closeModal()"></i>
  <div id="modal-content">
    <h2 id="modal-title"></h2>
    <p id="modal-desc"></p>
    <div id="media-container"></div>
    <div class="controls">
      <button onclick="prevImg()"><i class="uil uil-arrow-left"></i> Prev</button>
      <span id="counter">1 / 1</span>
      <button onclick="nextImg()">Next <i class="uil uil-arrow-right"></i></button>
    </div>
  </div>
</div>

<script>
const cards = Array.from(document.querySelectorAll('.card'));
const galleryData = cards.map(card => ({
  type: card.dataset.type,
  src: card.dataset.src,
  title: card.dataset.title,
  desc: card.dataset.desc
}));

const modal = document.getElementById('modal');
const modalTitle = document.getElementById('modal-title');
const modalDesc = document.getElementById('modal-desc');
const mediaContainer = document.getElementById('media-container');
const counter = document.getElementById('counter');
let currentIndex = 0;

cards.forEach((card, index) => {
  card.addEventListener('click', () => openModal(index));
});

function openModal(index) {
  currentIndex = index;
  updateModal();
  modal.style.display = 'flex';
}

function updateModal() {
  const item = galleryData[currentIndex];
  modalTitle.textContent = item.title;
  modalDesc.textContent = item.desc;
  mediaContainer.innerHTML = '';

  const media = document.createElement(item.type === 'image' ? 'img' : 'video');
  media.src = item.src;
  media.className = 'modal-media';
  if (item.type === 'video') {
    media.controls = true;
    media.autoplay = true;
  }
  mediaContainer.appendChild(media);
  counter.textContent = `${currentIndex + 1} / ${galleryData.length}`;
}

function closeModal() {
  modal.style.display = 'none';
  mediaContainer.innerHTML = '';
}

function prevImg() {
  currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length;
  updateModal();
}

function nextImg() {
  currentIndex = (currentIndex + 1) % galleryData.length;
  updateModal();
}

document.addEventListener('keydown', e => {
  if (modal.style.display === 'flex') {
    if (e.key === 'ArrowLeft') prevImg();
    if (e.key === 'ArrowRight') nextImg();
    if (e.key === 'Escape') closeModal();
  }
});
</script>

</body>
</html>
