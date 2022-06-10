<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  href="http://localhost/phonestore/admin/dashboard" class="text-light brand-link text-center">
{{--        <img src="{{asset('public/backend/img/logo.png')}}" alt="MONA" class="brand-image">--}}
        <h2 style="border-radius: 10px" class="badge-light text-center animation__wobble font-weight-bold">TNT ADMIN</h2>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    <?php
                                    $ho = Session::get('Ho');
                                    $ten = Session::get('Ten');
                                    $name = $ho . $ten;
                                    echo $name;
                                    ?>
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="fas fa-key nav-icon"></i>
                                        <p><?php
                                            $q = Session::get('Quyen_id');
                                            if ($q == 2) {
                                                echo 'Admin';
                                            } else
                                                echo 'Nhân viên quản lí';
                                            ?>
                                        </p>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.logout') }}" class="nav-link">
                                        <i class="fas fa-sign-in-alt nav-icon"></i>
                                        <p>Đăng xuất</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm..."
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard')}}"
                       class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            <span class="badge badge-info right">
                                    {{DB::table('danhmuc')->count()}}
                                </span>
                            Danh mục sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.brand.index') }}"
                       class="nav-link {{ Route::is('admin.brand.index') ? 'active' : '' }}">
                        <i class="nav-icon far fa-copyright"></i>
                        <p>
                            <span class="badge badge-info right">
                                    {{DB::table('loaisanpham')->count()}}
                                </span>
                            Thương hiệu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}"
                       class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            <span class="badge badge-info right">
                                    {{DB::table('sanpham')->count()}}
                                </span>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.discount.index') }}"
                       class="nav-link {{ Route::is('admin.discount.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            <span class="badge badge-info right">
                                    {{DB::table('khuyenmai')->count()}}
                                </span>
                            Khuyến mãi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.order.index') }}"
                       class="nav-link {{ Route::is('admin.order.index') ? 'active' : '' }}">
                        @if(DB::table('hoadon')->where('TrangThai', 0)->count()!= 0)
                        <span class="badge badge-danger right">
                                    {{DB::table('hoadon')->where('TrangThai', 0)->count()}}
                                </span>
                        @endif
                        <i class="nav-icon fas fa-sort-amount-up"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}"
                       class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                        <span class="badge badge-info right">
                                    {{DB::table('nguoidung')->count()}}
                                </span>
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-header">QUẢN TRỊ</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Đang phát triển...
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
