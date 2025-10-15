<?php
include($_SERVER['DOCUMENT_ROOT'] . "/pawtrack/frontend/partials/admin-session.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = "PawTrack - Audit Logs";
include($_SERVER['DOCUMENT_ROOT'] . "/pawtrack/frontend/partials/head.php");
?>

<body>
    <!-- Top Brown Bar -->
    <div class="top-bar"></div>

    <!-- Navigation Bar -->
    <nav class="navbar admin-navbar">
        <div class="nav-container">
            <div class="logo">PawTrack</div>
            <div class="admin-search-bar">
                <input type="text" placeholder="Search User by Name / Email / ID" class="admin-search-input">
                <button class="admin-search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="admin-nav-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="admin-main-content">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="admin-profile-card">
                <img src="/pawtrack/storage/images/admin/<?= $pic ?>" alt="Admin Profile" class="vet-profile-image">
                <h3 class="admin-title">Admin</h3>
                <p class="admin-subtitle"><?= $fname . ' ' . $sname ?></p>

                <div class="admin-menu">
                    <button class="admin-menu-item" onclick="location.href='admin-management.php'">
                        <i class="fa-solid fa-users-gear"></i> Management
                    </button>
                    <button class="admin-menu-item active" onclick="location.href='admin-audit.php'">
                        <i class="fa-solid fa-clock-rotate-left"></i> Audit Logs
                    </button>
                </div>

                <button class="admin-logout-btn" onclick="adminLogout()">
                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                </button>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="admin-content-area">
            <h2 class="admin-table-title">Table 1</h2>
            <div class="admin-table-container">
                <table class="admin-audit-table">
                    <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sept 25, 2025 10:35</td>
                            <td>Dr. Maria Santos</td>
                            <td>Veterinarian</td>
                            <td>Updated vaccination record for Mochi</td>
                            <td class="status-success">Success</td>
                        </tr>
                        <tr>
                            <td>Sept 25, 2025 09:50</td>
                            <td>Julia Denina</td>
                            <td>Pet Owner</td>
                            <td>Logged in</td>
                            <td class="status-success">Success</td>
                        </tr>
                        <tr>
                            <td>Sept 24, 2025 16:26</td>
                            <td>Admin: Paul Tan</td>
                            <td>Administrator</td>
                            <td>Created new user account for Vet ID VET-105</td>
                            <td class="status-success">Success</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Paw Print Background Pattern -->
    <div class="paw-pattern"></div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=" /pawtrack/assets/js/script.js"></script>
</body>

</html>