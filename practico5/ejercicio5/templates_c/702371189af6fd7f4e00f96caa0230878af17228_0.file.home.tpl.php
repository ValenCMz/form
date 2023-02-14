<?php
/* Smarty version 4.3.0, created on 2023-02-14 15:28:39
  from 'C:\xampp\htdocs\web2\Finalweb2\practico5\ejercicio5\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63eb9a97e29414_67159749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702371189af6fd7f4e00f96caa0230878af17228' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Finalweb2\\practico5\\ejercicio5\\templates\\home.tpl',
      1 => 1676384918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63eb9a97e29414_67159749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="register" method="post">

    <label>Email</label>
    <input name="email" type="text">

    <label>Contraseña</label>
    <input name="password" type="password">

    <label>Repetir Contraseña</label>
    <input name="password2" type="password">

    <input type="submit">

</form>




<?php if (((isset($_smarty_tpl->tpl_vars['usuario']->value)))) {?>
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['usuario']->value ?? '', 'UTF-8');?>

<?php }?>

<?php if (((isset($_smarty_tpl->tpl_vars['mensaje']->value)))) {?>
    <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
