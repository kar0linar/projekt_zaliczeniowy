<?php
/* Smarty version 4.3.0, created on 2023-06-07 18:13:16
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480ac9c5aed42_20578722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6056fc033a4608e936d13b2e831f6afa8fdc5415' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\Hello.tpl',
      1 => 1686153637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480ac9c5aed42_20578722 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

</body>

</html><?php }
}
