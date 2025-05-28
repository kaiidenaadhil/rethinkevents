<div class="dashboard">
  <div class="top-row">
    <h2>Teams</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/teams/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/teams/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/teams/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_teamsTitle">Sort:</label>
  <select name="sort_teamsTitle" id="sort_teamsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_teamsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_teamsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Team Id</th>
          <th>Member Name</th>
          <th>Designation</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Profile Image</th>
          <th>Bio</th>
          <th>Team Created At</th>
          <th>Team Updated At</th>
          <th>Team Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($teams)) : ?>
<?php foreach ($teams as $index => $team) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $team->teamIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($team->teamId) ? htmlspecialchars($team->teamId) : "-" ?></td>
          <td><?= isset($team->memberName) ? htmlspecialchars($team->memberName) : "-" ?></td>
          <td><?= isset($team->designation) ? htmlspecialchars($team->designation) : "-" ?></td>
          <td><?= isset($team->email) ? htmlspecialchars($team->email) : "-" ?></td>
          <td><?= isset($team->mobile) ? htmlspecialchars($team->mobile) : "-" ?></td>
          <td>
            <?php if (!empty($team->profileImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $team->profileImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($team->bio) ? htmlspecialchars($team->bio) : "-" ?></td>
          <td><?= strtotime($team->teamCreatedAt) ? date("d M y, H:i", strtotime($team->teamCreatedAt)) : "-" ?></td>
          <td><?= strtotime($team->teamUpdatedAt) ? date("d M y, H:i", strtotime($team->teamUpdatedAt)) : "-" ?></td>
          <td><?= isset($team->teamIdentify) ? htmlspecialchars($team->teamIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/teams/<?= $team->teamIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/teams/<?= $team->teamIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/teams/<?= $team->teamIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No teams found.</p><a href="<?= ROOT ?>/admin/teams/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
