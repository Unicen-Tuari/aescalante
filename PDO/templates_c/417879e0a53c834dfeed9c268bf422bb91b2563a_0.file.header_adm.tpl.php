<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 05:11:40
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\header_adm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5676cbf2d74_26508165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417879e0a53c834dfeed9c268bf422bb91b2563a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\header_adm.tpl',
      1 => 1593141099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5676cbf2d74_26508165 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Panel de Control</title>
<!--      Bootstrap core CSS  --> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">

    <link rel="icon" type="" href="/icono/icono.png">

    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">

    <meta name="theme-color" content="#563d7c">
    <!--  Custom styles for this template  -->
    <link href="css/intro_bootstrap.css" rel="stylesheet">
    <base href="<?php echo BASE_URL;?>
">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">La Nueva Sensación FC</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </bu tton>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="home">
                                <span data-feather="home"></span>
                                Jugadores <span class="user"></span>
                            </a>
                        </li>
                        <li class="nav-item" id="">
                            <a class="nav-link" href="positions">
                                <span data-feather="users">(current)</span>
                                Posiciones
                            </a>
                        </li>
                    </ul>
            </nav> <?php }
}
