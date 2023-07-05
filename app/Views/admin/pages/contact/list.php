<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Liên hệ</h1>
        <p class="mb-5">Danh sách vấn đề liên hệ.</p>
        <div class="row">
            <div class="col-lg-12">
            </div>
            <?php foreach ($contacts as $contact): ?>
                <div class="col-lg-6">
                    <div class="card easion-card">
                        <div class="card-header <?= $contact['readed'] == true ? "bg-success" : ""?>">
                            <div class="easion-card-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="easion-card-title"> <?= $contact['phone']?> </div>
                            <div class="easion-card-menu">
                                <div class="dropdown">
                                    <a class="easion-card-menu-link" href="javascript::void(0)" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                                        x-placement="bottom-end"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                                        <a class="dropdown-item far fa-eye" href=""> Đánh dấu chưa đọc</a>
                                        <a class="dropdown-item far fa-trash-alt" href=""> Xóa bỏ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h4><strong><?= $contact['name']?></strong></h4>
                            <hr>
                            <p> <?= $contact['content']?></p>
                            <hr>
                            <p><strong>Email :</strong> <span><?= $contact['email']?></span></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link fas fa-angle-double-left" href=""></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link fas fa-angle-left" href=""></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript::void(0)">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript::void(0)">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link fas fa-angle-right" href=""></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link fas fa-angle-double-right" href=""></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>