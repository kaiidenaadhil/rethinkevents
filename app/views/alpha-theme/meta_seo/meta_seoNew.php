<div class="dashboard">
  <div class="top-row">
    <h2>Create New Meta_seo</h2>
    <a href="<?= ROOT ?>/admin/meta_seo" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/meta_seo/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="pageSlug">Page Slug</label>
      <input type="text" id="pageSlug" name="pageSlug" >
    </div>
    <div class="form-group">
      <label for="metaTitle">Meta Title</label>
      <input type="text" id="metaTitle" name="metaTitle" >
    </div>
    <div class="form-group">
      <label for="metaDescription">Meta Description</label>
      <input type="text" id="metaDescription" name="metaDescription" >
    </div>
    <div class="form-group">
      <label for="metaKeywords">Meta Keywords</label>
      <input type="text" id="metaKeywords" name="metaKeywords" >
    </div>
    <div class="form-group">
      <label for="imageFeature">Image Feature</label>
      <input type="file" id="imageFeature" name="imageFeature">
    </div>
    <div class="form-group">
      <label for="imageAlt">Image Alt</label>
      <input type="file" id="imageAlt" name="imageAlt">
    </div>
    <div class="form-group">
      <label for="canonicalURL">Canonical U R L</label>
      <input type="text" id="canonicalURL" name="canonicalURL" >
    </div>
    <div class="form-group">
      <label for="metaAuthor">Meta Author</label>
      <input type="text" id="metaAuthor" name="metaAuthor" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/meta_seo" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
