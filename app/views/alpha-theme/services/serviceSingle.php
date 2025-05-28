<div class="dashboard">
  <div class="top-row">
    <h2>Services Details</h2>
    <a href="<?= ROOT ?>/admin/services" class="btn secondary">Back</a>
  </div>

  <?php $service = $params["service"] ?? null; ?>
  <?php if ($service): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Service Id</div>
        <div class="detail-value"><?= htmlspecialchars($service->serviceId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Title</div>
        <div class="detail-value"><?= htmlspecialchars($service->serviceTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Category</div>
        <div class="detail-value"><?= htmlspecialchars($service->serviceCategory ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Type</div>
        <div class="detail-value"><?= htmlspecialchars($service->serviceType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($service->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Image</div>
        <div class="detail-value"><?php if (!empty(trim($service->serviceImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($service->serviceImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Created At</div>
        <div class="detail-value"><?= strtotime($service->serviceCreatedAt) ? date("d M y, H:i", strtotime($service->serviceCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Updated At</div>
        <div class="detail-value"><?= strtotime($service->serviceUpdatedAt) ? date("d M y, H:i", strtotime($service->serviceUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Identify</div>
        <div class="detail-value"><?= htmlspecialchars($service->serviceIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/services/<?= $service->serviceIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/services/<?= $service->serviceIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
