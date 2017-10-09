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
    if (preg_match('/^[A-z0-9]{4,30}$/', $password)) {
    echo 'Корректный пароль';
    } else echo 'Некорректный пароль';
    echo "<br>";
    if($email_validate) {
        echo "Введена корректная почта";
    } else {
        echo "Введенна некорректная почта";
    }
}
?>