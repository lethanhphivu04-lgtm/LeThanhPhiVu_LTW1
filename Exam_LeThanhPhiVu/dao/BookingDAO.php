<?php
require_once __DIR__ . '/../models/Booking.php';
class BookingDAO {
    private $ds = [];
    public function __construct() {
        $data = [
            [1,'BK1001','Lê Thanh Phi Vũ', '0901193854','Tổng thống','2026-08-01','2026-08-03',15000000,'Đã đặt',     'assets/image/phongtongthong.png'],
            [2,'BK1002','Trần Thị Bích',   '0912345678','Cao cấp',   '2026-08-02','2026-08-05', 4500000,'Đang ở',     'assets/image/phongcaocap.png'],
            [3,'BK1003','Lê Hoàng Cường',  '0923456789','VIP',       '2026-08-03','2026-08-04', 3000000,'Đã trả phòng','assets/image/phongvip.png'],
            [4,'BK1004','Phạm Dung',       '0934567890','Bình dân',  '2026-08-05','2026-08-07', 1500000,'Đã đặt',     'assets/image/phongbinhdan.png'],
            [5,'BK1005','Vũ Anh',          '0945678901','Tổng thống','2026-08-06','2026-08-10', 8000000,'Hủy',        'assets/image/phongtongthong.png'],
            [6,'BK1006','Đặng Thảo',       '0956789012','Cao cấp',   '2026-08-07','2026-08-09', 3000000,'Đã đặt',    'assets/image/phongcaocap.png'],
            [7,'BK1007','Bùi Nam',         '0967890123','VIP',       '2026-08-08','2026-08-10', 6000000,'Đang ở',     'assets/image/phongvip.png'],
            [8,'BK1008','Ngô Mai',         '0978901234','Bình dân',  '2026-08-09','2026-08-11', 1500000,'Hủy',        'assets/image/phongbinhdan.png'],
            [9,'BK1009','Hoàng Tuấn',      '0989012345','Tổng thống','2026-08-10','2026-08-15',10000000,'Đã đặt',     'assets/image/phongtongthong.png'],
            [10,'BK1010','Khánh Vân',      '0990123456','Cao cấp',   '2026-08-11','2026-08-12', 1500000,'Đã đặt',    'assets/image/phongcaocap.png'],
            [11,'BK1011','Trịnh Văn Sơn', '0902123456','Bình dân',  '2026-08-12','2026-08-14', 1500000,'Đã đặt',    'assets/image/phongbinhdan.png'],
            [12,'BK1012','Đỗ Minh Trí',   '0913234567','VIP',       '2026-08-13','2026-08-16', 9000000,'Đang ở',    'assets/image/phongvip.png'],
            [13,'BK1013','Nguyễn Thị Hải','0924345678','Cao cấp',   '2026-08-14','2026-08-17', 4500000,'Đã trả phòng','assets/image/phongcaocap.png'],
            [14,'BK1014','Vũ Đức Thanh',  '0935456789','Tổng thống','2026-08-15','2026-08-20',10000000,'Đã đặt',    'assets/image/phongtongthong.png'],
            [15,'BK1015','Lý Phương Linh','0946567890','Bình dân',  '2026-08-16','2026-08-18', 1500000,'Hủy',       'assets/image/phongbinhdan.png'],
            [16,'BK1016','Phan Văn Hải',  '0957678901','Cao cấp',   '2026-08-17','2026-08-19', 3000000,'Đang ở',   'assets/image/phongcaocap.png'],
            [17,'BK1017','Hồ Thị Ngọc',  '0968789012','VIP',       '2026-08-18','2026-08-21', 9000000,'Đã đặt',   'assets/image/phongvip.png'],
            [18,'BK1018','Trần Bảo Lâm', '0979890123','Bình dân',  '2026-08-19','2026-08-20',  750000,'Đã trả phòng','assets/image/phongbinhdan.png'],
            [19,'BK1019','Đào Quang Huy','0980901234','Tổng thống','2026-08-20','2026-08-24', 8000000,'Đã đặt',   'assets/image/phongtongthong.png'],
            [20,'BK1020','Ngô Thanh Hà', '0991012345','Cao cấp',   '2026-08-21','2026-08-23', 3000000,'Đang ở',   'assets/image/phongcaocap.png'],
        ];
        foreach ($data as $r) $this->ds[] = new Booking(...$r);
    }
    public function getAll() { return $this->ds; }
    public function findById($id) {
        foreach ($this->ds as $b) if ($b->id == $id) return $b;
        return null;
    }
}
?>
