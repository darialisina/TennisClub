<?php
$from = $_POST['email'];
// TODO - use PDO
// $dbh = new PDO('mysql:host=localhost;dbname=course_work', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
while ($row = mysqli_fetch_array($result)) {

    if ($row['isAdmin'] == 1) {

        $to = $row['email'];
        break;
    }
}

if ($_POST['level'] == 1) {
    $level = "Начинающий";
}
if ($_POST['level'] == 2) {
    $level = "Любитель";
}
if ($_POST['level'] == 3) {
    $level = "Профессионал";
}
$subject = "Новая запись на пробное занятие";
$message = "Имя: " . $_POST['name'] . "\n Фамилия: " . $_POST['surname'] . "\n Email: " . $_POST['email'] . "\n Номер телефона: " . $_POST['phone'] . "\n Уровень: " . $level . "\n Комментарий: " . $_POST['comment'];
$headers = "Content-type: text/plain; charset=utf-8\r\n" . "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();
mail($to, $subject, $message, $headers);
header('Location: ../index.php');
