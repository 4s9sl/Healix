<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- icon -->
    <link rel="icon" href="logo/just_logo-removebg-preview.png" type="image/x-sicon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <!-- Render all elements normally -->
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="main">
        <div class="login"> 
                <div class="log-title">
                    <h1>Healix</h1>
                </div>
                <form method="POST" action="">
                    <div class="input-one">
                        <input name="user" type="text" placeholder="username">
                    </div>
                    <div class="input-two">
                        <input name="pass" type="password" placeholder="password">
                    </div>
                    <input name="login" type="submit" value="Login">
                </form>
        </div>
    </div>
</body>
</html>

<?php
$username_one= "youssef";
$password_one = "0";

$username_two= "kenzy";
$password_two = "1";

$username_three = "rawan";
$password_three = "2";

$username_four = "beshoy";
$password_four= "3";

if(isset($_POST['login']))
{
    $getusername = $_POST['user'];
    $getpassword = $_POST['pass'];

    if ($username_one === $getusername && $password_one === $getpassword) {
        SESSION_start();
        $_SESSION['USER'] = $getusername;
        $_SESSION['PASSWORD'] = $getpassword;
        $_SESSION['LOGIN'] = true;
        echo "<script> location.replace('interFace.html') </script>";
    }elseif ($username_two === $getusername && $password_two === $getpassword) {
        SESSION_start();
        $_SESSION['USER'] = $getusername;
        $_SESSION['PASSWORD'] = $getpassword;
        $_SESSION['LOGIN'] = true;
        echo "<script> location.replace('interFace.html') </script>";
    }elseif ($username_three === $getusername && $password_three === $getpassword) {
        SESSION_start();
        $_SESSION['USER'] = $getusername;
        $_SESSION['PASSWORD'] = $getpassword;
        $_SESSION['LOGIN'] = true;
        echo "<script> location.replace('interFace.html') </script>";
    }elseif ($username_four === $getusername && $password_four === $getpassword) {
        SESSION_start();
        $_SESSION['USER'] = $getusername;
        $_SESSION['PASSWORD'] = $getpassword;
        $_SESSION['LOGIN'] = true;
        echo "<script> location.replace('interFace.html') </script>";
    }
}
?>