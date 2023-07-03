<div class="container-fluid">
    <h1 class="dash-title">Trang chủ / Gói dịch vụ</h1>
    <div class="row">
        <div class="col-lg-12">
            <?= view('messages/message'); ?>
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách gói dịch vụ</div>
                </div>
                <div class="card-body ">
                    <table id="datatable" class="cell-border">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Tên gói</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Số lượng email</th>
                                <th scope="col">Dung lượng nhớ</th>
                                <th scope="col">Số lượng database</th>
                                <th scope="col">Số lượng domains</th>
                                <th scope="col">Hỗ trợ</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>name</td>
                                <td>price</td>
                                <td>emai_address</td>
                                <td>storage</td>
                                <td>databases</td>
                                <td>domains</td>
                                <td>support</td>
                                <td class="text-center">
                                    <a href="purchase-edit.html" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a data-url="" class="btn btn-danger btn-del-confirm"><i
                                            class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>