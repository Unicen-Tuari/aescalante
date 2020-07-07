<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 05:36:27
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f03edbbce6127_38033773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c3496e13bd8541b22bc8f8a78dec5a4b6b4916' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\login.tpl',
      1 => 1594092983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f03edbbce6127_38033773 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso Admin LNS</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="" href="../images/icono.png">
  </head>
  <body>

    <div class="login-box">
      <img src="../images/image_login.jpg" class="avatar" alt="Avatar Image">
      <h1>Acceder</h1>
      <form action="access" method="POST">
        <label for="email">Mail</label>
        <input type="email" id="mail" name="mail" placeholder="Enter Username" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>

        <input type="submit" value="Iniciar">

        <a href="registry">Regístrate</a><br>
        <a href="index">Vista Usuario</a><br>
      </form>
    </div>
  </body>
</html><?php }
}
