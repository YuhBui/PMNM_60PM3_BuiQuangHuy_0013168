<?php
class sinhvien_ett {
    public $id;
    public $hoten;
    public $mssv;
    public $gioitinh;

    public function __construct($id, $hoten, $mssv, $gioitinh)
    {
        $this->id = $id;
        $this->hoten = $hoten;
        $this->mssv = $mssv;
        $this->gioitinh = $gioitinh;
    }
}
?>