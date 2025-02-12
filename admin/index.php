<?php
session_start();

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/global.php'; // Hàm hỗ trợ
//requirecontroller
require_once '../admin/controllers/DashboardController.php';
require_once '../admin/controllers/DanhmucController.php';
//requiremodels
require_once '../admin/models/danhmuc.php';
$act = $_GET['act'] ?? '/';
match ($act) {
//bảng điều khiển
'/' => (new DashboardController())->index(),
'danhmuc/list' => (new DanhmucController)->index(),
};