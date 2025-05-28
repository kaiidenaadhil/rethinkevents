<div class="dashboard">
  <div class="top-row">
    <h2>Events Details</h2>
    <a href="<?= ROOT ?>/admin/events" class="btn secondary">Back</a>
  </div>

  <?php $event = $params["event"] ?? null; ?>
  <?php if ($event): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Event Id</div>
        <div class="detail-value"><?= htmlspecialchars($event->eventId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Title</div>
        <div class="detail-value"><?= htmlspecialchars($event->eventTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Description</div>
        <div class="detail-value"><?= htmlspecialchars($event->eventDescription ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Date</div>
        <div class="detail-value"><?= strtotime($event->eventDate) ? date("d M y, H:i", strtotime($event->eventDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Location</div>
        <div class="detail-value"><?= htmlspecialchars($event->location ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Organised By</div>
        <div class="detail-value"><?= htmlspecialchars($event->organisedBy ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Feature Image</div>
        <div class="detail-value"><?php if (!empty(trim($event->eventFeatureImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($event->eventFeatureImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Created At</div>
        <div class="detail-value"><?= strtotime($event->eventCreatedAt) ? date("d M y, H:i", strtotime($event->eventCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Updated At</div>
        <div class="detail-value"><?= strtotime($event->eventUpdatedAt) ? date("d M y, H:i", strtotime($event->eventUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Identify</div>
        <div class="detail-value"><?= htmlspecialchars($event->eventIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/events/<?= $event->eventIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/events/<?= $event->eventIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
