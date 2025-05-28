<div class="dashboard">
  <div class="top-row">
    <h2>Galleries Details</h2>
    <a href="<?= ROOT ?>/admin/galleries" class="btn secondary">Back</a>
  </div>

  <?php $gallery = $params["gallery"] ?? null; ?>
  <?php if ($gallery): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Gallery Id</div>
        <div class="detail-value"><?= htmlspecialchars($gallery->galleryId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Gallery Media</div>
        <div class="detail-value"><?php if (!empty(trim($gallery->galleryMedia))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($gallery->galleryMedia)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Caption</div>
        <div class="detail-value"><?= htmlspecialchars($gallery->caption ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Event Id</div>
        <div class="detail-value"><?= htmlspecialchars($gallery->eventId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Gallery Created At</div>
        <div class="detail-value"><?= strtotime($gallery->galleryCreatedAt) ? date("d M y, H:i", strtotime($gallery->galleryCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Gallery Updated At</div>
        <div class="detail-value"><?= strtotime($gallery->galleryUpdatedAt) ? date("d M y, H:i", strtotime($gallery->galleryUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Gallery Identify</div>
        <div class="detail-value"><?= htmlspecialchars($gallery->galleryIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/galleries/<?= $gallery->galleryIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/galleries/<?= $gallery->galleryIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
