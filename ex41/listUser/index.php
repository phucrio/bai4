<!DOCTYPE html>
<html>
<head>
    <title>User Table from Database</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>
<body>
    <h1 style="text-align:center">Danh sách người dùng </h1>
    
    <?php
    // Kết nối đến CSDL
    $servername = "localhost"; // Thay đổi tên máy chủ nếu cần
    $username = "root"; // Thay đổi tên người dùng MySQL
    $password = ""; // Thay đổi mật khẩu MySQL
    $dbname = "cnw"; // Thay đổi tên cơ sở dữ liệu

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối CSDL thất bại: " . $conn->connect_error);
    }

 
    $sql = "SELECT id, username, sdt, email, role FROM users";
    $result = $conn->query($sql);
    $limit = 3;  
    if (isset($_GET["pagenum"])) {
        $pagenum  = (int)$_GET["pagenum"]; 
        } 
        else{ 
        $pagenum=1;
        };  
    $start_from = ($pagenum-1) * $limit;  
    $result = mysqli_query($conn,"SELECT * FROM users ORDER BY id ASC LIMIT $start_from,$limit");

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Username</th>';
        echo '<th>Số điện thoại</th>';
        echo '<th>Email</th>';
        echo '<th>Role</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['sdt'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['role'] . '</td>';
            echo '<td class="update"><a  href="update.php?id=' . $row['id'] . '">Cập nhật</a></td>';
            echo '<td><a href="delete.php?id=' . $row['id'] . '">Xóa</a></td>';
            echo '</tr>';
        }
        
        echo '</table>';
    } else {
        echo "Không có dữ liệu.";
    }

    

    $result_db = mysqli_query($conn,"SELECT COUNT(id) FROM users"); 
    $row_db = mysqli_fetch_row($result_db);  
    $total_records = $row_db[0];  
    $total_pages = ceil($total_records / $limit); 
    /* echo  $total_pages; */
    $pagLink = "<ul style='text-align:center' class='pagination'>";  
    for ($i=1; $i<=$total_pages; $i++) {
                $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?pagenum=".$i."'>".$i."</a></li>";	
    }
    echo $pagLink . "</ul>";  

    // Đóng kết nối CSDL
    $conn->close();
    ?>
</body>
</html>
