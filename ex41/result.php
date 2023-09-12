<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket qua</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
include 'pages/header.php';
include 'pages/nav.php';
?>
<div class="content">
    <div class="content-right">
        <div>Họ tên: <?php
        if (isset($_POST["a"])) {echo $_POST["a"];}
        ?></div><br>
        <div>Lớp: <?php
        if (isset($_POST["b"])) {echo $_POST["b"];}
        ?></div><br>
        <div>Tổng điểm: <?php
        if (isset($_POST["c"], $_POST["d"], $_POST["e"])) {echo $_POST["c"] + $_POST["d"] + $_POST["e"];}
        ?></div>
    </div>
</div>
<?php
include 'pages/content.php';
?>

<?php
include 'pages/footer.php';
?>
</body>
</html>