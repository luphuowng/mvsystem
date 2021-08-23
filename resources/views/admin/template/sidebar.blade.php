<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('frontend/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Name shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('frontend/admin') }}/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">No name</a>
                <br>
                <a href="#" class="d-block" style="color:red;">Đăng xuất</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="#" class="nav-link
                    @if (Request::path() == 'quan-tri')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tổng quan</p>
                    </a>
                </li>

                <li class="nav-header">Quản lý quy trình</li>
                <li class="nav-item">
                    <a href="#" class="nav-link
                    @if (Request::segment(2) == 'phieu-hen')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Phiếu hẹn</p>
                    </a>
                </li>

                <li class="nav-header">Quản lý rạp</li>
                <li class="nav-item">
                    <a href="{{ route('movie-type.index') }}" class="nav-link
                    @if (Request::segment(2) == 'loai-phim')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Loại phim</p>
                    </a>
                </li>
                <li class="nav-header">Dữ liệu chính</li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
