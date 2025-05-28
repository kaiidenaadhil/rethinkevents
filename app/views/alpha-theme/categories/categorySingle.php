<div class="dashboard">
  <div class="top-row">
    <h2>Categories Details</h2>
    <a href="<?= ROOT ?>/admin/categories" class="btn secondary">Back</a>
  </div>

  <?php $category = $params["category"] ?? null; ?>
  <?php if ($category): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Category Id</div>
        <div class="detail-value"><?= htmlspecialchars($category->categoryId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Name</div>
        <div class="detail-value"><?= htmlspecialchars($category->categoryName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Description</div>
        <div class="detail-value"><?= htmlspecialchars($category->categoryDescription ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Created At</div>
        <div class="detail-value"><?= strtotime($category->categoryCreatedAt) ? date("d M y, H:i", strtotime($category->categoryCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Updated At</div>
        <div class="detail-value"><?= strtotime($category->categoryUpdatedAt) ? date("d M y, H:i", strtotime($category->categoryUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category Identify</div>
        <div class="detail-value"><?= htmlspecialchars($category->categoryIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/categories/<?= $category->categoryIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/categories/<?= $category->categoryIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
