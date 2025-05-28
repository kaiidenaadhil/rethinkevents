<div class="dashboard">
  <div class="top-row">
    <h2>Edit Leads</h2>
    <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Back</a>
  </div>
  <?php $leads = $params["lead"] ?? null; ?>
  <?php if ($leads): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/leads/<?= $leads->leadIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" id="clientName" name="clientName" value="<?= $leads->clientName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= $leads->email ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" value="<?= $leads->phone ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="notes">Notes</label>
      <input type="text" id="notes" name="notes" value="<?= $leads->notes ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="interestedIn">Interested In</label>
      <select id="interestedIn" name="interestedIn" >
        <option value="Events" <?= $leads->interestedIn == "Events" ? "selected" : "" ?>>Events</option>
        <option value="Printing" <?= $leads->interestedIn == "Printing" ? "selected" : "" ?>>Printing</option>
        <option value="Interior" <?= $leads->interestedIn == "Interior" ? "selected" : "" ?>>Interior</option>
        <option value="General Supply" <?= $leads->interestedIn == "General Supply" ? "selected" : "" ?>>General Supply</option>
        <option value=" Acoustic Solution" <?= $leads->interestedIn == " Acoustic Solution" ? "selected" : "" ?>> Acoustic Solution</option>
      </select>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" >
        <option value="new" <?= $leads->status == "new" ? "selected" : "" ?>>New</option>
        <option value=" contacted" <?= $leads->status == " contacted" ? "selected" : "" ?>> contacted</option>
        <option value=" converted" <?= $leads->status == " converted" ? "selected" : "" ?>> converted</option>
        <option value=" lost" <?= $leads->status == " lost" ? "selected" : "" ?>> lost</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
