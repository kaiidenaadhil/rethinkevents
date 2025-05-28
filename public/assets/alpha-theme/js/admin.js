// script.js

// ========== Sidebar ========== //
const body = document.body;
const sidebar = document.getElementById('sidebar');

function toggleSidebar() {
  const wasExpanded = !sidebar.classList.contains('collapsed');
  sidebar.classList.toggle('collapsed');
  if (wasExpanded) {
    document.querySelectorAll('.submenu').forEach(sub => sub.style.display = 'none');
    document.querySelectorAll('.menu > ul > li').forEach(li => li.classList.remove('active'));
  }
  document.getElementById('userDropdown')?.classList.remove('active');
}

function toggleUserDropdown() {
  document.getElementById('userDropdown').classList.toggle('active');
}

function toggleSubmenu(clickedLi) {
  const isCollapsed = sidebar.classList.contains('collapsed');
  const submenu = clickedLi.nextElementSibling;
  if (!submenu || !submenu.classList.contains('submenu')) return;
  if (isCollapsed) {
    sidebar.classList.remove('collapsed');
    setTimeout(() => {
      openSubmenu(clickedLi, submenu);
    }, 300);
  } else {
    openSubmenu(clickedLi, submenu);
  }
}

function openSubmenu(clickedLi, submenu) {
  document.querySelectorAll('.menu > ul > li').forEach(li => li !== clickedLi && li.classList.remove('active'));
  document.querySelectorAll('.submenu').forEach(sub => sub !== submenu && (sub.style.display = 'none'));
  const isActive = clickedLi.classList.contains('active');
  submenu.style.display = isActive ? 'none' : 'flex';
  clickedLi.classList.toggle('active');
}

// ========== Theme ========== //
function toggleTheme() {
  const current = body.classList.contains('dark') ? 'light' : 'dark';
  body.className = current;
  localStorage.setItem('theme', current);
  const icon = document.querySelector('.theme-toggle i');
  icon.className = current === 'dark' ? 'uil uil-sun' : 'uil uil-moon';
}

document.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme') || 'light';
  body.className = savedTheme;

  // Update icon based on saved theme
  const icon = document.querySelector('.theme-toggle i');
  if (icon) {
    icon.className = savedTheme === 'dark' ? 'uil uil-sun' : 'uil uil-moon';
  }

  updateNotificationBadge();
});


// ========== Notification ========== //
const notifications = [
  { icon: "uil-envelope", title: "New Message", content: "You have a new message from John.", time: "2 minutes ago", read: false },
  { icon: "uil-user-plus", title: "New Signup", content: "A new user has joined your platform.", time: "10 minutes ago", read: true },
  { icon: "uil-comment", title: "Comment Reply", content: "Anna replied to your comment.", time: "20 minutes ago", read: false },
  { icon: "uil-star", title: "New Review", content: "You received a 5-star review.", time: "1 hour ago", read: true },
  { icon: "uil-bug", title: "Bug Report", content: "A bug was reported in checkout.", time: "2 hours ago", read: false },
  { icon: "uil-rocket", title: "System Update", content: "Platform updated successfully.", time: "Yesterday", read: true }
];

function updateNotificationBadge() {
  const unreadCount = notifications.filter(n => !n.read).length;
  const badge = document.getElementById("notificationCount");
  badge.textContent = unreadCount > 0 ? unreadCount : "";
  badge.style.display = unreadCount > 0 ? "inline-block" : "none";
}

function renderNotifications() {
  const container = document.getElementById("notificationList");
  if (notifications.length === 0) {
    container.innerHTML = '<div class="notification-empty">No new notifications</div>';
  } else {
    container.innerHTML = notifications.map((notif, index) => `
      <div class="notification-item" style="background:${notif.read ? 'transparent' : 'rgba(37, 99, 235, 0.08)'}">
        <i class="uil ${notif.icon}"></i>
        <div onclick="markAsRead(${index})" style="cursor: pointer">
          <strong>${notif.title}</strong>
          <p>${notif.content}</p>
          <span>${notif.time}</span>
        </div>
        <button class="dismiss-btn" onclick="dismissNotification(event, ${index})">×</button>
      </div>
    `).join('');
  }
  updateNotificationBadge();
}

