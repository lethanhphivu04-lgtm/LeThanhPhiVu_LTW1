PHÂN BIỆT CÁC LỆNH NHÚNG FILE TRONG PHP (INCLUDE, REQUIRE, INCLUDE_ONCE, REQUIRE_ONCE)

1. include:
- Nếu thiếu file: PHP phát cảnh báo Warning, chương trình VẪN TIẾP TỤC CHẠY các đoạn mã phía dưới.
- Minh chứng hình ảnh: assets/images/test_include.png

2. require:
- Nếu thiếu file: PHP báo lỗi nghiêm trọng Fatal Error và DỪNG CHƯƠNG TRÌNH ngay lập tức.
- Minh chứng hình ảnh: assets/images/test_require.png

3. include_once:
- Giống include, nhưng kiểm tra nếu file đã được nhúng trước đó thì BỎ QUA không nhúng lại.
- Minh chứng hình ảnh: assets/images/test_include_once.png

4. require_once:
- Giống require, nhưng kiểm tra nếu file đã được nhúng trước đó thì BỎ QUA không nhúng lại.
- Minh chứng hình ảnh: assets/images/test_require_once.png

KẾT LUẬN:
- Dùng require / require_once cho các file bắt buộc phải có (như header, footer, config, class).
- Dùng _once để tránh lỗi trùng lặp khi khai báo hàm hoặc lớp.

