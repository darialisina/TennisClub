<?php
require_once('Smarty.class.php');
$s = new Smarty();

$dbh = new PDO('mysql:host=localhost;dbname=course_work', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
$arr= $dbh->query('SELECT * FROM user')->fetchAll();
$s->assign('users', $arr);
$s->display('../templates/adminUsers.tpl');