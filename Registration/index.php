<html>
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" type="text/css" href="AuthRegStyle.css">
</head>
<div id="container">
    <div id="wrapper">
        <div id="subscribe">
            <form  action="script.php" autocomplete="on">
                <h1>Регистрация</h1>
                <p>
                    <label for="usernamesignup" class="uname" data-icon="u">Введите имя пользователя</label>
                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Username" />
                </p>
                <p>
                    <label for="emailsignup" class="youmail" data-icon="e">Введите EMail</label>
                    <input id="emailsignup" name="emailsignup" required="required" type="text" placeholder="Mymail@mail.com"/>
                </p>
                <p>
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Введите пароль</label>
                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="Password"/>
                </p>
                <p>
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Пожалуйста, подтвердите пароль</label>
                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="Password"/>
                </p>
                <p class="button">
                    <input type="submit" value="Войти"/>
                </p>
                <p class="button">
                    <input type="submit" onclick="location.href='http://localhost/BookShop'" value="Назад на страницу"/>
                </p>
                <p class="change_link">
                    Уже зарегистрированы?
                    <a href="http://localhost/BookShop/Authorisation" class="to_subscribe">Авторизация</a>
                </p>
            </form>
        </div>
    </div>
</div>
</html>