<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #1e1e1e;
      color: #eee;
    }

    /* HERO SECTION */
    .page-hero {
      background: linear-gradient(145deg, #2a2a2a, #1f1f1f);
      padding: 100px 20px 40px;
      text-align: center;
      animation: fadeInDown 1s ease-out both;
    }

    .page-hero h1 {
      font-size: 3rem;
      color: #fff;
      margin-bottom: 12px;
    }

    .page-hero p {
      font-size: 1.2rem;
      color: #bbb;
      font-weight: 300;
      max-width: 700px;
      margin: auto;
    }

    .contact-container {
      display: flex;
      max-width: 1100px;
      margin: auto;
      background: #1e1e1e;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
      flex-wrap: wrap;
    }

    .left-panel,
    .right-panel {
      flex: 1;
      min-width: 300px;
      padding: 30px;
    }

    .left-panel {
      background: #232323;
      border-right: 1px solid #333;
    }

    .contact-title {
      font-size: 1.4rem;
      color: #ff9800;
      margin-bottom: 16px;
    }

    .highlight {
      line-height: 1.6;
      color: #ccc;
    }

    .form-title {
      font-size: 1.4rem;
      color: #ff9800;
      margin-bottom: 24px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    label {
      display: block;
      font-size: 0.95rem;
      margin-bottom: 6px;
      color: #ccc;
    }

    .form-input {
      width: 100%;
      padding: 10px 12px;
      background: #2a2a2a;
      border: 1px solid #444;
      border-radius: 6px;
      color: #fff;
      font-size: 0.95rem;
    }

    .form-input:focus {
      outline: none;
      border-color: #ff9800;
    }

    textarea.form-input {
      resize: vertical;
    }

    .form-button {
      background: #ff9800;
      color: #1e1e1e;
      padding: 12px 24px;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .form-button:hover {
      background: #fff;
      color: #000;
    }

    small {
      display: block;
      margin-top: 4px;
      color: #f44336;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .page-hero h1 {
        font-size: 2.2rem;
      }

      .page-hero p {
        font-size: 1rem;
      }

      .contact-container {
        flex-direction: column;
      }

      .left-panel {
        border-right: none;
        border-bottom: 1px solid #333;
      }

      .form-title,
      .contact-title {
        font-size: 1.2rem;
      }
    }

    /* Animations */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <!-- HERO -->
  <section class="page-hero">
    <h1><i class="uil uil-envelope"></i> Contact Us</h1>
    <p>We're here to assist you. Reach out and we'll respond quickly.</p>
  </section>

  <!-- CONTACT FORM -->
  <section class="contact-form">
    <div class="contact-container">

      <!-- Left Info Panel -->
      <div class="left-panel">
        <h2 class="contact-title">Main Office</h2>
        <p class="highlight">
          House-A1, Flat-3C, Road-01, Block-F,<br>
          Banani, Dhaka, Bangladesh<br>
          Cell: 01923 991360<br>
          Email: rethinkevents.bd@gmail.com
        </p>
      </div>

      <!-- Right Form Panel -->
      <div class="right-panel">
        <h2 class="form-title">ASK US. WE'LL HELP YOU.</h2>

        <?php if (App::$session->get('success')): ?>
          <div style="background: #dff0d8; color: #3c763d; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
            <?= htmlspecialchars(App::$session->get('success')) ?>
          </div>
          <?php App::$session->remove('success'); ?>
        <?php endif; ?>

        <form id="askForm" method="post" action="<?= ROOT ?>/contact-us/">
          <div class="form-group">
            <label for="clientName">Client Name</label>
            <input type="text" id="clientName" name="clientName" class="form-input"
              value="<?= isset($old['clientName']) ? htmlspecialchars($old['clientName']) : '' ?>" required>
            <?php if (!empty($errors['clientName'])): ?>
              <small><?= htmlspecialchars($errors['clientName']) ?></small>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input"
              value="<?= isset($old['email']) ? htmlspecialchars($old['email']) : '' ?>" required>
            <?php if (!empty($errors['email'])): ?>
              <small><?= htmlspecialchars($errors['email']) ?></small>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" class="form-input"
              value="<?= isset($old['phone']) ? htmlspecialchars($old['phone']) : '' ?>" required>
            <?php if (!empty($errors['phone'])): ?>
              <small><?= htmlspecialchars($errors['phone']) ?></small>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="interestedIn">Interested In</label>
            <select id="interestedIn" name="interestedIn" class="form-input" required>
              <?php
                $options = ["Events", "Printing", "Interior", "General Supply", "Acoustic Solution"];
                $selected = $old['interestedIn'] ?? '';
                foreach ($options as $opt):
              ?>
                <option value="<?= $opt ?>" <?= $opt === $selected ? 'selected' : '' ?>><?= $opt ?></option>
              <?php endforeach; ?>
            </select>
            <?php if (!empty($errors['interestedIn'])): ?>
              <small><?= htmlspecialchars($errors['interestedIn']) ?></small>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="notes">Message</label>
            <textarea id="notes" name="notes" rows="4" class="form-input" required><?= isset($old['notes']) ? htmlspecialchars($old['notes']) : '' ?></textarea>
            <?php if (!empty($errors['notes'])): ?>
              <small><?= htmlspecialchars($errors['notes']) ?></small>
            <?php endif; ?>
          </div>

          <button type="submit" class="form-button">Submit</button>
        </form>
      </div>

    </div>
  </section>

</body>
</html>
