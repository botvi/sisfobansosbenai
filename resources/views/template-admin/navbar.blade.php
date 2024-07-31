<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('env') }}/bansos.png" width="30px" srcset="">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">SISFO BANSOS</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master</span>
          </li>
        
        <li class="menu-item {{ Request::is('bantuan_sosial') ? 'active' : '' }}">
            <a href="/bantuan_sosial" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hand"></i>
                <div data-i18n="Analytics">Bantuan Sosial</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('masyarakat') ? 'active' : '' }}">
            <a href="/masyarakat" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Analytics">Masyarakat</div>
            </a>
        </li>
        
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Bantuan</span>
        </li>
        <li class="menu-item {{ Request::is('penerima_bantuan') ? 'active' : '' }}">
            <a href="/penerima_bantuan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Analytics">Penerima Bantuan</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Informasi</span>
        </li>
        <li class="menu-item {{ Request::is('informasi') ? 'active' : '' }}">
            <a href="/informasi" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-news"></i>
                <div data-i18n="Analytics">Informasi</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Arsip & Laporan</span>
        </li>
        <li class="menu-item {{ Request::is('arsip_penerima_bantuan') ? 'active' : '' }}">
            <a href="/arsip_penerima_bantuan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-data"></i>
                <div data-i18n="Analytics">Arsip Data</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('laporan') ? 'active' : '' }}">
            <a href="/laporan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Analytics">Laporan</div>
            </a>
        </li>
        
    </ul>
</aside>
