<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<td>Id</td>
	<td>Tên</td>
	<td>SDT</td>
	<td>Email</td>
	<td>Role</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["first_name"]; ?></td>
	<td><?php echo $row["last_name"]; ?></td>
	<td><?php echo $row["city_name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>