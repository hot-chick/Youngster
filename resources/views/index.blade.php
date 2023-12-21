<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Youngster</title>
</head>

<body>


    <div class="all_auth">
        <img src="/img/auth.png" height="600px" alt="" class="auth_img">

        <form class="auth_form" id="submit" method="post" action="/signin_valid">
        @csrf
            <input placeholder="Введите номер телефона" type="tel" id="phone" name="phone" title="Номер телефона должен содержать 11 цифр">
            <input placeholder="Введите пароль" type="password" id="password" name="password">
            <input type="submit" id="submit" value="Войти">

            <a class="regauth" href="/reg">Нет аккаунта?</a>
            <!-- <a class="regauth" href="./index.php">Вернуться на главную</a> -->
        </form>
    </div>

</body>

</html>