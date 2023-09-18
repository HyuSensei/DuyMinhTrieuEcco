<?php
// Kết nối đến máy chủ CSDL mà các bạn muốn lấy, thêm mới, sửa và xóa dữ liệu

// $ket_noi = mysqli_connect('localhost', 'root', '', 'ltwetest');


// $connect = mysqli_connect('database-1.cnfp5xsngx3p.ap-southeast-2.rds.amazonaws.com', 'admin', 'Huyphan2002', 'ban_mu');

// mysqli_set_charset($connect, 'utf8');

$ket_noi = mysqli_init();
mysqli_ssl_set($ket_noi, NULL, NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($ket_noi, "munonchat.mysql.database.azure.com", "tienanhdz", "phuc17@@", "ltwetest", 3306, MYSQLI_CLIENT_SSL);
