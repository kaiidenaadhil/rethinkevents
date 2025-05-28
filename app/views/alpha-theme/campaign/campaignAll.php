<div class="dashboard">
  <div class="top-row">
    <h2>Campaign</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/campaign/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/campaign/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/campaign/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_campaignTitle">Sort:</label>
  <select name="sort_campaignTitle" id="sort_campaignTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_campaignCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_campaignCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Campaign Id</th>
          <th>Campaign Title</th>
          <th>Campaign Slogan</th>
          <th>Campaign Media</th>
          <th>Campaign Action</th>
          <th>Campaign Created At</th>
          <th>Campaign Updated At</th>
          <th>Campaign Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($campaign)) : ?>
<?php foreach ($campaign as $index => $campaign) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $campaign->campaignIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($campaign->campaignId) ? htmlspecialchars($campaign->campaignId) : "-" ?></td>
          <td><?= isset($campaign->campaignTitle) ? htmlspecialchars($campaign->campaignTitle) : "-" ?></td>
          <td><?= isset($campaign->campaignSlogan) ? htmlspecialchars($campaign->campaignSlogan) : "-" ?></td>
          <td>
            <?php if (!empty($campaign->campaignMedia)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $campaign->campaignMedia ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($campaign->campaignAction) ? htmlspecialchars($campaign->campaignAction) : "-" ?></td>
          <td><?= strtotime($campaign->campaignCreatedAt) ? date("d M y, H:i", strtotime($campaign->campaignCreatedAt)) : "-" ?></td>
          <td><?= strtotime($campaign->campaignUpdatedAt) ? date("d M y, H:i", strtotime($campaign->campaignUpdatedAt)) : "-" ?></td>
          <td><?= isset($campaign->campaignIdentify) ? htmlspecialchars($campaign->campaignIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/campaign/<?= $campaign->campaignIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/campaign/<?= $campaign->campaignIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/campaign/<?= $campaign->campaignIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="11"><div class="no-data-box"><p class="no-data-message">No campaign found.</p><a href="<?= ROOT ?>/admin/campaign/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
