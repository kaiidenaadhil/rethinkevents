<div class="dashboard">
  <div class="top-row">
    <h2>Leads</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/leads/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/leads/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/leads/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_leadsTitle">Sort:</label>
  <select name="sort_leadsTitle" id="sort_leadsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_leadsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_leadsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Lead Id</th>
          <th>Client Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Notes</th>
          <th>Interested In</th>
          <th>Status</th>
          <th>Lead Created At</th>
          <th>Lead Updated At</th>
          <th>Lead Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($leads)) : ?>
<?php foreach ($leads as $index => $lead) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $lead->leadIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($lead->leadId) ? htmlspecialchars($lead->leadId) : "-" ?></td>
          <td><?= isset($lead->clientName) ? htmlspecialchars($lead->clientName) : "-" ?></td>
          <td><?= isset($lead->email) ? htmlspecialchars($lead->email) : "-" ?></td>
          <td><?= isset($lead->phone) ? htmlspecialchars($lead->phone) : "-" ?></td>
          <td><?= isset($lead->notes) ? htmlspecialchars($lead->notes) : "-" ?></td>
          <td><?= isset($lead->interestedIn) ? htmlspecialchars($lead->interestedIn) : "-" ?></td>
          <td><?= isset($lead->status) ? htmlspecialchars($lead->status) : "-" ?></td>
          <td><?= strtotime($lead->leadCreatedAt) ? date("d M y, H:i", strtotime($lead->leadCreatedAt)) : "-" ?></td>
          <td><?= strtotime($lead->leadUpdatedAt) ? date("d M y, H:i", strtotime($lead->leadUpdatedAt)) : "-" ?></td>
          <td><?= isset($lead->leadIdentify) ? htmlspecialchars($lead->leadIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No leads found.</p><a href="<?= ROOT ?>/admin/leads/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
