<div class="dashboard">
  <div class="top-row">
    <h2>Leads Details</h2>
    <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Back</a>
  </div>

  <?php $lead = $params["lead"] ?? null; ?>
  <?php if ($lead): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Lead Id</div>
        <div class="detail-value"><?= htmlspecialchars($lead->leadId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Name</div>
        <div class="detail-value"><?= htmlspecialchars($lead->clientName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Email</div>
        <div class="detail-value"><?= htmlspecialchars($lead->email ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Phone</div>
        <div class="detail-value"><?= htmlspecialchars($lead->phone ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Notes</div>
        <div class="detail-value"><?= htmlspecialchars($lead->notes ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Interested In</div>
        <div class="detail-value"><?= htmlspecialchars($lead->interestedIn ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($lead->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Lead Created At</div>
        <div class="detail-value"><?= strtotime($lead->leadCreatedAt) ? date("d M y, H:i", strtotime($lead->leadCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Lead Updated At</div>
        <div class="detail-value"><?= strtotime($lead->leadUpdatedAt) ? date("d M y, H:i", strtotime($lead->leadUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Lead Identify</div>
        <div class="detail-value"><?= htmlspecialchars($lead->leadIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
