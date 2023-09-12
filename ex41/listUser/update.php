<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//lay user hien tai tu database, fill to form
	//lay data va hien thi
	$id = 1;
	
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
	}
	
	//truy xuat vao database de lay user hien tai
	//lay moi nguoi dung va hien thi
	//1. connect
	$servername = "localhost"; // Thay đổi tên máy chủ nếu cần
    $username = "root"; // Thay đổi tên người dùng MySQL
    $password = ""; // Thay đổi mật khẩu MySQL
    $dbname = "cnw"; // Thay đổi tên cơ sở dữ liệu

    $conn = new mysqli($servername, $username, $password, $dbname);
	
	//3. tao query va thuc hien ham query
	$query = "select * from users where id = $id";
	$result = mysqli_query($conn,$query);
	
	//4. lay data tu ket qua query
	$firstRow = mysqli_fetch_assoc($result);
	
	$id = $firstRow["id"];
	$username = $firstRow["username"];
	$sdt = $firstRow["sdt"];
	$email = $firstRow["email"];
	$role = $firstRow["role"];
	
	//THIET LAP GIA TRI CHO CAC O TEXT
?>
<form method="post" enctype="multipart/form-data" name="form1" id="form1" action="userEditProcess.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2">Sua thong tin user: </td>
    </tr>
    <tr>
      <td>Username:</td>
      <td><label>
	  	<!--The Hidden: su dung de chua data submit tu form. Nhung khong hien thi-->
	  	<input name="id" type="hidden" value="<?php echo($id);?>"/>
        <input name="txtUsername" type="text" id="txtUsername" size="50" value="<?php echo($username);?>"/>
      </label></td>
    </tr>
    <tr>
      <td>SDT:</td>
      <td><input name="txtsdt" type="text" id="txtsdt" size="50" value="<?php echo($sdt);?>"/></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input name="txtEmail" type="text" id="txtEmail" size="50" <?php echo($email);?>/></td>
    </tr>
    <tr>
      <td>Role:</td>
      <td><label>
        <textarea name="txtRole" cols="50" rows="4" id="txtRole"><?php echo($role);?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
        <div align="right">
          <input type="reset" name="Submit2" value="Reset" />
          </div>
      </label></td>
      <td><label>
        <input name="btnSave" type="submit" id="btnSave" value="Save" />
      </label></td>
    </tr>
  </table>
</form>

<?php
	//dong ket noi
	$conn->close();
?>
</body>
</html>
