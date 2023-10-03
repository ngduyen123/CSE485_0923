<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['error'])){
        echo "<p>{$_GET['error']}</p>";
    }
?>
<form action="process_login.php" method="post">
    <div class="row input-group mb-3">
        <div class="col-md-4 ">
            Username or Email
        </div>
        <div class="col-md-8">
            <input type="text" name="user" id="" class="form-control">
        </div>
    </div>
    <div class="row input-group mb-3">
        <div class="col-md-4 ">
            Password
        </div>
        <div class="col-md-8">
            <input type="password" name="pass" id="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <button type="submit" class="btn btn-success" name="sbmLogin">Login</button>
        </div>
    </div>
</form>
</body>
</html>