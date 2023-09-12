<div class="regiter-form">
    <h2>Đăng ký</h2>
    <form action="resultregister.php" method="post" >
    Họ và tên <br>
    <input type="text" name="hoten" /><br /><br>
    Địa chỉ <br>
    <input type="text" name="diachi" /><br /><br>
    Nghề <br>
    <input type="text" name="nghe" /><br /><br>
    Ghi chú <br>
    <input type="text" name="ghichu" /><br /><br>
    <input type="submit" value="Gửi" />
</form>
</div>

<?php
if(isset($_POST['submit'])){
    include "resultregister.php";
}
?>