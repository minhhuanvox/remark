<link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon" />
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/> -->
<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Phúc khảo</h1>
    <div class="row">
        <div class="col-lg-12">

            <?= view('messages/message'); ?>

            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách đơn phúc khảo</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã số sinh viên</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Môn thi</th>
                                <th scope="col">Phòng thi</th>
                                <th scope="col">Ngày thi</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($remarks as $remarks): ?>
                                <tr>
                                    <td>
                                        <?= $remarks['id'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['student-id'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['name'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['email'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['module_name'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['exam_room'] ?>
                                    </td>
                                    <td>
                                        <?= $remarks['exam_date'] ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="admin/remark/detail/<?= $remarks['id'] ?>" class="btn btn-secondary" title="Xem chi tiết" ><i
                                                class="fas fa-clipboard" ></i></a>
                                        <a href="admin/remark/edit/<?= $remarks['id'] ?>" class="btn btn-primary" title="Sửa"><i
                                                class="fas fa-edit" ></i></a>
                                        <a data-url="<?= base_url() ?>/admin/remark/delete/<?= $remarks['id'] ?>"
                                            class="btn btn-danger btn-del-confirm" title="Xoá">
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
</div>