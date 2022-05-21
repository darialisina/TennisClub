<?php
session_start();
unset($_SESSION['warning1']);
require_once('Smarty.class.php');
$s = new Smarty();

if(isset($_SESSION['warning'])){
    $s->assign('warning', $_SESSION['warning'] );

}

$s->display('../templates/signup.tpl');