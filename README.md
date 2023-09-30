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

Giao diện thêm đơn phúc khảo cho admin
![image](https://github.com/minhhuanvox/remark/assets/102376732/3af970c8-bcae-4c4f-a915-c90b0b4fe018)

Giao diện danh sách đơn phúc khảo
![image](https://github.com/minhhuanvox/remark/assets/102376732/3b9d3191-6b2c-419c-8c32-d5276c183aa8)

Giao diện xem chi tiết đơn phúc khảo
![image](https://github.com/minhhuanvox/remark/assets/102376732/1ed07e26-6ba2-4a0f-8e58-2151773b1bf6)

Giao diện cho sinh viên
![image](https://github.com/minhhuanvox/remark/assets/102376732/2975249f-0627-4b8c-b250-0014a42bd53a)

Giao diện đăng ký đơn phúc khảo 
![image](https://github.com/minhhuanvox/remark/assets/102376732/b46e86c6-f6ac-4080-8eb3-488521d33d30)
