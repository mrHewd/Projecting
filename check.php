<html>
<head>
<meta charset="UTF-8">
        <meta charset="UTF-8">
        <title>Книжный интернет-магазин</title>
<body>
    <?php
    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        
        return $value;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
        $password = $_POST['password'];
        file_put_contents('textfile.txt', '');
        $f = fopen("textfile.txt", "a");
        fwrite($f, $email."\n".$password); 
        $f = fopen("textfile.txt", "r");
        while(!feof($f)) { 
            echo fgets($f) . "<br />";
        } 
        fclose($f);
        if($email_validate) {
            echo "Введена корректная почта";
        } else {
            echo "Введенна некорректная почта";
        }
        echo "<br>";
        if (preg_match('/^[A-z0-9]{4,30}$/', $password)) {
        echo 'Введен корректный пароль';
        } else { echo 'Введен некорректный пароль'; }
    }
    ?>
    <br>
    <a>
        <div class="getemail-main-left-btn-outer">
            <button onclick="location.href='http://localhost/BookShop';">Обратно на сайт</button>
        </div>
    </a>
</body>
</html>