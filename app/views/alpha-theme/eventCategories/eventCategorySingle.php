<div class="dashboard">
  <div class="top-row">
    <h2>EventCategories Details</h2>
    <a href="<?= ROOT ?>/admin/eventCategories" class="btn secondary">Back</a>
  </div>

  <?php $eventCategory = $params["eventCategory"] ?? null; ?>
  <?php if ($eventCategory): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Event Category Id</div>
        <div class="detail-value"><?= htmlspecialchars($eventCategory->eventCategoryId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category Name</div>
        <div class="detail-value"><?= htmlspecialchars($eventCategory->eventCategoryName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category U R I</div>
        <div class="detail-value"><?= htmlspecialchars($eventCategory->eventCategoryURI ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category Feature Img</div>
        <div class="detail-value"><?php if (!empty(trim($eventCategory->eventCategoryFeatureImg))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($eventCategory->eventCategoryFeatureImg)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Even Category Tags</div>
        <div class="detail-value"><?= htmlspecialchars($eventCategory->evenCategoryTags ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category Created At</div>
        <div class="detail-value"><?= strtotime($eventCategory->eventCategoryCreatedAt) ? date("d M y, H:i", strtotime($eventCategory->eventCategoryCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category Updated At</div>
        <div class="detail-value"><?= strtotime($eventCategory->eventCategoryUpdatedAt) ? date("d M y, H:i", strtotime($eventCategory->eventCategoryUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Category Identify</div>
        <div class="detail-value"><?= htmlspecialchars($eventCategory->eventCategoryIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategory->eventCategoryIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategory->eventCategoryIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
