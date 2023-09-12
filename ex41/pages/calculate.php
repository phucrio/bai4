
    <form method="POST" action="">
        <label for="a">Nhập giá trị a:</label>
        <input type="text" id="a" name="a">
        <br>

        <label for="b">Nhập giá trị b:</label>
        <input type="text" id="b" name="b">
        <br>

        <p>Chọn phép tính:</p>
        <input type="radio" id="cong" name="pheptinh" value="cong">
        <label for="cong">Cộng</label>

        <input type="radio" id="tru" name="pheptinh" value="tru">
        <label for="tru">Trừ</label>

        <input type="radio" id="nhan" name="pheptinh" value="nhan">
        <label for="nhan">Nhân</label>

        <input type="radio" id="chia" name="pheptinh" value="chia">
        <label for="chia">Chia</label>

        <br>
        <input type="submit" value="Tính">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $pheptinh = $_POST["pheptinh"];
    switch ($pheptinh) {
        case "cong":
            $ketqua = $a + $b;
            break;
        case "tru":
            $ketqua = $a - $b;
            break;
        case "nhan":
            $ketqua = $a * $b;
            break;
        case "chia":
            if ($b != 0) {
                $ketqua = $a / $b;
            } else {
                $ketqua = "Không thể chia cho 0";
            }
            break;
        default:
            $ketqua = "Vui lòng chọn phép tính";
    }
    echo "Kết quả của phép tính là: " . $ketqua;
}
?>
