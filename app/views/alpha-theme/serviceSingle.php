<!-- service-single.php -->
<style>
  :root {
    --black: #111;
    --white: #fff;
    --ash: #f4f4f4;
    --yellow: #ffcc00;
    --text-dark: #333;
    --transition: all 0.3s ease-in-out;
    --radius: 14px;
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    background: var(--ash);
    color: var(--text-dark);
    line-height: 1.6;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  .hero {
    background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.65)), url('<?=ASSETS?>/img/service-bg.jpg') center/cover no-repeat;
    padding: 100px 20px 70px;
    color: var(--white);
    text-align: center;
  }

  .hero h1 {
    font-size: 3rem;
    margin-bottom: 15px;
  }

  .hero p {
    font-size: 1.2rem;
    max-width: 780px;
    margin: 0 auto;
    opacity: 0.9;
  }

  .container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 60px 20px;
  }

  .section {
    background: var(--white);
    border-radius: var(--radius);
    padding: 40px;
    margin-bottom: 40px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    animation: fadeIn 0.6s ease;
  }

  .section h2 {
    font-size: 2.2rem;
    color: var(--black);
    text-align: center;
    margin-bottom: 20px;
  }

  .section p {
    font-size: 1.1rem;
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
  }

  .feature-grid {
    display: grid;
    gap: 20px;
    margin-top: 40px;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  }

  .feature-item {
    background: var(--white);
    border-left: 5px solid var(--yellow);
    padding: 25px 20px;
    border-radius: var(--radius);
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.03);
    text-align: center;
    transition: var(--transition);
  }

  .feature-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
  }

  .feature-item i {
    color: var(--yellow);
    font-size: 2rem;
    margin-bottom: 12px;
    display: block;
  }

  .feature-item h4 {
    font-size: 1.2rem;
    margin-bottom: 8px;
  }

  .feature-item p {
    font-size: 0.95rem;
    color: #555;
  }

  .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .gallery img {
    width: 100%;
    border-radius: var(--radius);
    height: 200px;
    object-fit: cover;
    transition: var(--transition);
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
  }

  .gallery img:hover {
    transform: scale(1.03);
  }

  .testimonial {
    text-align: center;
    font-style: italic;
    padding: 30px 20px;
    border-left: 5px solid var(--yellow);
    background: var(--white);
    border-radius: var(--radius);
    box-shadow: 0 5px 22px rgba(0, 0, 0, 0.04);
    max-width: 800px;
    margin: 40px auto 0;
  }

  .testimonial span {
    display: block;
    margin-top: 12px;
    font-weight: 600;
    color: var(--black);
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.4rem;
    }

    .section h2 {
      font-size: 1.6rem;
    }

    .feature-item {
      text-align: left;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<!-- Hero Section -->
<section class="hero">
  <h1><i class="uil uil-briefcase-alt"></i> Corporate Events</h1>
  <p>Professional planning and execution for all your business needs, from conferences to award nights.</p>
</section>

<div class="container">

  <!-- Introduction -->
  <section class="section">
    <h2>What We Offer</h2>
    <p>
      Our Corporate Event services are crafted to elevate your brand through seamless execution of business gatherings.
      From conferences, trade shows, to award nights – we manage every detail, allowing you to focus on your goals while we handle the logistics, creativity, and professionalism.
    </p>
  </section>

  <!-- Feature Highlights -->
  <section class="section">
    <h2>Why Choose Us</h2>
    <div class="feature-grid">
      <div class="feature-item">
        <i class="uil uil-presentation-check"></i>
        <h4>Flawless Execution</h4>
        <p>Our team ensures your event goes off without a hitch, from start to finish.</p>
      </div>
      <div class="feature-item">
        <i class="uil uil-users-alt"></i>
        <h4>Experienced Crew</h4>
        <p>Professional planners, designers, and coordinators with years of experience.</p>
      </div>
      <div class="feature-item">
        <i class="uil uil-bill"></i>
        <h4>Transparent Pricing</h4>
        <p>Honest pricing with detailed breakdowns — no hidden surprises.</p>
      </div>
      <div class="feature-item">
        <i class="uil uil-trophy"></i>
        <h4>Trusted by Corporates</h4>
        <p>We’ve managed top-tier events for leading organizations across industries.</p>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="section">
    <h2>Gallery</h2>
    <div class="gallery">
      <img src="https://picsum.photos/600/400?random=1" alt="Event Image 1">
      <img src="https://picsum.photos/600/400?random=2" alt="Event Image 2">
      <img src="https://picsum.photos/600/400?random=3" alt="Event Image 3">
      <img src="https://picsum.photos/600/400?random=4" alt="Event Image 4">
    </div>
  </section>

  <!-- Testimonial -->
  <section class="testimonial">
    “Working with your team made our annual corporate summit a remarkable success. Attention to detail and creative touches really stood out.”
    <span>— Sarah Ahmed, Event Director at ABC Ltd.</span>
  </section>

</div>
