<div class="dashboard">
  <div class="top-row">
    <h2>Testimonials</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/testimonials/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/testimonials/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/testimonials/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_status">Location:</label>
  <select name="filter_status" id="filter_status" class="filter-select">
    <option value="active" <?php echo ($_GET['filter_status'] ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
    <option value="inactive" <?php echo ($_GET['filter_status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
  </select>
  <label for="sort_testimonialsTitle">Sort:</label>
  <select name="sort_testimonialsTitle" id="sort_testimonialsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_testimonialsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_testimonialsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
  </select>
  <?php if (! empty($_GET['search'])): ?>
    <input type="hidden" name="search" value="<?php echo htmlspecialchars($_GET['search'])?>">
  <?php endif; ?>
</form>
</div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Testimonial Id</th>
          <th>Client Name</th>
          <th>Client Company</th>
          <th>Testimonial Text</th>
          <th>Client Image</th>
          <th>Testimonial Created At</th>
          <th>Testimonial Updated At</th>
          <th>Testimonial Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($testimonials)) : ?>
<?php foreach ($testimonials as $index => $testimonial) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $testimonial->testimonialIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($testimonial->testimonialId) ? htmlspecialchars($testimonial->testimonialId) : "-" ?></td>
          <td><?= isset($testimonial->clientName) ? htmlspecialchars($testimonial->clientName) : "-" ?></td>
          <td><?= isset($testimonial->clientCompany) ? htmlspecialchars($testimonial->clientCompany) : "-" ?></td>
          <td><?= isset($testimonial->testimonialText) ? htmlspecialchars($testimonial->testimonialText) : "-" ?></td>
          <td>
            <?php if (!empty($testimonial->clientImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $testimonial->clientImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= strtotime($testimonial->testimonialCreatedAt) ? date("d M y, H:i", strtotime($testimonial->testimonialCreatedAt)) : "-" ?></td>
          <td><?= strtotime($testimonial->testimonialUpdatedAt) ? date("d M y, H:i", strtotime($testimonial->testimonialUpdatedAt)) : "-" ?></td>
          <td><?= isset($testimonial->testimonialIdentify) ? htmlspecialchars($testimonial->testimonialIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/testimonials/<?= $testimonial->testimonialIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/testimonials/<?= $testimonial->testimonialIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/testimonials/<?= $testimonial->testimonialIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="11"><div class="no-data-box"><p class="no-data-message">No testimonials found.</p><a href="<?= ROOT ?>/admin/testimonials/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
  <div class="pagination"><?= $meta["pagination"] ?? "" ?></div>
</div>
<div class="truncate-bar" id="truncateBar" style="display:none; margin-top: 10px;">
  <button type="button" onclick="truncateSelected()">Truncate Selected</button>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
