<style>
    .nav-link {
        color: white !important;
    }

    .nav-link:hover {
        background-color: #fff !important;
        color: #7886C7 !important;
    }

    .nav-link.active {
        background-color: #fff !important;
        color: #7886C7 !important;
    }
</style>
<aside class="main-sidebar elevation-4 text-white" style="background-color:rgb(0, 97, 241);">
    <div class="sidebar">
        <div class="p-3 d-flex flex-column align-items-center">
            <img src="assets/img/logo.jpg" class="img-circle elevation-2 mb-2" width="120" class="mb-3">
            <h5 class="text-center">APLIKASI ABSENSI DAN PENGGAJIAN PEGAWAI Sari</h5>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="?page=dashboard" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "dashboard") ? "active" : "")  : "active" ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MASTER DATA</li>
                <li class="nav-item">
                    <a href="?page=jabatan" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "jabatan") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Jabatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=tunjangan" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "tunjangan") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>
                            Tunjangan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=pegawai" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "pegawai") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pegawai
                        </p>
                    </a>
                </li>
                <li class="nav-header">PEKERJA LEPAS</li>
                <li class="nav-item">
                    <a href="?page=honor" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "honor") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Harian
                        </p>
                    </a>
                </li>
                <li class="nav-header">PRESENSI PEGAWAI</li>
                <li class="nav-item">
                    <a href="?page=scanner" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "scanner") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-qrcode"></i>
                        <p>
                            Scanner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=riwayat_presensi" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "riwayat_presensi") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Riwayat Presensi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=tabel_presensi" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "tabel_presensi") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Tabel Presensi
                        </p>
                    </a>
                </li>
                <li class="nav-header">LAPORAN</li>
                <li class="nav-item <?= isset($_GET['page']) ? (($_GET['page'] == 'laporan') ? "menu-open" : "")  : "" ?>">
                    <a href="#" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == 'laporan') ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?page=laporan&method=pegawai" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "pegawai") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=riwayat_presensi" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "riwayat_presensi") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Presensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=presensi_bulanan" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "presensi_bulanan") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi Bulanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=gaji_pegawai" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "gaji_pegawai") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gaji Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=slip_gaji_pegawai" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "slip_gaji_pegawai") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slip Gaji Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=tunjangan_pegawai" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "tunjangan_pegawai") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tunjangan Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=honor" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "honor") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Karyawan Harian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=laporan&method=kenaikan_gaji" class="nav-link <?= isset($_GET['method']) ? (($_GET['method'] === "kenaikan_gaji") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kenaikan Gaji</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="?page=ganti_password" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] === "ganti_password") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Ganti Password
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="halaman_auth/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="content-wrapper">