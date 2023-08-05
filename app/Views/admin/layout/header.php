<link rel="stylesheet" href="/css/user/style.css" />
<header class="dash-toolbar">
    <a href="javascript::void()" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
    <a href="javascript::void()" class="searchbox-toggle">
        <i class="fas fa-search"></i>
    </a>
    
    <div class="tools">

        <a href="javascript::void()" class="tools-item">
            <i class="fas fa-bell"></i>
            <i class="tools-item-count">4</i>
        </a>
        <div class="dropdown tools-item">
            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item" href="javascript::void()">
                    <?= session()->get('user_login') ? session()->get('user_login')['name'] : "" ?>
                </a>
                <a class="dropdown-item" href="admin/logout">Đăng xuất</a>
            </div>
        </div>
    </div>

</header>
<div class="header">
    <div class="header-item container">
        <!-- Banner start -->
        <div class="banner">
            <div class="banner-left col-3">
                <img src="./assets/images/logo.png" alt="logo" class="banner-left__logo" />
            </div>

            <div class="banner-right col-sm-9">
                <div class="p-2 banner-right__name">
                    <a href="index">TRƯỜNG ĐẠI HỌC SÀI GÒN</a>
                </div>
                <div class="p-2 banner-right__title">
                    <span>Đăng ký đơn phúc khảo</span>
                </div>
            </div>
        </div>
        <!-- Banner end -->
    </div>
    <!-- Menu bottom start -->
    <div class="header-menu">
        <nav class="menu container">
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="#" class="menu-item__link">
                        Website: phuckhao.sgu.edu.vn
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">
                        Số điện thoại: 012.34.567.890
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">
                        E-mail: phuckhaosinhvien@sgu.edu.vn
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link"> Phòng: D.001 </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End menu bottom -->
</div>