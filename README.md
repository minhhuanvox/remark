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

Giao diện trang chủ
![image](https://github.com/minhhuanvox/remark/assets/102376732/715fbc9a-0c39-4f85-8ce4-9950c74e6b5b)

Giao diện đăng nhập
![image](https://github.com/minhhuanvox/remark/assets/102376732/a15d6cd8-d36c-432e-b3f8-c19df1449dfe)

Giao diện admin
![image](https://github.com/minhhuanvox/remark/assets/102376732/fb8ee402-22b1-4f0a-86cd-406af184bd28)
