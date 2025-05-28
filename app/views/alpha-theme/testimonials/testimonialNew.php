<div class="dashboard">
  <div class="top-row">
    <h2>Create New Testimonials</h2>
    <a href="<?= ROOT ?>/admin/testimonials" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/testimonials/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" id="clientName" name="clientName" >
    </div>
    <div class="form-group">
      <label for="clientCompany">Client Company</label>
      <input type="text" id="clientCompany" name="clientCompany" >
    </div>
    <div class="form-group">
      <label for="testimonialText">Testimonial Text</label>
      <input type="text" id="testimonialText" name="testimonialText" >
    </div>
    <div class="form-group">
      <label for="clientImage">Client Image</label>
      <input type="file" id="clientImage" name="clientImage">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/testimonials" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
