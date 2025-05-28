<div class="dashboard">
  <div class="top-row">
    <h2>Clients Details</h2>
    <a href="<?= ROOT ?>/admin/clients" class="btn secondary">Back</a>
  </div>

  <?php $client = $params["client"] ?? null; ?>
  <?php if ($client): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Client Id</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Name</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Email</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientEmail ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Mobile</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientMobile ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Address</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientAddress ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Image</div>
        <div class="detail-value"><?php if (!empty(trim($client->clientImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($client->clientImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Reference</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientReference ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Created At</div>
        <div class="detail-value"><?= strtotime($client->clientCreatedAt) ? date("d M y, H:i", strtotime($client->clientCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Updated At</div>
        <div class="detail-value"><?= strtotime($client->clientUpdatedAt) ? date("d M y, H:i", strtotime($client->clientUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Identify</div>
        <div class="detail-value"><?= htmlspecialchars($client->clientIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/clients/<?= $client->clientIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/clients/<?= $client->clientIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
