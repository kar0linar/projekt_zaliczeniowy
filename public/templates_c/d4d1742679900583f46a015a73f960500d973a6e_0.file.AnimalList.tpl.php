<?php
/* Smarty version 4.3.0, created on 2023-06-15 21:51:30
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648b6bc2845274_42709874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d1742679900583f46a015a73f960500d973a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalList.tpl',
      1 => 1686858425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b6bc2845274_42709874 (Smarty_Internal_Template $_smarty_tpl) {
?>





 <!DOCTYPE HTML>

<html>
	<head>
		<title>lista zwierzaków</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">super zoo</a></h1>
						<nav>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button primary">Wyloguj</a>
						</nav>
					</header>

				

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>siema </h2>
							<p>to jest zoo jbc</p>
						</div>
					</section>
					
					<div class="bottom-margin">
					<form class="" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalList">
					<legend style="margin-left: 260px; line-height: 3;">wyszukiwarka zwierzątek:</legend>
					<fieldset>
					<input type="text" placeholder="podaj imie" name="sf_animal_name" style="max-width: 300px;margin-left:260px;" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->animal_name;?>
" /><br />
					<button type="submit" class="button primary small" style="margin-left:260px;">Filtruj</button>
					</fieldset>
					
					<div class="bottom-margin" style="margin-top: 20px;">
					<button type="submit" class="button small" style="margin-left:260px;" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalNew">+ dodaj zwierzątko</button>
					</div>
					</form>
					</div>




					<div style="text-align: center;">
					<h2>Lista zwierzątek</h2>
					<div class="table-wrapper">
						<table id="tab_animal" class="alt" style="max-width: 500px; margin: auto;">
							<thead>
								<tr>
									<th style="text-align: center;">numer</th>
									<th style="text-align: center;">imie</th>
									<th style="text-align: center;">data dołączenia</th>
									<th style="text-align: center;">opcje</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animal']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
								<tr><td><?php echo $_smarty_tpl->tpl_vars['a']->value["animal_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['a']->value["animal_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['a']->value["join_date"];?>
</td><td><div style="display: flex; justify-content: center;"><a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalEdit/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
">edytuj</a>&nbsp;<a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalDelete/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
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
					



				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">nasze giga zwierzeta</h2>
									<p>ponizej jest lista a tu bedzie jakies dluzsze zdanie chyba</p>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/slon.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3 class="major">Ante fermentum</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<h3 class="major">Fusce consequat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>
								</div>
							</section>

					</section>

							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
</html> 


<?php }
}
