<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng kí giấy phúc khảo - Phòng Đào tạo</title>
    <link rel="stylesheet" href="/css/user/style.css" />
    <script src="https://ctsv.sgu.edu.vn/hssv/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <meta charset="utf-8">
    <base href="<?= base_url() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Trang đăng ký thông tin phúc khảo
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/admin/css/easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/admin/js/chart-js-config.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
</head>

<body style="width: 70%; margin: 0 auto">
    <artical>
        <div class="w3-row">
            <div class="w3-container w3-padding-large">
                <div class="header">
                    <div class="header-item container">
                        <!-- Banner start -->
                        <div class="banner">
                            <div class="banner-left col-3">
                                <img src="./assets/images/logo.png" alt="logo" class="banner-left__logo" />
                            </div>

                            <div class="banner-right col-sm-9">
                                <div class="p-2 banner-right__name">
                                    <a href="/">TRƯỜNG ĐẠI HỌC SÀI GÒN</a>
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
                <!-- <img src="https://ctsv.sgu.edu.vn/hssv/banner.png" width="800" /> -->
                <H2 class="w3-text-blue p-2 banner-right__title"> TRANG TIN ĐĂNG KÍ PHÚC KHẢO </H2>

                               <BR />



                <H4>
                    Xin chào <span class='w3-text-red'>
                        <?= session()->get('user_login') ? session()->get('user_login')['name'] : "" ?>
                    </span> </H4>
                <BR />
                <form action="user/add" method="POST">
                    <!-- <p><input type="hidden" name="hoten" placeholder="Võ Minh Huân" /></p>
                    <p><input type="hidden" name="masv" placeholder="3119560024" /></p>
                    <p><input type="hidden" name="loaisv" placeholder="1" /></p> -->
                    <p>Chọn biểu mẫu:
                        <select name="loaixacnhan" class="w3-border">
                            <option value="dkpkmh">Đăng ký phúc khảo bài thi</option>
                            <!-- <option value="nvqs">Giấy xác nhận NVQS</option>
                            <option value="vayvon">Giấy xác nhận vay vốn</option> -->

                        </select>
                    </p>
                    <p>
                        <input type="submit" value="Đăng ký phúc khảo" class="w3-button w3-green" />
                        <a type="submit" class="btn btn-success" href="user/add">Đăng ký phúc khảo</a>
                    </p>
                </form>
                <p>

                    <!-- <a href="/" target="_self" title="Trang chính">Trang chính</a> -->
                    <a href="admin/logout">Đăng xuất</a>
                </p>


            </div>
        </div>
    </artical>
    <script>
        $(document).ready(function () {
            $("select[name='loaixacnhan']").change(function () {
                var x = $(this).val();
                if (x == "vayvon") {
                    $("#email2").css("display", "block");
                    $("input[name='email_nganhang']").val("");
                }
                else {
                    $("#email2").css("display", "none");
                }
            });
        });
    </script>
</body>

</html>