<div class="dashboard">
  <div class="top-row">
    <h2>Settings Details</h2>
    <a href="<?= ROOT ?>/admin/settings" class="btn secondary">Back</a>
  </div>

  <?php $setting = $params["setting"] ?? null; ?>
  <?php if ($setting): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Setting Id</div>
        <div class="detail-value"><?= htmlspecialchars($setting->settingId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Setting Key</div>
        <div class="detail-value"><?= htmlspecialchars($setting->settingKey ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Setting Value</div>
        <div class="detail-value"><?= htmlspecialchars($setting->settingValue ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Setting Created At</div>
        <div class="detail-value"><?= strtotime($setting->settingCreatedAt) ? date("d M y, H:i", strtotime($setting->settingCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Setting Updated At</div>
        <div class="detail-value"><?= strtotime($setting->settingUpdatedAt) ? date("d M y, H:i", strtotime($setting->settingUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Setting Identify</div>
        <div class="detail-value"><?= htmlspecialchars($setting->settingIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/settings/<?= $setting->settingIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/settings/<?= $setting->settingIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
