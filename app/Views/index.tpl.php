<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_SESSION['ERROR_MESSAGE'])) {
        echo $_SESSION['ERROR_MESSAGE'];
    }
    ?>
    <form action="controller.php?action=login" method="post">
        <label>用户名</label><input type="text" name="username">
        <label>密码</label><input type="password" name="password">
        <button>提交</button>
    </form>
    <hr>
    <form action="controller.php?action=register" method="post">
        <label>用户名</label><input type="text" name="username">
        <label>密码</label><input type="password" name="password">
        <label>确认密码</label><input type="password" name="confirmPassword">
        <button>注册</button>
    </form>

</body>

</html>