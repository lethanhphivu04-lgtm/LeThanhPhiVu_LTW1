<?php
class Booking {
    public $id,$ma,$ten,$sdt,$loai,$ngayNhan,$ngayTra,$tong,$tt,$anh;
    public function __construct($id,$ma,$ten,$sdt,$loai,$nn,$nt,$tong,$tt,$anh) {
        $this->id=$id; $this->ma=$ma; $this->ten=$ten; $this->sdt=$sdt;
        $this->loai=$loai; $this->ngayNhan=$nn; $this->ngayTra=$nt;
        $this->tong=$tong; $this->tt=$tt; $this->anh=$anh;
    }
    public function getTienFormat() { return number_format($this->tong,0,',','.') . 'đ'; }
    public function getMauTT() {
        $mau = ['Đang ở'=>'bg-success','Đã đặt'=>'bg-info text-dark','Đã trả phòng'=>'bg-secondary'];
        return $mau[$this->tt] ?? 'bg-danger';
    }
}
?>
