		<?php
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
            try {
            	include 'C://xampp/htdocs/BookShop/application/models/check.php';
            } catch(PDOException $e)
	        {
	            echo $e->getMessage();
	        }
        }
		?>
		