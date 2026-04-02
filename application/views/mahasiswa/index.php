<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Proposal</title>
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
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        .logo-icon {
            width: 30px; height: 30px;
            background: #6c3ce1;
            border-radius: 8px;
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

        .nav-item:hover {
            background: rgba(255,255,255,0.06);
            color: rgba(255,255,255,0.85);
        }

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
        .main {
            margin-left: 210px;
            flex: 1; padding: 32px 36px;
            min-height: 100vh;
        }

        .page-header {
            display: flex; align-items: flex-start;
            justify-content: space-between; margin-bottom: 24px;
        }

        .page-title { font-size: 20px; font-weight: 600; color: #1a1a2e; }
        .page-sub { font-size: 13px; color: #9999aa; margin-top: 3px; }

        /* BUTTONS */
        .btn-primary {
            background: #6c3ce1; color: #fff;
            border: none; border-radius: 8px;
            padding: 9px 18px; font-size: 13px; font-weight: 500;
            cursor: pointer; font-family: inherit;
            display: flex; align-items: center; gap: 6px;
        }

        .btn-primary:hover { background: #5a2ec8; }

        .btn-outline {
            background: #fff; color: #555;
            border: 1px solid #e4e4ec; border-radius: 7px;
            padding: 7px 14px; font-size: 12px; font-weight: 500;
            cursor: pointer; font-family: inherit;
            display: flex; align-items: center; gap: 6px;
        }

        .btn-cancel {
            background: transparent; color: #888;
            border: 1px solid #e4e4ec; border-radius: 8px;
            padding: 9px 18px; font-size: 13px; font-weight: 500;
            cursor: pointer; font-family: inherit;
        }

        .btn-submit {
            background: #6c3ce1; color: #fff;
            border: none; border-radius: 8px;
            padding: 9px 22px; font-size: 13px; font-weight: 500;
            cursor: pointer; font-family: inherit;
            display: flex; align-items: center; gap: 7px;
            transition: background 0.15s;
        }

        .btn-submit:hover { background: #5a2ec8; }

        /* ALERT */
        .alert-info {
            background: #f0ecfd;
            border-left: 3px solid #6c3ce1;
            border-radius: 8px; padding: 11px 16px;
            font-size: 13px; color: #5a35c0;
            display: flex; align-items: center; gap: 10px;
            margin-bottom: 20px;
        }

        /* CARD */
        .card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #ebebf0;
            overflow: hidden;
        }

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

        /* INPUT */
        .form-input {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px; color: #1a1a2e;
            background: #fff;
            border: 1px solid #e4e4ec;
            border-radius: 8px;
            padding: 9px 13px;
            outline: none; width: 100%;
            transition: border-color 0.15s, box-shadow 0.15s;
        }

        .form-input:focus {
            border-color: #6c3ce1;
            box-shadow: 0 0 0 3px rgba(108,60,225,0.08);
        }

        .form-input[readonly] {
            color: #888;
            background: #fff;
            border-color: #f0f0f5;
            cursor: default;
        }

        select.form-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath d='M2 4l4 4 4-4' stroke='%236c3ce1' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 32px;
            cursor: pointer;
        }

        /* CARD FOOTER */
        .card-foot {
            padding: 16px 28px;
            background: #fafafa;
            border-top: 1px solid #f2f2f6;
            display: flex; justify-content: flex-end;
            align-items: center; gap: 10px;
        }

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
                <div class="page-title">Pengajuan Proposal</div>
                <div class="page-sub">Selamat datang, Budi Santoso</div>
            </div>
            <button class="btn-primary">
                <svg class="icon" viewBox="0 0 14 14"><path d="M7 1v12M1 7h12"/></svg>
                Ajukan Proposal
            </button>
        </div>

        <div class="alert-info">
            <svg class="icon" style="flex-shrink:0;" viewBox="0 0 14 14">
                <circle cx="7" cy="7" r="6"/>
                <path d="M7 4.5v3M7 9.5v.1"/>
            </svg>
            Kamu sudah mengajukan proposal sebelumnya. Tinjau statusnya sebelum mengajukan yang baru.
        </div>

        <div class="card">
            <div class="card-head">
                <div>
                    <div class="card-label">Dokumen Akademik</div>
                    <div class="card-title">Form Pengajuan Proposal</div>
                </div>
                <button class="btn-outline">
                    <svg class="icon" style="width:13px;height:13px;" viewBox="0 0 14 14">
                        <path d="M2 7h10M8 3l4 4-4 4"/>
                    </svg>
                    Lihat Detail Pengajuan
                </button>
            </div>

            <!-- INFORMASI MAHASISWA -->
            <div class="section-divider">Informasi Mahasiswa</div>

            <div class="field-row">
                <div>
                    <div class="field-label">NIM</div>
                    <div class="field-hint">Nomor induk mahasiswa</div>
                </div>
                <input type="text" class="form-input" value="12345678" readonly>
            </div>

            <div class="field-row">
                <div>
                    <div class="field-label">Nama Lengkap</div>
                    <div class="field-hint">Sesuai data akademik</div>
                </div>
                <input type="text" class="form-input" value="Adinda Rachmania" readonly>
            </div>

            <div class="field-row">
                <div>
                    <div class="field-label">Program Studi</div>
                </div>
                <input type="text" class="form-input" value="Teknik Informatika" readonly>
            </div>

            <!-- DETAIL PROPOSAL -->
            <div class="section-divider">Detail Proposal</div>

            <div class="field-row">
                <div>
                    <div class="field-label">Judul Proposal</div>
                    <div class="field-hint">Tulis judul yang jelas dan spesifik</div>
                </div>
                <input type="text" class="form-input" placeholder="Masukkan judul proposal">
            </div>

            <div class="field-row">
                <div>
                    <div class="field-label">Link Dokumen</div>
                    <div class="field-hint">Google Drive atau repositori lainnya</div>
                </div>
                <input type="url" class="form-input" placeholder="https://drive.google.com/...">
            </div>

            <!-- DOSEN PENGUJI -->
            <div class="section-divider">Dosen Penguji</div>

            <div class="field-row">
                <div>
                    <div class="field-label">Dosen Penguji 1</div>
                </div>
                <select class="form-input">
                    <option value="">— Pilih Dosen —</option>
                    <option>Dr. Ahmad Fauzi, M.Kom</option>
                    <option>Dr. Sari Dewi, M.T</option>
                    <option>Dr. Riko Pratama, M.Sc</option>
                </select>
            </div>

            <div class="field-row">
                <div>
                    <div class="field-label">Dosen Penguji 2</div>
                </div>
                <select class="form-input">
                    <option value="">— Pilih Dosen —</option>
                    <option>Dr. Ahmad Fauzi, M.Kom</option>
                    <option>Dr. Sari Dewi, M.T</option>
                    <option>Dr. Riko Pratama, M.Sc</option>
                </select>
            </div>

            <div class="field-row">
                <div>
                    <div class="field-label">Dosen Penguji 3</div>
                </div>
                <select class="form-input">
                    <option value="">— Pilih Dosen —</option>
                    <option>Dr. Ahmad Fauzi, M.Kom</option>
                    <option>Dr. Sari Dewi, M.T</option>
                    <option>Dr. Riko Pratama, M.Sc</option>
                </select>
            </div>

            <div class="card-foot">
                <button class="btn-cancel">Batal</button>
                <button class="btn-submit">
                    <svg class="icon" viewBox="0 0 14 14"><path d="M1 7l4 4 8-8"/></svg>
                    Kirim Pengajuan
                </button>
            </div>
        </div>
    </main>

</body>
</html>