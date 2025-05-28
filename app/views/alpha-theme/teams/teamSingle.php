<div class="dashboard">
  <div class="top-row">
    <h2>Teams Details</h2>
    <a href="<?= ROOT ?>/admin/teams" class="btn secondary">Back</a>
  </div>

  <?php $team = $params["team"] ?? null; ?>
  <?php if ($team): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Team Id</div>
        <div class="detail-value"><?= htmlspecialchars($team->teamId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Member Name</div>
        <div class="detail-value"><?= htmlspecialchars($team->memberName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Designation</div>
        <div class="detail-value"><?= htmlspecialchars($team->designation ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Email</div>
        <div class="detail-value"><?= htmlspecialchars($team->email ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Mobile</div>
        <div class="detail-value"><?= htmlspecialchars($team->mobile ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Profile Image</div>
        <div class="detail-value"><?php if (!empty(trim($team->profileImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($team->profileImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Bio</div>
        <div class="detail-value"><?= htmlspecialchars($team->bio ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Team Created At</div>
        <div class="detail-value"><?= strtotime($team->teamCreatedAt) ? date("d M y, H:i", strtotime($team->teamCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Team Updated At</div>
        <div class="detail-value"><?= strtotime($team->teamUpdatedAt) ? date("d M y, H:i", strtotime($team->teamUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Team Identify</div>
        <div class="detail-value"><?= htmlspecialchars($team->teamIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/teams/<?= $team->teamIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/teams/<?= $team->teamIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
