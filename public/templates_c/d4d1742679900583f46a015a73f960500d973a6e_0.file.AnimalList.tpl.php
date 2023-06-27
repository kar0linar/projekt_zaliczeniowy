<?php
/* Smarty version 4.3.0, created on 2023-06-26 18:48:53
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499c175361ba5_30962231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d1742679900583f46a015a73f960500d973a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalList.tpl',
      1 => 1687797381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499c175361ba5_30962231 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>

<html>

<head>
	<title>lista zwierzaków</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper" style="background-color: #505c94;">

		<!-- Header -->
		<header id="header" class="alt" style="background-color: #2e3141;">
			<h1><a href="index.html">niesamowite zoo</a></h1>
			<nav>
				<?php if (\core\RoleUtils::inRole('admin')) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalTab" class="button">Lista zwierzątek</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
caretakerList" class="button">Lista opiekunów</a>

				<?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button primary">Wyloguj</a>
			</nav>
		</header>



		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>niesamowite zoo</h2>
				<p>Zapraszamy do naszego niesamowitego zoo, gdzie czeka na Ciebie niezapomniane przygody i niezwykłe
					spotkania z naturą</p>
			</div>
		</section>

		<!-- Wrapper -->
		<section id="wrapper">

			<!-- Four -->
			<section id="four" class="wrapper alt style1">
				<div class="inner">
					<h2 class="major">poznaj nasze zwierzątka</h2>
					<section class="features">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
							<article>
								<a class="image"><img src="images/<?php echo $_smarty_tpl->tpl_vars['c']->value["picture"];?>
" /></a>
								<h3 class="major"><?php echo $_smarty_tpl->tpl_vars['c']->value["category_name"];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['c']->value["category_description"];?>
</p>
							</article>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</div>
			</section>

		</section>

	</div>
	</section>

	</div>

	<!-- Footer -->
	<section id="footer">
		<div class="inner">
			<ul class="copyright">
				<li>&copy; Untitled Inc. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
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
