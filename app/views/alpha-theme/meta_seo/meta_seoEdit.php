<div class="dashboard">
  <div class="top-row">
    <h2>Edit Meta_seo</h2>
    <a href="<?= ROOT ?>/admin/meta_seo" class="btn secondary">Back</a>
  </div>
  <?php $meta_seo = $params["meta_seo"] ?? null; ?>
  <?php if ($meta_seo): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="pageSlug">Page Slug</label>
      <input type="text" id="pageSlug" name="pageSlug" value="<?= $meta_seo->pageSlug ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="metaTitle">Meta Title</label>
      <input type="text" id="metaTitle" name="metaTitle" value="<?= $meta_seo->metaTitle ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="metaDescription">Meta Description</label>
      <input type="text" id="metaDescription" name="metaDescription" value="<?= $meta_seo->metaDescription ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="metaKeywords">Meta Keywords</label>
      <input type="text" id="metaKeywords" name="metaKeywords" value="<?= $meta_seo->metaKeywords ?? "" ?>" >
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
      <input type="text" id="canonicalURL" name="canonicalURL" value="<?= $meta_seo->canonicalURL ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="metaAuthor">Meta Author</label>
      <input type="text" id="metaAuthor" name="metaAuthor" value="<?= $meta_seo->metaAuthor ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/meta_seo" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
