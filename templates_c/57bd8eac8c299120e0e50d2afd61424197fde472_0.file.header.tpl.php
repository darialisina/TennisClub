<?php
/* Smarty version 3.1.33, created on 2022-05-21 20:51:09
  from 'D:\vertrigo\www\TennisClub\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_628950bdaabb61_77658103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57bd8eac8c299120e0e50d2afd61424197fde472' => 
    array (
      0 => 'D:\\vertrigo\\www\\TennisClub\\templates\\header.tpl',
      1 => 1653166266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628950bdaabb61_77658103 (Smarty_Internal_Template $_smarty_tpl) {
?><header class=" bg-dark d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom">
    <div class="logo m-2">
        <a href="index.php">
            <img class="" src="images/icon.png" alt="" width="70" height="70">
        </a>
    </div>
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="../images/icon.png"/>
        </svg>
    </a>

    <?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
        <div class="col-md-3 text-end">
            <a class="btn btn-outline-warning me-2" href="pages/login.php">
                Зарегистрироваться
            </a>
            <a class="btn btn-warning me-3" href="pages/signup.php">Войти
            </a>
        </div>
    <?php } else { ?>
        <div class="col-md-5 text-end">
            <p1 class="text-light text-end "><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</p1>
            <a class="btn btn-outline-warning me-2" href="pages/account.php">
                Личный кабинет
            </a>
            <a class="btn btn-warning me-3" href="php/exit.php">Выйти
            </a>
        </div>
    <?php }?>
</header><?php }
}
