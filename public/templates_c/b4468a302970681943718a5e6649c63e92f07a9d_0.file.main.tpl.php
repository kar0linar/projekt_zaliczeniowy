<?php
/* Smarty version 4.3.0, created on 2023-06-07 23:23:00
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480f5346f3910_24887777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4468a302970681943718a5e6649c63e92f07a9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\templates\\main.tpl',
      1 => 1686172541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480f5346f3910_24887777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5295416806480f5346cda54_83747892', 'title');
?>

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList" class="pure-menu-heading pure-menu-link">Lista</a>
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
<?php } else { ?>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
<?php }?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10853096746480f5346eaae4_29303361', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5934515956480f5346ebec9_74572198', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21312870806480f5346f3119_94110260', 'bottom');
?>


</body>

</html><?php }
/* {block 'title'} */
class Block_5295416806480f5346cda54_83747892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5295416806480f5346cda54_83747892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'title'} */
/* {block 'top'} */
class Block_10853096746480f5346eaae4_29303361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_10853096746480f5346eaae4_29303361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_5934515956480f5346ebec9_74572198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_5934515956480f5346ebec9_74572198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_21312870806480f5346f3119_94110260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_21312870806480f5346f3119_94110260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
