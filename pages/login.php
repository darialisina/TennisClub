<?php
session_start();
unset($_SESSION['warning']);
require_once('Smarty.class.php');
$s = new Smarty();

if(isset($_SESSION['warning1'])){
    $s->assign('warning1', $_SESSION['warning1'] );

}

$s->display('../templates/login.tpl');