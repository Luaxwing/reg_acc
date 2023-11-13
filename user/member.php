<?php 
session_save_path("tmp");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body>
<header class="nav">
        <div class="nav-item col-4"></div>
        <div class="nav-item col-4">
            <ul class="d-flex justify-content-evenly">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
        <div class="nav-item col-4">
            <?php

            
            if (isset($_SESSION['user'])) {
                echo "歡迎光臨" . $_SESSION['user'];
                ?>
                <a href='user/logout.php'class='btn btn-primary mx-2'>登出</a>
                <a href='user/member.php'class='btn btn-success mx-2'>會員中心</a>
                <?php
               
            } else {
                ?>
                <a href="user/reg.php" class="btn btn-primary mx-2">註冊</a>
                <a href="user/login_form.php" class="btn btn-success mx-2">登入</a>
            <?php } ?>
        </div>

    </header>
    <div class="container">
                <h1>使用者資料</h1>

<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="select * from users where `acc` = '{$_SESSION['user']}} ";
$user=$pdo->query($sql)->fetch();

?>









                <form action="update.php" method="POST">


<div class="row d-flex col-auto">
    <label for="" class="col-1" >帳號</label>
    <input type="text" name="acc" id="" class="col-2" value="<?=$_POST['acc']?>">
</div>

<div class="row d-flex col-auto">
    <label for="" class="col-1">密碼</label>
    <input type="password" name="pw" id="" class="col-2" value="<?=$_POST['pw']?>">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">姓名</label>
    <input type="text" name="name" id="" class="col-2" value="<?=$_POST['name']?>">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">電子郵件</label>
    <input type="text" name="email" id="" class="col-2" value="<?=$_POST['email']?>">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">居住地</label>
    <input type="text" name="adress" id="" class="col-2" value="<?=$_POST['adress']?>">
</div>

<br>
<div>
    <input type="submit" value="更新" class="btn btn-primary">
    <input type="reset" value="重置" class="btn btn-primary">
    <input type="buttom" value="撤銷" class="btn btn-primary">
</div>





</form>



    </div>
</body>
</html>