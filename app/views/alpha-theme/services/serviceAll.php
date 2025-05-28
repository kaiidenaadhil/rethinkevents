<div class="dashboard">
  <div class="top-row">
    <h2>Services</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/services/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/services/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/services/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_servicesTitle">Sort:</label>
  <select name="sort_servicesTitle" id="sort_servicesTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_servicesCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_servicesCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Service Id</th>
          <th>Service Title</th>
          <th>Service Category</th>
          <th>Service Type</th>
          <th>Description</th>
          <th>Service Image</th>
          <th>Service Created At</th>
          <th>Service Updated At</th>
          <th>Service Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($services)) : ?>
<?php foreach ($services as $index => $service) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $service->serviceIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($service->serviceId) ? htmlspecialchars($service->serviceId) : "-" ?></td>
          <td><?= isset($service->serviceTitle) ? htmlspecialchars($service->serviceTitle) : "-" ?></td>
          <td><?= isset($service->serviceCategory) ? htmlspecialchars($service->serviceCategory) : "-" ?></td>
          <td><?= isset($service->serviceType) ? htmlspecialchars($service->serviceType) : "-" ?></td>
          <td><?= isset($service->description) ? htmlspecialchars($service->description) : "-" ?></td>
          <td>
            <?php if (!empty($service->serviceImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $service->serviceImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= strtotime($service->serviceCreatedAt) ? date("d M y, H:i", strtotime($service->serviceCreatedAt)) : "-" ?></td>
          <td><?= strtotime($service->serviceUpdatedAt) ? date("d M y, H:i", strtotime($service->serviceUpdatedAt)) : "-" ?></td>
          <td><?= isset($service->serviceIdentify) ? htmlspecialchars($service->serviceIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/services/<?= $service->serviceIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/services/<?= $service->serviceIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/services/<?= $service->serviceIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="12"><div class="no-data-box"><p class="no-data-message">No services found.</p><a href="<?= ROOT ?>/admin/services/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
