<div class="dashboard">
  <div class="top-row">
    <h2>Service_categories Details</h2>
    <a href="<?= ROOT ?>/admin/service_categories" class="btn secondary">Back</a>
  </div>

  <?php $service_category = $params["service_category"] ?? null; ?>
  <?php if ($service_category): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Category Id</div>
        <div class="detail-value"><?= htmlspecialchars($service_category->categoryId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Name</div>
        <div class="detail-value"><?= htmlspecialchars($service_category->categoryName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Description</div>
        <div class="detail-value"><?= htmlspecialchars($service_category->categoryDescription ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service_category Created At</div>
        <div class="detail-value"><?= strtotime($service_category->service_categoryCreatedAt) ? date("d M y, H:i", strtotime($service_category->service_categoryCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service_category Updated At</div>
        <div class="detail-value"><?= strtotime($service_category->service_categoryUpdatedAt) ? date("d M y, H:i", strtotime($service_category->service_categoryUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service_category Identify</div>
        <div class="detail-value"><?= htmlspecialchars($service_category->service_categoryIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/service_categories/<?= $service_category->service_categoryIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/service_categories/<?= $service_category->service_categoryIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
