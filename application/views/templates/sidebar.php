<?php
// sidebar.php — Sistem Pengajuan Proposal
// Cara pakai: <?php include 'sidebar.php'; ?>

// Tentukan halaman aktif berdasarkan URL
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/sidebar.css">

<div class="sidebar" id="sidebar">

    <!-- Brand -->
    <div class="sidebar-top">
        <div class="logo-mark">
            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4h3v3H4zM9 4h3v3H9zM6.5 9.5l1.5-2.5 1.5 2.5H6.5z" fill="#fff"/>
                <circle cx="5.5" cy="11.5" r="1.5" fill="#fff"/>
            </svg>
        </div>
        <span class="brand-name">Sistem Proposal</span>
    </div>

    <!-- Toggle collapse button -->
    <button class="sidebar-toggle" id="sidebarToggle" onclick="toggleSidebar()" title="Toggle Sidebar">
        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M7.5 2.5L4.5 6l3 3.5"/>
        </svg>
    </button>

    <!-- Nav: Menu Utama -->
    <nav class="nav-group">
        <div class="nav-label">Menu</div>

        <a href="/dashboard" class="nav-item <?= $current_page === 'dashboard' ? 'active' : '' ?>">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M1 2a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H2a1 1 0 01-1-1V2zm0 7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H2a1 1 0 01-1-1V9zm7-7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H9a1 1 0 01-1-1V2zm0 7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H9a1 1 0 01-1-1V9z"/></svg>
            </span>
            <span class="nav-text">Dashboard</span>
        </a>

        <a href="/pengajuan" class="nav-item <?= $current_page === 'pengajuan' ? 'active' : '' ?>">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M2.5 3A1.5 1.5 0 001 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0115 5.293V4.5A1.5 1.5 0 0013.5 3h-11z"/><path d="M15 6.954L8.978 9.86a2.25 2.25 0 01-1.956 0L1 6.954V11.5A1.5 1.5 0 002.5 13h11a1.5 1.5 0 001.5-1.5V6.954z"/></svg>
            </span>
            <span class="nav-text">Pengajuan</span>
            <?php
            // Ganti dengan query DB untuk jumlah proposal pending
            $pending = 3;
            if ($pending > 0): ?>
                <span class="nav-badge"><?= $pending ?></span>
            <?php endif; ?>
        </a>

        <a href="/riwayat" class="nav-item <?= $current_page === 'riwayat' ? 'active' : '' ?>">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M4 1.5H3a2 2 0 00-2 2V14a2 2 0 002 2h10a2 2 0 002-2V3.5a2 2 0 00-2-2h-1v1h1a1 1 0 011 1V14a1 1 0 01-1 1H3a1 1 0 01-1-1V3.5a1 1 0 011-1h1v-1z"/><path d="M9.5 1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5h3zm-3-1A1.5 1.5 0 005 1.5v1A1.5 1.5 0 006.5 4h3A1.5 1.5 0 0011 2.5v-1A1.5 1.5 0 009.5 0h-3z"/></svg>
            </span>
            <span class="nav-text">Riwayat</span>
        </a>

        <a href="/status" class="nav-item <?= $current_page === 'status' ? 'active' : '' ?>">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 16A8 8 0 108 0a8 8 0 000 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 110-2 1 1 0 010 2z"/></svg>
            </span>
            <span class="nav-text">Status</span>
        </a>
    </nav>

    <!-- Nav: Akun -->
    <nav class="nav-group">
        <div class="nav-label">Akun</div>

        <a href="/pengaturan" class="nav-item <?= $current_page === 'pengaturan' ? 'active' : '' ?>">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 01-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 01-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 01.52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 011.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 011.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 01.52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 01-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 01-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 002.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 001.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 00-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 00-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 00-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 001.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 003.06 4.474l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 002.692-1.115l.094-.319z"/><path d="M8 5.754a2.246 2.246 0 100 4.492 2.246 2.246 0 000-4.492z"/></svg>
            </span>
            <span class="nav-text">Pengaturan</span>
        </a>

        <a href="/logout" class="nav-item" onclick="return confirm('Yakin ingin keluar?')">
            <span class="nav-icon">
                <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M10 12.5a.5.5 0 01-.5.5h-8a.5.5 0 01-.5-.5v-9a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v2a.5.5 0 001 0v-2A1.5 1.5 0 009.5 2h-8A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h8a1.5 1.5 0 001.5-1.5v-2a.5.5 0 00-1 0v2z"/><path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 000-.708l-3-3a.5.5 0 10-.708.708L14.293 7.5H5.5a.5.5 0 000 1h8.793l-2.147 2.146a.5.5 0 00.708.708l3-3z"/></svg>
            </span>
            <span class="nav-text">Keluar</span>
        </a>
    </nav>

    <!-- Footer: User Info -->
    <div class="sidebar-footer">
        <a href="/profil" class="user-row">
            <div class="user-avatar">
                <?php
                // Ambil inisial dari nama user session
                $nama = $_SESSION['nama'] ?? 'Mahasiswa';
                $inisial = implode('', array_map(fn($w) => strtoupper($w[0]), explode(' ', $nama)));
                echo substr($inisial, 0, 2);
                ?>
            </div>
            <div class="user-info">
                <div class="user-name"><?= htmlspecialchars($_SESSION['nama'] ?? 'Mahasiswa') ?></div>
                <div class="user-role"><?= htmlspecialchars($_SESSION['prodi'] ?? 'Mahasiswa') ?></div>
            </div>
        </a>
    </div>

</div>

<!-- Mobile overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const isMobile = window.innerWidth <= 768;
    if (isMobile) {
        sidebar.classList.toggle('open');
        document.getElementById('sidebarOverlay').style.display =
            sidebar.classList.contains('open') ? 'block' : 'none';
    } else {
        sidebar.classList.toggle('collapsed');
        localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
    }
}

function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('open');
    document.getElementById('sidebarOverlay').style.display = 'none';
}

// Restore collapsed state on desktop
document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth > 768 && localStorage.getItem('sidebarCollapsed') === 'true') {
        document.getElementById('sidebar').classList.add('collapsed');
    }
});
</script>
