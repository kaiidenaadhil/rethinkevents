<div class="dashboard">
  <div class="top-row">
    <h2>Edit Settings</h2>
    <a href="<?= ROOT ?>/admin/settings" class="btn secondary">Back</a>
  </div>
  <?php $settings = $params["setting"] ?? null; ?>
  <?php if ($settings): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/settings/<?= $settings->settingIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="settingKey">Setting Key</label>
      <input type="text" id="settingKey" name="settingKey" value="<?= $settings->settingKey ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="settingValue">Setting Value</label>
      <input type="text" id="settingValue" name="settingValue" value="<?= $settings->settingValue ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/settings" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
