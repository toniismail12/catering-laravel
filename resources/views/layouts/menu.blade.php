<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Menu</li>

        @if (auth()->user()->role == 'admin')

        <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard-admin">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i>
                <span>Pesanan Masuk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/pesanan-masuk">
                        <i class="bi bi-circle"></i><span>Catering</span>
                    </a>
                </li>
                <li>
                    <a href="/pesanan-masuk-alat">
                        <i class="bi bi-circle"></i><span>Sewa Alat</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/paket-catering">
                <i class="bi bi-journal-text"></i>
                <span>Paket Catering</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Sewa Alat</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/sewa-alat?kategori=satuan">
                        <i class="bi bi-circle"></i><span>Satuan</span>
                    </a>
                </li>
                <li>
                    <a href="/sewa-alat?kategori=permeja">
                        <i class="bi bi-circle"></i><span>Permeja</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/data-pelanggan">
                <i class="bi bi-person"></i>
                <span class="">Data Pelanggan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav4" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i>
                <span>Riwayat Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/riwayat-pesan-catering">
                        <i class="bi bi-circle"></i><span>Catering</span>
                    </a>
                </li>
                <li>
                    <a href="/riwayat-sewa-alat">
                        <i class="bi bi-circle"></i><span>Sewa Alat</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/update-password">
                <i class="bi bi-grid"></i>
                <span>Update Password</span>
            </a>
        </li>
            
        @endif

        @if (auth()->user()->role == 'pelanggan')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav4" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i>
                <span>Riwayat Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/riwayat-pesan-catering">
                        <i class="bi bi-circle"></i><span>Catering</span>
                    </a>
                </li>
                <li>
                    <a href="/riwayat-sewa-alat">
                        <i class="bi bi-circle"></i><span>Sewa Alat</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/update-password">
                <i class="bi bi-grid"></i>
                <span>Update Password</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/#nasi_kotak">
                <i class="bi bi-grid"></i>
                <span>Pesan</span>
            </a>
        </li>
        
        @endif

    </ul>

</aside>
<!-- End Sidebar-->
