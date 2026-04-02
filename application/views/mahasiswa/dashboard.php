<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Sistem Pengajuan Proposal</title>
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>

<div class="dashboard">

    <!-- ══════════════════════════════
         SIDEBAR
    ══════════════════════════════ -->
    <aside class="sidebar" id="sidebar">
        

        <!-- Brand -->
        <div class="sidebar-top">
            <div class="logo-mark">
                <svg viewBox="0 0 16 16" fill="none">
                    <path d="M4 4h3v3H4zM9 4h3v3H9zM6.5 9.5l1.5-2.5 1.5 2.5H6.5z" fill="#fff"/>
                    <circle cx="5.5" cy="11.5" r="1.5" fill="#fff"/>
                </svg>
            </div>
            <span class="brand-name">Sistem Proposal</span>
        </div>

        <!-- Toggle collapse -->
        <button class="sidebar-toggle" id="sidebarToggle" onclick="toggleSidebar()">
            <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M7.5 2.5L4.5 6l3 3.5"/>
            </svg>
        </button>

        <!-- Nav: Menu -->
        <nav class="nav-group">
            <div class="nav-label">Menu</div>

            <a href="dashboard.html" class="nav-item active">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path d="M1 2a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H2a1 1 0 01-1-1V2zm0 7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H2a1 1 0 01-1-1V9zm7-7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H9a1 1 0 01-1-1V2zm0 7a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H9a1 1 0 01-1-1V9z"/>
                    </svg>
                </span>
                <span class="nav-text">Dashboard</span>
            </a>

            <a href="pengajuan.html" class="nav-item">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path d="M2.5 3A1.5 1.5 0 001 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0115 5.293V4.5A1.5 1.5 0 0013.5 3h-11z"/>
                        <path d="M15 6.954L8.978 9.86a2.25 2.25 0 01-1.956 0L1 6.954V11.5A1.5 1.5 0 002.5 13h11a1.5 1.5 0 001.5-1.5V6.954z"/>
                    </svg>
                </span>
                <span class="nav-text">Pengajuan</span>
                <span class="nav-badge">3</span>
            </a>

            <a href="riwayat.html" class="nav-item">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path d="M4 1.5H3a2 2 0 00-2 2V14a2 2 0 002 2h10a2 2 0 002-2V3.5a2 2 0 00-2-2h-1v1h1a1 1 0 011 1V14a1 1 0 01-1 1H3a1 1 0 01-1-1V3.5a1 1 0 011-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5h3zm-3-1A1.5 1.5 0 005 1.5v1A1.5 1.5 0 006.5 4h3A1.5 1.5 0 0011 2.5v-1A1.5 1.5 0 009.5 0h-3z"/>
                    </svg>
                </span>
                <span class="nav-text">Riwayat</span>
            </a>

            <a href="status.html" class="nav-item">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path d="M8 16A8 8 0 108 0a8 8 0 000 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 110-2 1 1 0 010 2z"/>
                    </svg>
                </span>
                <span class="nav-text">Status</span>
            </a>
        </nav>

        <!-- Nav: Akun -->
        <nav class="nav-group">
            <div class="nav-label">Akun</div>

            <a href="pengaturan.html" class="nav-item">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 01-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 01-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 01.52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 011.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 011.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 01.52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 01-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 01-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 002.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 001.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 00-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 00-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 00-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 001.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 003.06 4.474l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 002.692-1.115l.094-.319z"/>
                        <path d="M8 5.754a2.246 2.246 0 100 4.492 2.246 2.246 0 000-4.492z"/>
                    </svg>
                </span>
                <span class="nav-text">Pengaturan</span>
            </a>

            <a href="login.html" class="nav-item" onclick="return confirm('Yakin ingin keluar?')">
                <span class="nav-icon">
                    <svg viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 01-.5.5h-8a.5.5 0 01-.5-.5v-9a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v2a.5.5 0 001 0v-2A1.5 1.5 0 009.5 2h-8A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h8a1.5 1.5 0 001.5-1.5v-2a.5.5 0 00-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 000-.708l-3-3a.5.5 0 10-.708.708L14.293 7.5H5.5a.5.5 0 000 1h8.793l-2.147 2.146a.5.5 0 00.708.708l3-3z"/>
                    </svg>
                </span>
                <span class="nav-text">Keluar</span>
            </a>
        </nav>

        <!-- Footer: User -->
        <div class="sidebar-footer">
            <a href="profil.html" class="user-row">
                <div class="user-avatar">BS</div>
                <div class="user-info">
                    <div class="user-name">Budi Santoso</div>
                    <div class="user-role">S1 Teknik Informatika</div>
                </div>
            </a>
        </div>

    </aside>

    <!-- Overlay mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- ══════════════════════════════
         MAIN CONTENT
    ══════════════════════════════ -->
    <main class="content">

        <!-- Topbar -->
        <div class="topbar">
            <div style="display:flex; align-items:center;">
                <button class="menu-toggle" onclick="toggleSidebar()">
                    <svg viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2z"/>
                    </svg>
                </button>
                <div class="topbar-left">
                    <h1>Dashboard</h1>
                    <p>Selamat datang, Budi Santoso</p>
                </div>
            </div>
            <a href="buat-proposal.html" class="btn-primary">
                <svg viewBox="0 0 16 16" fill="currentColor">
                    <path d="M8 2a.5.5 0 01.5.5v5h5a.5.5 0 010 1h-5v5a.5.5 0 01-1 0v-5h-5a.5.5 0 010-1h5v-5A.5.5 0 018 2z"/>
                </svg>
                Ajukan Proposal
            </a>
        </div>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Proposal Aktif</div>
                <div class="stat-value">3</div>
                <div class="stat-sub" style="color:#6B3EE8;">Sedang diproses</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Disetujui</div>
                <div class="stat-value">7</div>
                <div class="stat-sub" style="color:#22c55e;">Total disetujui</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Ditolak</div>
                <div class="stat-value">1</div>
                <div class="stat-sub" style="color:#ef4444;">Perlu ditinjau</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Total Pengajuan</div>
                <div class="stat-value">11</div>
                <div class="stat-sub" style="color:#888;">Sepanjang waktu</div>
            </div>
        </div>

        <!-- Two Column -->
        <div class="two-col">

            <!-- Tabel Proposal -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Proposal Terbaru</span>
                    <a href="riwayat.html" class="card-link">Lihat semua</a>
                </div>
                <table class="proposal-table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-judul">Sistem Monitoring Kehadiran Berbasis IoT</td>
                            <td class="td-jenis">Tugas Akhir</td>
                            <td><span class="status-badge" style="background:#dcfce7; color:#166534;">Disetujui</span></td>
                            <td class="td-tgl">12 Mar 2025</td>
                        </tr>
                        <tr>
                            <td class="td-judul">Aplikasi Manajemen PKM Mahasiswa</td>
                            <td class="td-jenis">PKM-K</td>
                            <td><span class="status-badge" style="background:#ede9fe; color:#5b21b6;">Diproses</span></td>
                            <td class="td-tgl">28 Mar 2025</td>
                        </tr>
                        <tr>
                            <td class="td-judul">Analisis Sentimen Media Sosial dengan NLP</td>
                            <td class="td-jenis">PKM-RE</td>
                            <td><span class="status-badge" style="background:#fef3c7; color:#92400e;">Revisi</span></td>
                            <td class="td-tgl">01 Apr 2025</td>
                        </tr>
                        <tr>
                            <td class="td-judul">Rancang Bangun Robot Line Follower</td>
                            <td class="td-jenis">PKM-KC</td>
                            <td><span class="status-badge" style="background:#fee2e2; color:#991b1b;">Ditolak</span></td>
                            <td class="td-tgl">15 Feb 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Aktivitas -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Aktivitas Terbaru</span>
                </div>

                <div class="aktivitas-item">
                    <div class="aktivitas-dot" style="background:#6B3EE8;"></div>
                    <div style="flex:1;">
                        <div class="aktivitas-label">Proposal PKM-K baru diajukan</div>
                        <div class="aktivitas-waktu">2 jam lalu</div>
                    </div>
                </div>

                <div class="aktivitas-item">
                    <div class="aktivitas-dot" style="background:#22c55e;"></div>
                    <div style="flex:1;">
                        <div class="aktivitas-label">Proposal Tugas Akhir disetujui</div>
                        <div class="aktivitas-waktu">1 hari lalu</div>
                    </div>
                </div>

                <div class="aktivitas-item">
                    <div class="aktivitas-dot" style="background:#f59e0b;"></div>
                    <div style="flex:1;">
                        <div class="aktivitas-label">Revisi diminta oleh dosen pembimbing</div>
                        <div class="aktivitas-waktu">3 hari lalu</div>
                    </div>
                </div>

                <div class="aktivitas-item">
                    <div class="aktivitas-dot" style="background:#ef4444;"></div>
                    <div style="flex:1;">
                        <div class="aktivitas-label">Proposal PKM-T ditolak</div>
                        <div class="aktivitas-waktu">1 minggu lalu</div>
                    </div>
                </div>

                <div class="aktivitas-item">
                    <div class="aktivitas-dot" style="background:#6B3EE8;"></div>
                    <div style="flex:1;">
                        <div class="aktivitas-label">Akun berhasil diverifikasi</div>
                        <div class="aktivitas-waktu">2 minggu lalu</div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /two-col -->

    </main>

</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
            sidebar.classList.toggle('open');
            overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
        } else {
            sidebar.classList.toggle('collapsed');
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        }
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.remove('open');
        overlay.style.display = 'none';
    }

    // Restore collapsed state on desktop
    window.addEventListener('DOMContentLoaded', function () {
        if (window.innerWidth > 768 && localStorage.getItem('sidebarCollapsed') === 'true') {
            document.getElementById('sidebar').classList.add('collapsed');
        }
    });
</script>

</body>
</html>