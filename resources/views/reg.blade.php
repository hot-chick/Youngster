<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="all_auth">
        <img src="/img/auth.png" height="600px" alt="" class="auth_img">

        <form id="FORM" class="reg_form" method="POST" action="/signup_valid">
            @csrf
            <input placeholder="Никнейм" type="text" id="nickname" name="nickname"
                title="Никнейм должен содержать английские буквы">

            <input placeholder="Фамилия" type="text" id="surname" name="surname" title="Фамилия должна содержать буквы">

            <input placeholder="Имя" type="text" id="name" name="name" title="Имя должно содержать буквы">

            <input placeholder="Номер телефона" type="tel" id="phone" name="phone" title="Номер телефона должна содержать 11 цифр">

            <input placeholder="Email" type="email" id="email" name="email" title="Введите Email правильно">

            <input placeholder="Пароль" type="password" id="password" name="password"
                title="Пароль долен содержать большую букву, маленькую букву, одну цифру и хотя бы 8 символов">
            <input placeholder="Повторите пароль" type="password" id="confirm_password" name="confirm_password"
                title="Пароли должны совпадать!">

            <input type="submit" id="submit" value="Зарегистрироваться">
            <a class="regauth" href="/">Есть аккаунт?</a>
            <!-- <a class="regauth" href="./index.php">Вернуться на главную</a> -->
        </form>
        <script>
            const password = document.getElementById("password");
            const confirm_password = document.getElementById("confirm_password");
            const form = document.getElementById("FORM");

            form.addEventListener("submit", (event) => {
                if (password.value !== confirm_password.value) {
                    event.preventDefault();
                    alert("Пароли не совпадают");
                }
            });
        </script>
    </div>
</body>

</html>