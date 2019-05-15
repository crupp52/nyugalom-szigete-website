<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:27:51
  from 'C:\xampp\htdocs\nysz\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f072795bad6_56177780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd53e49680443e0ed847d7e310daa098aae1718f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\index.tpl',
      1 => 1547634391,
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
function content_5c3f072795bad6_56177780 (Smarty_Internal_Template $_smarty_tpl) {
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
        </aside><section class="hero">
    <div class="hero-text-box text-center">
        <h1>A Nyugalom Szigete Masszázs- és Szépségszalon</h1>
        <h2 class="text-white">A hely, ahol megpihenhet,<br>ellazíthatja fáradt testét,<br>feltöltheti lelkét,<br>kikapcsolhatja elméjét.</h2>
    </div>            
</section>
<section>
    <div class="row text-center">
        <h3>József Attila: A nyugalom szigetén</h3>
        <p class="long-copy">Te, kinek lelke zaklatott!<br>Mesélj, Te még nem jártál ott?<br>Nem leltél a helyre, mire én?<br>Nem voltál a nyugalom szigetén?<br>Ahol hallani a csend hangját,<br>Ahol hallani a Nap szavát?<br>Ahol éjszaka a hold táncol,<br>S te a csillagokkal játszol?<br>A szellő édesen simogat,<br>A tenger szelíden hívogat?<br>Ahol nincs magány és fájdalom,<br>Ahol csend honol és nyugalom?<br>Ahol tovaszálltak a felhők,<br>Eltűntek a hatalmas erők?<br>Ahol tengernyi a jóság,<br>Ahol megszűnt a gonoszság?<br>Te, kinek lelke zaklatott!<br>Mesélj, Te nem jártál ott?<br>Vagy tán nem tudod a helyet,<br>Ahol mindezt meglelheted?<br>Ülj csendben s hallgasd némán,<br>Onnan belülről, hogy kiállt!<br>Mindez megvan szíved mélyén,<br>Bátran keresd ott, a helyén!</p>
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
