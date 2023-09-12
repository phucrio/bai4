<?php
require_once('libs/math.php');

// Ví dụ sử dụng hàm
$mang = array(1, 2, 3, 4, 5);
$tong = tinhTong($mang);
echo "Mảng : ";inDaySo($mang);
echo "<br>Tổng của mảng là: $tong\n";


// Ví dụ sử dụng hàm
$mang = array(10, 5, 8, 20, 3);
echo "<br>Mảng : ";inDaySo($mang);
$soLonNhat = timMax($mang);
echo "<br>Giá trị lớn nhất trong mảng là: $soLonNhat";

?>