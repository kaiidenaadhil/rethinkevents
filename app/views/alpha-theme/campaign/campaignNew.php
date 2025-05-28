<div class="dashboard">
  <div class="top-row">
    <h2>Create New Campaign</h2>
    <a href="<?= ROOT ?>/admin/campaign" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/campaign/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="campaignTitle">Campaign Title</label>
      <input type="text" id="campaignTitle" name="campaignTitle" >
    </div>
    <div class="form-group">
      <label for="campaignSlogan">Campaign Slogan</label>
      <input type="text" id="campaignSlogan" name="campaignSlogan" >
    </div>
    <div class="form-group">
      <label for="campaignMedia">Campaign Media</label>
      <input type="file" id="campaignMedia" name="campaignMedia">
    </div>
    <div class="form-group">
      <label for="campaignAction">Campaign Action</label>
      <input type="text" id="campaignAction" name="campaignAction" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/campaign" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
