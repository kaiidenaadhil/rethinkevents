<div class="dashboard">
  <div class="top-row">
    <h2>Create New Galleries</h2>
    <a href="<?= ROOT ?>/admin/galleries" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/galleries/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="galleryMedia">Gallery Media</label>
      <input type="file" id="galleryMedia" name="galleryMedia">
    </div>
    <div class="form-group">
      <label for="caption">Caption</label>
      <input type="text" id="caption" name="caption" >
    </div>
<div class="form-group">
  <label for="eventId">Select Event</label>
  <select id="eventId" name="eventId" required>
    <option value="">-- Select Event --</option>
    <?php foreach ($events as $event): ?>
      <option value="<?= $event->eventId ?>">
        <?= htmlspecialchars($event->eventTitle) ?> (ID: <?= $event->eventId ?>)
      </option>
    <?php endforeach; ?>
  </select>
</div>

    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/galleries" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
