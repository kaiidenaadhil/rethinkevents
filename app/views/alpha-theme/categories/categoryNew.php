<div class="dashboard">
  <div class="top-row">
    <h2>Create New Categories</h2>
    <a href="<?= ROOT ?>/admin/categories" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/categories/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="categoryName">Category Name</label>
      <input type="text" id="categoryName" name="categoryName" >
    </div>
    <div class="form-group">
      <label for="categoryDescription">Category Description</label>
      <input type="text" id="categoryDescription" name="categoryDescription" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/categories" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
