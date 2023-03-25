<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="Введите Ваше имя">
        <label>Tel</label>
        <input type="tel" name="tel" placeholder="Введите Ваше номер телефона">
        <label>Message</label>
        <textarea row="10" cols="45" name="msg" placeholder="Введите обращение"></textarea>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>