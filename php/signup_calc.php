<?php
session_start();
unset($_SESSION['warning']);
$login = $_POST['email'];
$pass = $_POST['password'];
$dbh = new PDO('mysql:host=localhost;dbname=course_work', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);

foreach ($dbh->query('SELECT id, password, email, isAdmin FROM user') as $row) {

    if ($login == $row['email'] && $pass == $row['password']) {

        $_SESSION['user'] = [
            "login" => $login,
            "pass" => $pass
        ];

    }
}
if (isset($_SESSION['user'])) {
    header('Location: ../index.php');
} else {
    $_SESSION['warning'] = "Данный пользователь незарегистрирован или введен неверный пароль";
    header('Location: ../pages/signup.php');

}