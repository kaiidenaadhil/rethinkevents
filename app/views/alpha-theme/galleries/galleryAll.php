<div class="dashboard">
  <div class="top-row">
    <h2>Galleries</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/galleries/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/galleries/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/galleries/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_galleriesTitle">Sort:</label>
  <select name="sort_galleriesTitle" id="sort_galleriesTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_galleriesCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_galleriesCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Gallery Id</th>
          <th>Gallery Media</th>
          <th>Caption</th>
          <th>Event Id</th>
          <th>Gallery Created At</th>
          <th>Gallery Updated At</th>
          <th>Gallery Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($galleries)) : ?>
<?php foreach ($galleries as $index => $gallery) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $gallery->galleryIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($gallery->galleryId) ? htmlspecialchars($gallery->galleryId) : "-" ?></td>
          <td>
            <?php if (!empty($gallery->galleryMedia)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $gallery->galleryMedia ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($gallery->caption) ? htmlspecialchars($gallery->caption) : "-" ?></td>
          <td><?= isset($gallery->eventId) ? htmlspecialchars($gallery->eventId) : "-" ?></td>
          <td><?= strtotime($gallery->galleryCreatedAt) ? date("d M y, H:i", strtotime($gallery->galleryCreatedAt)) : "-" ?></td>
          <td><?= strtotime($gallery->galleryUpdatedAt) ? date("d M y, H:i", strtotime($gallery->galleryUpdatedAt)) : "-" ?></td>
          <td><?= isset($gallery->galleryIdentify) ? htmlspecialchars($gallery->galleryIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/galleries/<?= $gallery->galleryIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/galleries/<?= $gallery->galleryIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/galleries/<?= $gallery->galleryIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="10"><div class="no-data-box"><p class="no-data-message">No galleries found.</p><a href="<?= ROOT ?>/admin/galleries/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
