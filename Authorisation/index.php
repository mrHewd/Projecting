<html>
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
    <link rel="stylesheet" type="text/css" href="AuthRegStyle.css">
</head>
<div id="container">
    <div id="wrapper">
        <div id="login">
            <form  action="check.php" method="post">
                <h1>Авторизация</h1>
                <p>
                    <label class="uname" data-icon="u">Введите EMail</label>
                    <input id="email" name="email" required="required" type="text" placeholder="Mymail@mail.com" method="post"/>
                </p>
                <p>
                    <label class="youpasswd" data-icon="p">Введите пароль</label>
                    <input id="password" name="password" required="required" type="password" placeholder="Password"/>
                </p>
                <p class="keeplogin">
                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                    <label for="loginkeeping">Запомните меня</label>
                </p>
                <p class="button">
                    <input type="submit" value="Войти"/>
                </p>
                <p class="button">
                    <input type="submit" onclick="location.href='http://localhost/BookShop'" value="Назад на страницу" />
                </p>
                <p class="change_link">
                    Еще не зарегистрированы?
                    <a href="http://localhost/BookShop/Registration" class="to_subscribe">Регистрация</a>
                </p>
                <input type="submit" value="Проверка"/>
            </form>
        </div>
    </div>
</div>
</html>