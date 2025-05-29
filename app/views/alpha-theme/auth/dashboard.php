<style>
  :root {
    --primary: #dc2626;
    --primary-hover: #b91c1c;
    --secondary: #4b5563;

    --light-bg: #fff1f2;
    --dark-bg: #1e1e1e;

    --input-bg-light: #ffffff;
    --input-bg-dark: #2d2d2d;

    --text-light: #1f2937;
    --text-dark: #fef2f2;
    --muted-text: #fca5a5;

    --border-light: #e5e7eb;
    --border-dark: #7f1d1d;

    --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);

    --success: #16a34a;
    --warning: #f59e0b;
    --error: #dc2626;
  }

  body.light {
    --bg: var(--light-bg);
    --text-color: var(--text-light);
    --hover-bg: #f9fafb;
    --border-color: var(--border-light);
    --card-bg: #ffffff;
    --shadow: var(--shadow-sm);
  }

  body.dark {
    --bg: var(--dark-bg);
    --text-color: var(--text-dark);
    --hover-bg: #2d2d2d;
    --border-color: var(--border-dark);
    --card-bg: #1e1e1e;
    --shadow: var(--shadow-md);
  }

  .dashboard-container {
    padding: 2rem;
    background: var(--bg);
    color: var(--text-color);
    font-family: 'Segoe UI', sans-serif;
  }

  .dashboard-card {
    background: var(--card-bg);
    padding: 1.5rem 2rem;
    border-radius: 12px;
    box-shadow: var(--shadow);
    margin-bottom: 2rem;
    border: 1px solid var(--border-color);
    transition: background 0.3s ease, border 0.3s ease;
  }

  .dashboard-card h2 {
    margin-bottom: 0.75rem;
    font-size: 1.5rem;
  }

  .dashboard-card p {
    margin: 0.25rem 0;
    font-size: 0.95rem;
  }

  .badge {
    display: inline-block;
    background: var(--primary);
    color: #fff;
    padding: 3px 10px;
    font-size: 0.85rem;
    border-radius: 12px;
  }

  .metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.25rem;
  }

  .metric-card {
    display: flex;
    align-items: center;
    background: var(--card-bg);
    border-radius: 12px;
    padding: 1rem 1.25rem;
    box-shadow: var(--shadow);
    border: 1px solid var(--border-color);
    transition: transform 0.2s ease, background 0.3s ease;
    gap: 1rem;
  }

  .metric-card:hover {
    transform: translateY(-4px);
  }

  .metric-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    font-size: 1.4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: var(--hover-bg);
    color: var(--primary);
    transition: background 0.3s ease;
  }

  .metric-info h4 {
    font-size: 1rem;
    margin: 0 0 4px;
    color: var(--text-color);
  }

  .metric-info p {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
    color: var(--text-color);
  }

  .soft-warning .metric-icon {
    background: #fff7ed;
    color: var(--warning);
  }

  .soft-secondary .metric-icon {
    background: #f1f5f9;
    color: var(--secondary);
  }

  .soft-success .metric-icon {
    background: #ecfdf5;
    color: var(--success);
  }

  .soft-danger .metric-icon {
    background: #fef2f2;
    color: var(--error);
  }

  @media (max-width: 768px) {
    .dashboard-card {
      padding: 1.25rem;
    }

    .metric-card {
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
    }

    .metric-icon {
      margin-bottom: 0.5rem;
    }
  }
</style>
<body class="light">
  <div class="dashboard-container">
    <!-- User Info -->
    <div class="dashboard-card user-info">
      <h2> Welcome, <?= htmlspecialchars($user->name ?? 'Admin') ?></h2>
      <!-- <p><strong>Username:</strong> <?= htmlspecialchars($user->username ?? '') ?></p>
      <p><strong>Role:</strong> <span class="badge"><?= htmlspecialchars($user->userRole ?? 'Admin') ?></span></p>
      <p><strong>Last Login:</strong> <?= htmlspecialchars($user->lastLoginAt ?? 'N/A') ?></p> -->
    </div>

    <!-- Metric Cards -->
    <div class="metrics-grid">
      <div class="metric-card soft-warning">
        <div class="metric-icon"><i class="uil uil-calendar-alt"></i></div>
        <div class="metric-info">
          <h4>Total Events</h4>
          <p><?= $totals['events'] ?></p>
        </div>
      </div>

      <div class="metric-card soft-secondary">
        <div class="metric-icon"><i class="uil uil-users-alt"></i></div>
        <div class="metric-info">
          <h4>Total Clients</h4>
          <p><?= $totals['clients'] ?></p>
        </div>
      </div>

      <div class="metric-card soft-success">
        <div class="metric-icon"><i class="uil uil-image"></i></div>
        <div class="metric-info">
          <h4>Total Galleries</h4>
          <p><?= $totals['galleries'] ?></p>
        </div>
      </div>

      <div class="metric-card soft-danger">
        <div class="metric-icon"><i class="uil uil-envelope-edit"></i></div>
        <div class="metric-info">
          <h4>Total Leads</h4>
          <p><?= $totals['leads'] ?></p>
        </div>
      </div>
    </div>
  </div>
</body>
