

  <!-- === HERO VIDEO SECTION === -->
  <section class="video-section">
    <div class="video-overlay"></div>
    <div class="video-content">
      <h2><?=$campaign[0]->campaignTitle?></h2>
      <p><?=$campaign[0]->campaignSlogan?></p>
      <a href="<?=$campaign[0]->campaignAction?>" class="right-header-action">Get in Touch</a>
    </div>
    <video autoplay muted loop class="background-video">
      <source src="<?=ASSETS?>/img/uploads/<?=$campaign[0]->campaignMedia?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

  <!-- === STATS SECTION === -->
  <section class="stats-section">
    <div class="stats-container">
      <div class="stats-title">
        <h2>Our Stats</h2>
        <p>Take a look at what we’ve achieved so far.</p>
      </div>
      <div class="stats-grid">
        <div class="stat">
          <span class="number" data-target="27">0</span>
          <p>Facilities</p>
        </div>
        <div class="stat">
          <span class="number" data-target="8926">0</span>
          <p>Projects</p>
        </div>
        <div class="stat">
          <span class="number" data-target="583">0</span>
          <p>Clients</p>
        </div>
      </div>
    </div>
  </section>


  


<section class="gallery-section">
<h2 class="headline">Past Events</h2>
  <div class="gallery" id="gallery"></div>
</section>

<!-- MODAL -->
<div class="modal" id="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <div id="modal-content">
    <h2 id="modal-title">Title</h2>
    <p id="modal-desc">Subtitle</p>
    <div id="media-container"></div>
    <div class="controls">
      <button onclick="prevImg()">◀ Prev</button>
      <span id="counter">1 / 1</span>
      <button onclick="nextImg()">Next ▶</button>
    </div>
  </div>
</div>



<section class="team-section">
  <h2 class="headline">OUR TEAM</h2>

  <div class="team-grid">
    <?php foreach ($teams as $member): ?>
      <div class="team-card">
        <div class="avatar-wrapper">
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars($member->profileImage) ?>" alt="<?= htmlspecialchars($member->memberName) ?>">
        </div>
        <h3><?= htmlspecialchars($member->memberName) ?></h3>
        <p><?= htmlspecialchars($member->designation) ?></p>
        <div class="contact-info">
          <span>📧 <?= htmlspecialchars($member->email) ?></span>
          <span>📞 <?= htmlspecialchars($member->mobile) ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<section class="carousel-section">
  <h2 class="headline">Our Trusted Clients</h2>
  <div class="carousel-wrapper">
   
<!-- Row 1 -->
<div class="carousel-row">
  <?php for ($i = 0; $i < min(4, count($clients)); $i++): ?>
    <div class="client-item">
      <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars($clients[$i]->clientImage) ?>" alt="<?= htmlspecialchars($clients[$i]->clientName) ?>">
    </div>
  <?php endfor; ?>
</div>

<!-- Row 2 (reverse direction) -->
<div class="carousel-row reverse">
  <?php for ($i = 4; $i < min(8, count($clients)); $i++): ?>
    <div class="client-item">
      <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars($clients[$i]->clientImage) ?>" alt="<?= htmlspecialchars($clients[$i]->clientName) ?>">
    </div>
  <?php endfor; ?>
</div>


    </div>

</section>






  <!-- === CONTACT SECTION === -->
<section class="contact-form">
  <div class="contact-container">
    <div class="left-panel">
      <h2 class="contact-title">Main Office</h2>
      <p class="highlight">
        House-A1, Flat-3C, Road-01, Block-F,<br>
        Banani, Dhaka, Bangladesh<br>
        Cell: 01923 991360<br>
        Email: rethinkevents.bd@gmail.com
      </p>
    </div>
    <div class="right-panel">
      <h2 class="form-title">ASK US. WE'LL HELP YOU.</h2>
      <form id="askForm" method="post" action="http://localhost:8081/admin/leads/store">
        <div class="form-group">
          <label for="clientName">Client Name</label>
          <input type="text" id="clientName" name="clientName" class="form-input" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-input" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" class="form-input" required>
        </div>
        <div class="form-group">
          <label for="notes">Message</label>
          <textarea id="notes" name="notes" rows="4" class="form-input" required></textarea>
        </div>
        <button type="submit" class="form-button">Submit</button>
      </form>
    </div>
  </div>
</section>













<script>
  const galleryData = <?= json_encode(array_map(function($e) {
    return [
      'type' => 'image', // assuming images only — change if you add video support
      'src' => ASSETS . '/img/uploads/' . $e->eventFeatureImage,
      'title' => $e->eventTitle,
      'desc' => $e->eventDescription,
    ];
  }, $events)); ?>;


  const gallery = document.getElementById('gallery');
  const modal = document.getElementById('modal');
  const modalTitle = document.getElementById('modal-title');
  const modalDesc = document.getElementById('modal-desc');
  const mediaContainer = document.getElementById('media-container');
  const counter = document.getElementById('counter');

  let currentIndex = 0;

  function createGallery() {
    galleryData.forEach((item, index) => {
      const card = document.createElement('div');
      card.className = 'card';

      let mediaTag = '';
      if (item.type === 'image') {
        mediaTag = `<img src="${item.src}" alt="${item.title}">`;
      } else if (item.type === 'video') {
        mediaTag = `<video src="${item.src}" muted autoplay loop></video>`;
      }

      card.innerHTML = `
        ${mediaTag}
        <div class="overlay">
          <h3>${item.title}</h3>
          <p>${item.desc}</p>
        </div>
      `;

      card.addEventListener('click', () => openModal(index));
      gallery.appendChild(card);
    });
  }

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

    let mediaElement;
    if (item.type === 'image') {
      mediaElement = document.createElement('img');
      mediaElement.src = item.src;
    } else if (item.type === 'video') {
      mediaElement = document.createElement('video');
      mediaElement.src = item.src;
      mediaElement.controls = true;
      mediaElement.autoplay = true;
    }

    mediaElement.className = 'modal-media';
    mediaContainer.appendChild(mediaElement);
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

  document.addEventListener('keydown', (e) => {
    if (modal.style.display === 'flex') {
      if (e.key === 'ArrowLeft') prevImg();
      if (e.key === 'ArrowRight') nextImg();
      if (e.key === 'Escape') closeModal();
    }
  });

  createGallery();
</script>







  <!-- === COUNTER SCRIPT === -->
  <script>
    const counters = document.querySelectorAll('.number');
    const statsSection = document.querySelector('.stats-section');
    let started = false;

    const updateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 100;

      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(() => updateCounter(counter), 20);
      } else {
        counter.innerText = target;
      }
    };

    const handleScroll = () => {
      const sectionTop = statsSection.getBoundingClientRect().top;
      if (window.innerHeight - sectionTop > 0 && !started) {
        started = true;
        counters.forEach(counter => updateCounter(counter));
      }
    };

    window.addEventListener('scroll', handleScroll);
  </script>