function toggleNotifications() {
  const dropdown = document.getElementById("notificationDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  document.getElementById("moreDropdown").style.display = "none";
  renderNotifications();
}

function markAllAsRead(event) {
  event.stopPropagation();
  notifications.forEach(n => n.read = true);
  renderNotifications();
}

function markAsRead(index) {
  if (!notifications[index].read) {
    notifications[index].read = true;
    renderNotifications();
  }
}

function dismissNotification(event, index) {
  event.stopPropagation();
  notifications.splice(index, 1);
  renderNotifications();
}

function toggleMoreMenu() {
  const dropdown = document.getElementById("moreDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  document.getElementById("notificationDropdown").style.display = "none";
}

window.addEventListener("click", function (e) {
  if (!e.target.closest(".notification-wrapper") && !e.target.closest(".more-wrapper")) {
    document.getElementById("notificationDropdown").style.display = "none";
    document.getElementById("moreDropdown").style.display = "none";
  }
});

// ========== Table & Truncate ========== //
function toggleDropdown(el) {
  document.querySelectorAll(".action-dropdown").forEach(d => d.style.display = "none");
  const dropdown = el.nextElementSibling;
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

document.addEventListener("click", function (e) {
  if (!e.target.matches(".action-menu span")) {
    document.querySelectorAll(".action-dropdown").forEach(d => d.style.display = "none");
  }
});

function toggleAll(source) {
  document.querySelectorAll(".row-check").forEach(cb => cb.checked = source.checked);
  toggleTruncateBar();
}

document.querySelectorAll(".row-check").forEach(cb => {
  cb.addEventListener("change", toggleTruncateBar);
});

function toggleTruncateBar() {
  const selected = document.querySelectorAll(".row-check:checked");
  document.getElementById("truncateBar").style.display = selected.length > 0 ? "flex" : "none";
}

function toggleTruncateBar() {
  const selected = document.querySelectorAll(".row-check:checked");
  const ids = Array.from(selected).map(cb => cb.value);

  // Show selected in console
  console.log("Selected Project IDs:", ids);

  // Show/hide the truncate button bar
  document.getElementById("truncateBar").style.display = ids.length > 0 ? "block" : "none";
}
function truncateSelected() {
  const selected = document.querySelectorAll(".row-check:checked");

  if (selected.length === 0) {
    alert("Please select at least one item to delete.");
    return;
  }

  if (!confirm("Are you sure you want to delete the selected item(s)?")) return;

  const form = document.getElementById("truncateForm");
  form.innerHTML = '';

  selected.forEach(cb => {
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedIds[]';
    input.value = cb.value;
    form.appendChild(input);
  });

  form.submit();
}

function truncateAll() {
  if (!confirm("Are you sure you want to delete ALL records? This cannot be undone.")) return;

  const form = document.getElementById("truncateForm");
  form.innerHTML = ''; // Send empty
  form.submit();
}



document.getElementById("searchInput")?.addEventListener("input", function () {
  const val = this.value.toLowerCase();
  document.querySelectorAll("#tableBody tr").forEach(row => {
    row.style.display = row.innerText.toLowerCase().includes(val) ? "" : "none";
  });
});

function handleImport(input) {
  const file = input.files[0];
  if (file) {
    alert(`Imported: ${file.name}`);
    // TODO: Add file processing logic
  }
}


document.addEventListener("DOMContentLoaded", () => {
  const savedTheme = localStorage.getItem('theme') || 'light';
  body.className = savedTheme;

  // Collapse sidebar by default
  sidebar.classList.add('collapsed');

  // Expand on large screens
  if (window.innerWidth > 768) {
    sidebar.classList.remove('collapsed');
  }

  updateNotificationBadge();
});
window.addEventListener("resize", () => {
  if (window.innerWidth <= 768) {
    sidebar.classList.add('collapsed');
  } else {
    sidebar.classList.remove('collapsed');
  }
});

const themes = {
  default: {
    '--primary': '#2563eb',
    '--primary-hover': '#1d4ed8',
    '--secondary': '#64748b',
    '--light-bg': '#f8fafc',
    '--dark-bg': '#0f172a',
    '--card-bg': '#1e293b',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#1e293b',
    '--text-light': '#1e293b',
    '--text-dark': '#e2e8f0',
    '--muted-text': '#94a3b8',
    '--border-light': '#e2e8f0',
    '--border-dark': '#334155',
    '--success': '#22c55e',
    '--warning': '#facc15',
    '--error': '#ef4444',
    '--link-color': '#2563eb',
    '--link-hover-color': '#1d4ed8',
    '--link-visited-color': '#7c3aed'
  },
  ocean: {
    '--primary': '#0ea5e9',
    '--primary-hover': '#0284c7',
    '--secondary': '#64748b',
    '--light-bg': '#f0f9ff',
    '--dark-bg': '#0f172a',
    '--card-bg': '#1e293b',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#1e293b',
    '--text-light': '#0f172a',
    '--text-dark': '#e2e8f0',
    '--muted-text': '#94a3b8',
    '--border-light': '#dbeafe',
    '--border-dark': '#334155',
    '--success': '#14b8a6',
    '--warning': '#f59e0b',
    '--error': '#ef4444',
    '--link-color': '#0ea5e9',
    '--link-hover-color': '#0284c7',
    '--link-visited-color': '#7dd3fc'
  },
  forest: {
    '--primary': '#16a34a',
    '--primary-hover': '#15803d',
    '--secondary': '#374151',
    '--light-bg': '#f7fee7',
    '--dark-bg': '#1a2e2b',
    '--card-bg': '#1e3a2d',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#1e3a2d',
    '--text-light': '#1f2937',
    '--text-dark': '#ecfdf5',
    '--muted-text': '#9ca3af',
    '--border-light': '#d1fae5',
    '--border-dark': '#374151',
    '--success': '#22c55e',
    '--warning': '#facc15',
    '--error': '#dc2626',
    '--link-color': '#16a34a',
    '--link-hover-color': '#15803d',
    '--link-visited-color': '#65a30d'
  },
  grape: {
    '--primary': '#8b5cf6',
    '--primary-hover': '#7c3aed',
    '--secondary': '#6b7280',
    '--light-bg': '#f5f3ff',
    '--dark-bg': '#1e1b4b',
    '--card-bg': '#312e81',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#312e81',
    '--text-light': '#1f2937',
    '--text-dark': '#ede9fe',
    '--muted-text': '#a78bfa',
    '--border-light': '#ddd6fe',
    '--border-dark': '#4338ca',
    '--success': '#10b981',
    '--warning': '#f59e0b',
    '--error': '#f43f5e',
    '--link-color': '#8b5cf6',
    '--link-hover-color': '#7c3aed',
    '--link-visited-color': '#c084fc'
  },
  solar: {
    '--primary': '#f97316',
    '--primary-hover': '#ea580c',
    '--secondary': '#6b7280',
    '--light-bg': '#fff7ed',
    '--dark-bg': '#431407',
    '--card-bg': '#7c2d12',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#7c2d12',
    '--text-light': '#1f2937',
    '--text-dark': '#ffedd5',
    '--muted-text': '#fdba74',
    '--border-light': '#fed7aa',
    '--border-dark': '#78350f',
    '--success': '#22c55e',
    '--warning': '#fbbf24',
    '--error': '#dc2626',
    '--link-color': '#f97316',
    '--link-hover-color': '#ea580c',
    '--link-visited-color': '#fdba74'
  },
  crimson: {
    '--primary': '#dc2626',
    '--primary-hover': '#b91c1c',
    '--secondary': '#4b5563',
    '--light-bg': '#fff1f2',
    '--dark-bg': '#1e1e1e',
    '--card-bg': '#2d2d2d',
    '--input-bg-light': '#ffffff',
    '--input-bg-dark': '#2d2d2d',
    '--text-light': '#1f2937',
    '--text-dark': '#fef2f2',
    '--muted-text': '#fca5a5',
    '--border-light': '#fecaca',
    '--border-dark': '#7f1d1d',
    '--success': '#16a34a',
    '--warning': '#f59e0b',
    '--error': '#dc2626',
    '--link-color': '#dc2626',
    '--link-hover-color': '#b91c1c',
    '--link-visited-color': '#fb7185'
  }
};




function applyTheme(themeName) {
      const selectedTheme = themes[themeName];
      for (const [key, value] of Object.entries(selectedTheme)) {
        document.documentElement.style.setProperty(key, value);
      }
      localStorage.setItem('admin-theme', themeName);
    }

    document.addEventListener('DOMContentLoaded', () => {
      const savedTheme = localStorage.getItem('admin-theme') || 'default';
      document.getElementById('themeSwitcher').value = savedTheme;
      applyTheme(savedTheme);

      document.getElementById('themeToggleBtn').addEventListener('click', () => {
        document.getElementById('themeDropdown').classList.toggle('hidden');
      });

      document.getElementById('themeSwitcher').addEventListener('change', function () {
        applyTheme(this.value);
      });
    });