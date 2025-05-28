<div class="dashboard">
  <div class="top-row">
    <h2>Edit Galleries</h2>
    <a href="<?= ROOT ?>/admin/galleries" class="btn secondary">Back</a>
  </div>
  <?php $galleries = $params["gallery"] ?? null; ?>
  <?php if ($galleries): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/galleries/<?= $galleries->galleryIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="galleryMedia">Gallery Media</label>
      <input type="file" id="galleryMedia" name="galleryMedia">
    </div>
    <div class="form-group">
      <label for="caption">Caption</label>
      <input type="text" id="caption" name="caption" value="<?= $galleries->caption ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="eventId">Event Id</label>
      <input type="number" id="eventId" name="eventId" value="<?= $galleries->eventId ?? "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/galleries" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
