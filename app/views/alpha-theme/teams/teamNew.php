<div class="dashboard">
  <div class="top-row">
    <h2>Create New Teams</h2>
    <a href="<?= ROOT ?>/admin/teams" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/teams/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="memberName">Member Name</label>
      <input type="text" id="memberName" name="memberName" >
    </div>
    <div class="form-group">
      <label for="designation">Designation</label>
      <input type="text" id="designation" name="designation" >
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" >
    </div>
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="text" id="mobile" name="mobile" >
    </div>
    <div class="form-group">
      <label for="profileImage">Profile Image</label>
      <input type="file" id="profileImage" name="profileImage">
    </div>
    <div class="form-group">
      <label for="bio">Bio</label>
      <input type="text" id="bio" name="bio" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/teams" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
