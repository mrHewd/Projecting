<html>
<head>
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
            $hostname = 'localhost';
            $username = 'root';
            $passwrd = '';
            $database = 'bookshop';
            $con=mysqli_connect($hostname, $username, $passwrd, $database);
            mysqli_query($con, "SET NAMES 'utf8' ");
            $sql = "INSERT INTO user (email, password) VALUES ('" . $email . "', '" . $password . "')";
            echo "<br />";
            if ($con->query($sql) === TRUE) {
                echo "Новая запись успешно произведена";
            } else {
                echo "Ошибка: " . $sql . "<br>" . $con->error;
            }
            $con->close();
        }
        ?>
        <br>
        <a>
            <div class="getemail-main-left-btn-outer">
                <button onclick="location.href='http://localhost/vue04.dev';">Обратно на сайт</button>
            </div>
        </a>
    </body>
    </html>