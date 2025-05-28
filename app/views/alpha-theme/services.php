
  <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet">
  <style>
    :root {
      --black: #111;
      --white: #fff;
      --ash: #f4f4f4;
      --yellow: #ffcc00;
      --text-dark: #333;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }


    .main {
      background: var(--white);
      color: var(--text-dark);
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 20px;
    }

.hero {
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?=ASSETS?>/img/service-bg.jpg') center/cover no-repeat;
  padding: 100px 20px 60px; /* Increased vertical padding */
  position: relative;
  color: #fff;
}

    .hero h1 {
      font-size: 3em;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    .hero p {
      font-size: 1.2em;
      max-width: 800px;
      margin: 0 auto;
    }

    .nav-links {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }

    .nav-links a {
      background: var(--white);
      color: var(--black);
      padding: 12px 24px;
      border-radius: 30px;
      font-weight: 600;
      border: 2px solid var(--yellow);
      transition: var(--transition);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-links a:hover {
      background: var(--yellow);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(255, 204, 0, 0.2);
    }

    .service-grid {
      display: grid;
      gap: 30px;
      margin-top: 60px;
    }

    .service-column {
      background: var(--white);
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.08);
      transition: var(--transition);
      border: 1px solid rgba(0,0,0,0.05);
      position: relative;
      overflow: hidden;
    }

    .service-column:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    }

    .category-title {
      font-size: 1.5em;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--black);
      padding-bottom: 15px;
      border-bottom: 2px solid rgba(0,0,0,0.08);
    }

    .category-title i {
      background: var(--yellow);
      color: var(--black);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2em;
    }

    .service-list {
      list-style: none;
      padding-left: 0;
      display: grid;
      gap: 12px;
    }

    .service-list li {
      position: relative;
      padding-left: 32px;
    }

    .service-list li a {
      color: var(--text-dark);
      display: flex;
      align-items: center;
      gap: 10px;
      transition: var(--transition);
    }

    .service-list li a::before {
      content: "→";
      color: var(--yellow);
      position: absolute;
      left: 0;
      font-weight: 700;
      transition: var(--transition);
    }

    .service-list li a:hover {
      color: var(--black);
      transform: translateX(8px);
    }

    .service-list li a:hover::before {
      transform: translateX(-4px);
    }

    @media (min-width: 768px) {
      .service-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .service-grid {
        grid-template-columns: repeat(3, 1fr);
      }
      
      .service-column:nth-child(7) {
        grid-column: span 2;
        width: calc(50% - 15px);
      }
    }
  </style>

<div class="main">


  <!-- Hero Section -->
  <section class="hero">
    <h1><i class="uil uil-bolt-alt"></i> Our Event Services</h1>
    <p>Delivering excellence across corporate, entertainment, social and creative experiences.</p>
    <div class="nav-links">
      <a href="#corporate"><i class="uil uil-briefcase-alt"></i>Corporate</a>
      <a href="#entertainment"><i class="uil uil-music"></i>Entertainment</a>
      <a href="#social"><i class="uil uil-heart-alt"></i>Social</a>
      <a href="#private"><i class="uil uil-users-alt"></i>Private</a>
      <a href="#creative"><i class="uil uil-palette"></i>Creative</a>
      <a href="#sound"><i class="uil uil-lightbulb-alt"></i>Sound</a>
      <a href="#venue"><i class="uil uil-building"></i>Venue</a>
    </div>
  </section>

<div class="container">
    <div class="service-grid">

      <!-- Corporate Events -->
      <div class="service-column" id="corporate">
        <h3 class="category-title"><i class="uil uil-briefcase-alt"></i>Corporate Events</h3>
        <ul class="service-list">
          <li><a href="#">Conference & Seminars</a></li>
          <li><a href="#">Product Launches</a></li>
          <li><a href="#">Trade Shows</a></li>
          <li><a href="#">Virtual Events</a></li>
          <li><a href="#">Award Ceremonies</a></li>
        </ul>
      </div>

      <!-- Entertainment Events -->
      <div class="service-column" id="entertainment">
        <h3 class="category-title"><i class="uil uil-music"></i>Entertainment Events</h3>
        <ul class="service-list">
          <li><a href="#">Concerts</a></li>
          <li><a href="#">Fashion Shows</a></li>
          <li><a href="#">Celebrity Events</a></li>
          <li><a href="#">Club Parties</a></li>
          <li><a href="#">College Festivals</a></li>
        </ul>
      </div>

      <!-- Social Events -->
      <div class="service-column" id="social">
        <h3 class="category-title"><i class="uil uil-heart-alt"></i>Social Events</h3>
        <ul class="service-list">
          <li><a href="#">Weddings</a></li>
          <li><a href="#">Birthday Parties</a></li>
          <li><a href="#">Anniversaries</a></li>
          <li><a href="#">Baby Showers</a></li>
          <li><a href="#">Family Reunions</a></li>
        </ul>
      </div>

      <!-- Private Events -->
      <div class="service-column" id="private">
        <h3 class="category-title"><i class="uil uil-users-alt"></i>Private Events</h3>
        <ul class="service-list">
          <li><a href="#">VIP Parties</a></li>
          <li><a href="#">Executive Retreats</a></li>
          <li><a href="#">Gala Dinners</a></li>
          <li><a href="#">Networking Events</a></li>
          <li><a href="#">Charity Balls</a></li>
        </ul>
      </div>

      <!-- Creative Services -->
      <div class="service-column" id="creative">
        <h3 class="category-title"><i class="uil uil-palette"></i>Creative Services</h3>
        <ul class="service-list">
          <li><a href="#">Stage Design</a></li>
          <li><a href="#">3D Mapping</a></li>
          <li><a href="#">Lighting Design</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">Digital Content</a></li>
        </ul>
      </div>

      <!-- Technical Services -->
      <div class="service-column" id="technical">
        <h3 class="category-title"><i class="uil uil-lightbulb-alt"></i>Technical Services</h3>
        <ul class="service-list">
          <li><a href="#">Sound Systems</a></li>
          <li><a href="#">LED Screens</a></li>
          <li><a href="#">Live Streaming</a></li>
          <li><a href="#">Projection Mapping</a></li>
          <li><a href="#">Stage Engineering</a></li>
        </ul>
      </div>

    </div>
  </div>

</div>