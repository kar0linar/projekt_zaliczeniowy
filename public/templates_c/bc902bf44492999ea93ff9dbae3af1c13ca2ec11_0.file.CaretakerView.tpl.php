<?php
/* Smarty version 4.3.0, created on 2023-06-28 16:58:41
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\CaretakerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649c4aa14bf7e1_93597356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc902bf44492999ea93ff9dbae3af1c13ca2ec11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\CaretakerView.tpl',
      1 => 1687964318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c4aa14bf7e1_93597356 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>

<html>

<head>
	<title>lista opiekunów</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="index.html">niesamowite zoo</a></h1>
			<nav>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList" class="button">Powrót</a>
			</nav>
		</header>

		<section id="wrapper"
			style="background-color: #505c94; height: 400px; display: flex; align-items: center; justify-content: center;">
			<header style="margin-bottom: 20px;">
				<div class="inner">
					<h2 style="margin: 0; color: white;">panel kontroli - opiekacze</h2>
				</div>
			</header>
		</section>




		<div class="bottom-margin">
			<form class="" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
caretakerList" style="margin-left: 100px; margin-top: 20px;">
				<legend style="line-height: 3;">wyszukiwarka opiekunów</legend>
				<fieldset>
					<input type="text" placeholder="podaj nazwisko" name="sf_caretaker_surname" style="max-width: 300px;"
						value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->caretaker_surname;?>
" /><br />
					<button type="submit" class="button primary small" style="margin-top: 10px;">Filtruj</button>
					<a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
caretakerNew">+ dodaj opiekuna</a>
				</fieldset>
			</form>
		</div>


		<div style="text-align: center;">
			<h2>Lista opiekunów</h2>
			<div class="table-wrapper" style="max-width: 800px; margin: auto;">
				<table id="tab_caretaker" class="alt">
					<thead>
						<tr>
							<th style="text-align: center;">numer</th>
							<th style="text-align: center;">imie</th>
							<th style="text-align: center;">nazwisko</th>
							<th style="text-align: center;">data dołączenia</th>
							<th style="text-align: center;">opcje</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caretaker']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
							<tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["caretaker_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["caretaker_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["caretaker_surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["join_date"];?>
</td><td><div style="display: flex; justify-content: center;"><a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
caretakerEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['caretaker_id'];?>
">edytuj</a>&nbsp;<a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
caretakerDelete/<?php echo $_smarty_tpl->tpl_vars['c']->value['caretaker_id'];?>
">usuń</a></div></td></tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	</div>
	</section>

	</div>
	</div>

	</div>
	</section>

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
}
