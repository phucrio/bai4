<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/ad.css">
  </head>
  <body>
    <div class="container">
        <div class="login-title">Login</div>
        <form class="login-form" action="" method="post">
            <input class="ip-login" placeholder="Username" type="text" id="username" name="username" required><br>
            <input class="ip-login" placeholder="Password" type="password" id="password" name="password" required><br>
            <input class="ip-login ip-submit" type="submit" value="SIGN IN">
        </form>
        <?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','banhang') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:list.php");
    }
?>
    </div>
  </body>
</html>