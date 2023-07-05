<?php
/* Smarty version 4.3.0, created on 2023-07-05 16:32:36
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a57f04362c50_95263425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76672fba577f1509cfa42caf311d4870386a6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalEdit.tpl',
      1 => 1688567514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a57f04362c50_95263425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
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

		.messages {
			max-height: 100px;
			overflow-y: auto;
			padding: 10px;
		}
	</style>
	<nav>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6268873564a57f0433b861_83444442', 'messages');
?>

	</nav>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>edycja/dodawanie zwierzątka</h2>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalSave" method="post" class="pure-form pure-form-aligned">
				<input type="hidden" name="animal_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_id;?>
">
				<fieldset>

					<div class="pure-control-group">
						<label for="animal_name">imię</label>
						<input id="animal_name" type="text" placeholder="imie" name="animal_name"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_name;?>
">
					</div>

					<div class="pure-control-group">
						<label for="species_id">gatunek</label>
							<select id="species_id" name="species_id">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['species']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value["species_id"];?>
"<?php if ($_smarty_tpl->tpl_vars['s']->value["species_id"] == $_smarty_tpl->tpl_vars['form']->value->species_id) {?>selected<?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
><?php echo $_smarty_tpl->tpl_vars['s']->value["species_name"];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>
					</div>

					<div class="pure-control-group">
						<label for="join_date">data dołączenia</label>
						<input id="join_date" type="text" placeholder="data dolaczenia" name="join_date"
							value="<?php echo $_smarty_tpl->tpl_vars['form']->value->join_date;?>
">
					</div>

					<div class="pure-control-group">
						<label for="caretaker_id">opiekun</label>
							<select id="caretaker_id" name="caretaker_id">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caretaker']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value["caretaker_id"];?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value["caretaker_id"] == $_smarty_tpl->tpl_vars['form']->value->caretaker_id) {?>selected<?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
><?php echo $_smarty_tpl->tpl_vars['c']->value["caretaker_name"];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>
					</div>

					<div class="pure-control-group">
						<label for="category_id">strefa</label>
							<select id="category_id" name="category_id">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value["category_id"];?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value["category_id"] == $_smarty_tpl->tpl_vars['form']->value->category_id) {?>selected<?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
><?php echo $_smarty_tpl->tpl_vars['c']->value["category_name"];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>
					</div>
					
					<div class="pure-controls" style="margin-top: 20px;">
						<input type="submit" class="button primary" value="Zapisz" />
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalTab">Powrót</a>
					</div>
				</fieldset>
			</form>
		</div>


		<!-- Scripts -->
		<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>

<?php }
/* {block 'messages'} */
class Block_6268873564a57f0433b861_83444442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_6268873564a57f0433b861_83444442',
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
