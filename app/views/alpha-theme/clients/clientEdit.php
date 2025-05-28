<div class="dashboard">
  <div class="top-row">
    <h2>Edit Clients</h2>
    <a href="<?= ROOT ?>/admin/clients" class="btn secondary">Back</a>
  </div>
  <?php $clients = $params["client"] ?? null; ?>
  <?php if ($clients): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/clients/<?= $clients->clientIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" id="clientName" name="clientName" value="<?= $clients->clientName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="clientEmail">Client Email</label>
      <input type="text" id="clientEmail" name="clientEmail" value="<?= $clients->clientEmail ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="clientMobile">Client Mobile</label>
      <input type="text" id="clientMobile" name="clientMobile" value="<?= $clients->clientMobile ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="clientAddress">Client Address</label>
      <input type="text" id="clientAddress" name="clientAddress" value="<?= $clients->clientAddress ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="clientImage">Client Image</label>
      <input type="file" id="clientImage" name="clientImage">
    </div>
    <div class="form-group">
      <label for="clientReference">Client Reference</label>
      <input type="text" id="clientReference" name="clientReference" value="<?= $clients->clientReference ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/clients" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
