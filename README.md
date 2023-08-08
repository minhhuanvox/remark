Dây là dự án cá nhân thực tập 
Tên dự án: Xây dựng website đăng ký phúc khảo dành cho sinh viên được thực hiện bới Minh Huân

Các bước chạy dự án 
Vào đường dẫn app/Config/Database.php
Đổi tên 'database' => 'phuckhao' thành 'database' => 'tên data base trong phpmyadmin

Chạy lệnh sau để tạo database
php spark migrate

Chạy lệnh sau để tạo Seeds trên database 
php spark db:seed TestSeeder
lệnh trên sẽ chạy 2 cái Seeds RemarkSeed và UserSeed cùng 1 lúc nên sẽ không chạy lại đc lần 2

Run website 
php spark serve

