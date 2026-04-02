<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan Proposal</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f4f5fa;
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 210px;
            background: #1e1548;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: fixed;
            top: 0; left: 0;
        }

        .sidebar-logo {
            padding: 20px 18px 16px;
            display: flex; align-items: center; gap: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        .logo-icon {
            width: 30px; height: 30px;
            background: #6c3ce1; border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px; font-weight: 600; color: #fff;
        }

        .logo-text { font-size: 13px; font-weight: 600; color: #fff; }

        .sidebar-section { padding: 18px 12px 6px; }

        .sidebar-label {
            font-size: 10px; font-weight: 500;
            color: rgba(255,255,255,0.3);
            letter-spacing: 0.1em; text-transform: uppercase;
            padding: 0 6px; margin-bottom: 6px;
        }

        .nav-item {
            display: flex; align-items: center; gap: 10px;
            padding: 8px 10px; border-radius: 8px;
            font-size: 13px; color: rgba(255,255,255,0.5);
            cursor: pointer; margin-bottom: 2px;
            text-decoration: none; transition: all 0.15s;
        }

        .nav-item:hover { background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.85); }
        .nav-item.active { background: #6c3ce1; color: #fff; }
        .nav-item svg { width: 15px; height: 15px; flex-shrink: 0; }

        .nav-badge {
            margin-left: auto;
            background: rgba(255,255,255,0.2);
            color: #fff; font-size: 10px; font-weight: 600;
            padding: 2px 6px; border-radius: 20px;
        }

        .sidebar-bottom {
            margin-top: auto; padding: 14px 12px;
            border-top: 1px solid rgba(255,255,255,0.07);
            display: flex; align-items: center; gap: 10px;
        }

        .avatar-sm {
            width: 30px; height: 30px; border-radius: 50%;
            background: #6c3ce1;
            display: flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 600; color: #fff; flex-shrink: 0;
        }

        .avatar-info p { font-size: 12px; font-weight: 600; color: #fff; }
        .avatar-info span { font-size: 11px; color: rgba(255,255,255,0.35); }

        /* MAIN */
        .main { margin-left: 210px; flex: 1; padding: 32px 36px; min-height: 100vh; }

        .page-header {
            display: flex; align-items: flex-start;
            justify-content: space-between; margin-bottom: 24px;
        }

        .page-title { font-size: 20px; font-weight: 600; color: #1a1a2e; }
        .page-sub { font-size: 13px; color: #9999aa; margin-top: 3px; }

        .btn-outline {
            background: #fff; color: #555;
            border: 1px solid #e4e4ec; border-radius: 7px;
            padding: 7px 14px; font-size: 12px; font-weight: 500;
            cursor: pointer; font-family: inherit;
            display: flex; align-items: center; gap: 6px;
            text-decoration: none;
        }

        .btn-outline:hover { background: #f5f5fa; }

        /* CARD */
        .card { background: #fff; border-radius: 14px; border: 1px solid #ebebf0; overflow: hidden; }

        .card-head {
            padding: 20px 28px 18px;
            border-bottom: 1px solid #f2f2f6;
            display: flex; align-items: center; justify-content: space-between;
        }

        .card-label {
            font-size: 10px; font-weight: 600;
            letter-spacing: 0.1em; text-transform: uppercase;
            color: #bbb; margin-bottom: 3px;
        }

        .card-title { font-size: 16px; font-weight: 600; color: #1a1a2e; }

        /* SECTION DIVIDER */
        .section-divider {
            padding: 13px 28px;
            background: #fafafa;
            border-bottom: 1px solid #f2f2f6;
            border-top: 1px solid #f2f2f6;
            font-size: 11px; font-weight: 600;
            letter-spacing: 0.08em; text-transform: uppercase;
            color: #6c3ce1;
        }

        /* FIELD ROW */
        .field-row {
            display: grid;
            grid-template-columns: 200px 1fr;
            align-items: center;
            padding: 15px 28px;
            border-bottom: 1px solid #f4f4f8;
            gap: 24px;
        }

        .field-row:last-of-type { border-bottom: none; }

        .field-label { font-size: 13px; font-weight: 500; color: #444; }
        .field-hint { font-size: 11px; color: #bbb; margin-top: 2px; }

        .field-value { font-size: 13px; color: #1a1a2e; line-height: 1.5; }
        .field-value a { color: #6c3ce1; text-decoration: none; word-break: break-all; }
        .field-value a:hover { text-decoration: underline; }

        /* BADGE */
        .badge {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 4px 12px; border-radius: 99px;
            font-size: 12px; font-weight: 500;
        }

        .badge-pending { background: #faeeda; color: #633806; }
        .badge-approved { background: #eaf3de; color: #27500a; }
        .badge-rejected { background: #fcebeb; color: #501313; }
        .badge-review { background: #e6f1fb; color: #042c53; }

        .dot { width: 6px; height: 6px; border-radius: 50%; display: inline-block; }
        .dot-pending { background: #ba7517; }
        .dot-approved { background: #3b6d11; }
        .dot-rejected { background: #a32d2d; }
        .dot-review { background: #185fa5; }

        svg.icon {
            width: 14px; height: 14px;
            stroke: currentColor; fill: none;
            stroke-width: 1.8;
            stroke-linecap: round; stroke-linejoin: round;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="logo-icon">SP</div>
            <div class="logo-text">Sistem Proposal</div>
        </div>

        <div class="sidebar-section">
            <div class="sidebar-label">Menu</div>

            <a href="#" class="nav-item">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <rect x="2" y="2" width="5" height="5" rx="1"/>
                    <rect x="9" y="2" width="5" height="5" rx="1"/>
                    <rect x="2" y="9" width="5" height="5" rx="1"/>
                    <rect x="9" y="9" width="5" height="5" rx="1"/>
                </svg>
                Dashboard
            </a>

            <a href="#" class="nav-item active">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3 4h10M3 8h10M3 12h6"/>
                    <circle cx="13" cy="12" r="1.5"/>
                </svg>
                Pengajuan
                <span class="nav-badge">3</span>
            </a>

            <a href="#" class="nav-item">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <rect x="3" y="2" width="10" height="12" rx="1"/>
                    <path d="M6 6h4M6 9h4M6 12h2"/>
                </svg>
                Riwayat
            </a>

            <a href="#" class="nav-item">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="8" cy="8" r="6"/>
                    <path d="M8 5v3l2 2"/>
                </svg>
                Status
            </a>
        </div>

        <div class="sidebar-section" style="margin-top: 12px;">
            <div class="sidebar-label">Akun</div>

            <a href="#" class="nav-item">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="8" cy="6" r="3"/>
                    <path d="M2.5 13.5c0-2.5 2.5-4 5.5-4s5.5 1.5 5.5 4"/>
                </svg>
                Pengaturan
            </a>

            <a href="#" class="nav-item">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M6 3H3a1 1 0 00-1 1v8a1 1 0 001 1h3M10 11l4-3-4-3M14 8H6"/>
                </svg>
                Keluar
            </a>
        </div>

        <div class="sidebar-bottom">
            <div class="avatar-sm">BS</div>
            <div class="avatar-info">
                <p>Budi Santoso</p>
                <span>S1 Teknik Informatika</span>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main">
        <div class="page-header">
            <div>
                <div class="page-title">Detail Pengajuan</div>
                <div class="page-sub">Selamat datang, Budi Santoso</div>
            </div>
            <a href="#" class="btn-outline">
                <svg class="icon" viewBox="0 0 14 14"><path d="M12 7H2M6 3L2 7l4 4"/></svg>
                Kembali
            </a>
        </div>

        <div class="card">
            <div class="card-head">
                <div>
                    <div class="card-label">Dokumen Akademik</div>
                    <div class="card-title">Detail Pengajuan Proposal</div>
                </div>
            </div>

            <!-- INFORMASI MAHASISWA -->
            <div class="section-divider">Informasi Mahasiswa</div>

            <div class="field-row">
                <div><div class="field-label">NIM</div></div>
                <div class="field-value">12345678</div>
            </div>

            <div class="field-row">
                <div><div class="field-label">Nama Mahasiswa</div></div>
                <div class="field-value">Adinda Rachmania</div>
            </div>

            <div class="field-row">
                <div><div class="field-label">Program Studi</div></div>
                <div class="field-value">Teknik Informatika</div>
            </div>

            <!-- DETAIL PROPOSAL -->
            <div class="section-divider">Detail Proposal</div>

            <div class="field-row">
                <div><div class="field-label">Judul Proposal</div></div>
                <div class="field-value">Sistem Informasi Pengajuan Proposal</div>
            </div>

            <div class="field-row">
                <div><div class="field-label">Link Dokumen</div></div>
                <div class="field-value">
                    <a href="https://drive.google.com" target="_blank">https://drive.google.com</a>
                </div>
            </div>

            <div class="field-row">
                <div><div class="field-label">Tanggal Pengajuan</div></div>
                <div class="field-value">30 Maret 2026</div>
            </div>

            <!-- STATUS -->
            <div class="section-divider">Status</div>

            <div class="field-row">
                <div><div class="field-label">Status Validasi</div></div>
                <div class="field-value">
                    <span class="badge badge-pending">
                        <span class="dot dot-pending"></span>
                        Belum Disetujui
                    </span>
                </div>
            </div>

        </div>
    </main>

</body>
</html>