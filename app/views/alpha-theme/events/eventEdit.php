<div class="dashboard">
  <div class="top-row">
    <h2>Edit Events</h2>
    <a href="<?= ROOT ?>/admin/events" class="btn secondary">Back</a>
  </div>
  <?php $events = $params["event"] ?? null; ?>
  <?php if ($events): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/events/<?= $events->eventIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="eventTitle">Event Title</label>
      <input type="text" id="eventTitle" name="eventTitle" value="<?= $events->eventTitle ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="eventDescription">Event Description</label>
      <input type="text" id="eventDescription" name="eventDescription" value="<?= $events->eventDescription ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="eventDate">Event Date</label>
      <input type="datetime-local" id="eventDate" name="eventDate" value="<?= strtotime($events->eventDate) ? date("Y-m-d\TH:i", strtotime($events->eventDate)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" value="<?= $events->location ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="organisedBy">Organised By</label>
      <input type="text" id="organisedBy" name="organisedBy" value="<?= $events->organisedBy ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="eventFeatureImage">Event Feature Image</label>
      <input type="file" id="eventFeatureImage" name="eventFeatureImage">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/events" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
