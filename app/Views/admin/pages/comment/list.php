<main class="dash-content">
    <h1 class="dash-title">Trang chủ / Đánh giá</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách đánh giá</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Người bình luận</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Hình đại diện</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($purchases as $purchase): ?>
                                <tr>
                                    <td>
                                        <?= $purchase['comment'] ?>
                                    </td>
                                    <td>
                                        <?= $purchase['name'] ?>
                                    </td>
                                    

                                    <td class="text-center">
                                        <a href="admin/comment/edit/<?= $purchase['id'] ?>" class="btn btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <a data-url="<?= base_url() ?>/admin/comment/delete/<?= $purchase['id'] ?>"
                                            class="btn btn-danger btn-del-confirm">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>