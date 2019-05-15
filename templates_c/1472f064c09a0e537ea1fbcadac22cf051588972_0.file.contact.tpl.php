<?php
/* Smarty version 3.1.33, created on 2019-01-16 13:07:09
  from 'C:\xampp\htdocs\nysz\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3f1e6db61365_18194091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1472f064c09a0e537ea1fbcadac22cf051588972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nysz\\templates\\contact.tpl',
      1 => 1547640429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5c3f1e6db61365_18194091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="section section-contact after-nav">
    <div class="row">
        <h2>Megtalálsz minket</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-2 text-center">
            <h3>Közösségi média</h3>
            <a href="https://www.facebook.com/A-Nyugalom-Szigete-Massz%C3%A1zs-%C3%A9s-Sz%C3%A9ps%C3%A9gszalon-162437074484979/" target="_blank"><ion-icon name="logo-facebook" size="large"></ion-icon></a>
            <a href="https://m.me/162437074484979" target="_blank"><ion-icon name="mail" size="large"></ion-icon></a>
            <h3>Nyitvatartás</h3>
            <p>H-Szo: 8:00 - 20:00</p>
            <p>V: ZÁRVA</p>
        </div>
        <div class="col span-1-of-2 text-center">
            <h3>Kapcsolat</h3>
            <p>2660 Balassagyarmat,<br>Rákóczi Fejedelem u. 34-36.</p>
            <p>06/70-319-8836</p>
            <a class="link" href="https://m.me/162437074484979" target="_blank">Facebook Messenger</a>
        </div>
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.602308769669!2d19.29237341558572!3d48.07931877921881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476aa0704f9d44eb%3A0x67e78315b6b36817!2sBalassagyarmat%2C+R%C3%A1k%C3%B3czi+fejedelem+%C3%BAt+34%2C+2660!5e0!3m2!1shu!2shu!4v1534935614952" width="100%" height="500" frameborder="0"allowfullscreen></iframe>
</section>
<?php echo '<script'; ?>
 src="vendor/js/navbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/ionicons@4.4.0/dist/ionicons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=" <?php echo '<?php ';?>echo get_bloginfo('template_directory') <?php echo '?>';?>/vendor/js/navbar.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
