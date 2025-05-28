<div class="dashboard">
  <div class="top-row">
    <h2>Clients</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/clients/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/clients/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/clients/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_clientsTitle">Sort:</label>
  <select name="sort_clientsTitle" id="sort_clientsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_clientsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_clientsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Client Id</th>
          <th>Client Name</th>
          <th>Client Email</th>
          <th>Client Mobile</th>
          <th>Client Address</th>
          <th>Client Image</th>
          <th>Client Reference</th>
          <th>Client Created At</th>
          <th>Client Updated At</th>
          <th>Client Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($clients)) : ?>
<?php foreach ($clients as $index => $client) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $client->clientIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($client->clientId) ? htmlspecialchars($client->clientId) : "-" ?></td>
          <td><?= isset($client->clientName) ? htmlspecialchars($client->clientName) : "-" ?></td>
          <td><?= isset($client->clientEmail) ? htmlspecialchars($client->clientEmail) : "-" ?></td>
          <td><?= isset($client->clientMobile) ? htmlspecialchars($client->clientMobile) : "-" ?></td>
          <td><?= isset($client->clientAddress) ? htmlspecialchars($client->clientAddress) : "-" ?></td>
          <td>
            <?php if (!empty($client->clientImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $client->clientImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($client->clientReference) ? htmlspecialchars($client->clientReference) : "-" ?></td>
          <td><?= strtotime($client->clientCreatedAt) ? date("d M y, H:i", strtotime($client->clientCreatedAt)) : "-" ?></td>
          <td><?= strtotime($client->clientUpdatedAt) ? date("d M y, H:i", strtotime($client->clientUpdatedAt)) : "-" ?></td>
          <td><?= isset($client->clientIdentify) ? htmlspecialchars($client->clientIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/clients/<?= $client->clientIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/clients/<?= $client->clientIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/clients/<?= $client->clientIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No clients found.</p><a href="<?= ROOT ?>/admin/clients/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
