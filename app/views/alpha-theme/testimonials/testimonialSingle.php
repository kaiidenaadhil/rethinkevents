<div class="dashboard">
  <div class="top-row">
    <h2>Testimonials Details</h2>
    <a href="<?= ROOT ?>/admin/testimonials" class="btn secondary">Back</a>
  </div>

  <?php $testimonial = $params["testimonial"] ?? null; ?>
  <?php if ($testimonial): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Testimonial Id</div>
        <div class="detail-value"><?= htmlspecialchars($testimonial->testimonialId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Name</div>
        <div class="detail-value"><?= htmlspecialchars($testimonial->clientName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Company</div>
        <div class="detail-value"><?= htmlspecialchars($testimonial->clientCompany ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Testimonial Text</div>
        <div class="detail-value"><?= htmlspecialchars($testimonial->testimonialText ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Image</div>
        <div class="detail-value"><?php if (!empty(trim($testimonial->clientImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($testimonial->clientImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Testimonial Created At</div>
        <div class="detail-value"><?= strtotime($testimonial->testimonialCreatedAt) ? date("d M y, H:i", strtotime($testimonial->testimonialCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Testimonial Updated At</div>
        <div class="detail-value"><?= strtotime($testimonial->testimonialUpdatedAt) ? date("d M y, H:i", strtotime($testimonial->testimonialUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Testimonial Identify</div>
        <div class="detail-value"><?= htmlspecialchars($testimonial->testimonialIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/testimonials/<?= $testimonial->testimonialIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/testimonials/<?= $testimonial->testimonialIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
