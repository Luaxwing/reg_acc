<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入註冊系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app" class="container">
    <br>
    <a href="../">返回</a>
    <a href="./login_form.php">登入</a>
    <hr>

    <h3>會員註冊</h3>
    <br>
<form action="add_user.php" method="POST">


<div class="row d-flex col-auto">
    <label for="" class="col-1" >帳號</label>
    <input type="text" name="acc" id="" class="col-2">
</div>

<div class="row d-flex col-auto">
    <label for="" class="col-1">密碼</label>
    <input type="password" name="pw" id="" class="col-2">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">姓名</label>
    <input type="text" name="name" id="" class="col-2">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">電子郵件</label>
    <input type="text" name="email" id="" class="col-2">
</div>
<div class="row d-flex col-auto">
    <label for="" class="col-1">居住地</label>
    <input type="text" name="adress" id="" class="col-2">
</div>

<br>
<div>
    <input type="submit" value="送出" class="btn btn-primary">
    <input type="reset" value="重置" class="btn btn-primary">
</div>





</form>
































    </div>
  
   




    
</body>
</html>