<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:27:17
  from 'C:\xampp\htdocs\nysz\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f070544d213_20524232',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '1472f064c09a0e537ea1fbcadac22cf051588972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\contact.tpl',
      1 => 1547591453,
      2 => 'file',
    ),
    'e9626ad78b6a77c1523251fe74cfa1fc59a498e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\header.tpl',
      1 => 1547590899,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5c3f070544d213_20524232 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="//www.nyugalomszigetebgy.hu/"><img class="header__image logo" src="resources/img/nysz_white.png" alt="Logo" /></a>
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
                <a class="offcanvas__item" data-scroll href="//www.nyugalomszigetebgy.hu/" title="Főoldal">Főoldal</a>
                <a class="offcanvas__item" data-scroll href="/services" title="Szolgáltatások">Szolgáltatások</a>
                <a class="offcanvas__item" data-scroll href="/staff" title="Munkatársak">Munkatársak</a>
                <a class="offcanvas__item" data-scroll href="/contact" title="Kapcsolat">Kapcsolat</a>
            </div>
        </aside><section class="section section-contact after-nav">
    <div class="row">
        <h2>Megtalálsz minket</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3 text-center">
            <h3>Közösségi média</h3>
            <a href="https://www.facebook.com/A-Nyugalom-Szigete-Massz%C3%A1zs-%C3%A9s-Sz%C3%A9ps%C3%A9gszalon-162437074484979/" target="_blank"><ion-icon name="logo-facebook" size="large"></ion-icon></a>
            <a href="https://m.me/162437074484979" target="_blank"><ion-icon name="mail" size="large"></ion-icon></a>
        </div>
        <div class="col span-1-of-3 text-center">
            <h3>Kapcsolat</h3>
            <p>2660 Balassagyarmat,<br>Rákóczi Fejedelem u. 34-36.</p>
            <p>06/70-319-8836</p>
            <a class="link" href="https://m.me/162437074484979" target="_blank">Facebook Messenger</a>
            <h3>Nyitvatartás</h3>
            <p>H-Szo: 8:00 - 20:00</p>
            <p>V: ZÁRVA</p>
        </div>
        <div class="col span-1-of-3">

        </div>
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.602308769669!2d19.29237341558572!3d48.07931877921881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476aa0704f9d44eb%3A0x67e78315b6b36817!2sBalassagyarmat%2C+R%C3%A1k%C3%B3czi+fejedelem+%C3%BAt+34%2C+2660!5e0!3m2!1shu!2shu!4v1534935614952" width="100%" height="500" frameborder="0"allowfullscreen></iframe>
</section>
<script src="vendor/js/navbar.js"></script>
<script src="https://unpkg.com/ionicons@4.4.0/dist/ionicons.js"></script>
<script src=" <?php echo '<?php ';?>echo get_bloginfo('template_directory') <?php echo '?>';?>/vendor/js/navbar.js"></script>
    </body>
</html><?php }
}
