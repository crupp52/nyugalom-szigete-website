<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:31:28
  from 'C:\xampp\htdocs\nysz\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f161003b610_45640318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9626ad78b6a77c1523251fe74cfa1fc59a498e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\header.tpl',
      1 => 1547638287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3f161003b610_45640318 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hu">
    <head>
        <title>A Nyugalom Szigete Masszázs- és Szépségszalon Balassagyarmat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="vendor/css/grid.css">
        <link rel="stylesheet" href="vendor/css/normalize.css">
        <link rel="stylesheet" href="resources/css/style.css">
        <link rel="stylesheet" href="vendor/css/navbar.css">
		<link rel="shortcut icon" type="image/png" href="resources/img/favicon-16.png"/>
		<link rel="shortcut icon" type="image/png" href="resources/img/favicon-24.png"/>
		<link rel="shortcut icon" type="image/png" href="resources/img/favicon-32.png"/>
		<link rel="shortcut icon" type="image/png" href="resources/img/favicon-64.png"/>
    </head>
    <body>
		<div id="banner" class="ad-frame">
			<div class="ad-content">
				<a href="https://www.facebook.com/events/221172738756852/" target="_blank" title="Nyeremény link">
					<img src="resources/img/Nyeremenytatek_2018_szeptember.jpg" alt="Nyereményjáték" title="Nyereményjáték">
				</a>
			</div>
			<div class="ad-close">
				<p id="close-ad" onClick="clickClose()">Bezár</p>
			</div>
		</div>
        <header class="header">
            <div class="wrapper">
                <a href="index.php"><img class="header__image logo" src="resources/img/nysz_white.png" alt="Logo" /></a>
                <nav class="header__nav">
                    <a class="header__nav-item" data-scroll href="index.php" title="Főoldal">Főoldal</a>
                    <a class="header__nav-item" data-scroll href="services.php" title="Szolgáltatások">Szolgáltatások</a>
                    <a class="header__nav-item" data-scroll href="staff.php" title="Munkatársak">Munkatársak</a>
                    <a class="header__nav-item" data-scroll href="contact.php" title="Kapcsolat">Kapcsolat</a>
                </nav>
                <a id="btnOpen" class="header__open">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </header>                
        <aside id="offcanvas" class="offcanvas">
            <div class="offcanvas__content">
                <a id="btnClose" class="offcanvas__close">
                    <span></span>
                    <span></span>                    
                </a>
                <a class="offcanvas__item" data-scroll href="index.php" title="Főoldal">Főoldal</a>
                <a class="offcanvas__item" data-scroll href="services.php" title="Szolgáltatások">Szolgáltatások</a>
                <a class="offcanvas__item" data-scroll href="staff.php" title="Munkatársak">Munkatársak</a>
                <a class="offcanvas__item" data-scroll href="contact.php" title="Kapcsolat">Kapcsolat</a>
            </div>
        </aside><?php }
}
