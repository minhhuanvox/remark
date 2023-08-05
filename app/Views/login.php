<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="<?= base_url() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/admin/css/easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/admin/js/chart-js-config.js"></script>
    <link rel="stylesheet" href="/css/user/style.css" />
    <title>Đăng nhập</title>
</head>

<body>
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
    <div class="form-screen">
        <a href="index" class="easion-logo"> <span>SGU</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white" align="center"> Đăng nhập </div>
            <div class="card-body">
                <?= view('messages/message'); ?>
                <form action="login" method="POST">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nhập email">
                    </div>

                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Mật khẩu">
                    </div>

                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>

                        <!-- <a class="account-dialog-link" href="signup.html">Create a new account</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/
       1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMG
    a   3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" in t
        egrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" cr o
        ssorigin="anonymous"></script>
    <script src="assets/admin/js/easion.js"></script>


</body>

</html>