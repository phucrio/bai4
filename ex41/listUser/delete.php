<?php
	//xoa user hien tai. tro lai trang list
	$id =0;
	
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
	}
	
	//1. connect
	// Kết nối đến CSDL
    $servername = "localhost"; // Thay đổi tên máy chủ nếu cần
    $username = "root"; // Thay đổi tên người dùng MySQL
    $password = ""; // Thay đổi mật khẩu MySQL
    $dbname = "cnw"; // Thay đổi tên cơ sở dữ liệu

    $conn = new mysqli($servername, $username, $password, $dbname);
	
	//3. tao query va thuc hien ham query
	$query = "delete from users where id = $id";
	$result = mysqli_query($conn,$query);
	
	// Đóng kết nối CSDL
    $conn->close();
	
	//tro ve trang list
	header("location: index.php");
?>