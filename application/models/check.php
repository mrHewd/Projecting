
        <?php
            
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
        ?>