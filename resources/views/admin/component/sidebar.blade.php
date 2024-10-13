<div>
<ul class="navbar-nav bg-black sidebar sidebar-dark accordion px-2" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider my-0">
    
    <li class="nav-item active {{ Request::path() === 'admin' ? 'badge text-bg-info' : '' }}">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active {{ Request::path() === 'admin/product' ? 'badge text-bg-info' : '' }}">
        <a class="nav-link collapsed" href="{{route('product.index')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Product</span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link collapsed" href="admin/product">
            <i class="fas fa-fw fa-solid fa-user"></i>
            <span>Pegawai</span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" >
            <i class="fas fa-fw fa-solid fa-users"></i>
            <span>Pelanggan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="datapesanan" >
            <i class="fas fa-fw fa-solid fa-file-invoice-dollar"></i>
            <span>Data Pesanan</span>
        </a>
    </li>

    <li class="nav-item active {{ Request::path() === 'admin/dataPenjualan' ? 'badge text-bg-info' : '' }}">
        <a class="nav-link" href="dataPenjualan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Penjualan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" >
            <span class="material-symbols-outlined">
                logout
                </span>
            <span>Logout</span>
        </a>
    </li>
</ul>
</div>