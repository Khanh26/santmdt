# Cấu trúc file
Các File index.php, Route.php,dbConnect không ai được chỉnh sửa.
1. View</br>
- Các file giao diện</br>
- Code giao diện này ở đây</br>
2. Router</br>
- Tạo đường dẫn tới view ở file configRoute</br>
- VD: $route->add('a','b.php');</br>
- Với a ở đây là tên router và b là tên file giao diện.</br>
- Trên truy cập tới trang này trên url: http://localhost/santmdt/?router=a
3. Public</br>
- file này chứa css, img, js, plugins</br>
- URL: http://localhost/santmdt/public/...</br>
4. Modules</br>
- Viết các class để truy vấn Database
- folder API để return data JSON
5. Database</br>
- Connect tới DB và script DB
