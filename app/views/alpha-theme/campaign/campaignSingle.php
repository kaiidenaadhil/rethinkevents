<div class="dashboard">
  <div class="top-row">
    <h2>Campaign Details</h2>
    <a href="<?= ROOT ?>/admin/campaign" class="btn secondary">Back</a>
  </div>

  <?php $campaign = $params["campaign"] ?? null; ?>
  <?php if ($campaign): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Campaign Id</div>
        <div class="detail-value"><?= htmlspecialchars($campaign->campaignId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Title</div>
        <div class="detail-value"><?= htmlspecialchars($campaign->campaignTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Slogan</div>
        <div class="detail-value"><?= htmlspecialchars($campaign->campaignSlogan ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Media</div>
        <div class="detail-value"><?php if (!empty(trim($campaign->campaignMedia))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($campaign->campaignMedia)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Action</div>
        <div class="detail-value"><?= htmlspecialchars($campaign->campaignAction ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Created At</div>
        <div class="detail-value"><?= strtotime($campaign->campaignCreatedAt) ? date("d M y, H:i", strtotime($campaign->campaignCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Updated At</div>
        <div class="detail-value"><?= strtotime($campaign->campaignUpdatedAt) ? date("d M y, H:i", strtotime($campaign->campaignUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Campaign Identify</div>
        <div class="detail-value"><?= htmlspecialchars($campaign->campaignIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/campaign/<?= $campaign->campaignIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/campaign/<?= $campaign->campaignIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
