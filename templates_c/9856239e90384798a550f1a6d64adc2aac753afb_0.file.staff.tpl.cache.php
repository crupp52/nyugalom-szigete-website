<?php
/* Smarty version 3.1.33, created on 2019-01-16 11:36:06
  from 'C:\xampp\htdocs\nysz\templates\staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f0916bcbae4_32118597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9856239e90384798a550f1a6d64adc2aac753afb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\staff.tpl',
      1 => 1547634964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c3f0916bcbae4_32118597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9446848235c3f0916b857a6_23541345';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="section-staff after-nav">
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
