<?php
// 1. Mảng dữ liệu
$menus = ["Trang chủ", "Sản phẩm", "Khuyến mãi", "Liên hệ"];
$products = [
    ["name" => "Laptop Dell Inspiron 15", "price" => 15990000, "image" => "images/default-product.jpg"],
    ["name" => "Laptop HP Pavilion 14",   "price" => 13490000, "image" => "images/default-product.jpg"],
    ["name" => "Laptop Asus VivoBook",    "price" => 12990000, "image" => "images/default-product.jpg"],
    ["name" => "Laptop Lenovo IdeaPad",   "price" => 11490000, "image" => "images/default-product.jpg"],
    ["name" => "MacBook Air M2",          "price" => 27990000, "image" => "images/default-product.jpg"],
    ["name" => "Laptop Acer Aspire 5",    "price" => 10990000, "image" => "images/default-product.jpg"]
];
$brands = ["Dell", "HP", "Asus", "Lenovo", "Apple", "Acer"];
$categories = ["Laptop", "Điện thoại", "Máy tính bảng", "Phụ kiện"];
$contactTimes = ["Buổi sáng (8h-11h)", "Buổi chiều (13h-17h)"];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 2 - Bài 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner { background: rgb(4, 40, 94); color: white; text-align: center; padding: 40px 20px; }
        .stitle { text-align: center; color: #0d6efd; margin-bottom: 25px; font-weight: bold; }
        .card { border: none; box-shadow: 0 0 10px rgba(0,0,0,0.1); transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .card img { height: 180px; object-fit: cover; background: #e7f1ff; }
        .price { color: red; font-weight: bold; }
        .brand-item { background: #fff; border: 1px solid #dee2e6; padding: 15px; text-align: center; font-weight: bold; border-radius: 8px; color: rgb(4, 40, 94); }
        footer { background: rgb(4, 40, 94); color: white; padding: 20px 0; text-align: center; }
    </style>
</head>
<body>

    <!-- 1. Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(4, 40, 94);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">🛒 TechShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="nav-item"><a class="nav-link" href="#"><?= $menu ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Banner -->
    <div class="banner">
        <h1>Chào mừng đến với TechShop</h1>
        <p class="mb-0">Chuyên cung cấp laptop chính hãng - Giá tốt nhất thị trường</p>
    </div>

    <!-- 3. Thương hiệu nổi bật -->
    <div class="container my-4">
        <h2 class="stitle">THƯƠNG HIỆU NỔI BẬT</h2>
        <div class="row justify-content-center">
            <?php foreach ($brands as $brand) { ?>
                <div class="col-md-2 col-4 mb-3"><div class="brand-item"><?= $brand ?></div></div>
            <?php } ?>
        </div>
    </div>

    <!-- 4. Danh sách sản phẩm -->
    <div class="container mb-4">
        <h2 class="stitle">SẢN PHẨM NỔI BẬT</h2>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                        <div class="card-body">
                            <h5><?= $product['name'] ?></h5>
                            <p class="price"><?= $product['price'] ?> đồng</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                            <a href="#" class="btn btn-primary btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- 5. Form đăng ký nhận báo giá -->
    <div class="bg-light py-4">
        <div class="container">
            <h2 class="stitle">ĐĂNG KÝ NHẬN BÁO GIÁ</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white p-4 rounded shadow-sm">
                    <form action="#" method="post">
                        <div class="mb-3"><label class="form-label fw-bold">Họ và tên</label><input type="text" class="form-control" name="fullname"></div>
                        <div class="mb-3"><label class="form-label fw-bold">Email</label><input type="email" class="form-control" name="email"></div>
                        <div class="mb-3"><label class="form-label fw-bold">Số điện thoại</label><input type="text" class="form-control" name="phone"></div>
                        <div class="mb-3"><label class="form-label fw-bold">Địa chỉ</label><input type="text" class="form-control" name="address"></div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Danh mục sản phẩm quan tâm</label>
                            <select class="form-select" name="category">
                                <option value="">-- Chọn danh mục --</option>
                                <?php foreach ($categories as $category) { ?><option><?= $category ?></option><?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Hình thức nhận báo giá</label>
                            <div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="contact_method" value="email"><label class="form-check-label">Email</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="contact_method" value="phone"><label class="form-check-label">Điện thoại</label></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Thời gian liên hệ</label>
                            <select class="form-select" name="contact_time">
                                <option value="">-- Chọn thời gian --</option>
                                <?php foreach ($contactTimes as $time) { ?><option><?= $time ?></option><?php } ?>
                            </select>
                        </div>

                        <div class="mb-3"><label class="form-label fw-bold">Nội dung yêu cầu</label><textarea class="form-control" name="message" rows="3"></textarea></div>

                        <div>
                            <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
                            <button type="reset" class="btn btn-secondary">Làm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. Footer -->
    <footer>
        <div class="container">
            <h5>Website Thực Hành Lập Trình Web 1</h5>
            <p class="mb-1">Sinh viên thực hiện: Lê Thanh Phi Vũ | MSSV: 17_2123110178 | Lớp: LTW1</p>
            <p class="mb-0">&copy; 2026 Lê Thanh Phi Vũ. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
