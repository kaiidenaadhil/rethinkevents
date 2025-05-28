<div class="dashboard">
  <div class="top-row">
    <h2>Create New Services</h2>
    <a href="<?= ROOT ?>/admin/services" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/services/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="serviceTitle">Service Title</label>
      <input type="text" id="serviceTitle" name="serviceTitle" required>
    </div>
    <div class="form-group">
      <label for="serviceCategory">Service Category</label>
      <input type="number" id="serviceCategory" name="serviceCategory" required>
    </div>
    <div class="form-group">
      <label for="serviceType">Service Type</label>
      <select id="serviceType" name="serviceType" required>
        <option value="Events">Events</option>
        <option value="Printing">Printing</option>
        <option value="Interior">Interior</option>
        <option value="General Supply">General Supply</option>
        <option value=" Acoustic Solution"> Acoustic Solution</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" required>
    </div>
    <div class="form-group">
      <label for="serviceImage">Service Image</label>
      <input type="file" id="serviceImage" name="serviceImage">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/services" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
