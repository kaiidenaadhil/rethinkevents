<div class="dashboard">
  <div class="top-row">
    <h2>Create New Events</h2>
    <a href="<?= ROOT ?>/admin/events" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/events/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="eventTitle">Event Title</label>
      <input type="text" id="eventTitle" name="eventTitle" required>
    </div>
    <div class="form-group">
      <label for="eventDescription">Event Description</label>
      <input type="text" id="eventDescription" name="eventDescription" required>
    </div>
    <div class="form-group">
      <label for="eventDate">Event Date</label>
      <input type="datetime-local" id="eventDate" name="eventDate" required>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" required>
    </div>
    <div class="form-group">
      <label for="organisedBy">Organised By</label>
      <input type="text" id="organisedBy" name="organisedBy" required>
    </div>
    <div class="form-group">
      <label for="eventFeatureImage">Event Feature Image</label>
      <input type="file" id="eventFeatureImage" name="eventFeatureImage">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/events" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
