<?php
class home
{
    public function index()
    {
        echo "<h3>Đây là trang chủ. Chào mừng: " . $_SESSION['username'] . "</h3>";
        echo "<a href='/auth/logout' style='color: red; font-weight: bold; text-decoration: none;'>[Đăng xuất tài khoản]</a>";
    }
    
    public function about()
    {
        echo "Đây là trang giới thiệu";
    }

    public function login()
    {
        require_once '../App/Views/home/login.php';
    }
}
?>