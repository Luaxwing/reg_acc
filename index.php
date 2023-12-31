<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body class="container">
    <h1>ABC首頁</h1>
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

            session_save_path("user/tmp");
            session_start();
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
</body>

</html>