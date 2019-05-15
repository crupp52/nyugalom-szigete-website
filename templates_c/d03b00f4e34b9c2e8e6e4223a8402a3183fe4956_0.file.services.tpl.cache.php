<?php
/* Smarty version 3.1.33, created on 2019-01-16 12:02:55
  from 'C:\xampp\htdocs\nysz\templates\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f0f5f22b592_43408905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd03b00f4e34b9c2e8e6e4223a8402a3183fe4956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\services.tpl',
      1 => 1547636573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c3f0f5f22b592_43408905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11960367855c3f0f5f1e9f07_70853442';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="section-services-list after-nav">
    <div class="row text-center">
        <h2>Szolgáltatások</h2>
    </div>
    <a class="service-link" href="masszazs.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/masszazs.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Masszázs</div>
        </div>
    </a>
    <a class="service-link" href="gepek.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/gepek.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Gépi kezelések</div>
        </div>
    </a>
    <a class="service-link" href="access.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/access.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Access</div>
        </div>
    </a>
    <a class="service-link" href="lifecoach.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/lifecoach.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Life Coach</div>
        </div>
    </a>
    <a class="service-link" href="kristalyterapia.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/kristaly.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Kristályterápia</div>
        </div>
    </a>
	<a class="service-link" href="ezoteria.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/ezoteria.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Ezotéria</div>
        </div>
    </a>
    <a class="service-link" href="infraszauna.php">
        <div class="service-photo" style="background-image: url(/resources/img/categories/cover/infraszauna.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Infraszauna</div>
        </div>
    </a>
    <a class="service-link" href="egyeb.php">
        <div class="service-photo" style="background-image: url(../resources/img/categories/cover/egyeb.jpg)">
            <div class="overlay"></div>
            <div class="centered-text-box">Egyéb szolgáltatások</div>
        </div>
    </a>
    <div class="video-container">
		<iframe class="video" src="https://www.youtube.com/embed/zHcelG-9TBY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
