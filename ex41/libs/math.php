<?php
function veBang($data) {
    echo '<table border="1">';
    // Header của bảng (sử dụng keys của mảng đầu vào)
    echo '<tr>';
    foreach (array_keys($data[0]) as $key) {
        echo '<th>' . htmlspecialchars($key) . '</th>';
    }
    echo '</tr>';

    // Dữ liệu của bảng (sử dụng values của mảng đầu vào)
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}
function inMatrix($matrix) {
    $size = count($matrix); // Lấy kích thước của ma trận (3x3)
    echo '<table border="1" style="width: 200px; height: 150px;">'; // Đặt kích thước chiều rộng và chiều cao cho bảng
    for ($i = 0; $i < $size; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $size; $j++) {
            echo '<td width="' . (200 / $size) . 'px" height="' . (200 / $size) . 'px">' . $matrix[$i][$j] . '</td>'; // Đặt kích thước chiều rộng và chiều cao cho từng ô
        }
        echo '</tr>';
    }
    echo '</table>';
}

function tinhTong($mang) {
    $tong = 0;
    foreach ($mang as $so) {
        $tong += $so;
    }
    return $tong;
}


function timMax($mang) {
    $max = $mang[0]; // Gán giá trị đầu tiên trong mảng làm giá trị lớn nhất ban đầu

    foreach ($mang as $so) {
        if ($so > $max) {
            $max = $so; // Nếu số hiện tại lớn hơn giá trị lớn nhất hiện tại, cập nhật giá trị lớn nhất
        }
    }

    return $max;
}

function inDaySo($mang) {
    foreach ($mang as $so) {
        echo $so . ' ';
    }
}


function addMatrices($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

function subtractMatrices($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
        }
    }
    return $result;
}

function multiplyMatrices($matrix1, $matrix2) {
    $result = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

?>