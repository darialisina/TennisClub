<?php
session_start();
unset($_SESSION['warning1']);

$dbh = new PDO('mysql:host=localhost;dbname=course_work', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
foreach ($dbh->query('SELECT id, password, email, isAdmin FROM user') as $row) {

    if ($_POST['email'] == $row['email']) {
        $_SESSION['warning1'] = "Пользователь с данным E-mail уже зарегистрирован";
        header('Location: ../pages/login.php');
        $error=1;
        break;
        
    }
}
     if($error!=1){
         $query = $dbh->prepare(
             'INSERT INTO user(firstname, lastname, email, password, phone, isAdmin) 
            VALUES (:firstname, :lastname, :email, :password, :phone, 0)');
         
         $query->bindValue(':firstname', $_POST['name']);
         $query->bindValue(':lastname', $_POST['surname']);
         $query->bindValue(':email', $_POST['email']);
         $query->bindValue(':password', $_POST['password']);
         $query->bindValue(':phone', $_POST['phone']);
         
         $query->execute();
        //  $id = $dbh->lastInsertId();

        $_SESSION['user'] = [
            "login" => $_POST['email']
        ];
        header('Location: ../index.php');
     }