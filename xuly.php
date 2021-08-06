<?php
//Lấy dữ liệu theo phương thức get
$username = $_GET['user'];
$password = $_GET['pass'];
//lấy dữ liệu theo phương thức post
// $username = $_POST['user'];
// $password = $_POST['pass'];
// hien thi
if (isset($_GET['user'])) {
    $a= explode('/', filter_var(trim($_GET['user'], '/')));
    // đảm bảo url không chứa dấu cách, ký tự đặc biệt
    var_dump($a);
}

echo" Username:".$username."<br>";
echo" PassWord:".$password."<br>";


?> 