<?php
require_once('Smarty.class.php');
session_start();
unset($_SESSION['warning']);
unset($_SESSION['warning1']);

$s = new Smarty();

if (isset($_SESSION['user'])) {
    $s->assign('user', $_SESSION['user']['login'] );
}

$s->display('templates/index.tpl');