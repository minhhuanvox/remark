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
  <link rel="shortcut icon" href="//assets/images/logo.png" type="image/x-icon" />
  <title>Đăng ký đơn phúc khảo</title>
  <meta charset="utf-8">
  <base href="<?= base_url() ?>">
  <link rel="shortcut icon" href="assets/admin/images/favicon.ico" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
  <script src="assets/admin/js/chart-js-config.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
</head>

<body>


  <!-- Main start -->
  <section class="main">
    <div class="main-wrapper container">
      <!-- Title -->
      <div class="main-header">

        <div class="main-header__title">
          <h3>Trang đăng ký thông tin phúc khảo</h3>
          <?= view('messages/message') ?>
        </div>
        <div class="main-header__name">
          <h6>Xin chào, <span>
              <?= session()->get('user_login') ? session()->get('user_login')['name'] : "" ?>
            </span></h6>
        </div>
      </div>

      <div class="formbold-main-wrapper">
        <!-- Row 1 -->
        <div class="formbold-form-wrapper">
          <form action="user/create" method="POST">
            <div class="formbold-input-flex">
              <div>
                <label for="firstname" class="formbold-form-label">
                  Họ và tên:</label>
                <input type="text" name="name" id="name" class="formbold-form-input"
                  placeholder="<?= session()->get('user_login') ? session()->get('user_login')['name'] : "" ?>"
                  required />
              </div>

              <div class="formbold-mb-3">
                <label for="dob" class="formbold-form-label">
                  Ngày sinh:
                </label>
                <input type="date" name="date_of_birth" class="formbold-form-input" required />
              </div>
            </div>
            <!-- Row 2 -->
            <div class="formbold-input-flex">
              <div>
                <label for="mssv" class="formbold-form-label"> MSSV: </label>
                <input type="text" name="student-id" placeholder="3119410001" class="formbold-form-input" required />
              </div>

              <div>
                <label for="class" class="formbold-form-label"> Lớp: </label>
                <input type="text" name="class" placeholder="DCT1191" class="formbold-form-input" required />
              </div>
            </div>

            <!-- Row 3 -->

            <div class="formbold-input-flex">
              <div>
                <label for="email" class="formbold-form-label"> Email </label>
                <input type="email" name="email" placeholder="example@email.com" class="formbold-form-input" required />
              </div>

              <div>
                <label for="phone" class="formbold-form-label">
                  Số điện thoại:
                </label>
                <input type="text" name="phone_number" placeholder="Nhập số điện thoại" class="formbold-form-input"
                  required />
              </div>
            </div>

            <!-- Row 4 -->
            <div class="formbold-input-flex">
              <div>
                <label for="semester" class="formbold-form-label">Học kỳ:</label>
                <select class="formbold-form-input" name="semester">
                  <option value="Học kỳ 1">Học kỳ 1</option>
                  <option value="Học kỳ 2">Học kỳ 2</option>
                  <option value="Học kỳ 3">Học kỳ 3</option>
                </select>
                
              </div>
              <div>
                <label class="formbold-form-label">Năm học:</label>
                <select class="formbold-form-input" name="school_year">
                  <option value="2023">2023 - 2024</option>
                  <option value="2024">2024 - 2025</option>
                  <option value="2025">2025 - 2026</option>
                </select>
                
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
                  <td><input type="number" name="module_id" class="formborder" required></td>
                  <td><input type="text" name="module_name" class="formborder" required></td>
                  <td><input type="date" name="exam_date" class="formborder" required></td>
                  <td><input type="text" name="exam_room" class="formborder" required></td>
                  <td><input type="number" step="0.01" name="score" min="0" max="10" class="formborder" required></td>
                </tr>
                
              </tbody>
            </table>
            <div class="row btn-register">
              
              <button type="submit" class="btn btn-success">Đăng ký</button>
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
      <!-- Grid container -->

    </footer>
    <!-- Footer -->
  </section>
  <!-- End footer -->
  <script>
    function checkScore(input) {
      const score = parseFloat(input.value);
      const scoreError = document.getElementById('scoreError');

      if (isNaN(score) || score < 0 || score > 10) {
        scoreError.textContent = 'Điểm phải là số thực trong khoảng từ 0 đến 10.';
      } else {
        scoreError.textContent = '';
      }
    }
  </script>
</body>

</html>