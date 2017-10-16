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

$email = clean($email);

    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

    if($email_validate) {
        echo "Спасибо за сообщение";
    } else { // добавили сообщение
        echo "Введенные данные некорректные";
    }
}

?>