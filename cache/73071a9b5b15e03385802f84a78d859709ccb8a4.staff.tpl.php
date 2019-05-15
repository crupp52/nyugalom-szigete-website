<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:36:06
  from 'C:\xampp\htdocs\nysz\templates\staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f0916c3a028_89262366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9856239e90384798a550f1a6d64adc2aac753afb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\staff.tpl',
      1 => 1547634964,
      2 => 'file',
    ),
    'e9626ad78b6a77c1523251fe74cfa1fc59a498e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\header.tpl',
      1 => 1547634456,
      2 => 'file',
    ),
    'fd689cc8b643392eb0ccee895c697524da9029fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\footer.tpl',
      1 => 1544184391,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5c3f0916c3a028_89262366 (Smarty_Internal_Template $_smarty_tpl) {
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
        </aside><section class="section-staff after-nav">
    <h2>Munkatársaink</h2>
    <div class="row staff">
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2019/01/Névtelen.png" alt="">
            <p class="name">Horváth Viktória</p>
            <p>Masszázs</p>
        </div>
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2018/09/erdos_boglarka.jpg" alt="">
            <p class="name">Erdős Boglárka</p>
            <p>Masszázs</p>
        </div>
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2018/09/berecz_anita.jpg" alt="">
            <p class="name">Berecz Anita</p>
            <p>Masszázs es Talpreflexológia</p>
        </div>
	</div>
	<div class="row">
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2018/09/papp_eva.jpg" alt="">
            <p class="name">Papp Éva</p>
            <p>Hang masszázs, Hangfürdő</p>
        </div>
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2018/09/verebes_monika.jpg" alt="">
            <p class="name">Verebes Mónika</p>
            <p>Spirituális terapeuta</p>
        </div>
		<div class="col span-1-of-3 person">
            <img src="//www.nyugalomszigetebgy.hu/wp-content/uploads/2018/09/kalasz_edina.jpg" alt="">
            <p class="name">Kalász Edina</p>
            <p>Proaktív life coach, Masszőr, Meridian masszázs</p>
        </div>
	</div>
</section>
		<footer>
            <div class="row wrapper">
                <div class="col span-1-of-3 box">
                    <img src="resources/img/nysz_white.png" class="logo" alt="logo">
                    <ul class="nav">
                        <li><a href="index.php" title="Főoldal">Főoldal</a></li>
                        <li><a href="/services" title="Szolgáltatások">Szolgáltatások</a></li>
                        <li><a href="/contact" title="Kapcsolat">Kapcsolat</a></li>
                        <!--<li><a href="/blog" title="Blog">Blog</a></li>-->
                    </ul>
                </div>
                <div class="col span-1-of-3 box info">
                    <h2>Kapcsolat</h2>
                    <p>2660 Balassagyarmat,<br>Rákóczi Fejedelem u. 34-36.</p>
                    <p>06/70-319-8836</p>
                    <h2>Nyitvatartás</h2>
                    <p>H-Szo: 8:00 - 20:00</p>
                    <p>V: ZÁRVA</p>
                </div>
                <div class="col span-1-of-3 box">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.6023087696676!2d19.29237341556437!3d48.07931877921884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476aa0704f9d44eb%3A0x67e78315b6b36817!2sBalassagyarmat%2C+R%C3%A1k%C3%B3czi+fejedelem+%C3%BAt+34%2C+2660!5e0!3m2!1shu!2shu!4v1534531686528" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>              
                </div>
            </div>
            <div class="row wrapper">
                <p class="author">&copy; 2018 | <a href="https://www.facebook.com/zucklevente" target="_blank" title="Zuck Levente Facebook">Zuck Levente</a></p>
            </div>
        </footer>
		<script src="resources/js/popad.js"></script>
        <script src=" vendor/js/navbar.js"></script>
		<script type="text/javascript" id="cookieinfo"
			src="//cookieinfoscript.com/js/cookieinfo.min.js"
			data-bg="#645862"
			data-fg="#FFFFFF"
			data-link="#F1D600"
			data-cookie="CookieInfoScript"
			data-text-align="left"
			data-close-text="Rendben"
			data-message="Weboldalunk annak érdekében, hogy jobb felhasználói élményt biztosítson cookie-kat használ."
			data-linkmsg="Egyéb információ">
		</script>		
    </body>
</html><?php }
}
