<div class="dashboard">
  <div class="top-row">
    <h2>Meta_seo</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/meta_seo/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/meta_seo/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/meta_seo/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_meta_seoTitle">Sort:</label>
  <select name="sort_meta_seoTitle" id="sort_meta_seoTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_meta_seoCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_meta_seoCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Id</th>
          <th>Page Slug</th>
          <th>Meta Title</th>
          <th>Meta Description</th>
          <th>Meta Keywords</th>
          <th>Image Feature</th>
          <th>Image Alt</th>
          <th>Canonical U R L</th>
          <th>Meta Author</th>
          <th>Meta_seo Created At</th>
          <th>Meta_seo Updated At</th>
          <th>Meta_seo Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($meta_seo)) : ?>
<?php foreach ($meta_seo as $index => $meta_seo) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $meta_seo->meta_seoIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($meta_seo->id) ? htmlspecialchars($meta_seo->id) : "-" ?></td>
          <td><?= isset($meta_seo->pageSlug) ? htmlspecialchars($meta_seo->pageSlug) : "-" ?></td>
          <td><?= isset($meta_seo->metaTitle) ? htmlspecialchars($meta_seo->metaTitle) : "-" ?></td>
          <td><?= isset($meta_seo->metaDescription) ? htmlspecialchars($meta_seo->metaDescription) : "-" ?></td>
          <td><?= isset($meta_seo->metaKeywords) ? htmlspecialchars($meta_seo->metaKeywords) : "-" ?></td>
          <td>
            <?php if (!empty($meta_seo->imageFeature)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $meta_seo->imageFeature ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($meta_seo->imageAlt) ? htmlspecialchars($meta_seo->imageAlt) : "-" ?></td>
          <td><?= isset($meta_seo->canonicalURL) ? htmlspecialchars($meta_seo->canonicalURL) : "-" ?></td>
          <td><?= isset($meta_seo->metaAuthor) ? htmlspecialchars($meta_seo->metaAuthor) : "-" ?></td>
          <td><?= strtotime($meta_seo->meta_seoCreatedAt) ? date("d M y, H:i", strtotime($meta_seo->meta_seoCreatedAt)) : "-" ?></td>
          <td><?= strtotime($meta_seo->meta_seoUpdatedAt) ? date("d M y, H:i", strtotime($meta_seo->meta_seoUpdatedAt)) : "-" ?></td>
          <td><?= isset($meta_seo->meta_seoIdentify) ? htmlspecialchars($meta_seo->meta_seoIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/meta_seo/<?= $meta_seo->meta_seoIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="15"><div class="no-data-box"><p class="no-data-message">No meta_seo found.</p><a href="<?= ROOT ?>/admin/meta_seo/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
