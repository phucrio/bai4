
    <style>
        .addNew {
            text-align: center;
            width: 300px; /* Độ rộng của form */
            margin: 0 auto; /* Để canh giữa form */
            border: 2px solid;
            border-radius: 5px;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        .addNew h3 {
            text-align: center;
        }

        .addNew label {
            display: inline-block;
            width: 100px;
            text-align: left;
        }

        .addNew input[type="text"],
        .addNew input[type="number"] {
            display: inline-block;
            width: 200px; /* Độ rộng của input */
            padding-bottom: 1px;
        }

        .addNew input[type="submit"] {
            width: 50%;
            padding: 5px; /* Để làm cho nút dễ nhìn hơn */
            margin: 10px;
            background-color: #4CAF50;
            border-radius: 10px;
            border: none;
            color: white;
        }
    </style>

<body>
    <h3>Danh sách đọc từ file</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Quê quán</th>
            <th>Tuổi</th>
        </tr>

        <?php
        // Đường dẫn đến file danhSach.txt
        $file_path = 'C:\xampp\htdocs\bai4\ex41\pages\danhSach.txt';

        // Kiểm tra xem file tồn tại hay không
        if (file_exists($file_path)) {
            // Đọc nội dung từ file và chia thành các dòng
            $lines = file($file_path, FILE_IGNORE_NEW_LINES);

            // Duyệt qua từng dòng để hiển thị dữ liệu
            for ($i = 0; $i < count($lines); $i += 3) {
                $id = $i / 3 + 1;
                $ten = $lines[$i];
                $que_quan = $lines[$i + 1];
                $tuoi = $lines[$i + 2];

                // Hiển thị dữ liệu trong bảng
                echo "<tr>
                        <td>$id</td>
                        <td>$ten</td>
                        <td>$que_quan</td>
                        <td>$tuoi</td>
                      </tr>";
            }
        } else {
            echo "File danhSach.txt không tồn tại.";
        }
        ?>
    </table>
    <br>
    
    <form method="post" class="addNew">
        <h3 style='text-align: center';>Thêm sinh viên mới</h3>
        <div style='display:flex'>
            <label for="ten" style="width: 75px;">Tên:</label>
            <input type="text" name="ten" required>
        </div><br>
        
        <div style='display:flex'>
            <label for="que_quan" style="width: 75px;">Quê quán:</label>
            <input type="text" name="que_quan" required>
        </div><br>
        
        <div style='display:flex'>
            <label for="tuoi" style="width: 75px;">Tuổi:</label>
            <input type="number" name="tuoi" required>
        </div>
        

        <input type="submit" name="submit" value="Thêm sinh viên">
    </form>

    <?php
    // Xử lý khi nút "Thêm sinh viên" được nhấn
    if (isset($_POST['submit'])) {
        $ten_moi = $_POST['ten'];
        $que_quan_moi = $_POST['que_quan'];
        $tuoi_moi = $_POST['tuoi'];

        // Mở file danhSach.txt ở chế độ ghi
        $file = fopen($file_path, 'a');

        // Ghi dữ liệu mới vào cuối file
        fwrite($file, $ten_moi . "\n");
        fwrite($file, $que_quan_moi . "\n");
        fwrite($file, $tuoi_moi . "\n");

        // Đóng file
        fclose($file);

        // Hiển thị thông báo thành công
        echo "<p>Đã được thêm vào danh sách.</p>";
    }
    ?>
</body>
</html>
