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
    echo $_SESSION['VALIDATE_ERROR_MESSAGE'];
    ?>
    <form action="controller.php" method="post">
        <label>账号</label><input type="text" name="username">
        <label>密码</label><input type="password" name="password">
        <button>提交</button>
    </form>
</body>

</html>