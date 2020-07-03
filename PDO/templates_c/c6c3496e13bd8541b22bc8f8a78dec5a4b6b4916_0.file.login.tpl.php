<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-03 06:08:26
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efeaf3acb0f30_84779193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c3496e13bd8541b22bc8f8a78dec5a4b6b4916' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\login.tpl',
      1 => 1593749303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efeaf3acb0f30_84779193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso LNS</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="" href="../images/icono.png">
  </head>
  <body>

    <div class="login-box">
      <img src="../images/hx.jpg" class="avatar" alt="Avatar Image">
      <h1>Acceder</h1>
      <form action="access" method="POST">
        <label for="mail">Mail</label>
        <input type="text" placeholder="Enter Username">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Enter Password">
        <input type="submit" value="Iniciar">
        <a href="#">Regístrate</a><br>
        <a href="#">Don't have An account?</a>
      </form>
    </div>
  </body>
</html><?php }
}
