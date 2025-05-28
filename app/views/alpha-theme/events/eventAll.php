<div class="dashboard">
  <div class="top-row">
    <h2>Events</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/events/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/events/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/events/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_eventsTitle">Sort:</label>
  <select name="sort_eventsTitle" id="sort_eventsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_eventsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_eventsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Event Id</th>
          <th>Event Title</th>
          <th>Event Description</th>
          <th>Event Date</th>
          <th>Location</th>
          <th>Organised By</th>
          <th>Event Feature Image</th>
          <th>Event Created At</th>
          <th>Event Updated At</th>
          <th>Event Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($events)) : ?>
<?php foreach ($events as $index => $event) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $event->eventIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($event->eventId) ? htmlspecialchars($event->eventId) : "-" ?></td>
          <td><?= isset($event->eventTitle) ? htmlspecialchars($event->eventTitle) : "-" ?></td>
          <td><?= isset($event->eventDescription) ? htmlspecialchars($event->eventDescription) : "-" ?></td>
          <td><?= strtotime($event->eventDate) ? date("d M y, H:i", strtotime($event->eventDate)) : "-" ?></td>
          <td><?= isset($event->location) ? htmlspecialchars($event->location) : "-" ?></td>
          <td><?= isset($event->organisedBy) ? htmlspecialchars($event->organisedBy) : "-" ?></td>
          <td>
            <?php if (!empty($event->eventFeatureImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $event->eventFeatureImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= strtotime($event->eventCreatedAt) ? date("d M y, H:i", strtotime($event->eventCreatedAt)) : "-" ?></td>
          <td><?= strtotime($event->eventUpdatedAt) ? date("d M y, H:i", strtotime($event->eventUpdatedAt)) : "-" ?></td>
          <td><?= isset($event->eventIdentify) ? htmlspecialchars($event->eventIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/events/<?= $event->eventIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/events/<?= $event->eventIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/events/<?= $event->eventIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No events found.</p><a href="<?= ROOT ?>/admin/events/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
