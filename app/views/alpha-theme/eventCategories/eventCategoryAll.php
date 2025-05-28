<div class="dashboard">
  <div class="top-row">
    <h2>EventCategories</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/eventCategories/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/eventCategories/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/eventCategories/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
  <div class="filter-row">
    <button>ASC</button> <button>DESC</button>
    <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/eventCategories/truncate"></form>
  </div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Event Category Id</th>
          <th>Event Category Name</th>
          <th>Event Category U R I</th>
          <th>Event Category Feature Img</th>
          <th>Even Category Tags</th>
          <th>Event Category Created At</th>
          <th>Event Category Updated At</th>
          <th>Event Category Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($eventcategories)) : ?>
<?php foreach ($eventcategories as $index => $eventCategory) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $eventCategory->eventCategoryIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($eventCategory->eventCategoryId) ? htmlspecialchars($eventCategory->eventCategoryId) : "-" ?></td>
          <td><?= isset($eventCategory->eventCategoryName) ? htmlspecialchars($eventCategory->eventCategoryName) : "-" ?></td>
          <td><?= isset($eventCategory->eventCategoryURI) ? htmlspecialchars($eventCategory->eventCategoryURI) : "-" ?></td>
          <td>
            <?php if (!empty($eventCategory->eventCategoryFeatureImg)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $eventCategory->eventCategoryFeatureImg ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($eventCategory->evenCategoryTags) ? htmlspecialchars($eventCategory->evenCategoryTags) : "-" ?></td>
          <td><?= strtotime($eventCategory->eventCategoryCreatedAt) ? date("d M y, H:i", strtotime($eventCategory->eventCategoryCreatedAt)) : "-" ?></td>
          <td><?= strtotime($eventCategory->eventCategoryUpdatedAt) ? date("d M y, H:i", strtotime($eventCategory->eventCategoryUpdatedAt)) : "-" ?></td>
          <td><?= isset($eventCategory->eventCategoryIdentify) ? htmlspecialchars($eventCategory->eventCategoryIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategory->eventCategoryIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategory->eventCategoryIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategory->eventCategoryIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="11"><div class="no-data-box"><p class="no-data-message">No eventCategories found.</p><a href="<?= ROOT ?>/admin/eventCategories/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
