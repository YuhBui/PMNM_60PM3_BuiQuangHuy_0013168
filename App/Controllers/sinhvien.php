<?php
require_once "../App/Models/connectDB.php";
require_once "../App/Models/sinhvien_ett.php";

class sinhvien {
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB::connectDB();
    }

    public function index()
    {
        $sql = "SELECT id, hoten, mssv, gioitinh FROM sinhvien"; 
        $result = $this->conn->query($sql);
        $dssinhvien = array();

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $dssinhvien[] = new sinhvien_ett(
                    $row["id"],
                    $row["hoten"],
                    $row["mssv"],
                    $row["gioitinh"]
                );
            }
        }

        require_once '../App/Views/index.php';
    }

    public function about()
    {
        echo "Đây là trang giới thiệu sinh viên";
    }
}
?>