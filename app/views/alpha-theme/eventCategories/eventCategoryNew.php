<div class="dashboard">
  <div class="top-row">
    <h2>Create New EventCategories</h2>
    <a href="<?= ROOT ?>/admin/eventCategories" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/eventCategories/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="eventCategoryName">Event Category Name</label>
      <input type="text" id="eventCategoryName" name="eventCategoryName" >
    </div>
    <div class="form-group">
      <label for="eventCategoryURI">Event Category U R I</label>
      <input type="text" id="eventCategoryURI" name="eventCategoryURI" >
    </div>
    <div class="form-group">
      <label for="eventCategoryFeatureImg">Event Category Feature Img</label>
      <input type="file" id="eventCategoryFeatureImg" name="eventCategoryFeatureImg">
    </div>
    <div class="form-group">
      <label for="evenCategoryTags">Even Category Tags</label>
      <input type="text" id="evenCategoryTags" name="evenCategoryTags" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/eventCategories" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
