<!-- index.html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin - Dashboard </title>
  <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo ASSETS ?>/css/admin.css">
</head>

<body>
  <div class="admin-wrapper">
    <!-- Sidebar -->


    <aside class="sidebar" id="sidebar">
      <div class="sidebar-header">
        <div class="logo"><img src="<?= ASSETS ?>/img/logo.svg" style="width: 95px;"></div>
        <div class="nav-toggle" onclick="toggleSidebar()">
          <i class="uil uil-bars"></i>
        </div>
      </div>
      <nav class="menu">
        <ul>
          <li>
            <a href="<?= ROOT ?>/admin">
              <i class="uil uil-apps"></i> <span class="menu-text">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?= ROOT ?>/admin/campaign">
              <i class="uil uil-megaphone"></i>
              <span class="menu-text">Campaign</span>
            </a>
          </li>
          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-calendar-alt"></i> <span class="menu-text">Events</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">
            <li><a href="<?= ROOT ?>/admin/events">All Events</a></li>
            <li><a href="<?= ROOT ?>/admin/galleries">Event Gallery</a></li>
          </ul>


          <li>
            <a href="<?= ROOT ?>/admin/clients">
              <i class="uil uil-users-alt"></i> <span class="menu-text">All Clients</span>
            </a>
          </li>
          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-envelope-alt"></i> <span class="menu-text">Contact</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">
            <li><a href="<?= ROOT ?>/admin/leads">All Queries</a></li>
            <li><a href="<?= ROOT ?>/admin/leads">Replied</a></li>
          </ul>

          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-comment-alt-dots"></i> <span class="menu-text">Testimonials</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">
            <li><a href="<?= ROOT ?>/admin/testimonials">Testimonials</a></li>
            <li><a href="<?= ROOT ?>/admin/testimonials/create">Add Testimonial</a></li>
          </ul>

          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-user-square"></i> <span class="menu-text">Team Members</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">
            <li><a href="<?= ROOT ?>/admin/teams">Team Directory</a></li>
            <li><a href="<?= ROOT ?>/admin/teams/create">Add New Member</a></li>
          </ul>

          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-layer-group"></i> <span class="menu-text">Service Categories</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">

            <li><a href="<?= ROOT ?>/admin/services">Services</a></li>
            <li><a href="<?= ROOT ?>/admin/categories/create">Add/Edit Category</a></li>
          </ul>

          <li onclick="toggleSubmenu(this)">
            <div><i class="uil uil-setting"></i> <span class="menu-text">Settings</span></div>
            <i class="uil uil-angle-down chevron"></i>
          </li>
          <ul class="submenu">
            <li><a href="<?= ROOT ?>/admin/settings">Site Settings</a></li>
            <li><a href="<?= ROOT ?>/admin/meta_seo/create">SEO Settings</a></li>
          </ul>
        </ul>
      </nav>

      <!-- User Section -->
      <div class="user-section">
        <div class="user-left" onclick="toggleUserDropdown()">
          <?php if (!empty($user->userImage)): ?>
            <img src="<?= htmlspecialchars($user->userImage) ?>" alt="User" />
          <?php else: ?>
            <div class="user-avatar-fallback">
              <?= strtoupper(substr($user->name ?? 'A', 0, 1)) ?>
            </div>
          <?php endif; ?>

          <div class="user-info">
            <strong><?= htmlspecialchars($user->name ?? '') ?></strong>
            <span><?= htmlspecialchars($user->userRole ?? '') ?></span>
          </div>
        </div>


        <div class="theme-toggle" onclick="toggleTheme()" title="Toggle theme">
          <i class="uil uil-moon"></i>
        </div>
      </div>
      <div class="user-dropdown" id="userDropdown">
        <a href="<?= ROOT ?>/profile" class="dropdown-link">
          <i class="uil uil-user"></i> Profile
        </a>
        <a href="<?= ROOT ?>/settings" class="dropdown-link">
          <i class="uil uil-setting"></i> Settings
        </a>
        <a href="<?= ROOT ?>/logout" class="dropdown-link">
          <i class="uil uil-sign-out-alt"></i> Logout
        </a>
      </div>

    </aside>

    <!-- Main Content -->
    <main class="main">
      <!-- Header Bar -->
      <header class="header-bar">
        <div class="header-content">
          <form method="get" action="" class="search-wrapper">
            <div class="search-container">
              <input type="text" name="search"
                value="<?= $_GET['search'] ?? '' ?>"
                placeholder="Search..." class="search-input">
              <i class="uil uil-search search-icon"></i>
            </div>
          </form>


          <div class="header-actions">
            <div class="notification-wrapper">
              <div class="notification-icon" onclick="toggleNotifications()">
                <i class="uil uil-bell"></i>
                <span id="notificationCount" class="notification-badge"></span>
              </div>
              <div class="notification-dropdown" id="notificationDropdown">
                <div class="dropdown-header">
                  <span>Notifications</span>
                  <button onclick="markAllAsRead(event)">Mark all as read</button>
                </div>
                <div id="notificationList"></div>
              </div>
            </div>
            <div class="more-wrapper">
              <i class="uil uil-ellipsis-v" onclick="toggleMoreMenu()"></i>
              <div class="more-dropdown" id="moreDropdown">
                <p onclick="alert('Open Preferences')"><i class="uil uil-setting"></i> Preferences</p>
                <p onclick="alert('Open Help')"><i class="uil uil-question-circle"></i> Help</p>
                <p onclick="alert('Show About Info')"><i class="uil uil-info-circle"></i> About</p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="main-content">
        {{content}}
      </section>

    </main>
  </div>

  <script src="<?php echo ASSETS ?>/js/admin.js"></script>

  <style>
    /* Theme toggle button */
    .theme-toggle-wrapper {
      position: fixed;
      bottom: 0px;
      right: 0px;
      z-index: 999;
      text-align: right;
    }

    .theme-toggle-btn {
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 5px;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      box-shadow: var(--shadow-md);
      transition: background-color 0.3s ease;
    }

    .theme-toggle-btn:hover {
      background-color: var(--primary-hover);
    }

    .theme-dropdown {
      margin-top: 4px;
      background: var(--card-bg);
      padding: 4px;
      border-radius: 4px;
      box-shadow: var(--shadow-lg);
    }

    .theme-dropdown select {
      width: 160px;
      padding: 6px;
      font-size: 14px;
      background: var(--input-bg-light);
      color: var(--text-light);
      border: 1px solid var(--border-light);
      border-radius: 4px;
      outline: none;
    }

    .hidden {
      display: none;
    }
  </style>


  <!-- Theme Switcher Floating Button -->
  <div class="theme-toggle-wrapper">
    <button id="themeToggleBtn" class="theme-toggle-btn">
      <i class="uil uil-palette"></i>
    </button>

    <div id="themeDropdown" class="theme-dropdown hidden">
      <select id="themeSwitcher">
        <option value="default">Default Blue</option>
        <option value="ocean">Ocean Breeze</option>
        <option value="forest">Modern Forest</option>
        <option value="grape">Royal Grape</option>
        <option value="solar">Solar Energy</option>
        <option value="crimson">Crimson Tech</option>
      </select>
    </div>
  </div>





</body>

</html>