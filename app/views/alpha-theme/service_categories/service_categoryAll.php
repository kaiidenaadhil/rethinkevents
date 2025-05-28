<div class="dashboard">
  <div class="top-row">
    <h2>Service_categories</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/service_categories/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/service_categories/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/service_categories/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_service_categoriesTitle">Sort:</label>
  <select name="sort_service_categoriesTitle" id="sort_service_categoriesTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_service_categoriesCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_service_categoriesCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Category Id</th>
          <th>Category Name</th>
          <th>Category Description</th>
          <th>Service_category Created At</th>
          <th>Service_category Updated At</th>
          <th>Service_category Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($service_categories)) : ?>
<?php foreach ($service_categories as $index => $service_category) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $service_category->service_categoryIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($service_category->categoryId) ? htmlspecialchars($service_category->categoryId) : "-" ?></td>
          <td><?= isset($service_category->categoryName) ? htmlspecialchars($service_category->categoryName) : "-" ?></td>
          <td><?= isset($service_category->categoryDescription) ? htmlspecialchars($service_category->categoryDescription) : "-" ?></td>
          <td><?= strtotime($service_category->service_categoryCreatedAt) ? date("d M y, H:i", strtotime($service_category->service_categoryCreatedAt)) : "-" ?></td>
          <td><?= strtotime($service_category->service_categoryUpdatedAt) ? date("d M y, H:i", strtotime($service_category->service_categoryUpdatedAt)) : "-" ?></td>
          <td><?= isset($service_category->service_categoryIdentify) ? htmlspecialchars($service_category->service_categoryIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/service_categories/<?= $service_category->service_categoryIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/service_categories/<?= $service_category->service_categoryIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/service_categories/<?= $service_category->service_categoryIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="9"><div class="no-data-box"><p class="no-data-message">No service_categories found.</p><a href="<?= ROOT ?>/admin/service_categories/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
