<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'register':
        $title = 'Register';
        break;
        case 'kq':
            $title = 'Danh Sach Dang Ky';
            break;
    case 'calculate':
        $title = 'Calculate';
        break;
    case 'contact':
        $title = 'Contact';
        break;
    case 'drawtable':
        $title = 'Drawtable';
        break;
    case 'matrix':
        $title = 'Matrix';
        break;
    case 'arr':
        $title = 'Array';
        break;
    case 'file':
        $title = 'File';
        break;
    default:
        $title = 'Home';
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
include './pages/header.php';
include './pages/nav.php';
include './pages/content.php';
include './pages/footer.php';
?>

</body>
</html>
