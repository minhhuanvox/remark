<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/user/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon" />
    <title>Đăng ký đơn phúc khảo</title>
</head>

<body>


    <!-- Main start -->
    <section class="main">
        <div class="main-wrapper container">
            <!-- Title -->
            <div class="main-header">
                <div class="main-header__title">
                    <h3>Trang đăng ký thông tin phúc khảo</h3>

                </div>
                <div class="main-header__name">
                    <h6>Đơn phúc khảo số, <span>
                            <?= $remarks['id'] ?>
                        </span></h6>
                </div>
            </div>

            <div class="formbold-main-wrapper">
                <!-- Row 1 -->
                <div class="formbold-form-wrapper">
                    <form action="admin/remark/update" method="POST">
                        <input name="id" hidden value="<?= $remarks['id'] ?>">
                        <div class="formbold-input-flex">
                            <div>
                                <label for="firstname" class="formbold-form-label">
                                    Họ và tên:</label>
                                <input type="text" name="name" id="name" class="formbold-form-input"
                                    value="<?= $remarks['name'] ?>" />
                            </div>

                            <div class="formbold-mb-3">
                                <label for="date_of_birth" class="formbold-form-label">
                                    Ngày sinh:
                                </label>
                                <input type="date" name="date_of_birth" id="dob" class="formbold-form-input"
                                    value="<?= $remarks['date_of_birth'] ?>" />
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="formbold-input-flex">
                            <div>
                                <label for="mssv" class="formbold-form-label"> MSSV: </label>
                                <input type="text" name="student-id" class="formbold-form-input"
                                    value="<?= $remarks['student-id'] ?>" />
                            </div>

                            <div>
                                <label for="class" class="formbold-form-label"> Lớp: </label>
                                <input type="text" name="class" id="class" class="formbold-form-input"
                                    value="<?= $remarks['class'] ?>" />
                            </div>
                        </div>

                        <!-- Row 3 -->

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Email </label>
                                <input type="email" name="email" id="email" class="formbold-form-input"
                                    value="<?= $remarks['email'] ?>" />
                            </div>

                            <div>
                                <label for="phone" class="formbold-form-label">
                                    Số điện thoại:
                                </label>
                                <input type="text" name="phone_number" id="phone" class="formbold-form-input"
                                    value="<?= $remarks['phone_number'] ?>" />
                            </div>
                        </div>

                        <!-- Row 4 -->
                        <div class="formbold-input-flex">
                            <div>
                                <label for="semester" class="formbold-form-label">Học kỳ:</label>
                                <select class="formbold-form-input" name="semester">
                                    <option <?php if ($remarks['semester'] == 'Học kỳ 1')
                                        echo ('selected'); ?>
                                        value="Học kỳ 1">Học kì 1</option>
                                    <option <?php if ($remarks['semester'] == 'Học kỳ 2')
                                        echo ('selected'); ?>
                                        value="Học kỳ 2">Học kì 2</option>
                                    <option <?php if ($remarks['semester'] == 'Học kỳ 3')
                                        echo ('selected'); ?>
                                        value="Học kỳ 3">Học kì 3</option>

                                </select>
                            </div>
                            <div>
                                <label class="formbold-form-label">Năm học:</label>
                                <select class="formbold-form-input" name="school_year" id="year">
                                    <option <?php if ($remarks['school_year'] == '2022 - 2023')
                                        echo ('selected'); ?>
                                        value="2022 - 2024">2022 - 2023</option>
                                    <option <?php if ($remarks['school_year'] == '2023 - 2024')
                                        echo ('selected'); ?>
                                        value="2023 - 2024">2023 - 2024</option>
                                    <option <?php if ($remarks['school_year'] == '2024 - 2025')
                                        echo ('selected'); ?>
                                        value="2024 - 2025">2024 - 2025</option>

                                </select>
                                <!-- <input type="text" name="school_year" class="formbold-form-input"
                                    value="<?= $remarks['school_year'] ?>" placeholder="2023-2024" /> -->
                            </div>
                        </div>

                        
                        <!-- Table -->
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã học phần</th>
                                    <th scope="col">Tên học phần</th>
                                    <th scope="col">Ngày thi</th>
                                    <th scope="col">Phòng thi</th>
                                    <th scope="col">Điểm thi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><input type="number" name="module_id" class="formborder"
                                            value="<?= $remarks['module_id'] ?>" required></td>
                                    <td><input type="text" name="module_name" class="formborder"
                                            value="<?= $remarks['module_name'] ?>" required></td>
                                    <td><input type="date" name="exam_date" class="formborder"
                                            value="<?= $remarks['exam_date'] ?>" required></td>
                                    <td><input type="text" name="exam_room" class="formborder"
                                            value="<?= $remarks['exam_room'] ?>" required></td>
                                    <td><input type="number" step="0.01" name="score" class="formborder" min="0"
                                            max="10" value="<?= $remarks['score'] ?>" required></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="row btn-register">
                            <!-- <a href="#" class="btn btn-primary btn-login" type="submit">Đăng ký</a> -->
                            <button type="save" class="btn btn-success btn-login">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Main end -->

    <!-- Footer -->
    <section class="footer">
        <!-- Footer -->
        <footer class="text-center text-white">
            <!-- Grid container -->
            <div class="container">
                <marquee class="footer-item">
                    Trường Đại học Sài Gòn, 273 An Dương Vương, phường 3, quận 5, Tp.HCM
                </marquee>
            </div>
            
        </footer>
        <!-- Footer -->
    </section>
    <!-- End footer -->
</body>

</html>