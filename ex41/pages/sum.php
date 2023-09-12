<div style="display: flex;">
    <div style='width: 200px;background-color: cyan;padding: 20px;border:1px solid;border-radius: 5%;'>
        <form method="POST" action="">
            <label for="a">Họ Tên:</label><br>
            <input type="text" id="a" name="a">
            <br>
            <label for="b">Lớp:</label><br>
            <input type="text" id="b" name="b"><br>
            <label for="c">Điểm 1:</label><br>
            <input type="number" id="c" name="c"><br>
            <label for="d">Điểm 2:</label><br>
            <input type="number" id="d" name="d"><br>
            <label for="e">Điểm 3:</label><br>
            <input type="number" id="e" name="e"><br>
            <input type="submit" name="ok" value="OK">
        </form>
    </div>
    <div style="margin-left: 100px;">
        
        <?php
        if (isset($_POST['ok'])){
            echo "<h3>
            Kết quả:
            </h3>";
            echo "<div>Họ tên: ";
            if (isset($_POST["a"])) {echo $_POST["a"];}
            echo "</div><br>";
            echo "<div>Lớp: "; 
            if (isset($_POST["b"])) {echo $_POST["b"];}
            echo "</div><br>";
            echo "<div>Tổng điểm: ";
            if (isset($_POST["c"], $_POST["d"], $_POST["e"])) {echo $_POST["c"] + $_POST["d"] + $_POST["e"];}
            echo "</div>";
        }
        ?>
    </div>
</div>

