<div class="dashboard">
  <div class="top-row">
    <h2>Meta_seo Details</h2>
    <a href="<?= ROOT ?>/admin/meta_seo" class="btn secondary">Back</a>
  </div>

  <?php $meta_seo = $params["meta_seo"] ?? null; ?>
  <?php if ($meta_seo): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Id</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->id ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Page Slug</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->pageSlug ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Title</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->metaTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Description</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->metaDescription ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Keywords</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->metaKeywords ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Image Feature</div>
        <div class="detail-value"><?php if (!empty(trim($meta_seo->imageFeature))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($meta_seo->imageFeature)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Image Alt</div>
        <div class="detail-value"><?php if (!empty(trim($meta_seo->imageAlt))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($meta_seo->imageAlt)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Canonical U R L</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->canonicalURL ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Author</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->metaAuthor ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta_seo Created At</div>
        <div class="detail-value"><?= strtotime($meta_seo->meta_seoCreatedAt) ? date("d M y, H:i", strtotime($meta_seo->meta_seoCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta_seo Updated At</div>
        <div class="detail-value"><?= strtotime($meta_seo->meta_seoUpdatedAt) ? date("d M y, H:i", strtotime($meta_seo->meta_seoUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta_seo Identify</div>
        <div class="detail-value"><?= htmlspecialchars($meta_seo->meta_seoIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
