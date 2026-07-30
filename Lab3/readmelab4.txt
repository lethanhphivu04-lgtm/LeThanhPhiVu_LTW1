
1. Cập nhật và quan sát biến $fullname:
Khi chạy form-get.php và gửi form với phương thức GET, dữ liệu nhập vào được truyền qua thanh địa chỉ URL dưới dạng chuỗi truy vấn (ví dụ ?fullname=Nguyễn+Văn+A&birthyear=20...). Trong PHP, biến $fullname = $_GET['fullname'] lấy chính xác giá trị người dùng đã nhập trên URL và hiển thị lại ra trang web.

2. Kết quả chạy chương trình:
- Với phương thức GET (form-get.php): Dữ liệu lấy từ $_GET hiển thị đúng trong bảng kết quả bên dưới form, đồng thời toàn bộ tham số xuất hiện trên thanh địa chỉ URL.
- Với phương thức POST (form-post.php): Dữ liệu gửi ngầm trong HTTP Request body, không hiển thị trên URL. Khi tích hợp kiểm tra dữ liệu (validation), nếu để trống hoặc nhập sai định dạng thì mảng $errors sẽ lưu các câu thông báo lỗi và hiển thị cảnh báo; nếu nhập hợp lệ thì hiển thị thông tin sinh viên.

3. Sự khác nhau giữa phương thức GET và POST:
- Cách gửi dữ liệu: GET gửi dữ liệu đính kèm trên thanh địa chỉ URL (query string); POST gửi dữ liệu ngầm bên trong phần thân (body) của yêu cầu HTTP.
- Hiển thị trên URL: GET hiển thị rõ toàn bộ dữ liệu trên URL; POST hoàn toàn không hiển thị trên URL.
- Trường hợp sử dụng: GET nên dùng khi tìm kiếm, lọc dữ liệu, phân trang hoặc khi cần chia sẻ liên kết; POST nên dùng khi gửi dữ liệu nhạy cảm (mật khẩu, thông tin cá nhân), đăng nhập, đăng ký hoặc tải tệp tin (upload file) lên máy chủ.
