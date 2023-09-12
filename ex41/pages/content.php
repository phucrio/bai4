<html>
    <body>
    <div class="content">
    <div class="content-left">
        <img class="content-img" src="images/r.jpg" alt="">
    </div>
    <div class="content-right">
    </body>
</html>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'register':
            include 'register.php';
            break;
        case 'calculate':
            include 'calculate.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'drawtable':
            include 'drawtable.php';
            break;
        case 'sum':
            include 'sum.php';
            break;
        case 'matrix':
            include 'matrix.php';
            break;
        case 'arr':
            include 'arr.php';
            break;
        case 'file':
            include 'file.php';
            break;
        default: 'home.php';
    }
?>
    </div>
</div>