<?php
/* Smarty version 4.3.0, created on 2023-06-15 22:00:32
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648b6de03949d3_81992300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76672fba577f1509cfa42caf311d4870386a6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalEdit.tpl',
      1 => 1686859230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b6de03949d3_81992300 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
	<title>edycja zwierzaków</title>
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
</head>
<body>
<section id="wrapper">
						<header>
							<div class="inner">
								<h2>edycja/dodawanie zwierzątka</h2>
                                <p>wpisz dane do formularza<p>
							</div>
						</header>
<div class="bottom-margin form-container">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalSave" method="post" class="pure-form pure-form-aligned">
		<fieldset>
			<div class="pure-control-group">
				<label for="animal_id">id</label>
				<input id="animal_id" type="text" placeholder="id" name="animal_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_id;?>
">
			</div>
			<div class="pure-control-group">
				<label for="animal_name">imię</label>
				<input id="animal_name" type="text" placeholder="imie" name="animal_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_name;?>
">
			</div>
			<div class="pure-control-group">
				<label for="join_date">data dołączenia</label>
				<input id="join_date" type="text" placeholder="data ur." name="join_date" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->join_date;?>
">
			</div>
			<div class="pure-controls"style="margin-top: 20px;">
				<input type="submit" class="button primary" value="Zapisz"/>
				<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
			</div>
		</fieldset>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
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
</html>
<?php }
}
