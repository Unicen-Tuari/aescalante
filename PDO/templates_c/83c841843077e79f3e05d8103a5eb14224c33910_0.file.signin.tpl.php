<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 05:35:04
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\signin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f03ed68b5b014_98153192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c841843077e79f3e05d8103a5eb14224c33910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\signin.tpl',
      1 => 1594092902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f03ed68b5b014_98153192 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro Admin LNS</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="" href="../images/icono.png">
  </head>
  <body>

    <div class="login-box">
      <img src="../images/image_login.jpg" class="avatar" alt="Avatar Image">
      <h1>Regístrate</h1>
      <form action="createUser" method="POST">
        <label for="email">Mail</label>
        <input type="email" id="email" name="email" placeholder="Enter Username" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Crear">
        
        <a href="login">Ir a acceso</a><br>
      </form>
    </div>
  </body>
</html><?php }
}
