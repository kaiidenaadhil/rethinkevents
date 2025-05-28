<div class="dashboard">
  <div class="top-row">
    <h2>Edit Services</h2>
    <a href="<?= ROOT ?>/admin/services" class="btn secondary">Back</a>
  </div>
  <?php $services = $params["service"] ?? null; ?>
  <?php if ($services): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/services/<?= $services->serviceIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="serviceTitle">Service Title</label>
      <input type="text" id="serviceTitle" name="serviceTitle" value="<?= $services->serviceTitle ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="serviceCategory">Service Category</label>
      <input type="number" id="serviceCategory" name="serviceCategory" value="<?= $services->serviceCategory ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="serviceType">Service Type</label>
      <select id="serviceType" name="serviceType" required>
        <option value="Events" <?= $services->serviceType == "Events" ? "selected" : "" ?>>Events</option>
        <option value="Printing" <?= $services->serviceType == "Printing" ? "selected" : "" ?>>Printing</option>
        <option value="Interior" <?= $services->serviceType == "Interior" ? "selected" : "" ?>>Interior</option>
        <option value="General Supply" <?= $services->serviceType == "General Supply" ? "selected" : "" ?>>General Supply</option>
        <option value=" Acoustic Solution" <?= $services->serviceType == " Acoustic Solution" ? "selected" : "" ?>> Acoustic Solution</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $services->description ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="serviceImage">Service Image</label>
      <input type="file" id="serviceImage" name="serviceImage">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/services" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
