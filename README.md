# Quanlytainguyenmonhoc   
__Hướng dẫn sử dụng__

Yêu cầu:

- Có XAMPP hoặc WAMP
- Có database \(MSSQL hoặc MySQL hoặc các loại database khác\)

Các bước thực hiện \(Sử dụng với XAMPP\)

- Bước 1: Khởi động XAMPP
- Bước 2: Điều chỉnh đường dẫn Apache trong XAMPP đến thư mục chứa các file \.php
- Bước 3: Start Apache và Start MySQL trong XAMPP
- Bước 4: Chương trình sẽ chạy trên localhost:, bắt đầu từ file index\.php

Các lưu ý khác:

- MySQL:
	- Chỉnh sửa lại câu lệnh *mysqli\_connect\('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc'\) *theo cấu hình máy\.

Ví dụ: 

\+ Apache chạy trên *localhost:8000* 

\+ MySQL chạy trên cổng *1212*

\+ Usename của MySQL là *abc123*

\+ Password của MySQL là *def456*

\+ Tên của table trong MySQL là *quanlytainguyenmonhoc*

- __*mysqli\_connect\('localhost:1212', ‘abc123’, 'def456', 'quanlytainguyenmonhoc'\)*__
	- Tên của các table trong MySQL theo code:

\+ user\(id, username, password, nickname, admin\) – Thông tin đăng nhập của user

\+ video\(id, title, link\) – Thông tin video

\+ vid\_watch\_later\(username, id\_vid\) – Video đã lưu của user

\+ saved\_file\(username, file, time, share\) – File đã lưu của user

- Vì file chạy trên __localhost__ nên hành động lưu file sẽ được lưu trong thư mục __uploads__ của thư mục chạy chương trình, nên nếu chưa có thư mục uploads thì tạo 1 thư mục __uploads__\.
