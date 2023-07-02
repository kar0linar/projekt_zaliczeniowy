<?php
/* Smarty version 4.3.0, created on 2023-07-02 19:10:52
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\CaretakerEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a1af9c98bfa4_11216599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9243d5d96e02151d9fb2026f81a2382e99c3a8e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\CaretakerEdit.tpl',
      1 => 1688317851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a1af9c98bfa4_11216599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>edycja opiekunów</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
	<nav>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138316349764a1af9c97d045_63327155', 'messages');
?>

	</nav>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>edycja/dodawanie opiekunów</h2>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
caretakerSave" method="post" class="pure-form pure-form-aligned">
			<input type="hidden" name="caretaker_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->caretaker_id;?>
">
				<fieldset>
					<div class="pure-control-group">
						<label for="caretaker_name">imię</label>
						<input id="caretaker_name" type="text" placeholder="imie" name="caretaker_name"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->caretaker_name;?>
">
					</div>
					<div class="pure-control-group">
						<label for="caretaker_surname">nazwisko</label>
						<input id="caretaker_surname" type="text" placeholder="imie" name="caretaker_surname"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->caretaker_surname;?>
">
					</div>
					<div class="pure-control-group">
						<label for="join_date">data dołączenia</label>
						<input id="join_date" type="text" placeholder="data ur." name="join_date"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->join_date;?>
">
					</div>
					<div class="pure-controls" style="margin-top: 20px;">
						<input type="submit" class="button primary" value="Zapisz" />
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
caretakerList">Powrót</a>
					</div>
				</fieldset>

			</form>
		</div>

		<!-- Scripts -->
		<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'messages'} */
class Block_138316349764a1af9c97d045_63327155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_138316349764a1af9c97d045_63327155',
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
				<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</span>
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
}
