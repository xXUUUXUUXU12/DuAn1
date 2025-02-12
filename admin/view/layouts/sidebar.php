<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <svg id="theTrendLogo" width="100" height="17" xmlns="http://www.w3.org/2000/svg">
                <!-- Background Rectangle -->
                <rect width="100" height="17" fill="#405189"/>

                <!-- Text -->
                <text x="5" y="13" font-family="Arial" font-size="18" font-weight="bold" fill="#FFFFFF">
                    The Trend
                </text>
            </svg>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome TheTrend!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Quản lý</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=/">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Thống kê</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=danhmuc/list" role="button" aria-expanded="false">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Danh mục sản phẩm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=sanpham/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Sản phẩm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=hinhanhsanpham/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Hình ảnh sản phẩm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=khuyenmai/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Khuyến mại</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=donhang/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý đơn hàng</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=chitietdonhang/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Chi tiết đơn hàng</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=trangthaidonhang/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý trạng thái đơn hàng</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=nguoidung/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý người dùng</span>
                    </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link menu-link" href="?act=tintuc/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý tin tức</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=lienhe/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý liên hệ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=banner/list" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý Banner</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>