<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - Rethink Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #FF6B35;
      --secondary: #00A5E0;
      --dark: #0A0A0A;
      --light: #F5F5F5;
      --overlay: rgba(10, 10, 10, 0.85);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Inter', sans-serif;
      background: var(--dark);
      color: var(--light);
      line-height: 1.6;
    }

    .hero {
      height: 65vh;
      background: linear-gradient(var(--overlay), var(--overlay)), url('<?=ASSETS?>/img/cover.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
    }

    .hero-content {
      max-width: 800px;
      color: #fff;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .hero h1 i {
      color: var(--primary);
      margin-right: 10px;
    }

    .hero p {
      font-size: 1.2rem;
      font-weight: 300;
      color: #ddd;
    }

    .section {
      padding: 5rem 2rem;
    }

    .container {
      max-width: 1100px;
      margin: auto;
    }

    .section-title {
      font-size: 2.5rem;
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background: var(--primary);
      margin: 1rem auto;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 3rem;
    }

    .content-block {
      background: rgba(255, 255, 255, 0.05);
      padding: 2.5rem;
      border-radius: 12px;
      transition: transform 0.3s ease;
    }

    .content-block:hover {
      transform: translateY(-10px);
    }

    .image-wrapper {
      overflow: hidden;
      border-radius: 10px;
    }

    .image-wrapper img {
      width: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .image-wrapper:hover img {
      transform: scale(1.05);
    }

    .highlight {
      color: var(--primary);
      font-weight: 600;
      display: block;
      margin-bottom: 1rem;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
      margin-top: 3rem;
    }

    .value-card {
      text-align: center;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .value-card:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.08);
    }

    .value-icon {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .section {
        padding: 3rem 1rem;
      }
    }
  </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <h1><i class="uil uil-bolt"></i> About <span style="color: var(--primary)">Rethink</span> Events</h1>
    <p>Innovating unforgettable moments through bold strategy, tech, and experience.</p>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Who We Are</h2>
    <div class="grid">
      <div class="content-block">
        <span class="highlight">Young. Visionary. Expert.</span>
        <p>Rethink Events is a Dhaka-based event production powerhouse. We are young but experienced — a team of creators, organizers, and technologists dedicated to turning bold visions into immersive realities.</p>
        <p>From ministerial summits to cultural festivals, we bring professionalism, creativity, and precision to every project.</p>
      </div>
      <div class="image-wrapper">
        <img src="<?=ASSETS?>/img/photo-1.jpg" alt="Event planning team">
      </div>
    </div>
  </div>
</section>

<!-- WHAT WE DO -->
<section class="section" style="background: #1A1A1A;">
  <div class="container">
    <h2 class="section-title">What We Do</h2>
    <div class="values-grid">
      <div class="value-card">
        <i class="fas fa-calendar-check value-icon"></i>
        <h3>Corporate & Social Events</h3>
        <p>Conferences, concerts, weddings, product launches — we do it all.</p>
      </div>
      <div class="value-card">
        <i class="fas fa-lightbulb value-icon"></i>
        <h3>Creative & Design</h3>
        <p>Stage design, branding, 3D visuals and immersive experiences.</p>
      </div>
      <div class="value-card">
        <i class="fas fa-cogs value-icon"></i>
        <h3>Technical Excellence</h3>
        <p>HD video, sound, lighting, projection mapping — fully integrated.</p>
      </div>
      <div class="value-card">
        <i class="fas fa-people-carry value-icon"></i>
        <h3>End-to-End Management</h3>
        <p>We handle everything — from concept to cleanup.</p>
      </div>
    </div>
  </div>
</section>

<!-- OUR CULTURE -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Our Culture</h2>
    <div class="grid">
      <div class="image-wrapper">
        <img src="https://picsum.photos/id/1005/800/600" alt="Team culture">
      </div>
      <div class="content-block">
        <span class="highlight">Teamwork, Trust, Talent</span>
        <p>Our culture is rooted in trust, creativity, and a relentless drive for excellence. We believe in empowering individuals and nurturing a space where ideas turn into action. Our work reflects our values — collaborative, curious, and committed.</p>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="section" style="background: #1A1A1A;">
  <div class="container">
    <h2 class="section-title">Mission & Vision</h2>
    <div class="grid">
      <div class="content-block">
        <span class="highlight">Mission</span>
        <p>To pioneer event experiences that spark connection and cultural impact, combining design, strategy, and tech into unforgettable stories.</p>
        <span class="highlight" style="margin-top: 2rem;">Vision</span>
        <p>To redefine events in Bangladesh and beyond — not just as gatherings, but as transformative human moments.</p>
      </div>
      <div class="image-wrapper">
        <img src="https://picsum.photos/id/1038/800/600" alt="Vision visual">
      </div>
    </div>
  </div>
</section>

</body>
</html>
