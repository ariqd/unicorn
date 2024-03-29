<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="fa fa-home"></i> Notifikasi
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('admin/drivers') }}" class="nav-link {{ request()->is('admin/drivers') ? 'active' : '' }}">
                    <i class="fa fa-user"></i> Driver
                </a>
            </li>

            <li class="nav-title">Muatan</li>

            <li class="nav-item">
                <a href="{{ url('/admin/bids') }}" class="nav-link {{ (request()->is('bids')) ? 'active' : '' }}">
                    <i class="fa fa-money"></i> Bidding
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/shipments') }}"
                    class="nav-link {{ (request()->is('shipments')) ? 'active' : '' }}">
                    <i class="fa fa-search"></i> Pencarian
                </a>
            </li>

            <li class="nav-title">Truk</li>

            <li class="nav-item">
                <a href="{{ url('/admin/truk') }}"
                    class="nav-link {{ (request()->is('/admin/truk')) ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> Pengaturan
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Lacak
                </a>
            </li>
            <li class="nav-title">Muatan</li>

            <li class="nav-item">
                <a href="{{ url('/admin/shipments') }}"
                    class="nav-link {{ (request()->is('/admin/shipments')) ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> Muatan Sudah Kirim
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/pengiriman/') }}"
                    class="nav-link {{ (request()->is('/admin/pengiriman/belumdikirim')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Muatan Belum Kirim
                </a>
            </li>

            <li class="nav-title">Pengguna</li>
            <li class="nav-item">
                <a href="{{ url('/admin/pengguna/belumdiproses') }}"
                    class="nav-link {{ (request()->is('/admin/pengguna/belumdiproses')) ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> Belum Diproses
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/pengguna/disetujui') }}"
                    class="nav-link {{ (request()->is('/admin/pengguna/disetujui')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Disetujui
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/pengguna/ditolak') }}"
                    class="nav-link {{ (request()->is('/admin/pengguna/ditolak')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Ditolak
                </a>
            </li>

            <li class="nav-title">Partner</li>
            <li class="nav-item">
                <a href="{{ url('/admin/partner/belumdiproses') }}"
                    class="nav-link {{ (request()->is('/admin/partner/belumdiproses')) ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> Belum Diproses
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/partner/disetujui') }}"
                    class="nav-link {{ (request()->is('/admin/partner/disetujui')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Disetujui
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/partner/ditolak') }}"
                    class="nav-link {{ (request()->is('/admin/partner/ditolak')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Ditolak
                </a>
            </li>
        </ul>
    </nav>
</div>
