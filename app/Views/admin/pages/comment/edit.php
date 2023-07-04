<main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">Trang chủ / Đánh giá / Sửa</h1>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Thông tin đánh giá</div>
                                </div>
                                <div class="card-body ">
                                    <form action="admin/comment/update" method="post" enctype="multipart/form-data">
                                        <input name="id" hidden>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tên gói</label>
                                                <input name="name" type="text" class="form-control"
                                                    placeholder="Nhập tên người đánh giá" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Địa chỉ</label>
                                                <input name="address" type="text" class="form-control"
                                                    placeholder="Nhập địa chỉ" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nội dung</label>
                                                <textarea name="content" class="form-control" rows="3"
                                                    placeholder="Nhập nội dung đánh giá" required>content</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-choose-image">Hình đại diện</label>
                                            <input name="img" type="file" accept="image/*" class="form-control-file"
                                                id="input-choose-image">
                                        </div>
                                        <div class="form-group">
                                            <img id="img-show" src="" class="img-fluid" alt="Hình đại diện.">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <button type="reset" id="btn-reset-edit-comment" class="btn btn-secondary">Nhập
                                            lại</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>