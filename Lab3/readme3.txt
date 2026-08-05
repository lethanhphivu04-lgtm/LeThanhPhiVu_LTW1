1. Khi nào nên dùng Function, khi nào nên dùng Class và Object:
- Function: Khi cần thực hiện tính toán hoặc xử lý đơn giản, độc lập, không gắn với dữ liệu cụ thể (ví dụ: formatPrice, getTotalQuantity).
- Class và Object: Khi cần quản lý dữ liệu phức tạp có nhiều thuộc tính đi kèm với hành vi xử lý (ví dụ: Sinh viên gồm Mã SV, Họ tên, Điểm thành phần, kèm theo tính ĐTB, Xếp loại, Học bổng).

2. Ý nghĩa của từ khóa $this:
- Từ khóa $this đại diện cho chính đối tượng (instance) hiện tại đang làm việc bên trong lớp.

3. Ý nghĩa của toán tử mũi tên (->):
- Toán tử -> dùng để truy cập thuộc tính (property) hoặc gọi phương thức (method) của đối tượng.

4. Lợi ích của việc tái sử dụng phương thức (Method Reuse):
- Tránh viết lặp code. Khi cần sửa đổi logic xử lý (như cách tính ĐTB hay Xếp loại), chỉ cần chỉnh sửa tại phương thức trong Class thì tất cả các đối tượng sẽ tự động cập nhật theo.

