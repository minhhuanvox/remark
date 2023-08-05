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
      <a href="admin/remark/list" style="float:left"><button type="button"
          class="btn btn-outline-primary">Quay lại</button></a>
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
            <div class="formbold-input-flex">
              <div>
                <label for="firstname" class="formbold-form-label">
                  Họ và tên:</label>
                <input type="text" name="name" class="formbold-form-input" placeholder="<?= $remarks['name'] ?>"
                  readonly />
              </div>

              <div class="formbold-mb-3">
                <label for="dob" class="formbold-form-label">
                  Ngày sinh:
                </label>
                <input type="date" name="date_of_birth" class="formbold-form-input"
                  value="<?= $remarks['date_of_birth'] ?>" disabled />
              </div>
            </div>
            <!-- Row 2 -->
            <div class="formbold-input-flex">
              <div>
                <label for="mssv" class="formbold-form-label"> MSSV: </label>
                <input type="text" name="student-id" class="formbold-form-input"
                  placeholder="<?= $remarks['student-id'] ?>" disabled />
              </div>

              <div>
                <label for="class" class="formbold-form-label"> Lớp: </label>
                <input type="text" name="class" id="class" class="formbold-form-input"
                  placeholder="<?= $remarks['class'] ?>" disabled />
              </div>
            </div>

            <!-- Row 3 -->

            <div class="formbold-input-flex">
              <div>
                <label for="email" class="formbold-form-label"> Email </label>
                <input type="email" name="email" id="email" class="formbold-form-input"
                  placeholder="<?= $remarks['email'] ?>" disabled />
              </div>

              <div>
                <label for="phone" class="formbold-form-label">
                  Số điện thoại:
                </label>
                <input type="text" name="phone" id="phone" class="formbold-form-input"
                  placeholder="<?= $remarks['phone_number'] ?>" disabled />
              </div>
            </div>

            <!-- Row 4 -->
            <div class="formbold-input-flex">
              <div>
                <label for="semester" class="formbold-form-label">Học kỳ:</label>
                <input type="text" name="semester" class="formbold-form-input" placeholder="<?= $remarks['semester'] ?>"
                  disabled />
              </div>
              <div>
                <label class="formbold-form-label">Năm học:</label>
                <input type="text" name="school_year" class="formbold-form-input"
                  placeholder="<?= $remarks['school_year'] ?>" disabled />
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
                  <td><input type="number" name="ma_hoc_phan" class="formborder"
                      placeholder="<?= $remarks['module_id'] ?>" required disabled></td>
                  <td><input type="text" name="ten_hoc_phan" class="formborder"
                      placeholder="<?= $remarks['module_name'] ?>" required disabled></td>
                  <td><input type="date" name="ngay_thi" class="formborder" value="<?= $remarks['exam_date'] ?>"
                      required disabled></td>
                  <td><input type="text" name="phong_thi" class="formborder" placeholder="<?= $remarks['exam_room'] ?>"
                      required disabled></td>
                  <td><input type="number" step="0.01" name="diem" class="formborder"
                      placeholder="<?= $remarks['score'] ?>" required disabled></td>
                </tr>
              </tbody>
            </table>

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